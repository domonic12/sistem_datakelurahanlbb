<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Importcsv extends CI_Controller {

  public function __construct()
  {
      parent::__construct();
      $this->load->helper('url');                    
      $this->load->model('Importcsv_model','fdb');
  }

  public function index()
  {
    $data['data']= $this->fdb->view();
    $this->load->view('importcsv', $data);
  }

  public function import(){
    if(isset($_POST["import"]))
    {
        $filename=$_FILES["file"]["tmp_name"];

        if (empty($filename)) {
            echo 'Belum ada file yang dipilih !';
        } else {

        if($_FILES["file"]["size"] > 0)
        {
             $file = fopen($filename, "r");
             $baris = 0;
             while (($importdata = fgetcsv($file, 10000, ",")) !== FALSE)
             {
                $data = array(
                   'nik' => $importdata[0],
                   'nama' => $importdata[1],
                   'jenis_kelamin' => $importdata[2],
                   'tempat_lahir' => $importdata[3],
                   'tanggal_lahir' => $importdata[4],
                   'alamat' => $importdata[5],
                   'rt' => $importdata[6],
                   'rw' => $importdata[7],
                   'kelurahan' => $importdata[8],
                   'usia' => $importdata[9],
                   'status_perkawinan' => $importdata[10],
                   'agama' => $importdata[11],
                   'gol_darah' => $importdata[12],
                   'kewarganegaraan' => $importdata[13],
                   'pendidikan' => $importdata[14],
                   'pekerjaan' => $importdata[15],
                   'tanggal_ditambahkan' => date('d F Y'),
                );
                if($baris >= 0){  //jika dimulai dari baris kedua
                   $insert = $this->fdb->insert($data);
                }
                $baris++;
             }    
             $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success" role="alert">
                Data berhasil ditambahkan!
                </div>'
            );                 
             fclose($file);
            
             redirect('dataimport');
        }else{
             $this->session->set_flashdata('message', 'Import Data gagal !');
             redirect('dataimport');
        }
     }
  }
}
}