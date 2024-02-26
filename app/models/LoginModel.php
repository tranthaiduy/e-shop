<?php
class LoginModel extends DModel{
    public function __construct(){
        parent::__construct();
    }

    public function login($tbl_admin, $username, $password){
        $sql = "SELECT * FROM $tbl_admin WHERE username=? AND password=?";
        return $this->db->affectedRows($sql, $username, $password);
    }

    public function getlogin($tbl_admin, $username, $password){
        $sql = "SELECT * FROM $tbl_admin WHERE username=? AND password=?";
        return $this->db->selectUser($sql, $username, $password);
    }
}