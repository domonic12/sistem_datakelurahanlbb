<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Kualitasangkatankerja_model extends CI_Model
{

	
	private $_table = "sdm_angkatankerja";

	public $angkatan_kerja;
	public $lakilaki;
	public $perempuan;

	public function rules(){
		return [
			[ 'field' => 'angkatan_kerja',
			'label' => 'angkatan_kerja',
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
	public function getangkatan_kerja(){
		return $this->db->get('sdm_angkatankerja')->result_array();
	} */
	public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

	public function delete($angkatan_kerja){
		return $this->db->delete($this->_table, array("angkatan_kerja" => $angkatan_kerja));
	}
	
	public function input_data($data, $table){
        $this->db->insert($table, $data);
    }
	public function save(){
		$post = $this->input->post();
		$this->angkatan_kerja = $post["angkatan_kerja"];
		$this->lakilaki = $post["lakilaki"];
		$this->perempuan = $post["perempuan"];
		return $this->db->insert($this->_table, $this);

	}

	public function update(){
		$post = $this->input->post();
		$this->angkatan_kerja = $post["angkatan_kerja"];
		$this->lakilaki = $post["lakilaki"];
		$this->perempuan = $post["perempuan"];
		return $this->db->update($this->_table, $this, array('angkatan_kerja'=>$post['angkatan_kerja']));
	}

	public function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table, $data);
	}
	
	public function edit_data($where, $table){
        return $this->db->get_where($table,$where);
    }

	

}
?>