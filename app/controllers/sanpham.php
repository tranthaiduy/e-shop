<?php
class sanpham extends DController{
    
    public function __construct(){
        $data = array();
        parent::__construct();
    }

    public function index($id){
        $this->danhmuc($id);
    }

    public function danhmuc($id){
        $model_category = $this->load->model("CategoryModel");
        $model_post = $this->load->model("CatePostModel");

        $table_category = 'tbl_category_product';
        $table_post = 'tbl_category_post';
        $table_product = 'tbl_product';

        $data['category'] = $model_category->listcategory_home($table_category);
        $data['category_post'] = $model_post->listcatepost_home($table_post);
        $data['category_by_id'] = $model_category->categorybyid_home($table_category, $table_product, $id);
        
        $this->load->view('header', $data);
        $this->load->view('categoryproduct', $data);
        $this->load->view('footer');
    }

    public function chitiettin($id){
        $this->load->view('header');
        $this->load->view('detailpost');
        $this->load->view('footer');
    }

}