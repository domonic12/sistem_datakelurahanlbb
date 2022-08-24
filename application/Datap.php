<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Import_model');
		$this->load->model('Penduduk_model');
	}
	/**
	 * Menampilkan data yang sudah diimport.
	 *
	 */
	public function index()
	{
		$data['datapenduduk'] = $this->Import_model->get_all();
		$this->load->view('admin/penduduk/data', $data);
	}
}