<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataimport extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('Importcsv_model');
		$this->load->model('Penduduk_model');
	}
	/**
	 * Menampilkan data yang sudah diimport.
	 *
	 */
	public function index()
	{
		$data['datapenduduk'] = $this->Importcsv_model->view();
		$this->load->view('admin/penduduk/data', $data);
	}
}