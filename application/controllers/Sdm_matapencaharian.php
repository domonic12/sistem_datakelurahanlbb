<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sdm_matapencaharian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Matapencaharian_model");
        $this->load->library('form_validation');
    }

    public function matapencaharian(){
        $data["sdm_matapencaharian"] = $this->Matapencaharian_model->getAll();
        $this->load->view("admin/potensisdm/matapencaharian", $data);
    }

    //fungsi klik button Tambah Data
    public function tambah(){
        $sdm_matapencaharian = $this->Matapencaharian_model;
        $validation = $this->form_validation;
        $validation->set_rules($sdm_matapencaharian->rules());

        if ($validation->run()) {
            $sdm_matapencaharian->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/potensisdm/form_tambah_matapencaharian");
    }

     //fungsi ketika klik button Tambah di form tambah data
     public function tambahAksi(){
        $jenis_pekerjaan = $this->input->post('jenis_pekerjaan');
        $lakilaki  = $this->input->post('lakilaki');
        $perempuan  = $this->input->post('perempuan');
 
        $data = array(
            'jenis_pekerjaan' => $jenis_pekerjaan,
            'lakilaki' => $lakilaki,
            'perempuan' => $perempuan
            );
        $this->Matapencaharian_model->input_data($data,'sdm_matapencaharian');

        $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success" role="alert">
                Data berhasil ditambahkan!
                </div>'
            ); 

        redirect('sdm_matapencaharian/matapencaharian');

    }
/*
    public function edit($matapencaharian = null){
        if (!isset($matapencaharian)) redirect('SDM_matapencaharian');
       
        $sdm_matapencaharian = $this->Matapencaharian_model;
        $validation = $this->form_validation;
        $validation->set_rules($sdm_matapencaharian->rules());

        if ($validation->run()) {
            $sdm_matapencaharian->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["sdm_matapencaharian"] = $sdm_matapencaharian->getById($matapencaharian);
        if (!$data["sdm_matapencaharian"]) show_404();
        
        $this->load->view("admin/potensisdm/edit_form_matapencaharian", $data);
    } */

    //fungsi aksi klik button edit
    public function editData($jenis_pekerjaan){
        $where = array('jenis_pekerjaan' => $jenis_pekerjaan);
        $data['sdm_matapencaharian'] = $this->Matapencaharian_model->edit_data($where,'sdm_matapencaharian')->result();
    
        $this->load->view('admin/potensisdm/form_edit_matapencaharian', $data);
    }

    //redirect form ke matapencaharian setelah klik button simpan
    public function update(){
        $jenis_pekerjaan = $this->input->post('jenis_pekerjaan');
        $lakilaki = $this->input->post('lakilaki');
        $perempuan = $this->input->post('perempuan');
     
        $data = array(
            'jenis_pekerjaan' => $jenis_pekerjaan,
            'lakilaki' => $lakilaki,
            'perempuan' => $perempuan
        );
     
        $where = array(
            'jenis_pekerjaan' => $jenis_pekerjaan
        );
     
        $this->Matapencaharian_model->update_data($where,$data,'sdm_matapencaharian');
    
        $this->session->set_flashdata(
                    'pesan',
                    '<div class="alert alert-success" role="alert">
                    Data berhasil diUpdate!
                    </div>'
                ); 
        redirect('sdm_matapencaharian/matapencaharian');
    }

    /*
    public function delete($matapencaharian=null){
 if (!isset($matapencaharian)) show_404();
        
        if ($this->Matapencaharian_model->delete($matapencaharian)) {
            redirect(site_url('SDM_matapencaharian'));
        }
    } */

     //fungsi aksi klik button delete
     public function hapusData($jenis_pekerjaan){
        $where = array('jenis_pekerjaan' => $jenis_pekerjaan);
                $this->Matapencaharian_model->hapus_data($where,'sdm_matapencaharian');
        
                $this->session->set_flashdata(
                        'pesan',
                        '<div class="alert alert-success" role="alert">
                        Data berhasil dihapus!
                        </div>'
                    ); 
                redirect('sdm_matapencaharian/matapencaharian');
        }

        public function grafik_matapencaharian()
        {
            $this->load->view('admin/grafik_matapencaharian');
        }	

   }
