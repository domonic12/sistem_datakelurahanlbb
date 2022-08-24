<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Usia_model extends CI_Model
{

	
	private $_table = "sdm_usia";

	public $usia;
	public $lakilaki;
	public $perempuan;
	public $total_lakilaki;
	public $total_perempuan;

	public function rules(){
		return [
			[ 'field' => 'usia',
			'label' => 'Usia',
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
	public function getUsia(){
		return $this->db->get('sdm_usia')->result_array();
	} */
 
	public function input_data($data, $table){
        $this->db->insert($table, $data);
    }
	public function save(){
		$post = $this->input->post();
		$this->usia = $post["usia"];
		$this->lakilaki = $post["lakilaki"];
		$this->perempuan = $post["perempuan"];
		$this->total_lakilaki = $post["total_lakilaki"];
		$this->total_perempuan = $post["total_perempuan"];
		return $this->db->insert($this->_table, $this);

	}

	public function update(){
		$post = $this->input->post();
		$this->usia = $post["usia"];
		$this->lakilaki = $post["lakilaki"];
		$this->perempuan = $post["perempuan"];
		$this->total_lakilaki = $post["total_lakilaki"];
		$this->total_perempuan = $post["total_perempuan"];
		return $this->db->update($this->_table, $this, array('usia'=>$post['usia']));
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

	public function delete($usia){
		return $this->db->delete($this->_table, array("usia" => $usia));
	}

}
?>