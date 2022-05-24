<?php 
    class RRegister_model extends CI_Model {

     
        public function list($insert){
            $this->db->insert('Listing', $insert);
            return $this->db->insert_id();
        }

    }
    