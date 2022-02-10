<?php 
class SignUp extends CI_Controller {
    public function __construct()
        {
            parent::__construct();
            $this->load->model('Signup_model');
        }

	
    public function index(){
        $this->load->view('pages/signup');
	}

    public function usersignup(){
        $this->form_validation->set_rules('name','Name','required|trim|max_length[40]');
        $this->form_validation->set_rules('lastname','LastName','required|trim|max_length[10]');
        $this->form_validation->set_rules('email','Email','required|trim|valid_email|max_length[40]');
        $this->form_validation->set_rules('password','Password','required|trim|max_length[40]');
        $this->form_validation->set_rules('cpassword','Confirm Password','required|trim|matches[password]|max_length[40]');
        
        if($this->form_validation->run()){
            $insert = array(
                'Name'  => strip_tags($this->input->post('name')),
                'LastName'  => strip_tags($this->input->post('lastname')),
                'Email' => strip_tags($this->input->post('email')),
                'Password' => md5($this->input->post('password'))
            );
            $this->Signup_model->signup($insert);       
            redirect('Home'); 
        }
        else{
            $this->index();
        }   
    }
}