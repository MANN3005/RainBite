<?php 
class Review extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        if(!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] != 1)
            {
                redirect('SignUp');
            }
        $this->load->model('Review_model');
    }

    public function index($id=''){
        echo $this->uri->segment('3');
        $this->form_validation->set_rules('food_quality','Food_Quality','required|max_length[10]');
        $this->form_validation->set_rules('service','Service','required|max_length[10]');
        $this->form_validation->set_rules('punctuality','Punctuality','required|max_length[10]');
        $this->form_validation->set_rules('price','Price','required|max_length[10]');
        $this->form_validation->set_rules('rev_title','Rev_Title','required|max_length[255]');
        $this->form_validation->set_rules('rev_desc','Rev_Desc','required|max_length[255]');
        if($this->form_validation->run()){
            $insert = array(
                'Food_Quality'  => strip_tags($this->input->post('food_quality')),
                'Restaurant_Id'  => $RestaurantId,
                'Service' => strip_tags($this->input->post('service')),
                'Punctuality' => strip_tags($this->input->post('punctuality')),
                'Price' => strip_tags($this->input->post('price')),
                'Rev_Title'  => strip_tags($this->input->post('rev_title')),
                'Rev_Desc'  => strip_tags($this->input->post('rev_desc')),
                'User_Name' => $_SESSION['user_name'],
            );
            $result = $this->Review_model->addreview($insert); 
            redirect('review'); 
        }
        $this->load->view('header');
        $this->load->view('pages/review');
        $this->load->view('footer');
	}
    public function Review(){
        $RestaurantId =  $this->uri->segment('3');
        // $data=array();
        // //$data['Id'] = $Id !='' ? $Id : '';
        $this->form_validation->set_rules('food_quality','Food_Quality','required|max_length[10]');
        $this->form_validation->set_rules('service','Service','required|max_length[10]');
        $this->form_validation->set_rules('punctuality','Punctuality','required|max_length[10]');
        $this->form_validation->set_rules('price','Price','required|max_length[10]');
        $this->form_validation->set_rules('rev_title','Rev_Title','required|max_length[255]');
        $this->form_validation->set_rules('rev_desc','Rev_Desc','required|max_length[255]');
        if($this->form_validation->run()){
            $insert = array(
                'Food_Quality'  => strip_tags($this->input->post('food_quality')),
                'Restaurant_Id'  => $RestaurantId,
                'Service' => strip_tags($this->input->post('service')),
                'Punctuality' => strip_tags($this->input->post('punctuality')),
                'Price' => strip_tags($this->input->post('price')),
                'Rev_Title'  => strip_tags($this->input->post('rev_title')),
                'Rev_Desc'  => strip_tags($this->input->post('rev_desc')),
                'User_Name' => $_SESSION['user_name'],
            );
            $result = $this->Review_model->addreview($insert); 
            redirect('review'); 
        }
        else{
            $this->index();
        }
    }
}