<?php 
class Admin extends CI_Controller {

    public function __construct()
        {
            parent::__construct();
        }
	
    public function index(){
        $this->load->view('admin/header');
        $this->load->view('admin/index');
        // $this->load->view('home/footer');
	}
    public function listing(){
        $this->load->view('admin/header');
        $this->load->view('admin/listing');
        // $this->load->view('home/footer');
	}
}