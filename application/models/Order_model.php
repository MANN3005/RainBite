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
        public function getRestaurantDetail($Id)
        {
            $this->db->select('Id, R_Name, Category, S_Type, Phone_No, Email, City, Address, Pincode');
            $this->db->from('listing');    
            $this->db->where('Id',$Id);
            $query = $this->db->get();
            return $result = $query->result_array();
        }
        public function getRestaurantReviews($Id)
        {
            $this->db->select('Id, User_Name, Restaurant_Id, Food_Quality, Service, Price, Punctuality, Rev_Title, Rev_Desc, DATE_FORMAT(Time_added, "%b %d %Y ") as Time_added');
            $this->db->from('reviews');    
            $this->db->where('Restaurant_Id',$Id);
            $query = $this->db->get();
            return $result = $query->result_array();
        }
        public function getRestaurantMenu($Id)
        {
            $this->db->select('Id, Restaurant_Id, Menu_category, Item_Name,Price');
            $this->db->from('menu');    
            $this->db->where('Restaurant_Id',$Id);
            $query = $this->db->get();
            return $result = $query->result_array();
        }
        
        public function Menu($insert){
            $this->db->insert('Menu', $insert);
            return $this->db->insert_id();
        }
        public function getCartItems(){

        }

        public function getRows($proID)
        {
            $this->db->select('Id, Restaurant_Id, Item_Name,Price');
            $this->db->from('menu');    
            $this->db->where('Id',$proID);
            $query = $this->db->get();
            return $result = $query->row_array();
        }
}