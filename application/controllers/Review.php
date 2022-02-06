<?php 
class Review extends CI_Controller {

	
    public function index(){
        $this->load->view('header');
        $this->load->view('pages/review');
        $this->load->view('footer');
	}
    
}