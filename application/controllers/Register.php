<?php
defined('BASEPATH') OR exit('No direct script access allowed');
 
class Register extends CI_Controller {
 
	function __construct()
	{
		parent::__construct();
		$this->load->model('Admin_model');
	}
 
	public function index()
	{
		$this->load->view('register');
	}

	public function proses()
	{
		$this->form_validation->set_rules('username', 'username','trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('password', 'password','trim|required|min_length[1]|max_length[255]');
		$this->form_validation->set_rules('nama_lengkap', 'nama_lengkap','trim|required|min_length[1]|max_length[255]');
		if ($this->form_validation->run()==true)
	   	{
			$username = $this->input->post('username');
			$password =md5($this->input->post('password'));
			$nama_lengkap = $this->input->post('nama_lengkap');
			$this->Admin_model->register($username,$password,$nama_lengkap);
			$this->session->set_flashdata('success_sign up','Proses Pendaftaran User Berhasil');
			redirect('Welcome');
		}
		else
		{
			$this->session->set_flashdata('error', validation_errors());
			redirect('register');
		}
	}
}
