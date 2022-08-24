<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Etnis_penduduk extends CI_Controller {

	public function __construct()
    {
        //Memanggil Method construct yang ada di CI_Controller
		parent:: __construct();
        $this->load->model('Agama_model');
        $this->load->model('penduduk_model');
		
    }

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->penduduk();
	}	

	public function penduduk(){
    	$data['title'] = 'Penduduk';
		$data['datapenduduk'] = $this->penduduk_model->getEtnis();

        $this->load->view('admin/potensisdm_v2/view_etnis', $data);
         
    }
}
?>