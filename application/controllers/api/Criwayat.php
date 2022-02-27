<?php

class Criwayat extends CI_Controller{
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model("api_model/Mriwayat", "tbl_riwayat");
        $this->load->model("api_model/Mriwayat", "tbl_riwayat");
        $this->load->library("cors");
    }
    public function payAngsuran(){
        $this->tbl_riwayat->payAngsuran();
    }
    public function getRiwayatAngsuran(){
        $this->tbl_riwayat->getRiwayatAngsuran();
    }
    public function getBank(){
        $this->tbl_riwayat->getBank();
    }
    public function updateRiwayat(){
        $x=$this->tbl_riwayat->updateRiwayat();
        echo json_encode($x);
    }

}

?>