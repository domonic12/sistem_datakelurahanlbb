<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sdm_agama extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Agama_model");
        $this->load->library('form_validation');
    }

    public function agama(){
        $data["sdm_agama"] = $this->Agama_model->getAll();
        $this->load->view("admin/potensisdm/agama", $data);
    }

    public function tambah(){
        $sdm_agama = $this->Agama_model;
        $validation = $this->form_validation;
        $validation->set_rules($sdm_agama->rules());

        if ($validation->run()) {
            $sdm_agama->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/potensisdm/form_tambah_agama");
    }

    public function tambahAksi(){
        $agama = $this->input->post('agama');
        $lakilaki  = $this->input->post('lakilaki');
        $perempuan  = $this->input->post('perempuan');
 
        $data = array(
            'agama' => $agama,
            'lakilaki' => $lakilaki,
            'perempuan' => $perempuan
            );
        $this->Agama_model->input_data($data,'sdm_agama');

        $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success" role="alert">
                Data berhasil ditambahkan!
                </div>'
            ); 

        redirect('sdm_agama/agama');
    }

    public function update(){
        $agama = $this->input->post('agama');
        $lakilaki = $this->input->post('lakilaki');
        $perempuan = $this->input->post('perempuan');
     
        $data = array(
            'agama' => $agama,
            'lakilaki' => $lakilaki,
            'perempuan' => $perempuan
        );
     
        $where = array(
            'agama' => $agama
        );
     
        $this->Agama_model->update_data($where,$data,'sdm_agama');
    
        $this->session->set_flashdata(
                    'pesan',
                    '<div class="alert alert-success" role="alert">
                    Data berhasil diUpdate!
                    </div>'
                ); 
        redirect('sdm_agama/agama');
    }

    public function editData($agama){
        $where = array('agama' => $agama);
        $data['sdm_agama'] = $this->Agama_model->edit_data($where,'sdm_agama')->result();
    
        $this->load->view('admin/potensisdm/form_edit_agama', $data);
    }
    /*
    public function edit($agama = null){
        if (!isset($agama)) redirect('SDM_agama');
       
        $sdm_agama = $this->Agama_model;
        $validation = $this->form_validation;
        $validation->set_rules($sdm_agama->rules());

        if ($validation->run()) {
            $sdm_agama->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["sdm_agama"] = $sdm_agama->getById($agama);
        if (!$data["sdm_agama"]) show_404();
        
        $this->load->view("admin/potensisdm/edit_form_agama", $data);
    } */
/*
    public function delete($agama=null){
 if (!isset($agama)) show_404();
        
        if ($this->Agama_model->delete($agama)) {
            redirect(site_url('SDM_agama'));
        }
    } */

    //fungsi aksi klik button delete
    public function hapusData($agama){
        $where = array('agama' => $agama);
                $this->Agama_model->hapus_data($where,'sdm_agama');
        
                $this->session->set_flashdata(
                        'pesan',
                        '<div class="alert alert-success" role="alert">
                        Data berhasil dihapus!
                        </div>'
                    ); 
                redirect('sdm_agama/agama');
        }

        public function grafik_agama()
        {
            $this->load->view('admin/grafik_agama');
        }	
    

   }
