<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Agama_model extends CI_Model
{

	
	private $_table = "sdm_agama";

	public $agama;
	public $lakilaki;
	public $perempuan;

	public function rules(){
		return [
			[ 'field' => 'agama',
			'label' => 'agama',
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

	public function viewpr(){
		$this->db->select('agama, COUNT(jenis_kelamin) as totalpr');
		$this->db->where('jenis_kelamin="perempuan"'); 
		$this->db->group_by('agama'); 
		$this->db->order_by('totalpr', 'desc'); 
		$hasil = $this->db->get('datapenduduk');
	   return $hasil;
	}
	
	public function viewlk(){
		$this->db->select('agama, COUNT(jenis_kelamin) as totallk');
		$this->db->where('jenis_kelamin="lakilaki"'); 
		$this->db->group_by('agama'); 
		$this->db->order_by('totallk', 'desc'); 
		$hasil = $this->db->get('datapenduduk');
	   return $hasil;
	}
	
	
/*
	public function getagama(){
		return $this->db->get('sdm_agama')->result_array();
	} */
 
	public function input_data($data, $table){
        $this->db->insert($table, $data);
    }
	public function save(){
		$post = $this->input->post();
		$this->agama = $post["agama"];
		$this->lakilaki = $post["lakilaki"];
		$this->perempuan = $post["perempuan"];
		return $this->db->insert($this->_table, $this);

	}

	public function update(){
		$post = $this->input->post();
		$this->agama = $post["agama"];
		$this->lakilaki = $post["lakilaki"];
		$this->perempuan = $post["perempuan"];
		return $this->db->update($this->_table, $this, array('agama'=>$post['agama']));
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

	public function delete($agama){
		return $this->db->delete($this->_table, array("agama" => $agama));
	}

	public function view_agama(){
        $query=$this->db->query("SELECT  agama
                                 FROM datapenduduk");
        return $query->result_array();
}
}
?>