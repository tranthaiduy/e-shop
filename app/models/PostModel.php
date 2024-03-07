<?php
class PostModel extends DModel{
    public function __construct(){
        parent::__construct();
    }

    public function listpost($table_post, $table_category){
        $sql = "SELECT * FROM $table_post,$table_category WHERE $table_post.id_category_post=$table_category.id_category_post   
                ORDER BY $table_post.id_post DESC";
        return $this->db->select($sql);
    }

    public function postbyid($table, $cond){
        $sql = "SELECT * FROM $table WHERE $cond";
        return $this->db->select($sql);
    }

    public function insertpost($table, $data){
        return $this->db->insert($table, $data);
    }

    public function updatepost($table, $data, $cond){
        return $this->db->update($table, $data, $cond);
    }

    public function deletepost($table, $cond){
        return $this->db->delete($table, $cond);
    }

    public function listpost_home($table_post){
        $sql = "SELECT * FROM $table_post   
                ORDER BY $table_post.id_post DESC";
        return $this->db->select($sql);
    }

    public function detailpost_home($table_post, $table_catepost, $cond){
        $sql = "SELECT * FROM $table_post, $table_catepost WHERE $cond";
        return $this->db->select($sql);
    }

    public function related_post_home($table_catepost, $table_post, $cond_related){
        $sql = "SELECT * FROM $table_catepost, $table_post WHERE $cond_related";
        return $this->db->select($sql);
    }

    public function listpost_index_home($table_post){
        $sql = "SELECT * FROM $table_post ORDER BY id_post DESC LIMIT 5";
        return $this->db->select($sql);
    }
}