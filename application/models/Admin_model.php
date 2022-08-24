<?php

class Admin_model extends CI_Model
{
	public function select_user(){
		return $this->db->get('tb_admin')->result();
	}
	public function tambah_user($data){
		return $this->db->insert('tb_admin', $data);
	}
	public function hapus_user($id){
		$this->db->where('id_admin', $id);
		return $this->db->delete('tb_admin');
	}
	public function select_by_id_user($id)
	{
		$this->db->where('id_admin', $id);
		return $this->db->get('tb_admin')->row(); //untuk menampilkan data
	}

	public function edit_user($id,$data){
		$this->db->where('id_admin', $id);
		return $this->db->update('tb_admin', $data);
	}
	public function cek_login($table, $where)
	{
		return $this->db->get_where($table,$where);
	}

	function register($username,$password,$nama_lengkap)
	{
		$data_user = array(
			'username'=>$username,
			'password'=>$password,
			'nama_lengkap'=>$nama_lengkap
		);
		$this->db->insert('tb_admin',$data_user);
	}
}
?>




