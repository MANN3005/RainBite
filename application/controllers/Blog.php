<?php 
class Blog extends CI_Controller {

	
    public function __construct()
        {
            parent::__construct();
            $this->load->model('Blog_model');
        }
    public function index(){
        $data = array();
        $data['blog'] = $this->Blog_model->getAllBlogs();
        $this->load->view('header');
        $this->load->view('pages/Blog',$data);
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
        if(empty($_FILES['blog_image']['name']))
        {
            $this->form_validation->set_rules('blog_image', 'Blog Image', 'required');
        }
        if($this->form_validation->run())
        {
            $addUpdateData = array(
                'Title'             =>  strip_tags($this->input->post('title')),
                'Description'       =>  $this->input->post('description'),
                'Status'            =>  trim(strip_tags($this->input->post('status'))),
                'Message'           =>  trim(strip_tags($this->input->post('message'))),
                'AuthorName'       =>  trim(strip_tags($this->input->post('author_name'))),
                'CreatedDate'       =>  trim(strip_tags($this->input->post('created_date')))
            );
            if($_FILES['blog_image']['name'] != "")
                {
                    if($_FILES["blog_image"]["size"] > PHOTO_SIZE){
                        $err = "Image size is too big!";
                    }else{
                        $path_parts = pathinfo($_FILES["blog_image"]["name"]);
                        $ext = $path_parts['extension'];
                        $file_name = $_SESSION['user_id'].MD5(date('Y-m-d H:i:s')).'.'. $ext;

                        $blogImageConfig = array(
                            'upload_path' => 'assets/img/blog/',
                            'allowed_types' => "gif|jpg|png|jpeg|PNG",
                            'file_name' => $file_name
                        );
                        $this->load->library('upload', $blogImageConfig);
                        $this->upload->initialize($blogImageConfig);

                        if($this->upload->do_upload('blog_image'))
                        {
                            $blogImageURL = $this->upload->data()['file_name'];
                            $addUpdateData["Blog_Image_URL"] = $blogImageURL;
                        } else {
                            $err = "Something wrong! Please try again.";
                        }
                }
                }  
                if($this->Blog_model->addblog($addUpdateData)){
                    $this->session->set_flashdata('success', 'Successfully Added!.');
                } else {
                       $this->session->set_flashdata('error', "Data can't be added!.");
                    }
                }               
                // redirect('Blog');
              
            $this->load->view('header');
            $this->load->view('pages/AddBlog');
            $this->load->view('footer');
       
	}
    
    
    
}