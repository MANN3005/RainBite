<?php 
    class Contact_model extends CI_Model {

        public function contactus($insert){
            $this->db->insert('contactus', $insert);
            return $this->db->insert_id();
        }

}