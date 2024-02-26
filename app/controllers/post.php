<?php
class post extends DController{
    public function __construct(){
        parent::__construct();
    }

    public function postList(){
        $model = $this->load->model('PostModel');

        $table_post = 'tbl_post';
        $table_category = 'tbl_category_post';
        $data['post'] = $model->listpost($table_post, $table_category);
        
        $this->load->view('admin/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/post/listpost', $data);
        $this->load->view('admin/footer');
    }

    public function postById($id){
        $model = $this->load->model('PostModel');

        $table = 'tbl_category_post';
        $data['postbyid'] = $model->postbyid($table, $id);

        $this->load->view('header');
        $this->load->view('postbyid', $data);
        $this->load->view('footer');
    }

    public function addpost(){
        $model = $this->load->model("CatePostModel");

        $table_category_post = "tbl_category_post";
        $data["catepost"] = $model->listcatepost($table_category_post); 

        $this->load->view('admin/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/post/addpost', $data);
        $this->load->view('admin/footer');
    }

    public function insertPost(){
        $model = $this->load->model('PostModel');
        $table = 'tbl_post';

        $title = $_POST['title_post'];
        $content = $_POST['content_post'];
        $category = $_POST['category_post'];

        //------/
        $image = $_FILES['image_post']['name'];
        $tmp_image = $_FILES['image_post']['tmp_name'];

        $div = explode('.', $image);
        $file_ext = strtolower(end($div));
        $unique_image = $div[0].time().'.'.$file_ext;

        $path_uploads = "public/uploads/post/".$unique_image;
        if(move_uploaded_file($tmp_image, $path_uploads)){
            $image = $unique_image;
        }else{
            $image = "default.jpg";
        }

        $data = array(
            'title_post' => $title,
            'image_post' => $image,
            'content_post' => $content,
            'id_category_post' => $category
        );
        $result = $model->insertpost($table, $data);
        if($result==1){
            header('Location:'.APP_URL."post/postList");
        }else{
            header('Location:'.APP_URL."post/addpost");
        }
    }


    public function editpost($id){
        $model = $this->load->model('PostModel');
        $categorymodel = $this->load->model('CatePostModel');

        
        $table_category = 'tbl_category_post';
        $data['category'] = $categorymodel->listcatepost($table_category);

        $table = 'tbl_post';
        $cond = "tbl_post.id_post='$id'";
        $data['postbyid'] = $model->postbyid($table, $cond); 
       

        $this->load->view('admin/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/post/editpost', $data);
        $this->load->view('admin/footer');
    }

    public function updatepost($id){
        $model = $this->load->model('PostModel');

        $table = 'tbl_post';
        $cond = "tbl_post.id_post='$id'";


        $title = $_POST['title_post'];
        $content = $_POST['content_post'];
        $category = $_POST['category_post'];

        //------/
        $image = $_FILES['image_post']['name'];
        $tmp_image = $_FILES['image_post']['tmp_name'];

        $div = explode('.', $image);
        $file_ext = strtolower(end($div));
        $unique_image = $div[0].time().'.'.$file_ext;

        $path_uploads = "public/uploads/post/".$unique_image;
        if($image){
            $cond = "tbl_post.id_post='$id'";
            $data['postbyid'] = $model->postbyid($table, $cond);
            foreach($data['postbyid'] as $key => $val){
                if($val['image_post']){
                    unlink("public/uploads/post/".$val['image_post']);
                }
            }
            if(move_uploaded_file($tmp_image, $path_uploads)){
                $image = $unique_image;
            }else{
                $image = "default.jpg";
            }
            $data = array(
                'title_post' => $title,
                'image_post' => $image,
                'content_post' => $content,
                'id_category_post' => $category
            );
            
        }else{
            $data = array(
                'title_post' => $title,
                // 'image_post' => $image,
                'content_post' => $content,
                'id_category_post' => $category
            );
        }

        //------/

        $result = $model->updatepost($table, $data, $cond);
        if($result==1){
            
            header('Location:'.APP_URL."post/postList");
        }else{
            header('Location:'.APP_URL."post/postList");
        }
    }

    public function deletePost($id){
        $model = $this->load->model('PostModel');
        $table = 'tbl_post';

        $cond = "tbl_post.id_post='$id'";

        $result = $model->deletepost($table, $cond);
        if($result==1){
            header('Location:'.APP_URL."post/postList");
        }else{
            header('Location:'.APP_URL."post/postList");
        }
    }
}