<?php

class Subscriptions_model extends CI_Model {

        

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->load->database();
        }
        
        public function GetUserSubscriptions($user_ID) {
            $this->db->select('ID,links_ID,StartDate,Days')->where('users_ID',$user_ID);
            $query = $this->db->get('subscriptions');
            $result = $query->result_array();
            return $result;
        }
}
