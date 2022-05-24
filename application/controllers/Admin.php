<?php 
class Admin extends CI_Controller {

    public function __construct()
        {
            parent::__construct();
            $this->load->model('RRegister_model');
        }
	
    public function index(){
        $this->load->view('admin/header');
        $this->load->view('admin/index');
        // $this->load->view('home/footer');
	}
    public function listing(){
        $this->load->view('admin/header');
        $this->load->view('admin/listing');
        // $this->load->view('home/footer');
       
    }
    public function Registration(){
        $this->form_validation->set_rules('r_name','R_Name','required|trim|max_length[255]');
        $this->form_validation->set_rules('category','Category','required|trim|max_length[255]');
        $this->form_validation->set_rules('s_type','S_Type','required|trim|max_length[40]');
        $this->form_validation->set_rules('phone_no','Phone_No','required|trim|max_length[10]');
        $this->form_validation->set_rules('email','Email','required|trim|valid_email|max_length[40]');
        $this->form_validation->set_rules('city','City','required|trim|matches[city]|max_length[40]');
        $this->form_validation->set_rules('address','Address','required|trim|matches[address]|max_length[312]');
        $this->form_validation->set_rules('pincode','Pincode','required|trim|matches[pincode]|max_length[10]');
        
        if($this->form_validation->run()){
            $insert = array(
                'R_Name'  => strip_tags($this->input->post('r_name')),
                'Category'  => strip_tags($this->input->post('category')),
                'S_Type' => strip_tags($this->input->post('s_type')),
                'Phone_No' => strip_tags($this->input->post('phone_no')),
                'Email' => strip_tags($this->input->post('email')),
                'City'  => strip_tags($this->input->post('city')),
                'Address'  => strip_tags($this->input->post('address')),
                'Pincode'  => strip_tags($this->input->post('pincode')),

               
            );
            $result = $this->RRegister_model->list($insert); 
            
              
            redirect('Admin/listing'); 
        }
        else{
            $this->index();
        } 
    }
}