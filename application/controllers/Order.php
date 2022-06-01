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
    public function orderdetail($Id=' '){  
        $RestaurantId = $this->input->post('Id');
        $data=array();
        $data['Id'] = $Id !='' ? $Id : '';
        if($Id !=" "){
        $data['Order'] = $this->Order_model->getRestaurantDetail($Id);
        $data['Menu'] = $this->Order_model->getRestaurantMenu($Id);
        }    
        $this->load->view('header');
        $this->load->view('pages/orderdetail',$data);
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
    public function Category(){      
        $Category = $this->input->post('Category');
        $data = array();
        $data['order'] = $this->Order_model->getbyCategory($Category);
        $this->load->view('header');
        $this->load->view('pages/orderhome',$data,$Category);
        $this->load->view('footer');


    }
}
?>