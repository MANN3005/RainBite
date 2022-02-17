<?php 
    class Signup_model extends CI_Model {

        public function signup($insert){
            $this->db->insert('user', $insert);
            return $this->db->insert_id();
        }

}