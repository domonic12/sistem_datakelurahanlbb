<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Matapencaharian_model extends CI_Model
{

	private $_table = "sdm_matapencaharian";

	public $jenis_pekerjaan;
	public $lakilaki;
	public $perempuan;

	public function rules(){
		return [
			[ 'field' => 'jenis_pekerjaan',
			'label' => 'Matapencaharian',
			'rules' => 'required'],

			[ 'field' => 'lakilaki',
			'label' => 'Laki-laki',
			'rules' => 'required'],

			[ 'field' => 'perempuan',
			'label' => 'Perempuan',
			'rules' => 'required']

		];

	}

	public function getAll(){
		return $this->db->get($this->_table)->result();
	}

	public function save(){
		$post = $this->input->post();
		$this->jenis_pekerjaan = $post["jenis_pekerjaan"];
		$this->lakilaki = $post["lakilaki"];
		$this->perempuan = $post["perempuan"];
		return $this->db->insert($this->_table, $this);

	}

	public function input_data($data, $table){
        $this->db->insert($table, $data);
    }

	public function update(){
		$post = $this->input->post();
		$this->jenis_pekerjaan = $post["jenis_pekerjaan"];
		$this->lakilaki = $post["lakilaki"];
		$this->perempuan = $post["perempuan"];
		return $this->db->update($this->_table, $this, array('jenis_pekerjaan'=>$post['jenis_pekerjaan']));
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

	public function delete($jenis_pekerjaan){
		return $this->db->delete($this->_table, array("jenis_pekerjaan" => $jenis_pekerjaan));
	}

}
?>