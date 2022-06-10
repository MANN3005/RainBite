<?php 
class Contact extends CI_Controller {

    public function __construct()
        {
            parent::__construct();
            $this->load->model('Contact_model');
        }
	
    public function index(){
        $this->load->view('home/header');
        $this->load->view('pages/contactus');
        $this->load->view('home/footer');
	}
 
    public function ContactUs(){
        $this->form_validation->set_rules('name','Name','required|trim|max_length[40]');
        $this->form_validation->set_rules('email','Email','required|trim|valid_email|max_length[40]');
        $this->form_validation->set_rules('phone_number','PhoneNumber','required|trim|max_length[10]');
        $this->form_validation->set_rules('message','Message','required|trim|max_length[255]');
        // $data = array();
        if($this->form_validation->run()){
            $insert = array(
                'Name'  => strip_tags($this->input->post('name')),
                'Email'  => strip_tags($this->input->post('email')),
                'PhoneNumber' => strip_tags($this->input->post('phone_number')),
                'Message' => strip_tags($this->input->post('message'))
            );
            $this->Contact_model->contactus($insert);       
        
            redirect('contact/index'); 
        }
        else{
            $this->index();
        }   
    }
}