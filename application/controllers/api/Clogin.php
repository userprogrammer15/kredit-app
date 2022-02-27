<?php

class Clogin extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("api_model/Mlogin","tbl_login");
        $this->load->model("api_model/Mpengguna","tbl_pengguna");
        $this->load->library("cors"); 
    }
    public function saveDataLogin(){
        $res=$this->tbl_login->saveDataLogin();
        echo json_encode($res);
    }

   
    public function loginApp(){
        $res=$this->tbl_login->loginApp();
        echo json_encode($res);
    }

    public function akunProfil(){
        $res=$this->tbl_pengguna->akunProfil();
        echo json_encode($res);
    }
}


?>