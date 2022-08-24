<?php
class surat_models extends CI_Model
{
	public function input_data($data, $table){
        $this->db->insert($table, $data);
	}
	
	public function getDataSuratKTP()
	{
		return $this->db->get('tbl_suratktp')->result_array();
    }
    

    public function getDataSuratKematian()
	{
		return $this->db->get('tbl_suratkematian')->result_array();
    }
    
    public function getDataSuratKelahiran()
	{
		return $this->db->get('tbl_suratkelahiran')->result_array();
    }
    
    public function getDataSuratPindah()
	{
		return $this->db->get('tbl_suratkepindahan')->result_array();
    }

    public function getDataSuratKedatangan()
	{
		return $this->db->get('tbl_surat_kedatangan')->result_array();
    }
    

	public function hapus_data($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function edit_data($where, $table){
        return $this->db->get_where($table,$where);
	}
	
	public function print_data($where, $table){
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

	public function getNik($nik)
	{
		$query = $this->db->query("SELECT * FROM datapenduduk WHERE nik = '$nik'");
		return $query->result_array();
	}
    
    
}

?>
