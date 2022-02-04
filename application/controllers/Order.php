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
    public function ordersummary(){      
        $this->load->view('header');
        $this->load->view('pages/ordersummary');
        $this->load->view('footer');


    }
    public function ConfirmOrder(){      
        $this->load->view('header');
        $this->load->view('pages/ConfirmOrder');
        $this->load->view('footer');


    }
}
?>