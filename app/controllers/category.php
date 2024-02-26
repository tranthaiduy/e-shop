<?php
class category extends DController{
    
    public function __construct(){
        $data = array();
        $message = array();
        parent::__construct();
    }

    public function cateList(){
        $model = $this->load->model('CategoryModel');

        $table = 'tbl_category_product';
        $data['category'] = $model->listcategory($table);
        
        $this->load->view('admin/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/category/listcategory', $data);
        $this->load->view('admin/footer');
    }

    public function cateById($id){
        $model = $this->load->model('CategoryModel');

        $table = 'tbl_category_product';
        $data['categorybyid'] = $model->categorybyid($table, $id);

        $this->load->view('header');
        $this->load->view('categorybyid', $data);
        $this->load->view('footer');
    }

    public function addcategory(){
        $this->load->view('admin/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/category/addcategory');
        $this->load->view('admin/footer');
    }

    public function insertCate(){
        $model = $this->load->model('CategoryModel');
        $table = 'tbl_category_product';

        $title = $_POST['title_category_product'];
        $desc = $_POST['desc_category_product'];

        $data = array(
            'title_category_product' => $title,
            'desc_category_product' => $desc
        );
        $result = $model->insertcategory($table, $data);
        if($result==1){
            header('Location:'.APP_URL."category/cateList");
        }else{
            header('Location:'.APP_URL."category/cateList");
        }
    }


    public function editcategory($id){
        $model = $this->load->model('CategoryModel');

        $table = 'tbl_category_product';

        $cond = "tbl_category_product.id_category_product='$id'";

        $data['categorybyid'] = $model->categorybyid($table, $cond); 
       

        $this->load->view('admin/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/category/editcategory', $data);
        $this->load->view('admin/footer');
    }

    public function updatecategory($id){
        $model = $this->load->model('CategoryModel');

        $table = 'tbl_category_product';
        $cond = "tbl_category_product.id_category_product='$id'";
        $title = $_POST['title_category_product'];
        $desc = $_POST['desc_category_product'];

        $data = array(
            'title_category_product' => $title,
            'desc_category_product' => $desc
        );

        $result = $model->updatecategory($table, $data, $cond);
        if($result==1){
            header('Location:'.APP_URL."category/cateList");
        }else{
            header('Location:'.APP_URL."category/cateList");
        }
    }

    public function deleteCate($id){
        $model = $this->load->model('CategoryModel');
        $table = 'tbl_category_product';

        
        $cond = "tbl_category_product.id_category_product='$id'";

        $result = $model->deletecategory($table, $cond);
        if($result==1){
            header('Location:'.APP_URL."category/cateList");
        }else{
            header('Location:'.APP_URL."category/cateList");
        }
    }
}