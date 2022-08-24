<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Pendidikan_model extends CI_Model
{

	private $_table = "sdm_pendidikan";

	public $tingkatan_pendidikan;
	public $lakilaki;
	public $perempuan;

	public function rules(){
		return [
			[ 'field' => 'tingkatan_pendidikan',
			'label' => 'Tingkatan Pendidikan',
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
/*
	public function getPendidikan(){
		return $this->db->get('sdm_pendidikan')->result_array();
	} */
 
	public function input_data($data, $table){
        $this->db->insert($table, $data);
    }

	public function save(){
		$post = $this->input->post();
		$this->pendidikan = $post["tingkatan_pendidikan"];
		$this->lakilaki = $post["lakilaki"];
		$this->perempuan = $post["perempuan"];
		return $this->db->insert($this->_table, $this);

	}

	public function update(){
		$post = $this->input->post();
		$this->tingkatan_pendidikan = $post["tingkatan_pendidikan"];
		$this->lakilaki = $post["lakilaki"];
		$this->perempuan = $post["perempuan"];
		return $this->db->update($this->_table, $this, array('tingkatan_pendidikan'=>$post['tingkatan_pendidikan']));
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

	public function delete($tingkatan_pendidikan){
		return $this->db->delete($this->_table, array("tingkatan_pendidikan" => $tingkatan_pendidikan));
	}

//untuk grafik

public function grafikPendidikan(){
	$this->db->group_by('tingkatan_pendidikan');
	$this->db->select('lakilaki, perempuan');
	return $this->db->from('sdm_pendidikan')
	->get()
	->result();
}

}
?>