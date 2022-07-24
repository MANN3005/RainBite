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
    public function OrderDetail($Id=' '){  
        $RestaurantId = $this->input->post('Id');
        $data=array();
        $data['Id'] = $Id !='' ? $Id : '';
        if($Id !=" "){
        $data['Order'] = $this->Order_model->getRestaurantDetail($Id);
        $data['Menu'] = $this->Order_model->getRestaurantMenu($Id);
        $data['reviews'] = $this->Order_model->getRestaurantReviews($Id);
    }
        $data['cartItems'] = $this->cart->contents();
        // echo "<pre>";
        // print_r($data);
        $this->load->view('header');
        $this->load->view('pages/orderdetail',$data);
        $this->load->view('footer');


    }
    public function OrderSummary(){    
        $data['cartItems'] = $this->cart->contents();

        $this->load->view('header');
        $this->load->view('pages/ordersummary',$data);
        $this->load->view('footer');

    }
    public function ConfirmOrder(){      
        $this->load->view('header');
        $this->load->view('pages/ConfirmOrder');
        $this->load->view('footer');


    }
    public function Reviewadd(){ 
        $R_Id = $this->input->post('Restuarant_Id');
        $Rating = $this->input->post('Rating');
        
           
        $result = $this->Order_model->addRating($R_Id,$Rating);

    }
    public function Category($Id=' '){      
        
        $data = array();
        $data['Id'] = $Id !='' ? $Id : '';
        $data['order'] = $this->Order_model->getbyCategory($Id);
        $this->load->view('header');
        $this->load->view('pages/orderhome',$data);
        $this->load->view('footer');


    }
}
?>