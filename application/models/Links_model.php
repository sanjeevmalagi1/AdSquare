<?php

class Links_model extends CI_Model {

        

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->load->database();
        }

        public function GetPlatforms() {
            
                
                $this->db->select('Platform');
                $this->db->distinct();
                $query = $this->db->get('links');
                return $query->result_array();
                
               
        }
        
        public function GetChannels($platform){
            
                $this->db->select('Channel')->where('Platform',$platform);
                $this->db->distinct();
                $query = $this->db->get('links');
                return $query->result_array();
                
        }
        
        public function GetSlots($channel){
            
                $this->db->select('ID,Slot,Link')->where('Channel',$channel);
                
                $query = $this->db->get('links');
                return $query->result_array();
                
        }
        
        public function GetAllSlots(){
            
                $this->db->select('ID,Slot,Link,Platform,Channel');
                
                $query = $this->db->get('links');
                return $query->result_array();
                
        }
        
        public function GetLinkInformation($ID) {
                $this->db->select('Platform,Channel,Slot,Link')->where('ID',$ID);
                
                $query = $this->db->get('links');
                return $query->row_array();
        }
        
        public function AddSlots($platform,$channel,$slot,$link){
            $data = array(
            'Platform' => $platform,
            'Channel' => $channel,
            'Slot' => $slot,
            'Link' => $link
            
            );

            $this->db->insert('links', $data);
        }
        
        public function RemoveLink_platform($platform) {
            $this->db->where('Platform', $platform);
            $this->db->delete('links');
        }
        
        public function RemoveLink_channel($channel) {
            $this->db->where('Channel', $channel);
            $this->db->delete('links');
        }
        
        public function RemoveLink($ID) {
            $this->db->where('ID', $ID);
            $this->db->delete('links');
        }
        
        public function UpdateLink($LinklID,$name) {
            $data = array(
                        'Slot' => $name
                    );

            $this->db->where('ID', $LinklID);
            $this->db->update('links', $data);
        }

}
