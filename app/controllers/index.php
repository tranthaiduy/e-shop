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
        $this->load->view('header');
        $this->load->view('slider');
        $this->load->view('home');
        $this->load->view('footer');
    }

    public function danhmuc(){
        $this->load->view('header');
        $this->load->view('categoryproduct');
        $this->load->view('footer');
    }

    public function chitietsanpham(){
        $this->load->view('header');
        $this->load->view('detailproduct');
        $this->load->view('footer');
    }

    public function notfound(){
        $this->load->view('header');
        $this->load->view('404');
        $this->load->view('footer');
    }

}