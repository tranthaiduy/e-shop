<?php
class giohang extends DController{
    
    public function __construct(){
        $data = array();
        parent::__construct();
    }

    public function index(){
        $this->giohang();
    }

    public function giohang(){
        Session::init();

        $model = $this->load->model("CategoryModel");
        $model_post = $this->load->model("CatePostModel");

        $table = 'tbl_category_product';
        $table_post = 'tbl_category_post';
        $data['category'] = $model->listcategory_home($table);
        $data['category_post'] = $model_post->listcatepost_home($table_post);

        $this->load->view('header', $data);
        $this->load->view('cart');
        $this->load->view('footer');
    }

    public function themgiohang(){
        Session::init();

        if(isset($_SESSION["shopping_cart"])){
            $avaiable = 0;
            foreach($_SESSION["shopping_cart"] as $key => $value){
                if($_SESSION["shopping_cart"][$key]['product_id'] == $_POST['product_id']){
                    $avaiable++;
                    $_SESSION["shopping_cart"][$key]['product_quantity'] = $_SESSION["shopping_cart"][$key]['product_quantity'] + $_POST['product_quantity'];
                }
            }
            if($avaiable == 0){
                $item = array(
                    'product_id' => $_POST['product_id'],
                    'product_title' => $_POST['product_title'],
                    'product_image' => $_POST['product_image'],
                    'product_price' => $_POST['product_price'],
                    'product_quantity' => $_POST['product_quantity']
                );
                $_SESSION["shopping_cart"][] = $item;
            }
        }else{
            $item = array(
                'product_id' => $_POST['product_id'],
                'product_title' => $_POST['product_title'],
                'product_image' => $_POST['product_image'],
                'product_price' => $_POST['product_price'],
                'product_quantity' => $_POST['product_quantity']
            );
            $_SESSION["shopping_cart"][] = $item;
        }
        header("Location:".APP_URL.'giohang');
    }

    public function updategiohang(){
        Session::init();
        if(isset($_POST['delete_cart'])){
            if(isset($_SESSION["shopping_cart"])){
                foreach($_SESSION["shopping_cart"] as $key => $value){
                    if($_SESSION["shopping_cart"][$key]['product_id'] == $_POST['delete_cart']){
                        unset($_SESSION["shopping_cart"][$key]);
                    }
                }
                header("Location:".APP_URL.'giohang');
            }else{
                header("Location:".APP_URL.'index');
            }
        }elseif(isset($_POST['update_cart'])){
            foreach($_POST['qty'] as $key => $qty){
                foreach($_SESSION["shopping_cart"] as $session => $value){
                    if($value['product_id']==$key && $qty >= 1){
                        $_SESSION["shopping_cart"][$session]['product_quantity'] = $qty;
                    }elseif($value['product_id']==$key && $qty <= 0){
                        unset($_SESSION["shopping_cart"][$session]);
                    }
                }
            }
            header("Location:".APP_URL.'giohang');
        }
        
    }

    public function dathang(){
        Session::init();

        $model_order = $this->load->model("OrderModel");

        $table_order = 'tbl_order';
        $table_order_details = 'tbl_order_details';

        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $content = $_POST['content'];
        $order_code = rand(0,9999);

        date_default_timezone_set('asia/ho_chi_minh');
        $date = date("d/m/Y");
        $hour = date("h:i:sa");
        $order_date = $date.$hour;
        $data_order = array(
            'order_status' => 0,
            'order_code' => $order_code,
            'order_date' => $date.' '.$hour            
        );

        $result_order = $model_order->insert_order($table_order, $data_order);

        if(Session::get("shopping_cart")==true){
            foreach(Session::get("shopping_cart") as $key => $value){
                $data = array(
                    'order_code' => $order_code,
                    'product_id' => $value['product_id'],
                    'product_quantity' => $value['product_quantity'],
                    'name' => $name,
                    'phone' => $phone,
                    'address' => $address,
                    'email' => $email,
                    'content' => $content
                );
                $result_order_details = $model_order->insert_order_details($table_order_details, $data);
            }
            unset($_SESSION["shopping_cart"]);
        }
        header("Location:".APP_URL.'giohang');
    }

}