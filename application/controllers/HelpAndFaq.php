<?php 
class HelpAndFaq extends CI_Controller {

	
    public function index(){
        $this->load->view('home/header');
        $this->load->view('pages/HelpAndFaq');
        $this->load->view('home/footer');
	}
    
}