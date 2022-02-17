<?php 
    class Submit_Restaurant_model extends CI_Model {

        public function addrestaurant($insert){
            $this->db->insert('addrestaurant', $insert);
            return $this->db->insert_id();
        }

}