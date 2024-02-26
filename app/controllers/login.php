<?php
class login extends DController{
    
    public function __construct(){
        $message = array();
        $data = array();
        
        parent::__construct();
    }

    public function index(){
        $this->login();
    }

    public function login(){

        Session::init();
        if(Session::get('login')==true){
            header("Location:".APP_URL."login/dashboard");
        }
        $this->load->view('admin/login');

    }

    public function dashboard(){

        Session::checkSession();
        $this->load->view('admin/header');
        $this->load->view('admin/menu');
        $this->load->view('admin/dashboard');
        $this->load->view('admin/footer');

    }

    public function authentication(){
        $username = $_POST['username'];
        $password = md5($_POST['password']);

        $loginmodel = $this->load->model('LoginModel');

        $tbl_admin = 'tbl_admin';
        $count = $loginmodel->login($tbl_admin, $username, $password);

        if($count==0){
            $message['msg'] = "Thông tin tài khoản hoặc mật khẩu không chính xác!";
            header("Location:".APP_URL."login");
        }else{
            $result = $loginmodel->getlogin($tbl_admin, $username, $password);
            Session::init();
            Session::set('login', true);
            Session::set('username', $result[0]['username']);
            Session::set('userid', $result[0]['admin_id']);
            header("Location:".APP_URL."login/dashboard");
        }
    }

    public function logout(){
        Session::init();
        Session::destroy();
        header("Location:".APP_URL."login");
    }

}