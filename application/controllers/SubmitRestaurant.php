<?php 
class SubmitRestaurant extends CI_Controller {   
    public function __construct()
    {
        parent::__construct();
        if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] != 1)
            {
                redirect('SignUp');
            }
        $this->load->model('Submit_Restaurant_model');
    }
    
    public function index(){      
        $this->load->view('home/header');
        $this->load->view('pages/submitrestaurant');
        $this->load->view('home/footer');
    }
    public function AddRestaurant(){      
        $this->form_validation->set_rules('name','Name','trim|required|max_length[40]');
        $this->form_validation->set_rules('email','Email','required|trim|valid_email|max_length[40]');
        $this->form_validation->set_rules('phone_number','PhoneNumber','trim|required');
        $this->form_validation->set_rules('restaurant_name','ReastaurantName','trim|required');
        $this->form_validation->set_rules('address','Address','trim|required|max_length[40]');
        $this->form_validation->set_rules('city','City','trim|required|max_length[40]');

        if($this->form_validation->run()){
            $insert = array(
                'Name'  => strip_tags($this->input->post('name')),
                'Email'  => strip_tags($this->input->post('email')),
                'PhoneNumber' => strip_tags($this->input->post('phone_number')),
                'RestaurantName' => strip_tags($this->input->post('restaurant_name')),
                'Address' => strip_tags($this->input->post('address')),
                'City' => strip_tags($this->input->post('city'))
            );
            $this->Submit_Restaurant_model->addrestaurant($insert);       
        
            redirect('SubmitRestaurant'); 
        }
        else{
            $this->index();
        } 
       
        $this->load->view('home/header');
        $this->load->view('pages/submitrestaurant');
        $this->load->view('home/footer');
    }
}
?>