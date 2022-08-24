<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sdm_etnis extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Etnis_model");
        $this->load->library('form_validation');
    }

    public function etnis(){
        $data["sdm_etnis"] = $this->Etnis_model->getAll();
        $this->load->view("admin/potensisdm/etnis", $data);
    }

    public function tambah(){
        $sdm_etnis = $this->Etnis_model;
        $validation = $this->form_validation;
        $validation->set_rules($sdm_etnis->rules());

        if ($validation->run()) {
            $sdm_etnis->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/potensisdm/form_tambah_etnis");
    }

    public function tambahAksi(){
        $etnis = $this->input->post('etnis');
        $lakilaki  = $this->input->post('lakilaki');
        $perempuan  = $this->input->post('perempuan');
 
        $data = array(
            'etnis' => $etnis,
            'lakilaki' => $lakilaki,
            'perempuan' => $perempuan
            );
        $this->Etnis_model->input_data($data,'sdm_etnis');

        $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success" role="alert">
                Data berhasil ditambahkan!
                </div>'
            ); 

        redirect('sdm_etnis/etnis');
    }

    public function update(){
        $etnis = $this->input->post('etnis');
        $lakilaki = $this->input->post('lakilaki');
        $perempuan = $this->input->post('perempuan');
     
        $data = array(
            'etnis' => $etnis,
            'lakilaki' => $lakilaki,
            'perempuan' => $perempuan
        );
     
        $where = array(
            'etnis' => $etnis
        );
     
        $this->Etnis_model->update_data($where,$data,'sdm_etnis');
    
        $this->session->set_flashdata(
                    'pesan',
                    '<div class="alert alert-success" role="alert">
                    Data berhasil diUpdate!
                    </div>'
                ); 
        redirect('sdm_etnis/etnis');
    }

    public function editData($etnis){
        $where = array('etnis' => $etnis);
        $data['sdm_etnis'] = $this->Etnis_model->edit_data($where,'sdm_etnis')->result();
    
        $this->load->view('admin/potensisdm/form_edit_etnis', $data);
    }
    /*
    public function edit($etnis = null){
        if (!isset($etnis)) redirect('SDM_etnis');
       
        $sdm_etnis = $this->Etnis_model;
        $validation = $this->form_validation;
        $validation->set_rules($sdm_etnis->rules());

        if ($validation->run()) {
            $sdm_etnis->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["sdm_etnis"] = $sdm_etnis->getById($etnis);
        if (!$data["sdm_etnis"]) show_404();
        
        $this->load->view("admin/potensisdm/edit_form_etnis", $data);
    } */
/*
    public function delete($etnis=null){
 if (!isset($etnis)) show_404();
        
        if ($this->Etnis_model->delete($etnis)) {
            redirect(site_url('SDM_etnis'));
        }
    }

    */
    //fungsi aksi klik button delete
    public function hapusData($etnis){
        $where = array('etnis' => $etnis);
                $this->Etnis_model->hapus_data($where,'sdm_etnis');
        
                $this->session->set_flashdata(
                        'pesan',
                        '<div class="alert alert-success" role="alert">
                        Data berhasil dihapus!
                        </div>'
                    ); 
                redirect('sdm_etnis/etnis');
        }

        public function grafik_etnis()
        {
            $this->load->view('admin/grafik_etnis');
        }	

   }