<?php

class Cpengguna extends CI_Controller{


    public function __construct()
    {
        parent::__construct();
        $this->load->model("api_model/Mpengguna","tbl_pengguna");
        $this->load->model("api_model/Mkreditan","tbl_kreditan");
        $this->load->library("cors"); 
    }

    public function getAllData(){
        $arr=$this->tbl_pengguna->getAllData();
        echo json_encode($arr);
    }

    public function saveData(){
       $x=$this->tbl_pengguna->saveData();
       echo json_encode($x);
    }
    public function dataKreditanAdmin(){
        $datakreditan=$this->tbl_kreditan->dataKreditan();
        $datapengguna=$this->tbl_pengguna->getAllData();
        foreach($datapengguna as $pengguna){
            foreach($datakreditan as $kreditan){
                if($kreditan->id_pengguna==$pengguna->id_pengguna){
                    $datarelasi[]=["id_pengguna"=>$pengguna->id_pengguna,"id_ajuan_kreditan"=>$kreditan->id_ajuan_kreditan,
                    "kk"=>$kreditan->kk,"ktp"=>$kreditan->ktp,"sku"=>$kreditan->sku,"bukunikah"=>$kreditan->bukunikah,
                    "skubelumnikah"=>$kreditan->skubelumnikah,"jaminan"=>$kreditan->jaminan,"jangka_waktu"=>$kreditan->jangka_waktu,
                    "jumlah_kredit"=>$kreditan->jumlah_kredit,"tgl"=>$kreditan->tgl,"status"=>$kreditan->status,"notif"=>$kreditan->notif,
                    "nama_lengkap"=>$pengguna->nama_lengkap,"nomor_hp"=>$pengguna->nomor_hp,"alamat"=>$pengguna->alamat,
                    "username"=>$pengguna->username,"sandi"=>$pengguna->sandi,"jenis"=>$kreditan->jenis
                ];
                }
            }
        }
        echo json_encode($datarelasi);
    }
}
