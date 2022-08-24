<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Import_model extends CI_Model {

    /**
     * Constructor.
     *
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Fungsi untuk insert data ke dalam database.
     *
     */
    public function save($data)
    {
        return $this->db->insert('datapenduduk', $data);
    }

    /**
     * Fungsi untuk menampilkan data dari database.
     *
     */
    public function get_all()
    {
        $this->db->Order_by('tanggal_ditambahkan','desc');
        return $this->db->get('datapenduduk')->result_array();
    }
}