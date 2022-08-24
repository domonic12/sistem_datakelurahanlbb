<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sdm_usia extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Usia_model");
        $this->load->library('form_validation');
    }

    public function usia(){
        $data["sdm_usia"] = $this->Usia_model->getAll();
        $data['title'] = 'Usia';
    	//$data['sdm_usia'] = $this->Usia_model->getUsia();
        $this->load->view("admin/potensisdm/usia", $data);
    }

    //fungsi klik button Tambah Data
    public function tambah(){
    	$sdm_usia = $this->Usia_model;
        $validation = $this->form_validation;
        $validation->set_rules($sdm_usia->rules());

        if ($validation->run()) {
            $sdm_usia->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/potensisdm/form_tambah_usia");
    } 

    //fungsi ketika klik button Tambah di form tambah data
    public function tambahAksi(){
        $usia = $this->input->post('usia');
        $lakilaki  = $this->input->post('lakilaki');
        $perempuan  = $this->input->post('perempuan');
 
        $data = array(
            'usia' => $usia,
            'lakilaki' => $lakilaki,
            'perempuan' => $perempuan
            );
        $this->Usia_model->input_data($data,'sdm_usia');

        $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success" role="alert">
                Data berhasil ditambahkan!
                </div>'
            ); 

        redirect('sdm_usia/usia');

    }
    /*
    public function edit($usia = null){
    	if (!isset($usia)) redirect('SDM_usia');
       
        $sdm_usia = $this->Usia_model;
        $validation = $this->form_validation;
        $validation->set_rules($sdm_usia->rules());

        if ($validation->run()) {
            $sdm_usia->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["sdm_usia"] = $sdm_usia->getById($usia);
        if (!$data["sdm_usia"]) show_404();
        
        $this->load->view("admin/potensisdm/edit_form_usia", $data);
    }
*/

//fungsi aksi klik button edit
    public function editData($usia){
        $where = array('usia' => $usia);
        $data['sdm_usia'] = $this->Usia_model->edit_data($where,'sdm_usia')->result();
    
        $this->load->view('admin/potensisdm/form_edit_usia', $data);
    }

    //redirect form ke usia setelah klik button simpan
    public function update(){
        $usia = $this->input->post('usia');
        $lakilaki = $this->input->post('lakilaki');
        $perempuan = $this->input->post('perempuan');
     
        $data = array(
            'usia' => $usia,
            'lakilaki' => $lakilaki,
            'perempuan' => $perempuan
        );
     
        $where = array(
            'usia' => $usia
        );
     
        $this->Usia_model->update_data($where,$data,'sdm_usia');
    
        $this->session->set_flashdata(
                    'pesan',
                    '<div class="alert alert-success" role="alert">
                    Data berhasil diUpdate!
                    </div>'
                ); 
        redirect('sdm_usia/usia');
    }

    /*
   public function delete($usia=null){
 if (!isset($usia)) show_404();
        
        if ($this->Usia_model->delete($usia)) {
            redirect(site_url('SDM_usia'));
        }
    }  
    */

    //fungsi aksi klik button delete
    public function hapusData($usia){
        $where = array('usia' => $usia);
                $this->Usia_model->hapus_data($where,'sdm_usia');
        
                $this->session->set_flashdata(
                        'pesan',
                        '<div class="alert alert-success" role="alert">
                        Data berhasil dihapus!
                        </div>'
                    ); 
                redirect('sdm_usia/usia');
        }

        public function grafik_usia()
        {
            $this->load->view('admin/grafik_usia');
        }	

   }