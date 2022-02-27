<?php 

class handleFile extends CI_Controller{
    
    public function __construct()
    {
        parent::__construct();
		$this->load->library("cors"); 
    }

    public function buatFolder($id){
		$a=str_replace("%20"," ",$id);
		$path='berkas/' .$a;
		if (!file_exists($path)) {
			mkdir($path, 0700, true);
			echo json_encode(1);
		}else{
			echo json_encode(2);
		}
    }
	public function buatFolderStruk($id){
		$a=str_replace("%20"," ",$id);
		$path='berkas/struk/' .$a;
		if (!file_exists($path)) {
			mkdir($path, 0700, true);
			echo json_encode(1);
		}else{
			echo json_encode(2);
		}
	}
    public function upload($id_pengguna)
	{
		$a=str_replace("%20"," ",$id_pengguna);
		$config['upload_path']          = './berkas/'.$a;
		$config['allowed_types']        = 'jpg';
		$config['max_size']             = 204800;
		$config['max_width']            = 6000;
		$config['max_height']           = 6000;
		if(isset($_FILES))
		{
			$path=$_FILES["file"]["name"];
			
			$ext = pathinfo($path, PATHINFO_EXTENSION);
			if(($ext =="jpg"))
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
	public function uploadStruk($id_pengguna)
	{
		$a=str_replace("%20"," ",$id_pengguna);
		$config['upload_path']          = './berkas/struk/'.$a;
		$config['allowed_types']        = 'jpg';
		$config['max_size']             = 204800;
		$config['max_width']            = 6000;
		$config['max_height']           = 6000;
		if(isset($_FILES))
		{
			$path=$_FILES["file"]["name"];
			
			$ext = pathinfo($path, PATHINFO_EXTENSION);
			if(($ext =="jpg"))
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
}



?>