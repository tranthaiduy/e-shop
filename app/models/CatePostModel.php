<?php
class CatePostModel extends DModel{
    public function __construct(){
        parent::__construct();
    }

    public function listcatepost($table){
        $sql = "SELECT * FROM $table ORDER BY id_category_post DESC";
        return $this->db->select($sql);
    }

    public function catepostbyid($table, $cond){
        $sql = "SELECT * FROM $table WHERE $cond";
        return $this->db->select($sql);
    }

    public function insertcatepost($table, $data){
        return $this->db->insert($table, $data);
    }

    public function updatecatepost($table, $data, $cond){
        return $this->db->update($table, $data, $cond);
    }

    public function deletecatepost($table, $cond){
        return $this->db->delete($table, $cond);
    }

    public function listcatepost_home($table){
        $sql = "SELECT * FROM $table ORDER BY id_category_post DESC";
        return $this->db->select($sql);
    }

    public function postbyid_home($table_catepost, $table_post, $id){
        $sql = "SELECT * FROM $table_catepost,$table_post 
                WHERE $table_catepost.id_category_post=$table_post.id_category_post
                AND $table_post.id_category_post='$id'
                ORDER BY $table_post.id_post DESC";
        return $this->db->select($sql);
    }
}