<?php
class CategoryModel extends DModel{
    public function __construct(){
        parent::__construct();
    }

    public function listcategory($table){
        $sql = "SELECT * FROM $table ORDER BY id_category_product DESC";
        return $this->db->select($sql);
    }

    public function categorybyid($table, $cond){
        $sql = "SELECT * FROM $table WHERE $cond";
        return $this->db->select($sql);
    }

    public function insertcategory($table, $data){
        return $this->db->insert($table, $data);
    }

    public function updatecategory($table, $data, $cond){
        return $this->db->update($table, $data, $cond);
    }

    public function deletecategory($table, $cond){
        return $this->db->delete($table, $cond);
    }

    public function listcategory_home($table){
        $sql = "SELECT * FROM $table ORDER BY id_category_product DESC";
        return $this->db->select($sql);
    }
}