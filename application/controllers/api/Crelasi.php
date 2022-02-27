<?php

class Crelasi extends CI_Controller{
    
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model("api_model/Mriwayat", "tbl_riwayat");
        $this->load->model("api_model/Mpengguna", "tbl_pengguna");
        $this->load->library("cors");
    }

    public function dataAngsuranRelasi(){
        $datapengguna=$this->tbl_pengguna->getAllData();
        $datariwayat=$this->tbl_riwayat->getData();
        $datarelasi=array();
        foreach($datapengguna as $row_pengguna){
            foreach($datariwayat as $row_riwayat){
                if($row_pengguna->id_pengguna==$row_riwayat->id_pengguna){
                    $datarelasi[]=["id_pengguna"=>$row_pengguna->id_pengguna,"nama_lengkap"=>$row_pengguna->nama_lengkap,
                    "id_ajuan_kreditan"=>$row_riwayat->id_ajuan_kreditan,"angsuran_bunga"=>$row_riwayat->angsuran_bunga,
                    "angsuran_pokok"=>$row_riwayat->angsuran_pokok,"saldo"=>$row_riwayat->saldo,
                    "total_angsuran"=>$row_riwayat->total_angsuran,"status"=>$row_riwayat->status,"id_riwayat"=>$row_riwayat->id_riwayat,
                    "foto"=>$row_riwayat->foto,"tgl_pembayaran"=>$row_riwayat->tgl_pembayaran];
                }
            }
        }
        echo json_encode($datarelasi);

    }
}
?>