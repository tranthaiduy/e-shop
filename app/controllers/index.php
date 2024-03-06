<?php
class index extends DController{
    
    public function __construct(){
        $data = array();
        parent::__construct();
    }

    public function index(){
        $this->homepage();
    }

    public function homepage(){
        $model_cate = $this->load->model("CategoryModel");
        $model_post = $this->load->model("CatePostModel");
        $model_product = $this->load->model("ProductModel");

        $table_cate = 'tbl_category_product';
        $table_post = 'tbl_category_post';
        $table_product = 'tbl_product';

        $data['category'] = $model_cate->listcategory_home($table_cate);
        $data['category_post'] = $model_post->listcatepost_home($table_post);
        $data['product'] = $model_product->listproduct_home($table_product);

        $this->load->view('header', $data);
        $this->load->view('slider');
        $this->load->view('home', $data);
        $this->load->view('footer');
    }



    public function notfound(){
        $model = $this->load->model("CategoryModel");
        $model_post = $this->load->model("CatePostModel");

        $table = 'tbl_category_product';
        $table_post = 'tbl_category_post';
        $data['category'] = $model->listcategory_home($table);
        $data['category_post'] = $model_post->listcatepost_home($table_post);

        $this->load->view('header', $data);
        $this->load->view('404');
        $this->load->view('footer');
    }

    public function lienhe(){
        $model = $this->load->model("CategoryModel");
        $model_post = $this->load->model("CatePostModel");

        $table = 'tbl_category_product';
        $table_post = 'tbl_category_post';
        $data['category'] = $model->listcategory_home($table);
        $data['category_post'] = $model_post->listcatepost_home($table_post);

        $this->load->view('header', $data);
        $this->load->view('contact');
        $this->load->view('footer');
    }

}