<?php
class sanpham extends DController{
    
    public function __construct(){
        $data = array();
        parent::__construct();
    }

    public function index(){
        $this->danhmuc();
    }

    public function danhmuc(){
        $model = $this->load->model("CategoryModel");

        $table = 'tbl_category_product';
        $data['category'] = $model->listcategory_home($table);
        
        $this->load->view('header', $data);
        $this->load->view('categoryproduct');
        $this->load->view('footer');
    }

    public function chitiettin($id){
        $this->load->view('header');
        $this->load->view('detailpost');
        $this->load->view('footer');
    }

}