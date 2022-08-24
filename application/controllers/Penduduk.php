<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penduduk extends CI_Controller {

	public function __construct()
    {
        //Memanggil Method construct yang ada di CI_Controller
        parent:: __construct();
       

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
        $data['datapenduduk'] = $this->penduduk_model->getPenduduk();
        //echo json_encode($data);

    	
        $this->load->view('admin/penduduk/datapenduduk', $data);
         
    }

    public function tambahData(){
        $this->load->view('admin/penduduk/tambah_datapenduduk');
    }
   
    public function tambahAksi(){
        $nik = $this->input->post('nik');
        $nama  = $this->input->post('nama');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tanggal_lahir  = $this->input->post('tanggal_lahir');
        $alamat = $this->input->post('alamat');
        $rt = $this->input->post('rt');
        $rw  = $this->input->post('rw');
        $kelurahan = $this->input->post('kelurahan');
       // $usia = $this->input->post('usia');
        $status_perkawinan  = $this->input->post('status_perkawinan');
        $agama = $this->input->post('agama');
        $gol_darah = $this->input->post('gol_darah');
        $kewarganegaraan  = $this->input->post('kewarganegaraan');
        $pendidikan = $this->input->post('pendidikan');
        $pekerjaan = $this->input->post('pekerjaan');
        $etnis = $this->input->post('etnis');
        $cacatfisik = $this->input->post('cacatfisik');
        $cacatmental = $this->input->post('cacatmental');
 
        $data = array(
            'nik' => $nik,
            'nama' => $nama,
            'jenis_kelamin' => $jenis_kelamin,
            'tempat_lahir' => $tempat_lahir,
            'tanggal_lahir' => $tanggal_lahir,
            'alamat' => $alamat,
            'rt' => $rt,
            'rw' => $rw,
            'kelurahan' => $kelurahan,
            'usia' => date('Y')-$tanggal_lahir,
            'status_perkawinan' => $status_perkawinan,
            'agama' => $agama,
            'gol_darah' => $gol_darah,
            'kewarganegaraan' => $kewarganegaraan,
            'pendidikan' => $pendidikan,
            'pekerjaan' => $pekerjaan,
            'etnis' => $etnis,
            'cacatfisik' => $cacatfisik,
            'cacatmental' => $cacatmental,
            
            'tanggal_ditambahkan' => date('d F Y')
            
            );
        $this->penduduk_model->input_data($data,'datapenduduk');

        $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success" role="alert">
                Data berhasil ditambahkan!
                </div>'
            ); 

        redirect('penduduk/penduduk');
        
}

public function hapusData($nik){
$where = array('nik' => $nik);
        $this->penduduk_model->hapus_data($where,'datapenduduk');

        $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success" role="alert">
                Data berhasil dihapus!
                </div>'
            ); 
        redirect('penduduk/penduduk');
}

public function editData($nik){
    $where = array('nik' => $nik);
    $data['datapenduduk'] = $this->penduduk_model->edit_data($where,'datapenduduk')->result();

    $this->load->view('admin/penduduk/edit_datapenduduk', $data);
}

public function update(){
    $nik = $this->input->post('nik');
    $nama = $this->input->post('nama');
    $jenis_kelamin = $this->input->post('jenis_kelamin');
    $tempat_lahir = $this->input->post('tempat_lahir');
    $tanggal_lahir = $this->input->post('tanggal_lahir');
    $alamat = $this->input->post('alamat');
    $rt = $this->input->post('rt');
    $rw = $this->input->post('rw');
    $kelurahan = $this->input->post('kelurahan');
   // $usia   = $this->input->post('usia');
    $status_perkawinan = $this->input->post('status_perkawinan');
    $agama = $this->input->post('agama');
    $gol_darah = $this->input->post('gol_darah');
    $kewarganegaraan = $this->input->post('kewarganegaraan');
    $pendidikan = $this->input->post('pendidikan');
    $pekerjaan = $this->input->post('pekerjaan');
    $etnis = $this->input->post('etnis');
    $cacatfisik = $this->input->post('cacatfisik');
    $cacatmental = $this->input->post('cacatmental');
 
    $data = array(
        'nik' => $nik,
        'nama' => $nama,
        'jenis_kelamin' => $jenis_kelamin,
        'tempat_lahir' => $tempat_lahir,
        'tanggal_lahir' => $tanggal_lahir,
        'alamat' => $alamat,
        'rt' => $rt,
        'rw' => $rw,
        'kelurahan' => $kelurahan,
        'usia' => date('Y')-$tanggal_lahir,
        'status_perkawinan' => $status_perkawinan,
        'agama' => $agama,
        'gol_darah' => $gol_darah,
        'kewarganegaraan' => $kewarganegaraan,
        'pendidikan' => $pendidikan,
        'pekerjaan' => $pekerjaan,
        'etnis' => $etnis,
        'cacatfisik' => $cacatfisik,
        'cacatmental' => $cacatmental,
    );
 
    $where = array(
        'nik' => $nik
    );
 
    $this->penduduk_model->update_data($where,$data,'datapenduduk');

    $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success" role="alert">
                Data berhasil diUpdate!
                </div>'
            ); 
    redirect('penduduk/penduduk');
}
//tampilan garfik

public function grafik_agama_p()
        {   $data['hasilAg']=$this->penduduk_model->jumlah_agama();
            $this->load->view('admin/grafik_agama_p', $data);
        }
public function grafik_pendidikan_p()
        {   $data['hasilpend']=$this->penduduk_model->jumlah_pendidikan();
            $this->load->view('admin/grafik_pendidikan_p', $data);
        }        
public function grafik_pekerjaan_p()
        {
            $data['hasilpkj']=$this->penduduk_model->jumlah_pekerjaan();
            $this->load->view('admin/grafik_pekerjaan_p', $data);
        }
public function grafik_usia_p()
        {
            $data['hasilus']=$this->penduduk_model->jumlah_usia();
            $this->load->view('admin/grafik_usia_p',$data);
        }
public function grafik_kewarganegaraan_p()
        {
            $data['hasilkwn']=$this->penduduk_model->jumlah_kewarganegaraan();
            $this->load->view('admin/grafik_kewarganegaraan_p',$data);
        }
public function grafik_status_p()
        {
            $data['hasilsts']=$this->penduduk_model->jumlah_statuskawin();
            $this->load->view('admin/grafik_status_p',$data);
        }
        public function grafik_etnis_p()
        {
            $data['hasiletn']=$this->penduduk_model->jumlah_etnis();
            $this->load->view('admin/grafik_etnis_p',$data);
        }
        public function grafik_cacatfisik_p()
        {
            $data['hasilcf']=$this->penduduk_model->jumlah_cacatfisik();
            $this->load->view('admin/grafik_cacatfisik_p',$data);
        }
        public function grafik_cacatmental_p()
        {
            $data['hasilcm']=$this->penduduk_model->jumlah_cacatmental();
            $this->load->view('admin/grafik_cacatmental_p',$data);
        }
        public function grafik_kualitas_p()
        {
            $data['hasilkw']=$this->penduduk_model->jumlah_kualitas();
            $this->load->view('admin/grafik_kualitas_p',$data);
        }

        //untuk grafik versi 2
        public function grafik_agama_v2()
        {   $data['hasilAgv2']=$this->penduduk_model->jumlah_agama_v2();
            $this->load->view('admin/grafik_agama_v2', $data);
        }
}
?>
