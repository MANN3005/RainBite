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
        $this->form_validation->set_rules('phone_number','PhoneNumber','required|trim|max_length[20]');
        $this->form_validation->set_rules('password','Password','required|trim|max_length[40]');
        $this->form_validation->set_rules('cpassword','Confirm Password','required|trim|matches[password]|max_length[40]');
        $role = "User";
        if($this->form_validation->run()){
            $insert = array(
                'Name'  => strip_tags($this->input->post('name')),
                'LastName'  => strip_tags($this->input->post('lastname')),
                'Email' => strip_tags($this->input->post('email')),
                'PhoneNumber' => strip_tags($this->input->post('phone_number')),
                'Password' => md5($this->input->post('password')),
                'Role' => $role
            );
            $result = $this->Signup_model->signup($insert); 
            
            $_SESSION['user_id']  = (int)$result;
            $_SESSION['user_name']  =  $insert['Name'];
            $_SESSION['user_lastname']  =  $insert['LastName'];
            $_SESSION['user_email']  =  $insert['Email'];
            $_SESSION['phone_number'] =  $insert['PhoneNumber'];
            $_SESSION['role'] =  $insert['Role'];
            $_SESSION['logged_in']  = (bool)1;   
            redirect('Home'); 
        }
        else{
            $this->index();
        }   
    }
}