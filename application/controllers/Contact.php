<?php 
class Contact extends CI_Controller {

	
    public function index(){
        $this->load->view('home/header');
        $this->load->view('pages/contactus');
        $this->load->view('home/footer');
	}
    
}