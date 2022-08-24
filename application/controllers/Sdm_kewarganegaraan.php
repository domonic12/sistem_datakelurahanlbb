<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sdm_kewarganegaraan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Kewarganegaraan_model");
        $this->load->library('form_validation');
    }

    public function kewarganegaraan(){
        $data["sdm_kewarganegaraan"] = $this->Kewarganegaraan_model->getAll();
        $data['title'] = 'kewarganegaraan';
    	//$data['sdm_kewarganegaraan'] = $this->Kewarganegaraan_model->getkewarganegaraan();
        $this->load->view("admin/potensisdm/kewarganegaraan", $data);
    }

    //fungsi klik button Tambah Data
    public function tambah(){
    	$sdm_kewarganegaraan = $this->Kewarganegaraan_model;
        $validation = $this->form_validation;
        $validation->set_rules($sdm_kewarganegaraan->rules());

        if ($validation->run()) {
            $sdm_kewarganegaraan->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/potensisdm/form_tambah_kewarganegaraan");
    } 

    //fungsi ketika klik button Tambah di form tambah data
    public function tambahAksi(){
        $kewarganegaraan = $this->input->post('kewarganegaraan');
        $lakilaki  = $this->input->post('lakilaki');
        $perempuan  = $this->input->post('perempuan');
 
        $data = array(
            'kewarganegaraan' => $kewarganegaraan,
            'lakilaki' => $lakilaki,
            'perempuan' => $perempuan
            );
        $this->Kewarganegaraan_model->input_data($data,'sdm_kewarganegaraan');

        $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success" role="alert">
                Data berhasil ditambahkan!
                </div>'
            ); 

        redirect('sdm_kewarganegaraan/kewarganegaraan');

    }
    /*
    public function edit($kewarganegaraan = null){
    	if (!isset($kewarganegaraan)) redirect('SDM_kewarganegaraan');
       
        $sdm_kewarganegaraan = $this->Kewarganegaraan_model;
        $validation = $this->form_validation;
        $validation->set_rules($sdm_kewarganegaraan->rules());

        if ($validation->run()) {
            $sdm_kewarganegaraan->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["sdm_kewarganegaraan"] = $sdm_kewarganegaraan->getById($kewarganegaraan);
        if (!$data["sdm_kewarganegaraan"]) show_404();
        
        $this->load->view("admin/potensisdm/edit_form_kewarganegaraan", $data);
    }
*/

//fungsi aksi klik button edit
    public function editData($kewarganegaraan){
        $where = array('kewarganegaraan' => $kewarganegaraan);
        $data['sdm_kewarganegaraan'] = $this->Kewarganegaraan_model->edit_data($where,'sdm_kewarganegaraan')->result();
    
        $this->load->view('admin/potensisdm/form_edit_kewarganegaraan', $data);
    }

    //redirect form ke kewarganegaraan setelah klik button simpan
    public function update(){
        $kewarganegaraan = $this->input->post('kewarganegaraan');
        $lakilaki = $this->input->post('lakilaki');
        $perempuan = $this->input->post('perempuan');
     
        $data = array(
            'kewarganegaraan' => $kewarganegaraan,
            'lakilaki' => $lakilaki,
            'perempuan' => $perempuan
        );
     
        $where = array(
            'kewarganegaraan' => $kewarganegaraan
        );
     
        $this->Kewarganegaraan_model->update_data($where,$data,'sdm_kewarganegaraan');
    
        $this->session->set_flashdata(
                    'pesan',
                    '<div class="alert alert-success" role="alert">
                    Data berhasil diUpdate!
                    </div>'
                ); 
        redirect('sdm_kewarganegaraan/kewarganegaraan');
    }

    /*
   public function delete($kewarganegaraan=null){
 if (!isset($kewarganegaraan)) show_404();
        
        if ($this->Kewarganegaraan_model->delete($kewarganegaraan)) {
            redirect(site_url('SDM_kewarganegaraan'));
        }
    }  
    */

    //fungsi aksi klik button delete
    public function hapusData($kewarganegaraan){
        $where = array('kewarganegaraan' => $kewarganegaraan);
                $this->Kewarganegaraan_model->hapus_data($where,'sdm_kewarganegaraan');
        
                $this->session->set_flashdata(
                        'pesan',
                        '<div class="alert alert-success" role="alert">
                        Data berhasil dihapus!
                        </div>'
                    ); 
                redirect('sdm_kewarganegaraan/kewarganegaraan');
        }

        public function grafik_kewarganegaraan()
        {
            $this->load->view('admin/grafik_kewarganegaraan');
        }	

   }
