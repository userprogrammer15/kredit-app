<?php

class Mlogin extends CI_Model
{

    private $tabel = "tbl_login";

    public function getDataLogin()
    {
        $res = $this->db->get($this->tabel)->result();
        return $res;
    }
    public function saveDataLogin()
    {
        $json = json_decode(file_get_contents("php://input"));
        if (isset($json)) {
            $options = [
                'cost' => 10,
            ];
            $json->sandi = password_hash($json->sandi, PASSWORD_DEFAULT, $options);
            $token = openssl_random_pseudo_bytes(16);
            $token = bin2hex($token);
            $date = explode("-", date("Y-m-d"));
            $json->id_login = $token . $date[0] . $date[1] . $date[2];
            $res = $this->db->insert($this->tabel, $json);
            if ($res) {
                return 1;
            } else {
                return 0;
            }
        }
    }
    public function loginApp()
    {
        $json = json_decode(file_get_contents("php://input"));
        if (isset($json)) {
            $this->db->select("*");
            $this->db->from($this->tabel);
            $this->db->where("username", $json->username);
            $res = $this->db->get();
            if ($res->num_rows() > 0) {
                $hashed = $res->row()->sandi;
                if (password_verify($json->sandi, $hashed)) {
                    return [1, $res->row()];
                } else {
                    return [2, []];
                }
            } else {
                return [0, []];
            }
        }
    }
}
