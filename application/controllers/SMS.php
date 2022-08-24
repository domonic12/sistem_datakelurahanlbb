<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sms extends CI_Controller {

	public function __construct()
    {
        //Memanggil Method construct yang ada di CI_Controller
        parent:: __construct();
        //$this->api = "http://monic.akubang.ga/sms";
    
    }

	public function index()
	{
	    
	    //Get Data Credit SMS Gateway
	    $url = "https://gsm.zenziva.net/api/balance/?userkey=f8d3cd9d604e&passkey=otue3ogy0a";
	    $get = file_get_contents($url);
        $data = json_decode($get, true) ;


        $data['credit'] = $data;
        		
		if(isset($_POST['kirim-pesan'])){
			if(isset($_POST['kirim_via'])){
				$kirim_via = $_POST['kirim_via'];
				$nohp = $_POST['nomor_tujuan'];
				$pesan = $_POST['isi_pesan'];
				// echo "Kirim ke NO: " .$nohp. " Isi Pesan: " .$pesan. "Dikirim Via: " .$kirim_via;

				if($kirim_via == "sms"){
					// echo "Kirim via SMS";
					$sms = $this->kirim_sms($nohp, $pesan);
				// 	echo $sms;
				}else{
					// echo "Kirim via WA";
					$wa = $this->kirim_wa($nohp, $pesan);
				// 	echo $wa;
				}
			}
		}else{
			$this->load->view('admin/sms', $data);
		}

	}

	public function kirim_sms($nohp, $pesan){
		$userkey = "f8d3cd9d604e";
		$apikey = "otue3ogy0a"; // get it in your profile
		$no_tujuan = $nohp;
		$msg = $pesan;
		
		
			$fields = array(
				'userkey' => $userkey,
				'passkey' => $apikey,
				'nohp' => $no_tujuan,
				'pesan' => $msg
			);
            
            //$fields = json_encode($fields);
            
            //print($fields);
            
			$this->curl->create('https://gsm.zenziva.net/api/sendsms/');
            $this->curl->option(CURLOPT_RETURNTRANSFER, TRUE);                                       
            $this->curl->option(CURLOPT_HEADER, FALSE);       
            $this->curl->option(CURLOPT_SSL_VERIFYHOST, 2);
            $this->curl->option(CURLOPT_SSL_VERIFYPEER, 0); 
            $this->curl->option(CURLOPT_TIMEOUT,30);
            $this->curl->option(CURLOPT_POST, TRUE);                                       
            $this->curl->option(CURLOPT_POSTFIELDS, $fields);                                           
            $response = $this->curl->execute();       
            
            //print($response);
			
			$this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success" role="alert">
                Pesan Berhasil Dikirimkan Via SMS!
                </div>'
			); 
			
			redirect('SMS');

	}

	public function kirim_wa($nohp, $pesan){
		$userkey = "f8d3cd9d604e";
		$apikey = "otue3ogy0a"; // get it in your profile
		$no_tujuan = $nohp;
		$msg = $pesan;
		
		
			$fields = array(
				'userkey' => $userkey,
				'passkey' => $apikey,
				'nohp' => $no_tujuan,
				'pesan' => $msg
			);
            
            //$fields = json_encode($fields);
            
            //print($fields);
            
			$this->curl->create('https://gsm.zenziva.net/api/sendWA/');
            $this->curl->option(CURLOPT_RETURNTRANSFER, TRUE);                                       
            $this->curl->option(CURLOPT_HEADER, FALSE);       
            $this->curl->option(CURLOPT_SSL_VERIFYHOST, 2);
            $this->curl->option(CURLOPT_SSL_VERIFYPEER, 0); 
            $this->curl->option(CURLOPT_TIMEOUT,30);
            $this->curl->option(CURLOPT_POST, TRUE);                                       
            $this->curl->option(CURLOPT_POSTFIELDS, $fields);                                           
            $response = $this->curl->execute();       
            
            //print($response);
			
			$this->session->set_flashdata(
                'pesan',
                '<div class="alert alert-success" role="alert">
                Pesan Berhasil Dikirimkan Via WhatsApp!
                </div>'
			); 
			
			redirect('SMS');
	}
	


}
