<?php 
    class Review_model extends CI_Model {

        public function addreview($insert){
            $this->db->insert('reviews', $insert);
            return $this->db->insert_id();
        }

}