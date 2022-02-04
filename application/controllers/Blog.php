<?php 
class Blog extends CI_Controller {

	
    public function index(){
        $this->load->view('header');
        $this->load->view('pages/Blog');
        $this->load->view('footer');
	}
    public function BlogPost(){
        $this->load->view('header');
        $this->load->view('pages/BlogPost');
        $this->load->view('footer');
	}
    
}