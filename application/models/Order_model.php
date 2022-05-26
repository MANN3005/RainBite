<?php 
    class Order_model extends CI_Model {

        public function getAllRestaurants()
	    {
            $this->db->select('Id, R_Name, Category, S_Type, Phone_No, Email, City, Address, Pincode');
            $this->db->from('listing');
            // $this->db->where('Status', 'active');
            $query = $this->db->get();
            return $result = $query->result_array();
	    }

        public function getbyCategory($Category)
	    {
            $this->db->select('Id, R_Name, Category, S_Type, Phone_No, Email, City, Address, Pincode');
            $this->db->from('listing');
            $this->db->where('Category',$Category);
            $query = $this->db->get();
            return $result = $query->result_array();
	    }
}