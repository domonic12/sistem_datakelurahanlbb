<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
    {
        //Memanggil Method construct yang ada di CI_Controller
		parent:: __construct();
		$this->load->model('Chart_model');
		
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
		$data['hasilkl']=$this->Chart_model->jumlah_kelahiran();
		$data['hasilkm']=$this->Chart_model->jumlah_kematian();
		//$data['datapd'] = $this->Chart_model->datapd();
		$this->load->view('admin/dashboard2', $data);
	}	

	
}
?>