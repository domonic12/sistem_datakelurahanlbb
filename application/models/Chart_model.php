<?php
class Chart_model extends CI_Model{

   //untuk grafik
   public function jumlah_kelahiran(){
    $this->db->group_by('tanggal_surat_dibuat');
    $this->db->select('tanggal_surat_dibuat');
    $this->db->select("count(*) as total");
    return $this->db->from('tbl_suratkelahiran')
    ->get()
    ->result();
}

public function jumlah_kematian(){
    $this->db->group_by('tanggal_kematian');
    $this->db->select('tanggal_kematian');
    $this->db->select("count(*) as total");
    return $this->db->from('tbl_suratkematian')
    ->get()
    ->result();
}

public function datapd(){
    $query = $this->db->query("SELECT * from sdm_pendidikan");
         
        if($query->num_rows() > 0){
            foreach($query->result() as $data){
                $hasilpd[] = $data;
            }
            return $hasilpd;
        }
    }

}

?>