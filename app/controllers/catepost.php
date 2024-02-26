<?php
class catepost extends DController{
    public function __construct(){
        parent::__construct();
    }

    public function catepostList(){
        $model = $this->load->model('CatePostModel');

        $table = 'tbl_category_post';
        $data['catepost'] = $model->listcatepost($table);
        
        $this->load->view('admin/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/catepost/listcatepost', $data);
        $this->load->view('admin/footer');
    }

    public function catepostById($id){
        $model = $this->load->model('CatePostModel');

        $table = 'tbl_category_post';
        $data['catepostbyid'] = $model->catepostbyid($table, $id);

        $this->load->view('header');
        $this->load->view('catepostbyid', $data);
        $this->load->view('footer');
    }

    public function addcatepost(){
        $this->load->view('admin/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/catepost/addcatepost');
        $this->load->view('admin/footer');
    }

    public function insertCatePost(){
        $model = $this->load->model('CatePostModel');
        $table = 'tbl_category_post';

        $title = $_POST['title_category_post'];
        $desc = $_POST['desc_category_post'];

        $data = array(
            'title_category_post' => $title,
            'desc_category_post' => $desc
        );
        $result = $model->insertcatepost($table, $data);
        if($result==1){
            header('Location:'.APP_URL."catepost/catepostList");
        }else{
            header('Location:'.APP_URL."catepost/catepostList");
        }
    }


    public function editcatepost($id){
        $model = $this->load->model('CatePostModel');

        $table = 'tbl_category_post';

        $cond = "tbl_category_post.id_category_post='$id'";

        $data['catepostbyid'] = $model->catepostbyid($table, $cond); 
       

        $this->load->view('admin/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/catepost/editcatepost', $data);
        $this->load->view('admin/footer');
    }

    public function updatecatepost($id){
        $model = $this->load->model('CatePostModel');

        $table = 'tbl_category_post';
        $cond = "tbl_category_post.id_category_post='$id'";
        $title = $_POST['title_category_post'];
        $desc = $_POST['desc_category_post'];

        $data = array(
            'title_category_post' => $title,
            'desc_category_post' => $desc
        );

        $result = $model->updatecatepost($table, $data, $cond);
        if($result==1){
            header('Location:'.APP_URL."catepost/catepostList");
        }else{
            header('Location:'.APP_URL."catepost/catepostList");
        }
    }

    public function deleteCatePost($id){
        $model = $this->load->model('CatePostModel');
        $table = 'tbl_category_post';

        
        $cond = "tbl_category_post.id_category_post='$id'";

        $result = $model->deletecatepost($table, $cond);
        if($result==1){
            header('Location:'.APP_URL."catepost/catepostList");
        }else{
            header('Location:'.APP_URL."catepost/catepostList");
        }
    }
}