<?php

class cpersyaratan extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("api_model/Mpersyaratan", "tbl_persyaratan");
        $this->load->library("cors");
    }

    public function getPersyaratan(){
        $res=$this->tbl_persyaratan->getPersyaratan();
        echo json_encode($res);
    }
}

?>