<?php
class giohang extends DController{
    
    public function __construct(){
        $data = array();
        parent::__construct();
    }

    public function index(){
        $this->giohang();
    }

    public function giohang(){
        $model = $this->load->model("CategoryModel");

        $table = 'tbl_category_product';
        $data['category'] = $model->listcategory_home($table);

        $this->load->view('header', $data);
        $this->load->view('cart');
        $this->load->view('footer');
    }

    public function chitiettin($id){
        $this->load->view('header');
        $this->load->view('detailpost');
        $this->load->view('footer');
    }

}