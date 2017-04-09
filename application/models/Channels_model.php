<?php
class Channels_model extends CI_Model {

        

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->load->database();
        }

        public function GetNameImgFormID($channelID) {
            
                
                $this->db->select('Name,imgLink')->where('ID',$channelID);
                
                $query = $this->db->get('channels');
                return $query->row_array();
                
               
        }
        
         public function GetNameFormID($channelID) {
            
                
                $this->db->select('Name')->where('ID',$channelID);
                
                $query = $this->db->get('channels');
                $result= $query->row_array();
                return $result['Name'];
                
               
        }
        
        public function GetIDFromName($channelName) {
            
                
            $this->db->select('ID')->where('Name',$channelName);

            $query = $this->db->get('channels');
            return $query->row_array();
                
               
        }
        
        public function GetPlatformFromID($ID){
            $this->db->select('Platform')->where('ID',$ID);
                
            $query = $this->db->get('channels');
            $result= $query->row_array();
            return $result['Platform'];
                
        }
        
        public function AddChannel($platform,$channel) {
            
            $data = array(
            'Platform' => $platform,
            'Name' => $channel,
            'imgLink' => 'asset/img/avatar3.png'
            );

            $this->db->insert('channels', $data);
            
        }
        
         public function GetAllChannels(){
            $this->db->select('ID,Name,imgLink');
                
            $query = $this->db->get('channels');
            return $query->result_array();
        }
        
        public function RemoveChannel($channelID) {
            $this->db->where('ID', $channelID);
            $this->db->delete('channels');
        }
        
         public function RemoveChannel_platform($platformID) {
            $this->db->where('Platform', $platformID);
            $this->db->delete('channels');
        }
        
        public function UpdateChannel($channelID,$name) {
            $data = array(
                        'Name' => $name
                    );

            $this->db->where('ID', $channelID);
            $this->db->update('channels', $data);
        }
}        