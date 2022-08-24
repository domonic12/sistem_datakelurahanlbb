<?php
class Importcsv_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function insert($data)
            {
                $this->db->insert('datapenduduk', $data);
                return TRUE;
            }

    public function view(){
        $query=$this->db->query("SELECT *
                                 FROM datapenduduk
                                 ORDER BY tanggal_ditambahkan DESC");
        return $query->result_array();
    }
}