<?php
class order extends DController{
    public function __construct(){
        Session::checkSession();
        parent::__construct();
    }

    public function index(){
        $this->order();
    }

    public function order(){
        $model = $this->load->model("OrderModel");

        $table = 'tbl_order';
        $data['list_order'] = $model->list_order($table);
        
        $this->load->view('admin/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/order/order', $data);
        $this->load->view('admin/footer');

    }

    public function order_detail($order_code){
        $model = $this->load->model("OrderModel");

        $table_order_details = 'tbl_order_details';
        $table_product = 'tbl_product';

        $cond = "$table_product.id_product=$table_order_details.product_id AND $table_order_details.order_code='$order_code'";
        $cond_infor = "$table_order_details.order_code='$order_code'";

        $data['order_detail'] = $model->order_detail($table_product, $table_order_details, $cond);
        $data['order_infor'] = $model->order_infor($table_order_details, $cond_infor);
        
        $this->load->view('admin/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/order/order_detail', $data);
        $this->load->view('admin/footer');
    }

    public function order_confirm($order_code){
        $model = $this->load->model("OrderModel");

        $table = 'tbl_order';

        $cond = "$table.order_code='$order_code'";
        $data = array(
            'order_status' => 1
        );
        $result = $model->order_confirm($table, $data, $cond);
        if($result==1){
            header('Location:'.APP_URL."order/order");
        }else{
            header('Location:'.APP_URL."index/notfound");
        }
    }
}