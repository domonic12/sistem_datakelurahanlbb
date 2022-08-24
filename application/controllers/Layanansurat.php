<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Layanansurat extends CI_Controller {

	public function __construct()
    {
        //Memanggil Method construct yang ada di CI_Controller
        parent:: __construct();

		$this->load->model("surat_models");
		$this->load->model("penduduk_model");
    }

	public function index()
	{
		$this->load->view('admin/layanansurat/');
	}
	
	
/**
 * START SURAT KTP
 */
    public function suratpembuatanktp()
	{
    	$data['suratktp'] = $this->surat_models->getDataSuratKTP();
		$this->load->view('admin/layanansurat/suratpembuatanktp', $data);
	}

	public function getNik()
	{
		$nik = $this->input->post('nik');
		$data = $this->surat_models->getNik($nik);
		echo json_encode($data);
	}

    public function tambah_suratKtp()
	{
    	$data['penduduk'] = $this->penduduk_model->getPenduduk();
		$this->load->view('admin/layanansurat/tambah_suratktp', $data);
	}

	public function cetak_suratKtp($id){
		$where = array('id' => $id);
		$data['csurat'] =  $this->surat_models->print_data($where,'tbl_suratktp')->result();
		$this->load->view("admin/layanansurat/format/suratktp", $data);
	}

	public function tambah_SuratKtpAksi(){
        $nosurat = $this->input->post('noSurat');
        $nik = $this->input->post('nik');
        $nama  = $this->input->post('nama');
        $jenis_kelamin = $this->input->post('jk');
        $ttl = $this->input->post('ttl');
        $alamat = $this->input->post('alamat');
        $status_perkawinan  = $this->input->post('status');
        $agama = $this->input->post('agama');
        $pekerjaan = $this->input->post('pekerjaan');
        $keperluan = $this->input->post('keperluan');
 
        $data = array(
			'nama' => $nama,
            'nik' => $nik,
			'agama' => $agama,
			'status_perkawinan' => $status_perkawinan,
            'jenis_kelamin' => $jenis_kelamin,
			'tempat_tanggal_lahir' => $ttl,
			'pekerjaan' => $pekerjaan,
            'alamat' => $alamat,
            'keperluan' => $keperluan,
			'tanggal_berlaku' => date('d F Y') .' s/d '. date('d F Y', strtotime(' +1 month')),
			'nomor_surat' => $nosurat,
			'tanggal_dibuat' => date('d F Y')
            );
        $this->surat_models->input_data($data,'tbl_suratktp');

        $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success" role="alert">
                Data berhasil disimpan!
                </div>'
            ); 

        redirect('layanansurat/suratpembuatanktp');
        
	}
	
	public function hapusSuratKtp($id){
		$where = array('id' => $id);
		$this->surat_models->hapus_data($where,'tbl_suratktp');
		
		$this->session->set_flashdata(
			'pesan',
			'<div class="alert alert-success" role="alert">
			Data berhasil dihapus!
			</div>'
		); 
		redirect('layanansurat/suratpembuatanktp');
	}
		
	public function editSuratKtp($id){
		$where = array('id' => $id);
		$data['suratktp'] = $this->surat_models->edit_data($where,'tbl_suratktp')->result();
	
		$this->load->view('admin/layanansurat/edit_suratktp', $data);
	}
	
	public function updateSuratKtp(){
		$id = $this->input->post('id');
		$nosurat = $this->input->post('noSurat');
        $nik = $this->input->post('nik');
        $nama  = $this->input->post('nama');
        $jenis_kelamin = $this->input->post('jk');
        $ttl = $this->input->post('ttl');
        $alamat = $this->input->post('alamat');
        $status_perkawinan  = $this->input->post('status');
        $agama = $this->input->post('agama');
        $pekerjaan = $this->input->post('pekerjaan');
        $keperluan = $this->input->post('keperluan');
	 
		$data = array(
			'nama' => $nama,
            'nik' => $nik,
			'agama' => $agama,
			'status_perkawinan' => $status_perkawinan,
            'jenis_kelamin' => $jenis_kelamin,
			'tempat_tanggal_lahir' => $ttl,
			'pekerjaan' => $pekerjaan,
            'alamat' => $alamat,
            'keperluan' => $keperluan,
			'nomor_surat' => $nosurat
		);
	 
		$where = array(
			'id' => $id
		);
	 
		$this->surat_models->update_data($where,$data,'tbl_suratktp');
	
		$this->session->set_flashdata(
					'pesan',
					'<div class="alert alert-success" role="alert">
					Data berhasil diUpdate!
					</div>'
				); 
		redirect('layanansurat/suratpembuatanktp');
	}
/**
 * END SURAT KTP
 */


/**
 * START SURAT KELAHIRAN
 */
	public function suratkelahiran()
	{
		$data['suratkelahiran'] = $this->surat_models->getDataSuratKelahiran();
        $this->load->view('admin/layanansurat/suratkelahiran', $data);
	}




	public function tambah_suratKelahiran()
	{
		$data['suratkelahiran'] = $this->surat_models->getDataSuratKelahiran();
		$this->load->view('admin/layanansurat/tambah_suratkelahiran', $data);
	}

	public function tambah_suratKelahiranAksi()
	{

		$nomor_surat = $this->input->post('nomor_surat');
		$nomor_kk = $this->input->post('nomor_kk');
		//Data Bayi
		$nama_anak = $this->input->post('nama_anak');
		$kelamin_anak = $this->input->post('kelamin_anak');
		$tempat_dilahirkan = $this->input->post('tempat_dilahirkan');
		$tempat_kelahiran = $this->input->post('tempat_kelahiran');
		$hari_tanggal_kelahiran = $this->input->post('hari_tgl_lahir');
		$jam_kelahiran = $this->input->post('jam_kelahiran');
		$jenis_kelahiran = $this->input->post('jenis_kelahiran');
		$kelahiran_ke = $this->input->post('kelahiran_ke');
		$penolong_kelahiran = $this->input->post('penolong_kelahiran');
		$berat_bayi = $this->input->post('berat_anak');
		$panjang_bayi = $this->input->post('panjang_anak');

		// Data Ibu

		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$umur = $this->input->post('umur');
		$pekerjaan = $this->input->post('pekerjaan');
		$alamat = $this->input->post('alamat');
		$kewarganegaraan = $this->input->post('kwn');
		$kebangsaan = $this->input->post('kebangsaan');
		$tanggal_perkawinan = $this->input->post('tanggal_perkawinan');
		// Data Ayah
		$nik_ayah = $this->input->post('nik_ayah');
		$nama_ayah = $this->input->post('nama_ayah');
		$tanggal_lahir_ayah = $this->input->post('tanggal_lahir_ayah');
		$umur_ayah = $this->input->post('umur_ayah');
		$pekerjaan_ayah = $this->input->post('pekerjaan_ayah');
		$alamat_ayah = $this->input->post('alamat_ayah');
		$kewarganegaraan_ayah = $this->input->post('kwn_ayah');
		$kebangsaan_ayah = $this->input->post('kebangsaan_ayah');
		$tanggal_perkawinan_ayah = $this->input->post('tanggal_perkawinan_ayah');
		// Data Pelapor
		$nik_pelapor = $this->input->post('nik_pelapor');
		$nama_pelapor = $this->input->post('nama_pelapor');
		$umur_pelapor = $this->input->post('umur_pelapor');
		$kelamin_pelapor = $this->input->post('kelamin_pelapor');
		$pekerjaan_pelapor = $this->input->post('pekerjaan_pelapor');
		$alamat_pelapor = $this->input->post('alamat_pelapor');

		// Data Saksi 1
		$nik_saksi_1 = $this->input->post('nik_saksi_1');
		$nama_saksi_1 = $this->input->post('nama_saksi_1');
		$umur_saksi_1 = $this->input->post('umur_saksi_1');
		$pekerjaan_saksi_1 = $this->input->post('pekerjaan_saksi_1');
		$alamat_saksi_1 = $this->input->post('alamat_saksi_1');

		// Data Saksi 2
		$nik_saksi_2 = $this->input->post('nik_saksi_2');
		$nama_saksi_2 = $this->input->post('nama_saksi_2');
		$umur_saksi_2 = $this->input->post('umur_saksi_2');
		$pekerjaan_saksi_2 = $this->input->post('pekerjaan_saksi_2');
		$alamat_saksi_2 = $this->input->post('alamat_saksi_2');
		
		
        $data = array(

			'nomor_surat' => $nomor_surat,
			'nomor_kartu_keluarga' => $nomor_kk,
		//Data Bayi
			'nama_anak' => $nama_anak,
			'kelamin_anak' => $kelamin_anak,
			'tempat_dilahirkan' => $tempat_dilahirkan , 
			'tempat_kelahiran' => $tempat_kelahiran ,
			'hari_tanggal_kelahiran' => $hari_tanggal_kelahiran,
			'jam_kelahiran'=> $jam_kelahiran,
			'jenis_kelahiran' =>$jenis_kelahiran,
			'kelahiran_ke'=>$kelahiran_ke,
			'penolong_kelahiran'=>$penolong_kelahiran,
			'berat_bayi' =>$berat_bayi,
			'panjang_bayi'=> $panjang_bayi,
		// Data Ibu
			'nik'=>$nik,
			'nama'=>$nama,
			'tanggal_lahir'=>$tanggal_lahir,
			'umur'=>$umur,
			'pekerjaan'=>$pekerjaan,
			'alamat'=>$alamat,
			'kewarganegaraan'=>$kewarganegaraan,
			'kebangsaan'=>$kebangsaan,
			'tanggal_perkawinan'=>$tanggal_perkawinan,

		// Data Ayah
			'nik_ayah'=>$nik_ayah,
			'nama_ayah'=>$nama_ayah,
			'tanggal_lahir_ayah'=>$tanggal_lahir_ayah,
			'umur_ayah'=>$umur_ayah,
			'pekerjaan_ayah'=>$pekerjaan_ayah,
			'alamat_ayah'=>$alamat_ayah,
			'kewarganegaraan_ayah'=>$kewarganegaraan_ayah,
			'kebangsaan_ayah'=>$kebangsaan_ayah,
			'tanggal_perkawinan_ayah'=>$tanggal_perkawinan_ayah,
		// Data Pelapor
			'nik_pelapor'=>$nik_pelapor,
			'nama_pelapor'=>$nama_pelapor,
			'umur_pelapor'=>$umur_pelapor,
			'kelamin_pelapor'=>$kelamin_pelapor,
			'pekerjaan_pelapor'=>$pekerjaan_pelapor,
			'alamat_pelapor'=>$alamat_pelapor,
		// Data Saksi 1
			'nik_saksi_1'=>$nik_saksi_1,
			'nama_saksi_1'=>$nama_saksi_1,
			'umur_saksi_1'=>$umur_saksi_1,
			'pekerjaan_saksi_1'=>$pekerjaan_saksi_1,
			'alamat_saksi_1'=>$alamat_saksi_1,
		// Data Saksi 2
			'nik_saksi_2'=>$nik_saksi_2,
			'nama_saksi_2'=>$nama_saksi_2,
			'umur_saksi_2'=>$umur_saksi_2,
			'pekerjaan_saksi_2'=>$pekerjaan_saksi_2,
			'alamat_saksi_2'=>$alamat_saksi_2,

			'tanggal_surat_dibuat' => date('d F Y')
			
			); 
			
        $this->surat_models->input_data($data,'tbl_suratkelahiran');

        $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success" role="alert">
                Data berhasil disimpan!
                </div>'
            ); 

        redirect('layanansurat/suratkelahiran');
        
	}

	public function hapusSuratKelahiran($id)
	{
		$where = array('id' => $id);
		$this->surat_models->hapus_data($where,'tbl_suratkelahiran');
		$this->session->set_flashdata(
			'pesan',
			'<div class="alert alert-success" role="alert">
			Data berhasil dihapus!
			</div>'
		); 
		redirect('layanansurat/suratkelahiran');
	}
		
	public function editSuratKelahiran($id
	){
		$where = array('id' => $id);
		$data['suratkelahiran'] = $this->surat_models->edit_data($where,'tbl_suratkelahiran')->result();
	
		$this->load->view('admin/layanansurat/edit_suratkelahiran', $data);
	}

	public function updateSuratKelahiran()
	{
		$id = $this->input->post('id');
		$nomor_surat = $this->input->post('nomor_surat');
		$nomor_kk = $this->input->post('nomor_kk');
		//Data Bayi
		$nomor_surat = $this->input->post('nomor_surat');
		$nama_anak = $this->input->post('nama_anak');
		$kelamin_anak = $this->input->post('kelamin_anak');
		$tempat_dilahirkan = $this->input->post('tempat_dilahirkan');
		$tempat_kelahiran = $this->input->post('tempat_kelahiran');
		$hari_tanggal_kelahiran = $this->input->post('hari_tgl_lahir');
		$jam_kelahiran = $this->input->post('jam_kelahiran');
		$jenis_kelahiran = $this->input->post('jenis_kelahiran');
		$kelahiran_ke = $this->input->post('kelahiran_ke');
		$penolong_kelahiran = $this->input->post('penolong_kelahiran');
		$berat_bayi = $this->input->post('berat_anak');
		$panjang_bayi = $this->input->post('panjang_anak');

		// Data Ibu

		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$umur = $this->input->post('umur');
		$pekerjaan = $this->input->post('pekerjaan');
		$alamat = $this->input->post('alamat');
		$kewarganegaraan = $this->input->post('kwn');
		$kebangsaan = $this->input->post('kebangsaan');
		$tanggal_perkawinan = $this->input->post('tanggal_perkawinan');
		// Data Ayah
		$nik_ayah = $this->input->post('nik_ayah');
		$nama_ayah = $this->input->post('nama_ayah');
		$tanggal_lahir_ayah = $this->input->post('tanggal_lahir_ayah');
		$umur_ayah = $this->input->post('umur_ayah');
		$pekerjaan_ayah = $this->input->post('pekerjaan_ayah');
		$alamat_ayah = $this->input->post('alamat_ayah');
		$kewarganegaraan_ayah = $this->input->post('kwn_ayah');
		$kebangsaan_ayah = $this->input->post('kebangsaan_ayah');
		$tanggal_perkawinan_ayah = $this->input->post('tanggal_perkawinan_ayah');
		// Data Pelapor
		$nik_pelapor = $this->input->post('nik_pelapor');
		$nama_pelapor = $this->input->post('nama_pelapor');
		$umur_pelapor = $this->input->post('umur_pelapor');
		$kelamin_pelapor = $this->input->post('kelamin_pelapor');
		$pekerjaan_pelapor = $this->input->post('pekerjaan_pelapor');
		$alamat_pelapor = $this->input->post('alamat_pelapor');

		// Data Saksi 1
		$nik_saksi_1 = $this->input->post('nik_saksi_1');
		$nama_saksi_1 = $this->input->post('nama_saksi_1');
		$umur_saksi_1 = $this->input->post('umur_saksi_1');
		$pekerjaan_saksi_1 = $this->input->post('pekerjaan_saksi_1');
		$alamat_saksi_1 = $this->input->post('alamat_saksi_1');

		// Data Saksi 2
		$nik_saksi_2 = $this->input->post('nik_saksi_2');
		$nama_saksi_2 = $this->input->post('nama_saksi_2');
		$umur_saksi_2 = $this->input->post('umur_saksi_2');
		$pekerjaan_saksi_2 = $this->input->post('pekerjaan_saksi_2');
		$alamat_saksi_2 = $this->input->post('alamat_saksi_2');
		
                
        $data = array(

			'nomor_surat' => $nomor_surat,
			'nomor_kartu_keluarga' => $nomor_kk,
		//Data Bayi
			'nama_anak' => $nama_anak,
			'kelamin_anak' => $kelamin_anak,
			'tempat_dilahirkan' => $tempat_dilahirkan , 
			'tempat_kelahiran' => $tempat_kelahiran ,
			'hari_tanggal_kelahiran' => $hari_tanggal_kelahiran,
			'jam_kelahiran'=> $jam_kelahiran,
			'jenis_kelahiran' =>$jenis_kelahiran,
			'kelahiran_ke'=>$kelahiran_ke,
			'penolong_kelahiran'=>$penolong_kelahiran,
			'berat_bayi' =>$berat_bayi,
			'panjang_bayi'=> $panjang_bayi,
		// Data Ibu
			'nik'=>$nik,
			'nama'=>$nama,
			'tanggal_lahir'=>$tanggal_lahir,
			'umur'=>$umur,
			'pekerjaan'=>$pekerjaan,
			'alamat'=>$alamat,
			'kewarganegaraan'=>$kewarganegaraan,
			'kebangsaan'=>$kebangsaan,
			'tanggal_perkawinan'=>$tanggal_perkawinan,

		// Data Ayah
			'nik_ayah'=>$nik_ayah,
			'nama_ayah'=>$nama_ayah,
			'tanggal_lahir_ayah'=>$tanggal_lahir_ayah,
			'umur_ayah'=>$umur_ayah,
			'pekerjaan_ayah'=>$pekerjaan_ayah,
			'alamat_ayah'=>$alamat_ayah,
			'kewarganegaraan_ayah'=>$kewarganegaraan_ayah,
			'kebangsaan_ayah'=>$kebangsaan_ayah,
			'tanggal_perkawinan_ayah'=>$tanggal_perkawinan_ayah,
		// Data Pelapor
			'nik_pelapor'=>$nik_pelapor,
			'nama_pelapor'=>$nama_pelapor,
			'umur_pelapor'=>$umur_pelapor,
			'kelamin_pelapor'=>$kelamin_pelapor,
			'pekerjaan_pelapor'=>$pekerjaan_pelapor,
			'alamat_pelapor'=>$alamat_pelapor,
		// Data Saksi 1
			'nik_saksi_1'=>$nik_saksi_1,
			'nama_saksi_1'=>$nama_saksi_1,
			'umur_saksi_1'=>$umur_saksi_1,
			'pekerjaan_saksi_1'=>$pekerjaan_saksi_1,
			'alamat_saksi_1'=>$alamat_saksi_1,
		// Data Saksi 2
			'nik_saksi_2'=>$nik_saksi_2,
			'nama_saksi_2'=>$nama_saksi_2,
			'umur_saksi_2'=>$umur_saksi_2,
			'pekerjaan_saksi_2'=>$pekerjaan_saksi_2,
			'alamat_saksi_2'=>$alamat_saksi_2,

			'tanggal_surat_dibuat' => date('d F Y')
			
            );
	 
		$where = array(
			'id' => $id
		);
	 
		$this->surat_models->update_data($where,$data,'tbl_suratkelahiran');
	
		$this->session->set_flashdata(
					'pesan',
					'<div class="alert alert-success" role="alert">
					Data berhasil diUpdate!
					</div>'
				); 
		redirect('layanansurat/suratkelahiran');
	}


	public function cetak_suratKelahiran($id)
	{
		$where = array('id' => $id);
		$data['csurat'] =  $this->surat_models->print_data($where,'tbl_suratkelahiran')->result();
		$this->load->view("admin/layanansurat/format/suratkelahiran", $data);
	}
	
/**
 * END SURAT KELAHIRAN
 */	
	

	
/**
 * START SURAT KEMATIAN
 */
	public function suratkematian()
	{
		$data['suratkematian'] = $this->surat_models->getDataSuratKematian();
        $this->load->view('admin/layanansurat/suratkematian', $data);
	}

	public function tambah_suratKematian()
	{
		$data['suratkematian'] = $this->surat_models->getDataSuratKematian();
		$this->load->view('admin/layanansurat/tambah_suratkematian', $data);
	}

	public function tambah_suratKematianAksi()
	{
		$nomor_surat = $this->input->post('nomor_surat');
		$nomor_kartu_keluarga = $this->input->post('nomor_kartu_keluarga');
		//Data Jenazah
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$kelamin = $this->input->post('kelamin');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$umur = $this->input->post('umur');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$agama = $this->input->post('agama');
		$pekerjaan = $this->input->post('pekerjaan');
		$alamat = $this->input->post('alamat');
		$anak_ke = $this->input->post('anak_ke');
		$tanggal_kematian = $this->input->post('tanggal_kematian');
		$jam_kematian = $this->input->post('jam_kematian');
		$sebab_kematian = $this->input->post('sebab_kematian');
		$tempat_kematian = $this->input->post('tempat_kematian');
		$yang_menerangkan = $this->input->post('yang_menerangkan');

		// Data Ibu
		$nik_ibu = $this->input->post('nik_ibu');
		$nama_ibu = $this->input->post('nama_ibu');
		$tanggal_lahir_ibu = $this->input->post('tanggal_lahir_ibu');
		$umur_ibu = $this->input->post('umur_ibu');
		$pekerjaan_ibu = $this->input->post('pekerjaan_ibu');
		$alamat_ibu = $this->input->post('alamat_ibu');
		// Data Ayah
		$nik_ayah = $this->input->post('nik_ayah');
		$nama_ayah = $this->input->post('nama_ayah');
		$tanggal_lahir_ayah = $this->input->post('tanggal_lahir_ayah');
		$umur_ayah = $this->input->post('umur_ayah');
		$pekerjaan_ayah = $this->input->post('pekerjaan_ayah');
		$alamat_ayah = $this->input->post('alamat_ayah');
		// Data Pelapor
		$nik_pelapor = $this->input->post('nik_pelapor');
		$nama_pelapor = $this->input->post('nama_pelapor');
		$umur_pelapor = $this->input->post('umur_pelapor');
		$tanggal_lahir_pelapor = $this->input->post('tanggal_lahir_pelapor');
		$pekerjaan_pelapor = $this->input->post('pekerjaan_pelapor');
		$alamat_pelapor = $this->input->post('alamat_pelapor');

		// Data Saksi 1
		$nik_saksi_1 = $this->input->post('nik_saksi_1');
		$nama_saksi_1 = $this->input->post('nama_saksi_1');
		$tanggal_lahir_saksi_1 = $this->input->post('tanggal_lahir_saksi_1');
		$umur_saksi_1 = $this->input->post('umur_saksi_1');
		$pekerjaan_saksi_1 = $this->input->post('pekerjaan_saksi_1');
		$alamat_saksi_1 = $this->input->post('alamat_saksi_1');

		// Data Saksi 2
		$nik_saksi_2 = $this->input->post('nik_saksi_2');
		$nama_saksi_2 = $this->input->post('nama_saksi_2');
		$tanggal_lahir_saksi_2 = $this->input->post('tanggal_lahir_saksi_2');
		$umur_saksi_2 = $this->input->post('umur_saksi_2');
		$pekerjaan_saksi_2 = $this->input->post('pekerjaan_saksi_2');
		$alamat_saksi_2 = $this->input->post('alamat_saksi_2');
		
                
        $data = array(

			'nomor_surat' => $nomor_surat,
			'nomor_kartu_keluarga' => $nomor_kartu_keluarga,
		//Data jenazah
			'nik' => $nik,
			'nama' => $nama,
			'kelamin' => $kelamin , 
			'tanggal_lahir' => $tanggal_lahir ,
			'umur' => $umur,
			'tempat_lahir' => $tempat_lahir,
			'agama'=> $agama,
			'pekerjaan' =>$pekerjaan,
			'alamat'=>$alamat,
			'anak_ke'=>$anak_ke,
			'tanggal_kematian' =>$tanggal_kematian,
			'jam_kematian'=> $jam_kematian,
			'sebab_kematian'=> $sebab_kematian,
			'tempat_kematian'=> $tempat_kematian,
			'yang_menerangkan'=> $yang_menerangkan,
		// Data Ibu
			'nik'=>$nik,
			'nama'=>$nama,
			'tanggal_lahir'=>$tanggal_lahir,
			'umur'=>$umur,
			'pekerjaan'=>$pekerjaan,
			'alamat'=>$alamat,

		// Data Ayah
			'nik_ayah'=>$nik_ayah,
			'nama_ayah'=>$nama_ayah,
			'tanggal_lahir_ayah'=>$tanggal_lahir_ayah,
			'umur_ayah'=>$umur_ayah,
			'pekerjaan_ayah'=>$pekerjaan_ayah,
			'alamat_ayah'=>$alamat_ayah,
		// Data Pelapor
			'nik_pelapor'=>$nik_pelapor,
			'nama_pelapor'=>$nama_pelapor,
			'umur_pelapor'=>$umur_pelapor,
			'tanggal_lahir_pelapor'=>$tanggal_lahir_pelapor,
			'pekerjaan_pelapor'=>$pekerjaan_pelapor,
			'alamat_pelapor'=>$alamat_pelapor,
		// Data Saksi 1
			'nik_saksi_1'=>$nik_saksi_1,
			'nama_saksi_1'=>$nama_saksi_1,
			'tanggal_lahir_saksi_1'=>$tanggal_lahir_saksi_1,
			'umur_saksi_1'=>$umur_saksi_1,
			'pekerjaan_saksi_1'=>$pekerjaan_saksi_1,
			'alamat_saksi_1'=>$alamat_saksi_1,
		// Data Saksi 2
			'nik_saksi_2'=>$nik_saksi_2,
			'nama_saksi_2'=>$nama_saksi_2,
			'tanggal_lahir_saksi_2'=>$tanggal_lahir_saksi_2,
			'umur_saksi_2'=>$umur_saksi_2,
			'pekerjaan_saksi_2'=>$pekerjaan_saksi_2,
			'alamat_saksi_2'=>$alamat_saksi_2,

            'tanggal_surat_dibuat' => date('d F Y')
            );
        $this->surat_models->input_data($data,'tbl_suratkematian');

        $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success" role="alert">
                Data berhasil disimpan!
                </div>'
            ); 

        redirect('layanansurat/suratkematian');
        
	}

	public function hapusSuratKematian($id)
	{
		$where = array('id' => $id);
		$this->surat_models->hapus_data($where,'tbl_suratkematian');
		
		$this->session->set_flashdata(
			'pesan',
			'<div class="alert alert-success" role="alert">
			Data berhasil dihapus!
			</div>'
		); 
		redirect('layanansurat/suratkematian');
	}
		
	public function editSuratKematian($id)
	{
		$where = array('id' => $id);
		$data['suratkematian'] = $this->surat_models->edit_data($where,'tbl_suratkematian')->result();
	
		$this->load->view('admin/layanansurat/edit_suratkematian', $data);
	}

	public function updateSuratKematian()
	{
		$id = $this->input->post('id');
		$nomor_surat = $this->input->post('nomor_surat');
		$nomor_kartu_keluarga = $this->input->post('nomor_kartu_keluarga');
		//Data Jenazah
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$kelamin = $this->input->post('kelamin');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$umur = $this->input->post('umur');
		$tempat_lahir = $this->input->post('tempat_lahir');
		$agama = $this->input->post('agama');
		$pekerjaan = $this->input->post('pekerjaan');
		$alamat = $this->input->post('alamat');
		$anak_ke = $this->input->post('anak_ke');
		$tanggal_kematian = $this->input->post('tanggal_kematian');
		$jam_kematian = $this->input->post('jam_kematian');
		$sebab_kematian = $this->input->post('sebab_kematian');
		$tempat_kematian = $this->input->post('tempat_kematian');
		$yang_menerangkan = $this->input->post('yang_menerangkan');

		// Data Ibu
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$umur = $this->input->post('umur');
		$pekerjaan = $this->input->post('pekerjaan');
		$alamat = $this->input->post('alamat');
		// Data Ayah
		$nik_ayah = $this->input->post('nik_ayah');
		$nama_ayah = $this->input->post('nama_ayah');
		$tanggal_lahir_ayah = $this->input->post('tanggal_lahir_ayah');
		$umur_ayah = $this->input->post('umur_ayah');
		$pekerjaan_ayah = $this->input->post('pekerjaan_ayah');
		$alamat_ayah = $this->input->post('alamat_ayah');
		// Data Pelapor
		$nik_pelapor = $this->input->post('nik_pelapor');
		$nama_pelapor = $this->input->post('nama_pelapor');
		$umur_pelapor = $this->input->post('umur_pelapor');
		$tanggal_lahir_pelapor = $this->input->post('tanggal_lahir_pelapor');
		$pekerjaan_pelapor = $this->input->post('pekerjaan_pelapor');
		$alamat_pelapor = $this->input->post('alamat_pelapor');

		// Data Saksi 1
		$nik_saksi_1 = $this->input->post('nik_saksi_1');
		$nama_saksi_1 = $this->input->post('nama_saksi_1');
		$tanggal_lahir_saksi_1 = $this->input->post('tanggal_lahir_saksi_1');
		$umur_saksi_1 = $this->input->post('umur_saksi_1');
		$pekerjaan_saksi_1 = $this->input->post('pekerjaan_saksi_1');
		$alamat_saksi_1 = $this->input->post('alamat_saksi_1');

		// Data Saksi 2
		$nik_saksi_2 = $this->input->post('nik_saksi_2');
		$nama_saksi_2 = $this->input->post('nama_saksi_2');
		$tanggal_lahir_saksi_2 = $this->input->post('tanggal_lahir_saksi_2');
		$umur_saksi_2 = $this->input->post('umur_saksi_2');
		$pekerjaan_saksi_2 = $this->input->post('pekerjaan_saksi_2');
		$alamat_saksi_2 = $this->input->post('alamat_saksi_2');
		
                
        $data = array(

			'nomor_surat' => $nomor_surat,
			'nomor_kartu_keluarga' => $nomor_kartu_keluarga,
		//Data jenazah
			'nik' => $nik,
			'nama' => $nama,
			'kelamin' => $kelamin, 
			'tanggal_lahir' => $tanggal_lahir,
			'umur' => $umur,
			'tempat_lahir' => $tempat_lahir,
			'agama'=> $agama,
			'pekerjaan' =>$pekerjaan,
			'alamat'=>$alamat,
			'anak_ke'=>$anak_ke,
			'tanggal_kematian' =>$tanggal_kematian,
			'jam_kematian'=> $jam_kematian,
			'sebab_kematian'=> $sebab_kematian,
			'tempat_kematian'=> $tempat_kematian,
			'yang_menerangkan'=> $yang_menerangkan,
		// Data Ibu
			'nik'=>$nik,
			'nama'=>$nama,
			'tanggal_lahir'=>$tanggal_lahir,
			'umur'=>$umur,
			'pekerjaan'=>$pekerjaan,
			'alamat'=>$alamat,

		// Data Ayah
			'nik_ayah'=>$nik_ayah,
			'nama_ayah'=>$nama_ayah,
			'tanggal_lahir_ayah'=>$tanggal_lahir_ayah,
			'umur_ayah'=>$umur_ayah,
			'pekerjaan_ayah'=>$pekerjaan_ayah,
			'alamat_ayah'=>$alamat_ayah,
		// Data Pelapor
			'nik_pelapor'=>$nik_pelapor,
			'nama_pelapor'=>$nama_pelapor,
			'umur_pelapor'=>$umur_pelapor,
			'tanggal_lahir_pelapor'=>$tanggal_lahir_pelapor,
			'pekerjaan_pelapor'=>$pekerjaan_pelapor,
			'alamat_pelapor'=>$alamat_pelapor,
		// Data Saksi 1
			'nik_saksi_1'=>$nik_saksi_1,
			'nama_saksi_1'=>$nama_saksi_1,
			'tanggal_lahir_saksi_1'=>$tanggal_lahir_saksi_1,
			'umur_saksi_1'=>$umur_saksi_1,
			'pekerjaan_saksi_1'=>$pekerjaan_saksi_1,
			'alamat_saksi_1'=>$alamat_saksi_1,
		// Data Saksi 2
			'nik_saksi_2'=>$nik_saksi_2,
			'nama_saksi_2'=>$nama_saksi_2,
			'tanggal_lahir_saksi_2'=>$tanggal_lahir_saksi_2,
			'umur_saksi_2'=>$umur_saksi_2,
			'pekerjaan_saksi_2'=>$pekerjaan_saksi_2,
			'alamat_saksi_2'=>$alamat_saksi_2,
			
            'tanggal_surat_dibuat' => date('d F Y')
            );
	 
		$where = array(
			'id' => $id
		);
	 
		$this->surat_models->update_data($where,$data,'tbl_suratkematian');
	
		$this->session->set_flashdata(
					'pesan',
					'<div class="alert alert-success" role="alert">
					Data berhasil diUpdate!
					</div>'
				); 
		redirect('layanansurat/suratkematian');
	}

	public function cetak_suratKematian($id)
	{
		$where = array('id' => $id);
		$data['csurat'] =  $this->surat_models->print_data($where,'tbl_suratkematian')->result();
		$this->load->view("admin/layanansurat/format/suratkematian", $data);
	}

/**
 * END SURAT KEMATIAN
 */	

	
/**
 * START SURAT PINDAH
 */
	public function suratpindah()
	{
		$data['suratpindah'] = $this->surat_models->getDataSuratPindah();
        $this->load->view('admin/layanansurat/suratpindah', $data);
	}

	public function tambah_suratPindah()
	{
		$data['suratpindah'] = $this->surat_models->getDataSuratPindah();
		$this->load->view('admin/layanansurat/tambah_suratkepindahan', $data);
	}

	public function tambah_suratPindahAksi(){
		$nama = $this->input->post('nama');
		$nik = $this->input->post('nik');
        $nokk  = $this->input->post('nokk');
        $kepala = $this->input->post('kkeluarga');
        $alamat = $this->input->post('alamat');
        $alamatPindah = $this->input->post('alamatPindah');
        $jumlahPindah = $this->input->post('jPindah');
                    
        $data = array(
			'nik' => $nik,
			'nama' => $nama,
            'no_kartu_keluarga' => $nokk,
			'kepala_keluarga' => $kepala,
            'alamat' => $alamat,
            'alamat_pindah' => $alamatPindah,
			'jumlah_keluarga' => $jumlahPindah,
			'tanggal_dibuat' => date('d F Y')
            );
        $this->surat_models->input_data($data,'tbl_suratkepindahan');

        $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success" role="alert">
                Data berhasil disimpan!
                </div>'
            ); 

        redirect('layanansurat/suratpindah');
        
	}

	public function hapusSuratPindah($id){
		$where = array('id' => $id);
		$this->surat_models->hapus_data($where,'tbl_suratkepindahan');
		$this->session->set_flashdata(
			'pesan',
			'<div class="alert alert-success" role="alert">
			Data berhasil dihapus!
			</div>'
		); 
		redirect('layanansurat/suratpindah');
	}
		
	public function editSuratKepindahan($id){
		$where = array('id' => $id);
		$data['suratpindah'] = $this->surat_models->edit_data($where,'tbl_suratkepindahan')->result();
	
		$this->load->view('admin/layanansurat/edit_suratKepindahan', $data);
	}

	public function updateSuratKepindahan(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$nik = $this->input->post('nik');
        $nokk  = $this->input->post('nokk');
        $kepala = $this->input->post('kkeluarga');
        $alamat = $this->input->post('alamat');
        $alamatPindah = $this->input->post('alamatPindah');
        $jumlahPindah = $this->input->post('jPindah');
                    
        $data = array(
			'nik' => $nik,
			'nama' => $nama,
            'no_kartu_keluarga' => $nokk,
			'kepala_keluarga' => $kepala,
            'alamat' => $alamat,
            'alamat_pindah' => $alamatPindah,
			'jumlah_keluarga' => $jumlahPindah,
			'tanggal_dibuat' => date('d F Y')
            );
	 
		$where = array(
			'id' => $id
		);
	 
		$this->surat_models->update_data($where,$data,'tbl_suratkepindahan');
	
		$this->session->set_flashdata(
					'pesan',
					'<div class="alert alert-success" role="alert">
					Data berhasil diUpdate!
					</div>'
				); 
		redirect('layanansurat/suratpindah');
	}


	public function cetak_suratKepindahan($id){
		$where = array('id' => $id);
		$data['csurat'] =  $this->surat_models->print_data($where,'tbl_suratkepindahan')->result();
		$this->load->view("admin/layanansurat/format/suratpindah", $data);
	}
/**
 * END SURAT PINDAH
 */	

	
/**
 * START SURAT KEDATANGAN
 */
    public function suratkedatangan(){
		$data['suratkedatangan'] = $this->surat_models->getDataSuratKedatangan();
        $this->load->view('admin/layanansurat/suratkedatangan', $data);
	}

	
	public function tambah_suratKedatangan()
	{
		$data['suratkedatangan'] = $this->surat_models->getDataSuratKedatangan();
		$this->load->view('admin/layanansurat/tambah_suratkedatangan', $data);
	}

	public function tambah_suratKedatanganAksi(){
		$nomor_surat = $this->input->post('nomor_surat');
		$nomor_kartu_keluarga = $this->input->post('nomor_kartu_keluarga');
        $nama_kepala_keluarga  = $this->input->post('nama_kepala_keluarga');
        $alamat_asal = $this->input->post('alamat_asal');
        $nik_pemohon = $this->input->post('nik_pemohon');
        $nama_pemohon = $this->input->post('nama_pemohon');
        $status_kartu_keluarga_tujuan = $this->input->post('status_kartu_keluarga_tujuan');
        $nomor_kartu_keluarga_tujuan = $this->input->post('nomor_kartu_keluarga_tujuan');
        $nik_kepala_keluarga_tujuan = $this->input->post('nik_kepala_keluarga_tujuan');
        $nama_kepala_keluarga_tujuan = $this->input->post('nama_kepala_keluarga_tujuan');
        $tanggal_kedatangan = $this->input->post('tanggal_kedatangan');
        $alamat = $this->input->post('alamat');
        $jumlah_keluarga_datang = $this->input->post('jumlah_keluarga_datang');
        $nama_petugas = $this->input->post('nama_petugas');
		$tanggal_surat_dibuat = $this->input->post('tanggal_surat_dibuat');

		
                    
        $data = array(
			'nomor_surat' => $nomor_surat,
			'nomor_kartu_keluarga' => $nomor_kartu_keluarga,
			'nama_kepala_keluarga' => $nama_kepala_keluarga,
            'alamat_asal' => $alamat_asal,
            'nik_pemohon' => $nik_pemohon,
			'nama_pemohon' => $nama_pemohon,
			'status_kartu_keluarga_tujuan' => $status_kartu_keluarga_tujuan,
			'nomor_kartu_keluarga_tujuan' => $nomor_kartu_keluarga_tujuan,
			'nik_kepala_keluarga_tujuan' => $nik_kepala_keluarga_tujuan,
			'nama_kepala_keluarga_tujuan' => $nama_kepala_keluarga_tujuan,
			'tanggal_kedatangan' => $tanggal_kedatangan,
			'alamat' => $alamat,
			'jumlah_keluarga_datang' => $jumlah_keluarga_datang,
			'nama_petugas' => $nama_petugas,
			'tanggal_surat_dibuat' => date('d F Y')
			
			
            );
        $this->surat_models->input_data($data,'tbl_surat_kedatangan');

        $this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success" role="alert">
                Data berhasil disimpan!
                </div>'
            ); 

        redirect('layanansurat/suratkedatangan');
        
	}

	public function hapusSuratKedatangan($id){
		$where = array('id' => $id);
		$this->surat_models->hapus_data($where,'tbl_surat_kedatangan');
		$this->session->set_flashdata(
			'pesan',
			'<div class="alert alert-success" role="alert">
			Data berhasil dihapus!
			</div>'
		); 
		redirect('layanansurat/suratkedatangan');
	}
		
	public function editSuratKedatangan($id){
		$where = array('id' => $id);
		$data['suratkedatangan'] = $this->surat_models->edit_data($where,'tbl_surat_kedatangan')->result();
	
		$this->load->view('admin/layanansurat/edit_suratKedatangan', $data);
	}

	public function updateSuratKedatangan(){
		$id = $this->input->post('id');
		$nomor_surat = $this->input->post('nomor_surat');
		$nomor_kartu_keluarga = $this->input->post('nomor_kartu_keluarga');
        $nama_kepala_keluarga  = $this->input->post('nama_kepala_keluarga');
        $alamat_asal = $this->input->post('alamat_asal');
        $nik_pemohon = $this->input->post('nik_pemohon');
        $nama_pemohon = $this->input->post('nama_pemohon');
        $status_kartu_keluarga_tujuan = $this->input->post('status_kartu_keluarga_tujuan');
        $nomor_kartu_keluarga_tujuan = $this->input->post('nomor_kartu_keluarga_tujuan');
        $nik_kepala_keluarga_tujuan = $this->input->post('nik_kepala_keluarga_tujuan');
        $nama_kepala_keluarga_tujuan = $this->input->post('nama_kepala_keluarga_tujuan');
        $tanggal_kedatangan = $this->input->post('tanggal_kedatangan');
        $alamat = $this->input->post('alamat');
        $jumlah_keluarga_datang = $this->input->post('jumlah_keluarga_datang');
        $nama_petugas = $this->input->post('nama_petugas');
        $tanggal_surat_dibuat = $this->input->post('tanggal_surat_dibuat');
                    
        $data = array(
			'nomor_surat' => $nomor_surat,
			'nomor_kartu_keluarga' => $nomor_kartu_keluarga,
			'nama_kepala_keluarga' => $nama_kepala_keluarga,
            'alamat_asal' => $alamat_asal,
            'nik_pemohon' => $nik_pemohon,
			'nama_pemohon' => $nama_pemohon,
			'status_kartu_keluarga_tujuan' => $status_kartu_keluarga_tujuan,
			'nomor_kartu_keluarga_tujuan' => $nomor_kartu_keluarga_tujuan,
			'nik_kepala_keluarga_tujuan' => $nik_kepala_keluarga_tujuan,
			'nama_kepala_keluarga_tujuan' => $nama_kepala_keluarga_tujuan,
			'tanggal_kedatangan' => $tanggal_kedatangan,
			'alamat' => $alamat,
			'jumlah_keluarga_datang' => $jumlah_keluarga_datang,
			'nama_petugas' => $nama_petugas,
			'tanggal_surat_dibuat' => date('d F Y')
            );
		$where = array(
			'id' => $id
		);
	 
		$this->surat_models->update_data($where,$data,'tbl_surat_kedatangan');
	
		$this->session->set_flashdata(
					'pesan',
					'<div class="alert alert-success" role="alert">
					Data berhasil diUpdate!
					</div>'
				); 
		redirect('layanansurat/suratkedatangan');
	}


	public function cetak_suratKedatangan($id){
		$where = array('id' => $id);
		$data['csurat'] =  $this->surat_models->print_data($where,'tbl_surat_kedatangan')->result();
		$this->load->view("admin/layanansurat/format/suratkedatangan", $data);
	}


	
/**
 * START SURAT KEDATANGAN
 */
}
