<?php

class Cdashboard extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("api_model/Mkreditan", "tbl_kreditan");
        $this->load->model("api_model/Mbunga_angsuran", "tbl_bunga");
        $this->load->model("api_model/Mlogin","tbl_login");
        $this->load->model("api_model/Mpengguna","tbl_pengguna");
        $this->load->library("cors");
    }
   
    public function getCountCardDashboard(){
        $arr=$this->tbl_login->getDataLogin();
        $a=0;
        foreach($arr as $row){
            if($row->level==2){
                $a=$a+1;
            }
        }
        $card=[count($this->tbl_kreditan->dataKreditan()),$a];
        echo json_encode($card);
    }
}

?>