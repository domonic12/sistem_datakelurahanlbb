<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cacatmental_model extends CI_Model
{

	
	private $_table = "sdm_cacatmental";

	public $jenis_cacatmental;
	public $lakilaki;
	public $perempuan;

	public function rules(){
		return [
			[ 'field' => 'jenis_cacatmental',
			'label' => 'jenis_cacatmental',
			'rules' => 'required'],

			[ 'field' => 'lakilaki',
			'label' => 'Laki-laki',
			'rules' => 'required'],

			[ 'field' => 'perempuan',
			'label' => 'Perempuan',
			'rules' => 'required'],

			[ 'field' => 'total_lakilaki',
			'label' => 'Total Laki-laki',
			'rules' => 'required'],

			[ 'field' => 'total_perempuan',
			'label' => 'Total Perempuan',
			'rules' => 'required']

		];

	} 

	public function getAll(){
		return $this->db->get($this->_table)->result();
	}
/*
	public function getjenis_cacatmental(){
		return $this->db->get('sdm_jenis_cacatmental')->result_array();
	} */
 
	public function input_data($data, $table){
        $this->db->insert($table, $data);
    }
	public function save(){
		$post = $this->input->post();
		$this->jenis_cacatmental = $post["jenis_cacatmental"];
		$this->lakilaki = $post["lakilaki"];
		$this->perempuan = $post["perempuan"];
		return $this->db->insert($this->_table, $this);

	}

	public function update(){
		$post = $this->input->post();
		$this->jenis_cacatmental = $post["jenis_cacatmental"];
		$this->lakilaki = $post["lakilaki"];
		$this->perempuan = $post["perempuan"];
		return $this->db->update($this->_table, $this, array('jenis_cacatmental'=>$post['jenis_cacatmental']));
	}

	public function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table, $data);
	}
	
	public function edit_data($where, $table){
        return $this->db->get_where($table,$where);
    }

	public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

	public function delete($jenis_cacatmental){
		return $this->db->delete($this->_table, array("jenis_cacatmental" => $jenis_cacatmental));
	}

}
?>