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

    public function tatca(){
        $model_category = $this->load->model("CategoryModel");
        $model_post = $this->load->model("CatePostModel");
        $model_product = $this->load->model("ProductModel");

        $table_category = 'tbl_category_product';
        $table_post = 'tbl_category_post';
        $table_product = 'tbl_product';

        $data['category'] = $model_category->listcategory_home($table_category);
        $data['category_post'] = $model_post->listcatepost_home($table_post);
        $data['list_product'] = $model_product->listproduct_home($table_product);
        
        $this->load->view('header', $data);
        $this->load->view('listproduct', $data);
        $this->load->view('footer');
    }

    public function chitietsanpham($id){
        $model_category = $this->load->model("CategoryModel");
        $model_post = $this->load->model("CatePostModel");
        $model_product = $this->load->model("ProductModel");

        $table_category = 'tbl_category_product';
        $table_post = 'tbl_category_post';
        $table_product = 'tbl_product';

        $cond = "$table_product.id_category_product= $table_category.id_category_product
                AND $table_product.id_product='$id'";

        $data['category'] = $model_category->listcategory_home($table_category);
        $data['category_post'] = $model_post->listcatepost_home($table_post);
        $data['detail_product'] = $model_product->detailproduct_home($table_product, $table_category, $cond);
        
        $this->load->view('header', $data);
        $this->load->view('detailproduct', $data);
        $this->load->view('footer');
    }

}