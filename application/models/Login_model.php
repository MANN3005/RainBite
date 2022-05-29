<?php 
    class Login_model extends CI_Model {

        public function __construct() {        
            parent::__construct();
            $this->load->database();
        }

        private function verify_password_hash($password, $hash) {
            if(md5($password) == $hash){
                return true;
            }
            return false;
        }

        public function resolve_user_login($username, $password) {
            $this->db->select('Password');
            $this->db->from('user');
            $this->db->where('Email', $username);
            
            $hash = $this->db->get()->row('Password');
            
            return $this->verify_password_hash($password, $hash);        
        }

        public function get_user($userName) {        
            $this->db->select('Id,Name,LastName,Email,PhoneNumber,Role');
            $this->db->from('user');
            $this->db->where('Email', $userName);
            return $this->db->get()->row();            
        }
         public function get_Restaurant_Id($userName) {        
            $this->db->select('Id');
            $this->db->from('listing');
            $this->db->where('Email', $userName);
            return $this->db->get()->row();            
        }
    }