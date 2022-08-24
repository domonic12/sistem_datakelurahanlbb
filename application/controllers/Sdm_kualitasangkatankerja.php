<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Sdm_kualitasangkatankerja extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("Kualitasangkatankerja_model");
        $this->load->library('form_validation');
    }

    public function kualitasangkatankerja(){
        $data["sdm_angkatankerja"] = $this->Kualitasangkatankerja_model->getAll();
        $data['title'] = 'angkatankerja';
    	//$data['sdm_angkatankerja'] = $this->Kualitasangkatankerja_model->getangkatan_kerja();
        $this->load->view("admin/potensisdm/kualitasangkatankerja", $data);
    }

    //fungsi klik button Tambah Data
    public function tambah(){
    	$sdm_angkatankerja = $this->Kualitasangkatankerja_model;
        $validation = $this->form_validation;
        $validation->set_rules($sdm_angkatankerja->rules());

        if ($validation->run()) {
            $sdm_angkatankerja->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("admin/potensisdm/form_tambah_angkatankerja");
    } 

    //fungsi ketika klik button Tambah di form tambah data
    public function tambahAksi(){
        $angkatan_kerja = $this->input->post('angkatan_kerja');
        $lakilaki  = $this->input->post('lakilaki');
        $perempuan  = $this->input->post('perempuan');
 
        $data = array(
            'angkatan_kerja' => $angkatan_kerja,
            'lakilaki' => $lakilaki,
            'perempuan' => $perempuan
            );
        $this->Kualitasangkatankerja_model->input_data($data,'sdm_angkatankerja');

        $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success" role="alert">
                Data berhasil ditambahkan!
                </div>'
            ); 

        redirect('sdm_kualitasangkatankerja/kualitasangkatankerja');

    }
    /*
    public function edit($angkatan_kerja = null){
    	if (!isset($angkatan_kerja)) redirect('sdm_angkatankerja');
       
        $sdm_angkatankerja = $this->Kualitasangkatankerja_model;
        $validation = $this->form_validation;
        $validation->set_rules($sdm_angkatankerja->rules());

        if ($validation->run()) {
            $sdm_angkatankerja->update();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $data["sdm_angkatankerja"] = $sdm_angkatankerja->getById($angkatan_kerja);
        if (!$data["sdm_angkatankerja"]) show_404();
        
        $this->load->view("admin/potensisdm/edit_form_angkatan_kerja", $data);
    }
*/

//fungsi aksi klik button edit
    public function editData($angkatan_kerja){
        $where = array('angkatan_kerja' => $angkatan_kerja);
        $data['sdm_angkatankerja'] = $this->Kualitasangkatankerja_model->edit_data($where,'sdm_angkatankerja')->result();
    
        $this->load->view('admin/potensisdm/form_edit_angkatankerja', $data);
    }

    //redirect form ke angkatan_kerja setelah klik button simpan
    public function update(){
        $angkatan_kerja = $this->input->post('angkatan_kerja');
        $lakilaki = $this->input->post('lakilaki');
        $perempuan = $this->input->post('perempuan');
     
        $data = array(
            'angkatan_kerja' => $angkatan_kerja,
            'lakilaki' => $lakilaki,
            'perempuan' => $perempuan
        );
     
        $where = array(
            'angkatan_kerja' => $angkatan_kerja
        );
     
        $this->Kualitasangkatankerja_model->update_data($where,$data,'sdm_angkatankerja');
    
        $this->session->set_flashdata(
                    'pesan',
                    '<div class="alert alert-success" role="alert">
                    Data berhasil diUpdate!
                    </div>'
                ); 
        redirect('sdm_kualitasangkatankerja/kualitasangkatankerja');
    }

    /*
   public function delete($angkatan_kerja=null){
 if (!isset($angkatan_kerja)) show_404();
        
        if ($this->Kualitasangkatankerja_model->delete($angkatan_kerja)) {
            redirect(site_url('sdm_angkatankerja'));
        }
    }  
    */

    //fungsi aksi klik button delete
    public function hapusData($angkatan_kerja){
        $where = array('angkatan_kerja' => $angkatan_kerja);
                $this->Kualitasangkatankerja_model->hapus_data($where,'sdm_angkatankerja');
        
                $this->session->set_flashdata(
                        'pesan',
                        '<div class="alert alert-success" role="alert">
                        Data berhasil dihapus!
                        </div>'
                    ); 
                redirect('sdm_kualitasangkatankerja/kualitasangkatankerja');
        }

        public function grafik_kualitasangkatankerja()
        {
            $this->load->view('admin/grafik_kualitasangkatankerja');
        }	

   }
