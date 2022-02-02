<?php 
class Order extends CI_Controller {

    public function index(){
        $this->load->view('header');
        $this->load->view('pages/orderhome');
        $this->load->view('footer');
    }
    public function orderdetail(){      
        $this->load->view('header');
        $this->load->view('pages/orderdetail');
        $this->load->view('footer');


    }
}
?>