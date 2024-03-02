<?php
class ProductModel extends DModel{
    public function __construct(){
        parent::__construct();
    }

    public function listproduct($table_product, $table_category){
        $sql = "SELECT * FROM $table_product,$table_category WHERE $table_product.id_category_product=$table_category.id_category_product   
                ORDER BY $table_product.id_product DESC";
        return $this->db->select($sql);
    }

    public function productbyid($table, $cond){
        $sql = "SELECT * FROM $table WHERE $cond";
        return $this->db->select($sql);
    }

    public function insertproduct($table, $data){
        return $this->db->insert($table, $data);
    }

    public function updateproduct($table, $data, $cond){
        return $this->db->update($table, $data, $cond);
    }

    public function deleteproduct($table, $cond){
        return $this->db->delete($table, $cond);
    }

    public function listproduct_home($table_product){
        $sql = "SELECT * FROM $table_product   
                ORDER BY $table_product.id_product DESC";
        return $this->db->select($sql);
    }

    public function detailproduct_home($table_product, $table_category, $cond){
        $sql = "SELECT * FROM $table_product, $table_category WHERE $cond";
        return $this->db->select($sql);
    }
}