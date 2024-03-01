<?php
class tintuc extends DController{
    
    public function __construct(){
        $data = array();
        parent::__construct();
    }

    public function index($id){
        $this->danhmuc($id);
    }

    public function danhmuc($id){
        $model = $this->load->model("CategoryModel");
        $model_post = $this->load->model("CatePostModel");

        $table = 'tbl_category_product';
        $table_catepost = 'tbl_category_post';
        $table_post = 'tbl_post';

        $data['category'] = $model->listcategory_home($table);
        $data['category_post'] = $model_post->listcatepost_home($table_catepost);
        $data['post_by_id'] = $model_post->postbyid_home($table_catepost, $table_post, $id);

        $this->load->view('header', $data);
        $this->load->view('categorypost', $data);
        $this->load->view('footer');
    }

    public function chitiettin($id){
        $this->load->view('header');
        $this->load->view('detailpost');
        $this->load->view('footer');
    }

}