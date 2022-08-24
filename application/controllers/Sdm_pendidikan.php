<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sdm_pendidikan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Pendidikan_model");
        $this->load->library('form_validation');
    }

    public function pendidikan(){
    	$data["sdm_pendidikan"] = $this->Pendidikan_model->getAll();
        $this->load->view("admin/potensisdm/pendidikan", $data);
    }

    public function tambah(){
    	$sdm_pendidikan = $this->Pendidikan_model;
        $validation = $this->form_validation;
        $validation->set_rules($sdm_pendidikan->rules());

        if ($validation->run()) {
            $sdm_pendidikan->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/potensisdm/form_tambah_pendidikan");
    }

    public function tambahAksi(){
        $tingkatan_pendidikan = $this->input->post('tingkatan_pendidikan');
        $lakilaki  = $this->input->post('lakilaki');
        $perempuan  = $this->input->post('perempuan');
 
        $data = array(
            'tingkatan_pendidikan' => $tingkatan_pendidikan,
            'lakilaki' => $lakilaki,
            'perempuan' => $perempuan
            );
        $this->Pendidikan_model->input_data($data,'sdm_pendidikan');

        $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success" role="alert">
                Data berhasil ditambahkan!
                </div>'
            ); 

        redirect('sdm_pendidikan/pendidikan');

    }
    /*
    public function edit($pendidikan = null){
    	if (!isset($pendidikan)) redirect('SDM_pendidikan');
       
        $sdm_pendidikan = $this->pendidikan_model;
        $validation = $this->form_validation;
        $validation->set_rules($sdm_pendidikan->rules());

        if ($validation->run()) {
            $sdm_pendidikan->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["sdm_pendidikan"] = $sdm_pendidikan->getById($pendidikan);
        if (!$data["sdm_pendidikan"]) show_404();
        
        $this->load->view("admin/potensisdm/edit_form_pendidikan", $data);
    }
*/
    public function editData($tingkatan_pendidikan){
        $where = array('tingkatan_pendidikan' => $tingkatan_pendidikan);
        $data['sdm_pendidikan'] = $this->Pendidikan_model->edit_data($where,'sdm_pendidikan')->result();
    
        $this->load->view('admin/potensisdm/form_edit_pendidikan', $data);
    }

    public function update(){
        $tingkatan_pendidikan = $this->input->post('tingkatan_pendidikan');
        $lakilaki = $this->input->post('lakilaki');
        $perempuan = $this->input->post('perempuan');
     
        $data = array(
            'tingkatan_pendidikan' => $tingkatan_pendidikan,
            'lakilaki' => $lakilaki,
            'perempuan' => $perempuan
        );
     
        $where = array(
            'tingkatan_pendidikan' => $tingkatan_pendidikan
        );
     
        $this->Pendidikan_model->update_data($where,$data,'sdm_pendidikan');
    
        $this->session->set_flashdata(
                    'pesan',
                    '<div class="alert alert-success" role="alert">
                    Data berhasil diUpdate!
                    </div>'
                ); 
        redirect('sdm_pendidikan/pendidikan');
    }

    public function delete($pendidikan=null){
 if (!isset($pendidikan)) show_404();
        
        if ($this->pendidikan_model->delete($pendidikan)) {
            redirect(site_url('SDM_pendidikan'));
        }
    }

    public function hapusData($tingkatan_pendidikan){
        $where = array('tingkatan_pendidikan' => $tingkatan_pendidikan);
                $this->Pendidikan_model->hapus_data($where,'sdm_pendidikan');
        
                $this->session->set_flashdata(
                        'pesan',
                        '<div class="alert alert-success" role="alert">
                        Data berhasil dihapus!
                        </div>'
                    ); 
                redirect('sdm_pendidikan/pendidikan');
        }

        public function grafik_pendidikan()
        {
            $this->load->view('admin/grafik_pendidikan');
        }	

   }
