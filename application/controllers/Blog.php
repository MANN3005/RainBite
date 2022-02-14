<?php 
class Blog extends CI_Controller {

	
    public function index(){
        $this->load->view('header');
        $this->load->view('pages/Blog');
        $this->load->view('footer');
	}
    public function BlogPost(){
        $this->load->view('header');
        $this->load->view('pages/BlogPost');
        $this->load->view('footer');
	}
    public function AddBlog(){
     
        
        $this->form_validation->set_rules('title','Title','trim|required|max_length[40]');
        $this->form_validation->set_rules('message','Message','required');
        $this->form_validation->set_rules('description','Blog Description','trim|required');
        $this->form_validation->set_rules('status','Status','trim|required');
        $this->form_validation->set_rules('author_name','AuthorName','trim|required|max_length[40]');
        $this->form_validation->set_rules('created_date','CreatedDate','trim|required|max_length[40]');
        if (empty($_FILES['blog_image']['name']))
        {
            $this->form_validation->set_rules('blog_image', 'Blog Image', 'required');
        }
            $this->load->view('header');
            $this->load->view('pages/AddBlog');
            $this->load->view('footer');
           
	}
    
    
    
}