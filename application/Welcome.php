<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
    {
        //Memanggil Method construct yang ada di CI_Controller
        parent:: __construct();

       $this->load->model('Admin_model');
    
    }

	public function index()
	{
		if ($this->session->userdata('status')){
 			redirect(base_url());
 		}

		$this->load->view('login');
	}

	public function home(){
		$this->load->view('admin/home');
	}

	public function cek_login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
		);
		$cek = $this->Admin_model->cek_login("tb_admin", $where)->num_rows();
		if($cek > 0){
$data_session = array(
	'nama' => $username,
	'status' => "login"
);
$this->session->set_userdata($data_session);
redirect(base_url("home"));
		} else {
			$this->session->set_flashdata('error', 'Username atau Password anda tidak cocok..!!');
			redirect(base_url());
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(base_url('welcome'));
		
	
	}

	
}
