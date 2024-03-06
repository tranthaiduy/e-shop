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

    public function tatca(){
        $model = $this->load->model("CategoryModel");
        $model_post = $this->load->model("CatePostModel");
        $post = $this->load->model("PostModel");

        $table = 'tbl_category_product';
        $table_catepost = 'tbl_category_post';
        $table_post = 'tbl_post';

        $data['category'] = $model->listcategory_home($table);
        $data['category_post'] = $model_post->listcatepost_home($table_catepost);
        $data['list_post'] = $post->listpost_home($table_post);

        $this->load->view('header', $data);
        $this->load->view('listpost', $data);
        $this->load->view('footer');
    }

    public function chitiettin($id){
        $model = $this->load->model("CategoryModel");
        $model_post = $this->load->model("CatePostModel");
        $post = $this->load->model("PostModel");

        $table = 'tbl_category_product';
        $table_catepost = 'tbl_category_post';
        $table_post = 'tbl_post';

        $cond = "$table_catepost.id_category_post=$table_post.id_category_post 
                AND $table_post.id_post='$id'";

        $data['category'] = $model->listcategory_home($table);
        $data['category_post'] = $model_post->listcatepost_home($table_catepost);
        $data['detailpost'] = $post->detailpost_home($table_post, $table_catepost, $cond);

        foreach($data['detailpost'] as $key => $val){
            $id_cate = $val['id_category_post'];
        }
        $cond_related = "$table_post.id_category_post= $table_catepost.id_category_post
        AND $table_catepost.id_category_post='$id_cate' AND $table_post.id_post NOT IN('$id')";
        $data['related'] = $post->related_post_home($table_catepost, $table_post, $cond_related);
        
        $this->load->view('header', $data);
        $this->load->view('detailpost', $data);
        $this->load->view('footer');
    }

}