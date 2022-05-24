<?php 
class Admin extends CI_Controller {

    public function __construct()
        {
            parent::__construct();
        }
	
    public function index(){
        $this->load->view('home/header');
        $this->load->view('pages/admin');
        $this->load->view('home/footer');
	}
}