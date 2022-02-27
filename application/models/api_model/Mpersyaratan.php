<?php

class Mpersyaratan extends CI_Model{

    private $tabel="tbl_persyaratan";
    public function getPersyaratan(){

        $res=$this->db->get($this->tabel)->result();
        if(count($res)>0){
            return $res;
        }else{
            return [];
        }
    }
}
