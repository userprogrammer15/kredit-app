<?php

class Cbunga_angsuran extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("api_model/Mbunga_angsuran", "tbl_bunga");
        $this->load->library("cors");
    }
    public function getBungaAngsuran(){
        $res=$this->tbl_bunga->getBungaAngsuran();
        echo json_encode($res);
    }
}

?>