<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sdm_cacatmental extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Cacatmental_model");
        $this->load->library('form_validation');
    }

    public function cacatmental(){
        $data["sdm_cacatmental"] = $this->Cacatmental_model->getAll();
        $data['title'] = 'jenis_cacatmental';
    	//$data['sdm_cacatmental'] = $this->Cacatmental_model->getcacatmental();
        $this->load->view("admin/potensisdm/cacatmental", $data);
    }

    //fungsi klik button Tambah Data
    public function tambah(){
    	$sdm_cacatmental = $this->Cacatmental_model;
        $validation = $this->form_validation;
        $validation->set_rules($sdm_cacatmental->rules());

        if ($validation->run()) {
            $sdm_cacatmental->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/potensisdm/form_tambah_cacatmental");
    } 

    //fungsi ketika klik button Tambah di form tambah data
    public function tambahAksi(){
        $jenis_cacatmental = $this->input->post('jenis_cacatmental');
        $lakilaki  = $this->input->post('lakilaki');
        $perempuan  = $this->input->post('perempuan');
 
        $data = array(
            'jenis_cacatmental' => $jenis_cacatmental,
            'lakilaki' => $lakilaki,
            'perempuan' => $perempuan
            );
        $this->Cacatmental_model->input_data($data,'sdm_cacatmental');

        $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success" role="alert">
                Data berhasil ditambahkan!
                </div>'
            ); 

        redirect('sdm_cacatmental/cacatmental');

    }
    /*
    public function edit($cacatmental = null){
    	if (!isset($cacatmental)) redirect('SDM_cacatmental');
       
        $sdm_cacatmental = $this->Cacatmental_model;
        $validation = $this->form_validation;
        $validation->set_rules($sdm_cacatmental->rules());

        if ($validation->run()) {
            $sdm_cacatmental->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["sdm_cacatmental"] = $sdm_cacatmental->getById($cacatmental);
        if (!$data["sdm_cacatmental"]) show_404();
        
        $this->load->view("admin/potensisdm/edit_form_cacatmental", $data);
    }
*/

//fungsi aksi klik button edit
    public function editData($jenis_cacatmental){
        $where = array('jenis_cacatmental' => $jenis_cacatmental);
        $data['sdm_cacatmental'] = $this->Cacatmental_model->edit_data($where,'sdm_cacatmental')->result();
    
        $this->load->view('admin/potensisdm/form_edit_cacatmental', $data);
    }

    //redirect form ke cacatmental setelah klik button simpan
    public function update(){
        $jenis_cacatmental = $this->input->post('jenis_cacatmental');
        $lakilaki = $this->input->post('lakilaki');
        $perempuan = $this->input->post('perempuan');
     
        $data = array(
            'jenis_cacatmental' => $jenis_cacatmental,
            'lakilaki' => $lakilaki,
            'perempuan' => $perempuan
        );
     
        $where = array(
            'jenis_cacatmental' => $jenis_cacatmental
        );
     
        $this->Cacatmental_model->update_data($where,$data,'sdm_cacatmental');
    
        $this->session->set_flashdata(
                    'pesan',
                    '<div class="alert alert-success" role="alert">
                    Data berhasil diUpdate!
                    </div>'
                ); 
        redirect('sdm_cacatmental/cacatmental');
    }

    /*
   public function delete($cacatmental=null){
 if (!isset($cacatmental)) show_404();
        
        if ($this->Cacatmental_model->delete($cacatmental)) {
            redirect(site_url('SDM_cacatmental'));
        }
    }  
    */

    //fungsi aksi klik button delete
    public function hapusData($jenis_cacatmental){
        $where = array('jenis_cacatmental' => $jenis_cacatmental);
                $this->Cacatmental_model->hapus_data($where,'sdm_cacatmental');
        
                $this->session->set_flashdata(
                        'pesan',
                        '<div class="alert alert-success" role="alert">
                        Data berhasil dihapus!
                        </div>'
                    ); 
                redirect('sdm_cacatmental/cacatmental');
        }

        public function grafik_cacatmental()
        {
            $this->load->view('admin/grafik_cacatmental');
        }	

   }
