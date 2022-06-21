<?php 
class Home extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Order_model');
    }

    public function index(){
        $data = array();
        $data['order'] = $this->Order_model->getAllRestaurants();
        $this->load->view('home/header');
        $this->load->view('pages/index', $data);
        $this->load->view('home/footer');
	}
    
    public function ComingSoon(){
        // $this->load->view('home/header');
        $this->load->view('pages/comingsoon');
        // $this->load->view('home/footer');
	    
    }
    
}