<?php
class tintuc extends DController{
    
    public function __construct(){
        $data = array();
        parent::__construct();
    }

    public function index(){
        $this->tintuc();
    }

    public function tintuc(){
        $this->load->view('header');
        $this->load->view('categorypost');
        $this->load->view('footer');
    }

    public function chitiettin($id){
        $this->load->view('header');
        $this->load->view('detailpost');
        $this->load->view('footer');
    }

}