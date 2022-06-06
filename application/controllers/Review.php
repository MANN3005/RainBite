<?php 
class Review extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->load->model('Review_model');
        
        $this->load->model('Order_model');
    }

    public function index(){
        $data = array();
        $data['order'] = $this->Order_model->getAllRestaurants();

        $this->load->view('header');
        $this->load->view('pages/review',$data);
        $this->load->view('footer');
	}
    public function validation($Id=' '){
        $RestaurantId = $this->input->post('Id');
        $data=array();
        $data['Id'] = $Id !='' ? $Id : '';
        $this->form_validation->set_rules('food_quality','Food_Quality','required|max_length[10]');
        $this->form_validation->set_rules('service','Service','required|max_length[10]');
        $this->form_validation->set_rules('punctuality','Punctuality','required|max_length[10]');
        $this->form_validation->set_rules('price','Price','required|max_length[10]');
        $this->form_validation->set_rules('rev_title','Rev_Title','required|max_length[255]');
        $this->form_validation->set_rules('rev_desc','Rev_Desc','required|max_length[255]');
        if($this->form_validation->run()){
            $insert = array(
                'Food_Quality'  => strip_tags($this->input->post('food_quality')),
                'Restaurant_Id'  => $data['Id'],
                'Service' => strip_tags($this->input->post('service')),
                'Punctuality' => strip_tags($this->input->post('punctuality')),
                'Price' => strip_tags($this->input->post('price')),
                'Rev_Title'  => strip_tags($this->input->post('rev_title')),
                'Rev_Desc'  => strip_tags($this->input->post('rev_desc')),
               

               
            );
            $result = $this->Review_model->addreview($insert); 
            
              
            redirect('review'); 
        }
        else{
            $this->index();
        }
    }
    
}