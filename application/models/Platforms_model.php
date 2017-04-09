<?php
class Platforms_model extends CI_Model {

        

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->load->database();
        }

        public function GetNameImgFormID($platformID) {
            
                
                $this->db->select('Name,imgLink')->where('ID',$platformID);
                
                $query = $this->db->get('platforms');
                return $query->row_array();
                
               
        }
        
         public function GetNameFormID($platformID) {
            
                $this->db->select('Name')->where('ID',$platformID);
                
                $query = $this->db->get('platforms');
                $result= $query->row_array();
                return $result['Name'];
        }
        
        public function GetIDFromName($platformName) {
            
                
                $this->db->select('ID')->where('Name',$platformName);
                
                $query = $this->db->get('platforms');
                return $query->row_array();
                
               
        }
        
        public function AddPlatform($platform,$image)
        {
            $data = array(
            'Name' => $platform,
            'imgLink' => $image
            );

            $this->db->insert('platforms', $data);
        }
        
        public function GetAllPlatforms(){
            $this->db->select('ID,Name,imgLink');
                
            $query = $this->db->get('platforms');
            return $query->result_array();
        }
        
        public function RemovePlatform($platformID) {
            $this->db->where('ID', $platformID);
            $this->db->delete('platforms');
        }
        
        public function UpdatePlatform($platformID,$name) {
            $data = array(
                        'Name' => $name
                    );

            $this->db->where('ID', $platformID);
            $this->db->update('platforms', $data);
        }
                
}        