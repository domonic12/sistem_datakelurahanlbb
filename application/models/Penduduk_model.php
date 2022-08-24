<?php

/**
 * 
 */
class penduduk_model extends CI_Model
{
	
    public function input_data($data, $table){
        $this->db->insert($table, $data);
    }
    
	public function getPenduduk(){
        $this->db->Order_by('tanggal_ditambahkan','desc');
       return $this->db->get('datapenduduk')->result_array();
       
    }

    // untuk versi 2
    public function getAgama()
	{
		$query = $this->db->query("SELECT p.agama, sum(p.jenis_kelamin='laki-laki') 
        as lk, sum(p.jenis_kelamin='perempuan') as pr FROM datapenduduk p GROUP BY agama");
        return $query->result_array();
      
    }
    
    public function getUsia()
	{ 
		$query = $this->db->query("SELECT  p.usia, sum(p.jenis_kelamin='laki-laki') 
        as lk, sum(p.jenis_kelamin='perempuan') as pr FROM datapenduduk p GROUP BY usia ORDER BY usia desc");
         
        return $query->result_array();
      
	}

    public function getPendidikan()
	{
		$query = $this->db->query("SELECT p.pendidikan, sum(p.jenis_kelamin='laki-laki') 
        as lk, sum(p.jenis_kelamin='perempuan') as pr FROM datapenduduk p GROUP BY pendidikan");
        return $query->result_array();
      
    }

    public function getPekerjaan()
	{
		$query = $this->db->query("SELECT p.pekerjaan, sum(p.jenis_kelamin='laki-laki') 
        as lk, sum(p.jenis_kelamin='perempuan') as pr FROM datapenduduk p GROUP BY pekerjaan");
        return $query->result_array();
      
    }

    public function getKewarganegaraan()
	{
		$query = $this->db->query("SELECT p.kewarganegaraan, sum(p.jenis_kelamin='laki-laki') 
        as lk, sum(p.jenis_kelamin='perempuan') as pr FROM datapenduduk p GROUP BY kewarganegaraan");
        return $query->result_array();
      
    }

    public function getEtnis()
	{
		$query = $this->db->query("SELECT p.etnis, sum(p.jenis_kelamin='laki-laki') 
        as lk, sum(p.jenis_kelamin='perempuan') as pr FROM datapenduduk p GROUP BY etnis");
        return $query->result_array();
      
    }
    public function getCacatfisik()
	{
		$query = $this->db->query("SELECT p.cacatfisik, sum(p.jenis_kelamin='laki-laki') 
        as lk, sum(p.jenis_kelamin='perempuan') as pr FROM datapenduduk p GROUP BY cacatfisik");
        return $query->result_array();
      
    }
    public function getCacatmental()
	{
		$query = $this->db->query("SELECT p.cacatmental, sum(p.jenis_kelamin='laki-laki') 
        as lk, sum(p.jenis_kelamin='perempuan') as pr FROM datapenduduk p GROUP BY cacatmental");
        return $query->result_array();
      
    }
    public function getKualitas()
	{
		$query = $this->db->query("SELECT p.pendidikan, p.usia, sum(p.jenis_kelamin='laki-laki') 
        as lk, sum(p.jenis_kelamin='perempuan') as pr FROM datapenduduk p WHERE usia BETWEEN '18' AND '56' GROUP BY pendidikan");
        return $query->result_array();
      
    }

   

	public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data($where, $table){
        return $this->db->get_where($table,$where);
    }

    public function update_data($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function getByID($nik)
    {
        return $this->db->get_where('datapenduduk', ['nik' => $nik])->row();
    }

    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('datapenduduk');
        $this->db->like('nama', $keyword);
        return $this->db->get()->result();

        // $hasil = $this->db->query("SELECT * FROM datapenduduk where nama like '%" . $keyword . "%'");
        // return $hasil;
    }

    //grafik
   

    //untuk grafik
    public function jumlah_agama(){
        $this->db->group_by('agama');
        $this->db->select('agama');
        $this->db->select("count(*) as total");
        return $this->db->from('datapenduduk')
        ->get()
        ->result();
    }

    public function jumlah_pendidikan(){
        $this->db->group_by('pendidikan');
        $this->db->select('pendidikan');
        $this->db->select("count(*) as total");
        return $this->db->from('datapenduduk')
        ->get()
        ->result();
    }

    public function jumlah_pekerjaan(){
        $this->db->group_by('pekerjaan');
        $this->db->select('pekerjaan');
        $this->db->select("count(*) as total");
        return $this->db->from('datapenduduk')
        ->get()
        ->result();
    }

    public function jumlah_usia(){
        $this->db->group_by('usia');
        $this->db->select('usia');
        $this->db->select("count(*) as total");
        return $this->db->from('datapenduduk')
        ->get()
        ->result();
    }

    public function jumlah_kewarganegaraan(){
        $this->db->group_by('kewarganegaraan');
        $this->db->select('kewarganegaraan');
        $this->db->select("count(*) as total");
        return $this->db->from('datapenduduk')
        ->get()
        ->result();
    }

    public function jumlah_statuskawin(){
        $this->db->group_by('status_perkawinan');
        $this->db->select('status_perkawinan');
        $this->db->select("count(*) as total");
        return $this->db->from('datapenduduk')
        ->get()
        ->result();
    }

    public function jumlah_etnis(){
        $this->db->group_by('etnis');
        $this->db->select('etnis');
        $this->db->select("count(*) as total");
        return $this->db->from('datapenduduk')
        ->get()
        ->result();
    }

    public function jumlah_cacatfisik(){
        $this->db->group_by('cacatfisik');
        $this->db->select('cacatfisik');
        $this->db->select("count(*) as total");
        return $this->db->from('datapenduduk')
        ->get()
        ->result();
    }

    public function jumlah_cacatmental(){
        $this->db->group_by('cacatmental');
        $this->db->select('cacatmental');
        $this->db->select("count(*) as total");
        return $this->db->from('datapenduduk')
        ->get()
        ->result();
    }

    public function jumlah_kualitas(){
        $this->db->group_by('pendidikan');
        $this->db->select('p.pendidikan');
        $this->db->select("sum 'p.jenis_kelamin',laki-laki as lk");
        $this->db->count("sum p.jenis_kelamin',perempuan as pr");
        $this->db->where('usia');
        $this->db->between('18');
        $this->db->and('56');
       
        return $this->db->from('datapenduduk p')
        ->get()
        ->result();
    }

    //untuk grafik v2
    public function jumlah_agama_v2(){
        $query = $this->db->query("SELECT p.agama, sum(p.jenis_kelamin='laki-laki') 
        as lk, sum(p.jenis_kelamin='perempuan') as pr FROM datapenduduk p GROUP BY agama");
        return $query->result_array();
    }
}

?> 