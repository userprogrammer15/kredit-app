<?php

class Ckreditan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model("api_model/Mkreditan", "tbl_kreditan");
        $this->load->library("cors");
    }
    public function saveDataKreditan()
    {
        $res = $this->tbl_kreditan->saveDataKreditan();
        echo json_encode($res);
    }

    public function dataKreditan(){
        $res=$this->tbl_kreditan->dataKreditan();
        echo json_encode($res);
    }
    public function updateDataKreditan(){
        $res=$this->tbl_kreditan->updateDataKreditan();
        echo json_encode($res);
    }
    public function updateSelesaiKreditan(){
        $res=$this->tbl_kreditan->updateSelesaiKreditan();
        echo json_encode($res);
    }
    public function topUpKreditan(){
        $res=$this->tbl_kreditan->topUpKreditan();
        echo json_encode($res);
    }
    public function updateNotifKreditan(){
        $res=$this->tbl_kreditan->updateNotifKreditan();
        echo json_encode($res);
    }
}
