<?php

class Mriwayat extends CI_Model{
    private $tabel="tbl_riwayat";
    private $tabel2="tbl_bank";
    public function payAngsuran(){
        $json=json_decode(file_get_contents("php://input"));
        if(isset($json))
        { 
            $data=["angsuran_bunga"=>$json->angsuran_bunga_noformat,"angsuran_pokok"=>$json->angsuran_pokok_noformat,
                "total_angsuran"=>$json->totalangsuran_noformat,"saldo"=>$json->saldo_noformat,"denda"=>$json->denda,
                "id_ajuan_kreditan"=>$json->id_ajuan_kreditan,"status"=>0,"id_pengguna"=>$json->id_pengguna,
                "tgl"=>$json->tglnew,"foto"=>$json->foto,"tgl_pembayaran"=>date("Y-m-d")];
            $res=$this->db->insert($this->tabel,$data);
           if($res){
               echo json_encode(1);
           }else{
               echo json_encode(0);
           }
        }
    }
    public function getRiwayatAngsuran(){
        $res=$this->db->get($this->tabel)->result();
        echo json_encode($res);
    }
    public function getBank(){
        $res=$this->db->get($this->tabel2)->result();
        echo json_encode($res);
    }
    public function getData(){
        $res=$this->db->get($this->tabel)->result();
        return $res;
    }

    public function updateRiwayat(){
        $json=json_decode(file_get_contents("php://input"));
        if(isset($json))
        {
           $data=["status"=>1];
           $this->db->where("id_riwayat",$json->id_riwayat);
           $res=$this->db->update($this->tabel,$data);
           if($res){
               return 1;
           }else{
               return 0;
           }
        }
    }
    
}
