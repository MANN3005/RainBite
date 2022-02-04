<?php 
class SubmitRestaurant extends CI_Controller {   
    public function index(){      
        $this->load->view('header');
        $this->load->view('pages/submitrestaurant');
        $this->load->view('footer');


    }
}
?>