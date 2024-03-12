<?php
class OrderModel extends DModel{
    public function __construct(){
        parent::__construct();
    }

    public function insert_order($table_order, $data_order){
        return $this->db->insert($table_order, $data_order);
    }

    public function insert_order_details($table_order_details, $data){
        return $this->db->insert($table_order_details, $data);
    }

    public function list_order($table){
        $sql = "SELECT * FROM $table ORDER BY order_id DESC";
        return $this->db->select($sql);
    }

    public function order_detail($table_product, $table_order_details, $cond){
        $sql = "SELECT * FROM $table_order_details,$table_product WHERE $cond";
        return $this->db->select($sql);
    }

    public function order_infor($table_order_details, $cond_infor){
        $sql = "SELECT * FROM $table_order_details WHERE $cond_infor LIMIT 1";
        return $this->db->select($sql);
    }

    public function order_confirm($table, $data, $cond){
        return $this->db->update($table, $data, $cond);
    }
}