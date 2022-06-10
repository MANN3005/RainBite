<?php 
class Login extends CI_Controller {
    public function __construct()
        {
            parent::__construct();
            $this->load->model('Login_model');
            $this->load->library('session');
            $this->load->helper(array('url'));
        }

            function Validation(){

            $this->form_validation->set_rules('email','Email','required|trim|valid_email');
            $this->form_validation->set_rules('password','Password','required');

            $email = strip_tags(trim($this->input->post('email')));
            $password = $this->input->post('password');
            if($this->form_validation->run()){
            	if($this->Login_model->resolve_user_login($email, $password)){
            		$userData = $this->Login_model->get_user($email);
                    $Restaurant_Id = $this->Login_model->get_Restaurant_Id($email);
            		$_SESSION['user_id']  = (int)$userData->Id;
            		$_SESSION['user_name']  = $userData->Name;
                    $_SESSION['user_lastname']  = $userData->LastName;
            		$_SESSION['user_email']  = $userData->Email;
                    $_SESSION['phone_number'] = $userData->PhoneNumber;
                    $_SESSION['role'] = $userData->Role;
                    $_SESSION['logged_in']  = (bool)1;   
                    if($_SESSION['role']=='RestaurantAdmin'){
                        $_SESSION['resto_Id'] = (int)$Restaurant_Id->Id;
                    }
                    
                    redirect($_SERVER['HTTP_REFERER']);
            	}else{
            		$this->session->set_flashdata('error', 'Invalid Credentials');
                    redirect($_SERVER['HTTP_REFERER']);
            	}
            }
        }
        function ValidationFromSignup(){

            $this->form_validation->set_rules('email','Email','required|trim|valid_email');
            $this->form_validation->set_rules('password','Password','required');

            $email = strip_tags(trim($this->input->post('email')));
            $password = $this->input->post('password');
            if($this->form_validation->run()){
            	if($this->Login_model->resolve_user_login($email, $password)){
            		$userData = $this->Login_model->get_user($email);
                    $Restaurant_Id = $this->Login_model->get_Restaurant_Id($email);
            		$_SESSION['user_id']  = (int)$userData->Id;
            		$_SESSION['user_name']  = $userData->Name;
                    $_SESSION['user_lastname']  = $userData->LastName;
            		$_SESSION['user_email']  = $userData->Email;
                    $_SESSION['phone_number'] = $userData->PhoneNumber;
                    $_SESSION['role'] = $userData->Role;
                    $_SESSION['logged_in']  = (bool)1;   
                    if($_SESSION['role']=='RestaurantAdmin'){
                        $_SESSION['resto_Id'] = (int)$Restaurant_Id->Id;
                    }
                    
                    redirect('Home');
            	}else{
            		$this->session->set_flashdata('error', 'Invalid Credentials');
                    redirect($_SERVER['HTTP_REFERER']);
            	}
            }
        }
        public function Logout()
        {
            $data = $this->session->all_userdata();
            foreach($data as $row => $rows_value)
            {
                $this->session->unset_userdata($row);
            }
            $this->session->set_flashdata('success', 'Logged Out Succesfully');                 

            redirect('Home');
        }
    }