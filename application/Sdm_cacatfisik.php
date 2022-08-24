<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sdm_cacatfisik extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Cacatfisik_model");
        $this->load->library('form_validation');
    }

    public function cacatfisik(){
        $data["sdm_cacatfisik"] = $this->Cacatfisik_model->getAll();
        $data['title'] = 'jenis_cacatfisik';
    	//$data['sdm_cacatfisik'] = $this->Cacatfisik_model->getcacatfisik();
        $this->load->view("admin/potensisdm/cacatfisik", $data);
    }

    //fungsi klik button Tambah Data
    public function tambah(){
    	$sdm_cacatfisik = $this->Cacatfisik_model;
        $validation = $this->form_validation;
        $validation->set_rules($sdm_cacatfisik->rules());

        if ($validation->run()) {
            $sdm_cacatfisik->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/potensisdm/form_tambah_cacatfisik");
    } 

    //fungsi ketika klik button Tambah di form tambah data
    public function tambahAksi(){
        $jenis_cacatfisik = $this->input->post('jenis_cacatfisik');
        $lakilaki  = $this->input->post('lakilaki');
        $perempuan  = $this->input->post('perempuan');
 
        $data = array(
            'jenis_cacatfisik' => $jenis_cacatfisik,
            'lakilaki' => $lakilaki,
            'perempuan' => $perempuan
            );
        $this->Cacatfisik_model->input_data($data,'sdm_cacatfisik');

        $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success" role="alert">
                Data berhasil ditambahkan!
                </div>'
            ); 

        redirect('sdm_cacatfisik/cacatfisik');

    }
    /*
    public function edit($cacatfisik = null){
    	if (!isset($cacatfisik)) redirect('SDM_cacatfisik');
       
        $sdm_cacatfisik = $this->Cacatfisik_model;
        $validation = $this->form_validation;
        $validation->set_rules($sdm_cacatfisik->rules());

        if ($validation->run()) {
            $sdm_cacatfisik->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["sdm_cacatfisik"] = $sdm_cacatfisik->getById($cacatfisik);
        if (!$data["sdm_cacatfisik"]) show_404();
        
        $this->load->view("admin/potensisdm/edit_form_cacatfisik", $data);
    }
*/

//fungsi aksi klik button edit
    public function editData($jenis_cacatfisik){
        $where = array('jenis_cacatfisik' => $jenis_cacatfisik);
        $data['sdm_cacatfisik'] = $this->Cacatfisik_model->edit_data($where,'sdm_cacatfisik')->result();
    
        $this->load->view('admin/potensisdm/form_edit_cacatfisik', $data);
    }

    //redirect form ke cacatfisik setelah klik button simpan
    public function update(){
        $jenis_cacatfisik = $this->input->post('jenis_cacatfisik');
        $lakilaki = $this->input->post('lakilaki');
        $perempuan = $this->input->post('perempuan');
     
        $data = array(
            'jenis_cacatfisik' => $jenis_cacatfisik,
            'lakilaki' => $lakilaki,
            'perempuan' => $perempuan
        );
     
        $where = array(
            'jenis_cacatfisik' => $jenis_cacatfisik
        );
     
        $this->Cacatfisik_model->update_data($where,$data,'sdm_cacatfisik');
    
        $this->session->set_flashdata(
                    'pesan',
                    '<div class="alert alert-success" role="alert">
                    Data berhasil diUpdate!
                    </div>'
                ); 
        redirect('sdm_cacatfisik/cacatfisik');
    }

    /*
   public function delete($cacatfisik=null){
 if (!isset($cacatfisik)) show_404();
        
        if ($this->Cacatfisik_model->delete($cacatfisik)) {
            redirect(site_url('SDM_cacatfisik'));
        }
    }  
    */

    //fungsi aksi klik button delete
    public function hapusData($jenis_cacatfisik){
        $where = array('jenis_cacatfisik' => $jenis_cacatfisik);
                $this->Cacatfisik_model->hapus_data($where,'sdm_cacatfisik');
        
                $this->session->set_flashdata(
                        'pesan',
                        '<div class="alert alert-success" role="alert">
                        Data berhasil dihapus!
                        </div>'
                    ); 
                redirect('sdm_cacatfisik/cacatfisik');
        }

        public function grafik_cacatfisik()
        {
            $this->load->view('admin/grafik_cacatfisik');
        }	

   }