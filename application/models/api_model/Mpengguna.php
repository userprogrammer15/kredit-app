<?php

class Mpengguna extends CI_Model{

    private $tabel="tbl_pengguna";
    public function getAllData(){

        $res=$this->db->get($this->tabel)->result();
        if(count($res)>0){
            return $res;
        }else{
            return [];
        }
    }
    public function saveData(){
        $json=json_decode(file_get_contents("php://input"));
        if(isset($json))
        {
            $options = [
                'cost' => 10,
            ];
            $token = openssl_random_pseudo_bytes(16);
            $token = bin2hex($token);
            $json->id_pengguna=$token;
            $json->sandi=password_hash($json->sandi, PASSWORD_DEFAULT, $options);
            $res=$this->db->insert($this->tabel,$json);
            if($res){
                return [$token,1];
            }else{
                return ["failed",0];
            }
        }
    }

    public function akunProfil(){
        $json=json_decode(file_get_contents("php://input"));
        if(isset($json))
        {
            $id_pengguna=$json->id_pengguna;
            $this->db->select("*");
            $this->db->from($this->tbl_pengguna);
            $this->db->where("id_pengguna",$id_pengguna);
            $res=$this->db->get();
            if($res->num_rows()>0){
                return $res->row();
            }else{
                return [];
            }
        }
       
    }
   
}
