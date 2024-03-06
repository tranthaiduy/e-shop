<?php
class product extends DController{
    
    public function __construct(){
        $data = array();
        $message = array();
        parent::__construct();
    }

    public function productList(){
        $model = $this->load->model('ProductModel');

        $table_product = 'tbl_product';
        $table_category = 'tbl_category_product';
        $data['product'] = $model->listproduct($table_product, $table_category);
        
        $this->load->view('admin/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/product/listproduct', $data);
        $this->load->view('admin/footer');
    }

    public function productById($id){
        $model = $this->load->model('ProductModel');

        $table = 'tbl_product';
        $data['productbyid'] = $model->productbyid($table, $id);

        $this->load->view('header');
        $this->load->view('productbyid', $data);
        $this->load->view('footer');
    }

    public function addproduct(){
        $table = 'tbl_category_product';
        $categorymodel = $this->load->model('CategoryModel');
        $data['category'] = $categorymodel->listcategory($table);

        $this->load->view('admin/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/product/addproduct', $data);
        $this->load->view('admin/footer');
    }

    public function insertProduct(){
        $model = $this->load->model('ProductModel');
        $table = 'tbl_product';

        $title = $_POST['title_product'];
        $price = $_POST['price_product'];
        $desc = $_POST['desc_product'];
        $hot = $_POST['product_hot'];
        $quantity = $_POST['quantity_product'];
        $category = $_POST['category_product'];

        //------/
        $image = $_FILES['image_product']['name'];
        $tmp_image = $_FILES['image_product']['tmp_name'];

        $div = explode('.', $image);
        $file_ext = strtolower(end($div));
        $unique_image = $div[0].time().'.'.$file_ext;

        $path_uploads = "public/uploads/product/".$unique_image;
        if(move_uploaded_file($tmp_image, $path_uploads)){
            $image = $unique_image;
        }else{
            $image = "default.jpg";
        }

        //------/
        
        $data = array(
            'title_product' => $title,
            'image_product' => $image,
            'price_product' => $price,
            'desc_product' => $desc,
            'product_hot' => $hot,
            'quantity_product' => $quantity,
            'id_category_product' => $category
        );
        $result = $model->insertproduct($table, $data);
        if($result==1){
            header('Location:'.APP_URL."product/productList");
        }else{
            header('Location:'.APP_URL."product/productList");
        }
    }


    public function editproduct($id){
        $model = $this->load->model('ProductModel');
        $categorymodel = $this->load->model('CategoryModel');

        
        $table_category = 'tbl_category_product';
        $data['category'] = $categorymodel->listcategory($table_category);

        $table = 'tbl_product';
        $cond = "tbl_product.id_product='$id'";
        $data['productbyid'] = $model->productbyid($table, $cond); 
       

        $this->load->view('admin/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/product/editproduct', $data);
        $this->load->view('admin/footer');
    }

    public function updateproduct($id){
        $model = $this->load->model('ProductModel');

        $table = 'tbl_product';
        $cond = "tbl_product.id_product='$id'";


        $title = $_POST['title_product'];
        $price = $_POST['price_product'];
        $desc = $_POST['desc_product'];
        $hot = $_POST['product_hot'];
        $quantity = $_POST['quantity_product'];
        $category = $_POST['category_product'];

        //------/
        $image = $_FILES['image_product']['name'];
        $tmp_image = $_FILES['image_product']['tmp_name'];

        $div = explode('.', $image);
        $file_ext = strtolower(end($div));
        $unique_image = $div[0].time().'.'.$file_ext;

        $path_uploads = "public/uploads/product/".$unique_image;
        if($image){
            $cond = "tbl_product.id_product='$id'";
            $data['productbyid'] = $model->productbyid($table, $cond);
            foreach($data['productbyid'] as $key => $val){
                if($val['image_product']){
                    unlink("public/uploads/product/".$val['image_product']);
                }
            }
            if(move_uploaded_file($tmp_image, $path_uploads)){
                $image = $unique_image;
            }else{
                $image = "default.jpg";
            }
            $data = array(
                'title_product' => $title,
                'image_product' => $image,
                'price_product' => $price,
                'desc_product' => $desc,
                'product_hot' => $hot,
                'quantity_product' => $quantity,
                'id_category_product' => $category
            );
            
        }else{
            $data = array(
                'title_product' => $title,
                'price_product' => $price,
                'desc_product' => $desc,
                'product_hot' => $hot,
                'quantity_product' => $quantity,
                'id_category_product' => $category
            );
        }

        //------/

        $result = $model->updateproduct($table, $data, $cond);
        if($result==1){
            header('Location:'.APP_URL."product/productList");
        }else{
            header('Location:'.APP_URL."product/productList");
        }
    }

    public function deleteProduct($id){
        $model = $this->load->model('ProductModel');
        $table = 'tbl_product';
        
        $cond = "tbl_product.id_product='$id'";

        $result = $model->deleteproduct($table, $cond);
        if($result==1){
            header('Location:'.APP_URL."product/productList");
        }else{
            header('Location:'.APP_URL."product/productList");
        }
    }
}