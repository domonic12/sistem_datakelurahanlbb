<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Import extends CI_Controller {

    function __construct()
	{
		parent::__construct();
		$this->load->model('Import_model');
		$this->load->model('Penduduk_model');
	}

	/**
	 * Menampilkan halaman import data.
	 *
	 */
	public function index()
	{
		// Action form.
		$data['action'] = site_url('import/process');

		$this->load->view('admin/penduduk/import', $data);
	}

	/**
	 * Memproses data yang diimport.
	 *
	 */
	public function process()
	{
		if ( isset($_POST['import'])) {

            $file = $_FILES['datapenduduk']['tmp_name'];

			// Medapatkan ekstensi file csv yang akan diimport.
			$ekstensi  = explode('.', $_FILES['datapenduduk']['name']);

			// Tampilkan peringatan jika submit tanpa memilih menambahkan file.
			if (empty($file)) {
				echo 'Belum ada file yang dipilih !';
			} else {
				// Validasi apakah file yang diupload benar-benar file csv.
				if (strtolower(end($ekstensi)) === 'csv' && $_FILES["datapenduduk"]["size"] > 0) {

					$i = 0;
					$handle = fopen($file, "r");
					while (($row = fgetcsv($handle, 2048))) {
						$i++;
						if ($i == 0) continue;
						$i++;
						
						// Data yang akan disimpan ke dalam databse
						$data = [
							'nik' => $row[0],
							'nama' => $row[1],
							'jenis_kelamin' => $row[2],
                            'tempat_lahir' => $row[3],
                            'tanggal_lahir' => $row[4],
							'alamat' => $row[5],
							'rt' => $row[6],
                            'rw' => $row[7],
                            'kelurahan' => $row[8],
							'usia' => $row[9],
							'status_perkawinan' => $row[10],
                            'agama' => $row[11],
                            'gol_darah' => $row[12],
							'kewarganegaraan' => $row[13],
							'pendidikan' => $row[14],
							'pekerjaan' => $row[15],
							'tanggal_ditambahkan'=>date('d F Y'),
						];

						// Simpan data ke database.
                        $this->Import_model->save($data);

                        $this->session->set_flashdata(
                            'pesan',
                            '<div class="alert alert-success" role="alert">
                            Data berhasil ditambahkan!
                            </div>'
                        ); 

                    fclose($handle);
					redirect('data');
					}

					

				} else {
					echo 'Format file tidak valid!';
				}
			}
        }
	}
}