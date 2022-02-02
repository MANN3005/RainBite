<?php 
class Order extends CI_Controller {

    public function index(){
        $this->load->view('header');
        $this->load->view('pages/orderhome');
        $this->load->view('footer');
    }
}
?>