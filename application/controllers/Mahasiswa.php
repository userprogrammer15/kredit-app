<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mahasiswa extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	 public function __construct()
	 	{

     	parent::__construct();
     	$this->load->model('tbl_mhs','tbl_mhs');
     	$this->load->model('tbl_semester','tbl_semester');
     	$this->load->model('tbl_kelas','tbl_kelas');
     	$this->load->model("tbl_tugas","tbl_tugas");
     	$this->load->model("tbl_materi","tbl_materi");
     	$this->load->model("tbl_mid","tbl_mid");
     	$this->load->model("tbl_final","tbl_final");
     	$this->load->model("tbl_login","tbl_login");
     	$this->load->model("tbl_jadwal","tbl_jadwal");
     	$this->load->model("tbl_jawaban","tbl_jawaban");
     	$this->load->library("cors");

  		}

  	public function tampil1()
  	{
  		$data=$this->tbl_semester->tampilSemester();

  		echo json_encode($data);
  	}

  	public function cekMhs()
  	{
  		$json=json_decode(file_get_contents("php://input"));
				if(isset($json))
				{
					$data=$this->tbl_mhs->cekMhs($json);
				
					echo json_encode($data);
				}
  	}

  	public function tampilMhs()
  	{
  		$data=$this->tbl_mhs->tampilMhs();

  		echo json_encode($data);
  	}
  	public function tampilMhs2()
  	{
  		$data=$this->tbl_mhs->tampilMhs2();

  		echo json_encode($data);
  	}

  	public function tambahMhs2(){
  		for($i=1;$i<=40;$i++){
  			$data=["nim"=>$i,"id_semester"=>7];
  			$this->tbl_mhs->tambahMhs($data);
  		}
  	}

	public function tambahMhs()
		{
				$json=json_decode(file_get_contents("php://input"));
				if(isset($json))
				{
					$aksi=$json->aksi;
					if(!$aksi){
							unset($json->aksi);
							$data=$this->tbl_mhs->tambahMhs($json);
					}
					else{
							unset($json->aksi);
							foreach ($json->datamhs as $key => $value) {
								$data=$this->tbl_mhs->tambahMhs($value);
							}
					}
					
				echo json_encode($data);
					
				}
							
		}
	public function perbaruiMhs()
		{
				$json=json_decode(file_get_contents("php://input"));
				if(isset($json))
				{
					$data=$this->tbl_mhs->perbaruiMhs($json);
				
					echo json_encode($data);
				}
							
		}
	public function hapusMhs()
		{
				$json=json_decode(file_get_contents("php://input"));
				if(isset($json))
				{
					$data=$this->tbl_mhs->hapusMhs($json);
				
					echo json_encode($data);
				}
							
		}



	/* Controller Kelas */

	public function kelasSemester()
	{
		$data=$this->tbl_kelas->kelasSemester();

		echo json_encode($data);
	}
	public function tambahKelas()
	{
			$json=json_decode(file_get_contents("php://input"));
				if(isset($json))
				{
					foreach ($json as $value) {
					    $data=$this->tbl_kelas->tambahKelas($value);
					}
					
				
					echo json_encode($data);
				}
	}

	public function cekKelas()
  	{
  		$json=json_decode(file_get_contents("php://input"));
				if(isset($json))
				{
					foreach ($json as $value) {
					    $data=$this->tbl_kelas->cekKelas($value);
					}
					
				
					echo json_encode($data);
				}
  	}
  	public function hapusKelas()
		{
				$json=json_decode(file_get_contents("php://input"));
				if(isset($json))
				{
					$data=$this->tbl_kelas->hapusKelas($json);
				
					echo json_encode($data);
				}
							
		}
	public function tampilKelas()
  	{
  		$data=$this->tbl_kelas->tampilKelas();

  		echo json_encode($data);
  	}
  	public function tampilKelas3()
  	{
  		$data=$this->tbl_kelas->tampilKelas3();

  		echo json_encode($data);
  	}

  	public function tampilKelas2()
  	{
  		$json=json_decode(file_get_contents("php://input"));
				if(isset($json))
				{
					$data=$this->tbl_kelas->tampilKelas2($json);
				
					echo json_encode($data);
				}
  	}



  	/* Controller Tabel Tugas */


  	public function daftarJawabanTugas()
  	{
  		$json=json_decode(file_get_contents("php://input"));
				if(isset($json))
				{
					$data=$this->tbl_tugas->daftarJawabanTugas($json);
				
					echo json_encode($data);
				}
  	}
  	public function jawabanGanda()
	{
			$json=json_decode(file_get_contents("php://input"));
				if(isset($json))
				{
					foreach ($json as $x) {
						$data=$this->tbl_jawaban->jawabanGanda($x);
				
					
					}
					echo json_encode($data);
					
				}
	}
		public function perbaruijawabanGanda()
	{
			$json=json_decode(file_get_contents("php://input"));
				if(isset($json))
				{
					
					$data=$this->tbl_jawaban->perbaruijawabanGanda($json);
					echo json_encode($data);
					
				}
	}

	public function tambahSoal()
	{
			$json=json_decode(file_get_contents("php://input"));
				if(isset($json))
				{
					$data=$this->tbl_tugas->tambahSoal($json);
				
					echo json_encode($data);
				}
	}

	public function tambahEssay()
	{
			$json=json_decode(file_get_contents("php://input"));
				if(isset($json))
				{
					$data=$this->tbl_tugas->tambahEssay($json);
				
					echo json_encode($data);
				}
	}

	public function perbaruiSoal()
	{
			$json=json_decode(file_get_contents("php://input"));
				if(isset($json))
				{
					$data=$this->tbl_tugas->perbaruiSoal($json);
				
					echo json_encode($data);
				}
	}

	public function tampilSoal()
	{
			$json=json_decode(file_get_contents("php://input"));
				if(isset($json))
				{
					$data=$this->tbl_tugas->tampilSoal($json);
				
					echo json_encode($data);
				}
	}

	public function cekUjian()
	{
			$json=json_decode(file_get_contents("php://input"));
				if(isset($json))
				{
					$data=$this->tbl_jawaban->cekUjian($json);
				
					echo json_encode($data);
				}
	}
	public function tampilSoal3()
	{
			$json=json_decode(file_get_contents("php://input"));
				if(isset($json))
				{
					$data=$this->tbl_tugas->tampilSoal3($json);
				
					echo json_encode($data);
				}
	}
	public function detailSoal2()
	{
			$json=json_decode(file_get_contents("php://input"));
				if(isset($json))
				{
					$data=$this->tbl_tugas->detailSoal2($json);
				
					echo json_encode($data);
				}
	}
		public function tampilSoal2()
	{
			$json=json_decode(file_get_contents("php://input"));
				if(isset($json))
				{
					$data=$this->tbl_tugas->tampilSoal2($json);
				
					echo json_encode($data);
				}
	}


	public function tampilEssay()
	{
			$json=json_decode(file_get_contents("php://input"));
				if(isset($json))
				{
					$data=$this->tbl_tugas->tampilEssay($json);
				
					echo json_encode($data);
				}
	}

	public function tampilEssay2()
	{
			$json=json_decode(file_get_contents("php://input"));
				if(isset($json))
				{
					$data=$this->tbl_tugas->tampilEssay2($json);
				
					echo json_encode($data);
				}
	}

	public function tampilEssay3()
	{
			$json=json_decode(file_get_contents("php://input"));
				if(isset($json))
				{
					$data=$this->tbl_tugas->tampilEssay3($json);
				
					echo json_encode($data);
				}
	}


	public function cekUjianEssay()
			{
				$json=json_decode(file_get_contents("php://input"));
						if(isset($json))
						{
							$data=$this->tbl_jawaban->cekUjianEssay($json);
						
							echo json_encode($data);
						}
			}

			public function jawabanEssay()
				{
						$json=json_decode(file_get_contents("php://input"));
							if(isset($json))
							{
								foreach ($json as $x) {
									$data=$this->tbl_jawaban->jawabanEssay($x);
							echo json_encode($data);
								
								}
								
								
							}
				}

				public function perbaruijawabanEssay()
				{
						$json=json_decode(file_get_contents("php://input"));
							if(isset($json))
							{
								$data=$this->tbl_jawaban->perbaruijawabanEssay($json);
								echo json_encode($data);
								
							}
				}

	public function detailSoal()
	{
			$json=json_decode(file_get_contents("php://input"));
				if(isset($json))
				{
					$data=$this->tbl_tugas->detailSoal($json);
				
					echo json_encode($data);
				}
	}

	public function detailEssay()
	{
			$json=json_decode(file_get_contents("php://input"));
				if(isset($json))
				{
					$data=$this->tbl_tugas->detailEssay($json);
				
					echo json_encode($data);
				}
	}

	public function perbaruiEssay()
	{
			$json=json_decode(file_get_contents("php://input"));
				if(isset($json))
				{
					$data=$this->tbl_tugas->perbaruiEssay($json);
				
					echo json_encode($data);
				}
	}

	public function perbaruiTugas()
	{
			$json=json_decode(file_get_contents("php://input"));
				if(isset($json))
				{
					$data=$this->tbl_tugas->perbaruiTugas($json);
				
					echo json_encode($data);
				}
	}



	public function uploadBerkas()
	{
		$config['upload_path']          = './berkas/';
		$config['allowed_types']        = 'doc|pdf|docx|wmv|mp4|avi|';
		$config['max_size']             = 204800;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
		if(isset($_FILES))
		{
			$path=$_FILES["file"]["name"];
			$ext = pathinfo($path, PATHINFO_EXTENSION);
			if(($ext =="docx") || ($ext=="doc") || ($ext=="pdf") || ($ext =="mp4") || ($ext=="avi") || ($ext=="wmv"))
			{
				$this->load->library('upload', $config);
				if ( ! $this->upload->do_upload('file')){
					
					$data=["pesan"=>0,"data"=>$this->upload->display_errors()];
					echo json_encode($data);

				}
				else
				{
					$data = ["pesan"=>1,"data"=>$this->upload->data()];
					echo json_encode($data);
				}
			}
			else
			{
				$data=["pesan"=>0];

			}
			}
			else
			{

			}
	}
	public function uploadBerkasTugas()
	{
		$config['upload_path']          = './berkas/tugas';
		$config['allowed_types']        = 'doc|pdf|docx';
		$config['max_size']             = 204800;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
		if(isset($_FILES))
		{
			$path=$_FILES["file"]["name"];
			$ext = pathinfo($path, PATHINFO_EXTENSION);
			if(($ext =="docx") || ($ext=="doc") || ($ext=="pdf"))
			{
				$this->load->library('upload', $config);
				if ( ! $this->upload->do_upload('file')){
					
					$data=["pesan"=>0,"data"=>$this->upload->display_errors()];
					echo json_encode($data);

				}
				else
				{
					$data = ["pesan"=>1,"data"=>$this->upload->data()];
					echo json_encode($data);
				}
			}
			else
			{
				$data=["pesan"=>0];

			}
			}
			else
			{

			}
	}



	
	public function tambahTugas()
	{
		$json=json_decode(file_get_contents("php://input"));
				if(isset($json))
				{
					$data=$this->tbl_tugas->tambahTugas($json);
				
					echo json_encode($data);
				}
	}
	public function tampilTugas()
	{
		$json=json_decode(file_get_contents("php://input"));
				if(isset($json))
				{
					$data=$this->tbl_tugas->tampilTugas($json);
				
					echo json_encode($data);
				}
	}

	public function cariTugas()
	{
		$json=json_decode(file_get_contents("php://input"));
				if(isset($json))
				{
					$data=$this->tbl_tugas->cariTugas($json);
				
					echo json_encode($data);
				}
	}
	public function detailTugas()
	{
		$json=json_decode(file_get_contents("php://input"));
				if(isset($json))
				{
					$data=$this->tbl_tugas->detailTugas($json);
				
					echo json_encode($data);
				}
	}

		/* Controller Tabel Materi */

	public function tambahMateri()
	{
			$json=json_decode(file_get_contents("php://input"));
				if(isset($json))
				{
					$data=$this->tbl_materi->tambahMateri($json);
				
					echo json_encode($data);
				}
	}
	public function tampilMateri()
	{
		$data=$this->tbl_materi->tampilMateri();
		echo json_encode($data);
	}

	public function cariMateri()
	{
		$json=json_decode(file_get_contents("php://input"));
				if(isset($json))
				{
					$data=$this->tbl_materi->cariMateri($json);
				
					echo json_encode($data);
				}
	}

		/* Controller Tabel Essay */


		
		

	/* Controller Tabel Login */

	public function loginMhs()
	{
		$json=json_decode(file_get_contents("php://input"));
				if(isset($json))
				{
					$data=$this->tbl_login->loginMhs($json);
				
					echo json_encode($data);
				}
	}
	public function loginDosen()
	{
		$json=json_decode(file_get_contents("php://input"));
				if(isset($json))
				{
					$data=$this->tbl_login->loginDosen($json);
				
					echo json_encode($data);
				}
	}
	public function loginAdmin()
	{
		$json=json_decode(file_get_contents("php://input"));
				if(isset($json))
				{
					$data=$this->tbl_login->loginAdmin($json);
				
					echo json_encode($data);
				}
	}

	public function akunMhs()
	{
		$json=json_decode(file_get_contents("php://input"));
				if(isset($json))
				{
					$data=$this->tbl_login->akunMhs($json);
				
					echo json_encode($data);
				}
	}
	public function akunDosen()
	{
		$json=json_decode(file_get_contents("php://input"));
				if(isset($json))
				{
					$data=$this->tbl_login->akunDosen($json);
				
					echo json_encode($data);
				}
	}
	public function akunAdmin()
	{
		$json=json_decode(file_get_contents("php://input"));
				if(isset($json))
				{
					$data=$this->tbl_login->akunAdmin($json);
				
					echo json_encode($data);
				}
	}

	/* Controller Tabel Jadwal */

	public function tambahJadwal()
	{
		$json=json_decode(file_get_contents("php://input"));
		if(isset($json))
		{
			$data=$this->tbl_jadwal->tambahJadwal($json);
			echo json_encode($data);
		}
	}

	public function tampilJadwal()
	{
		$json=json_decode(file_get_contents("php://input"));
		if(isset($json))
		{
			$data=$this->tbl_jadwal->tampilJadwal($json);
			echo json_encode($data);
		}
	}

	public function hapusJadwal()
	{
		$json=json_decode(file_get_contents("php://input"));
		if(isset($json))
		{
			foreach ($json as $value) {
			    
			}
			$data=$this->tbl_jadwal->hapusJadwal($value);
			echo json_encode($data);
		}
	}

	/* Controller Tabel Tugas Jawaban */

	public function cekJawaban1()
	{
		$json=json_decode(file_get_contents("php://input"));
		if(isset($json))
		{
			$data=$this->tbl_tugas->cekJawaban($json);
			echo json_encode($data);
		}
	}
		

	public function tambahJawaban1()
	{
		$json=json_decode(file_get_contents("php://input"));
		if(isset($json))
		{
			$data=$this->tbl_tugas->tambahJawaban($json);
			echo json_encode($data);
		}
	}

		public function hasilUjianGanda()
			{
				$json=json_decode(file_get_contents("php://input"));
				if(isset($json))
				{
					$data=$this->tbl_jawaban->hasilUjianGanda($json);
					echo json_encode($data);
				}
			}
			public function hasilUjianEssay()
			{
				$json=json_decode(file_get_contents("php://input"));
				if(isset($json))
				{
					$data=$this->tbl_jawaban->hasilUjianEssay($json);
					echo json_encode($data);
				}
			}

			public function perbaruiJawabanEssay2()
			{
				$json=json_decode(file_get_contents("php://input"));
				if(isset($json))
				{
					$data=$this->tbl_jawaban->perbaruiJawabanEssay2($json);
					echo json_encode($data);
				}
			}



}
