<?php 
    class Blog_model extends CI_Model {

        public function addblog($insert){
            return $this->db->insert('blog', $insert);
        }

        public function getAllBlogs()
	    {
            $this->db->select('Id, Title, Description, Blog_Image_URL, Message, Status, AuthorName, DATE_FORMAT(CreatedDate, "%b %d %Y %H %i") as CreatedDate');
            $this->db->from('blog');
            $this->db->where('Status', 'active');
            $this->db->order_by('CreatedDate', 'desc');
            $query = $this->db->get();
            return $result = $query->result_array();
	    }
}