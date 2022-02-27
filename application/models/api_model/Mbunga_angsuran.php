<?php

class Mbunga_angsuran extends CI_Model
{

    private $tabel = "tbl_bunga_angsuran";

    public function getBungaAngsuran(){
        $res=$this->db->get("$this->tabel")->result();

        if($res){
            return $res;
        }else{
            return [];
        }
    }
}
