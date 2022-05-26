<?php 
class Order extends CI_Controller {
    
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Order_model');
    }

    public function index(){
        $data = array();
        $data['order'] = $this->Order_model->getAllRestaurants();
        $this->load->view('header');
        $this->load->view('pages/orderhome', $data);
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