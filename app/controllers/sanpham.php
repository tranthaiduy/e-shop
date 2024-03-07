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

        foreach($data['detail_product'] as $key => $val){
            $id_cate = $val['id_category_product'];
        }
        $cond_related = "$table_product.id_category_product= $table_category.id_category_product
        AND $table_category.id_category_product='$id_cate' AND $table_product.id_product NOT IN('$id')";
        $data['related'] = $model_product->related_product_home($table_category, $table_product, $cond_related);

        $this->load->view('header', $data);
        $this->load->view('detailproduct', $data);
        $this->load->view('footer');
    }

    public function sanphamhot(){
        $model_category = $this->load->model("CategoryModel");
        $model_post = $this->load->model("CatePostModel");
        $model_product = $this->load->model("ProductModel");

        $table_category = 'tbl_category_product';
        $table_post = 'tbl_category_post';
        $table_product = 'tbl_product';

        $data['category'] = $model_category->listcategory_home($table_category);
        $data['category_post'] = $model_post->listcatepost_home($table_post);
        $data['product_hot'] = $model_product->product_hot_home($table_product);
        
        $this->load->view('header', $data);
        $this->load->view('producthot', $data);
        $this->load->view('footer');
    }

}