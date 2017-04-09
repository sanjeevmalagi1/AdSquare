<?php

class Imglinks_model extends CI_Model {

        

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->load->database();
        }

        public function GetImgLink($data) {
            
                
                $this->db->select('imgLink')->where('Name',$data);
                $query = $this->db->get('imgLinks');
                if($result =$query->result_array())
                {
                    return $result[0]['imgLink'];
                }
                return "asset/img/avatar.jpg";
                
               
        }
        
        

}
