<?php

class Mkreditan extends CI_Model{

    private $tabel="tbl_ajuan_kreditan";

    public function saveDataKreditan(){
        $json=json_decode(file_get_contents("php://input"));
        if(isset($json))
        {
            $token = openssl_random_pseudo_bytes(16);
            $token = bin2hex($token);
            $date=explode("-",date("Y-m-d"));
            $json->id_ajuan_kreditan=$token.$date[0].$date[1].$date[2];
            $json->tgl=date("Y-m-d");
            $res=$this->db->insert($this->tabel,$json);
            if($res){
                return 1;
            }else{
                return 0;
            }
        }
    }
    public function updateDataKreditan(){
        $json=json_decode(file_get_contents("php://input"));
        if(isset($json))
        {
           $data=["status"=>$json->status];
           $this->db->where("id_ajuan_kreditan",$json->id_ajuan_kreditan);
           $res=$this->db->update($this->tabel,$data);
           if($res){
               return 1;
           }else{
               return 0;
           }
        }
    }
    public function updateSelesaiKreditan(){
        $json=json_decode(file_get_contents("php://input"));
        if(isset($json))
        {
           $data=["notif"=>$json->notif];
           $this->db->where("id_ajuan_kreditan",$json->id_ajuan_kreditan);
           $res=$this->db->update($this->tabel,$data);
           if($res){
               return 1;
           }else{
               return 0;
           }
        }
    }
    public function topUpKreditan(){
        $json=json_decode(file_get_contents("php://input"));
        if(isset($json))
        {
           $data=["status"=>0,"tgl"=>date("Y-m-d"),"notif"=>0,"jumlah_kredit"=>$json->jumlah_kredit];
           $this->db->where("id_ajuan_kreditan",$json->id_ajuan_kreditan);
           $res=$this->db->update($this->tabel,$data);
           if($res){
               return 1;
           }else{
               return 0;
           }
        }
    }
    public function updateNotifKreditan(){
        $json=json_decode(file_get_contents("php://input"));
        if(isset($json))
        {
           $data=["notif"=>$json->notif];
           $this->db->where("id_ajuan_kreditan",$json->id_ajuan_kreditan);
           $res=$this->db->update($this->tabel,$data);
           if($res){
               return 1;
           }else{
               return 0;
           }
        }
    }
    
    public function dataKreditan(){
        $res=$this->db->get($this->tabel)->result();
        return $res;
    }
}

?>