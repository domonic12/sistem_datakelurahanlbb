<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kewarganegaraan_model extends CI_Model
{

	
	private $_table = "sdm_kewarganegaraan";

	public $kewarganegaraan;
	public $lakilaki;
	public $perempuan;

	public function rules(){
		return [
			[ 'field' => 'kewarganegaraan',
			'label' => 'kewarganegaraan',
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
	public function getkewarganegaraan(){
		return $this->db->get('sdm_kewarganegaraan')->result_array();
	} */
 
	public function input_data($data, $table){
        $this->db->insert($table, $data);
    }
	public function save(){
		$post = $this->input->post();
		$this->kewarganegaraan = $post["kewarganegaraan"];
		$this->lakilaki = $post["lakilaki"];
		$this->perempuan = $post["perempuan"];
		return $this->db->insert($this->_table, $this);

	}

	public function update(){
		$post = $this->input->post();
		$this->kewarganegaraan = $post["kewarganegaraan"];
		$this->lakilaki = $post["lakilaki"];
		$this->perempuan = $post["perempuan"];
		return $this->db->update($this->_table, $this, array('kewarganegaraan'=>$post['kewarganegaraan']));
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

	public function delete($kewarganegaraan){
		return $this->db->delete($this->_table, array("kewarganegaraan" => $kewarganegaraan));
	}

}
?>