<?php

class Users_model extends CI_Model {

        

        public function __construct()
        {
                // Call the CI_Model constructor
                parent::__construct();
                $this->load->database();
        }

        public function AddUser($FirstName,$LastName,$Username,$Password,$Email,$Purpose) {
            $data = array(
                    'FirstName' => $FirstName,
                    'LastName' => $LastName,
                    'Username' => $Username,
                    'Password' => md5($Password),
                    'Email' => $Email,
                    'Purpose' => $Purpose,
                    
                    );

            $this->db->insert('users', $data);
            return 1;
        }
        public function CheckUser($username,$password) {
            $this->db->select('password,Hash')->where('username',$username);
            $query = $this->db->get('users');
            $result=$query->result_array();
            
            if($result)
            {
                if( (md5($password) === $result[0]['password'])&&($result[0]['Hash']))
                {
                    return "user found";
                }
                else 
                {
                    return "password incorrect";
                }
            }
            else
            {
                return "username Incorrect";
            }
        }
        
        public function GetUserSessionData($username)
        {
            $this->db->select('ID,FirstName,LastName,Email,Type')->where('username',$username);
            $query = $this->db->get('users');
            $result = $query->row_array();
            return $result;
        }
        
        public function GetUserProfileData($username)
        {
            $this->db->select('ID,FirstName,LastName,Email,Username,Purpose')->where('username',$username);
            $query = $this->db->get('users');
            $result = $query->row_array();
            return $result;
        }
        
        public function GetMembershipRequests_ForAdmin()
        {
            $this->db->select('ID,FirstName,LastName,Email,Username,Purpose')->where('Hash',!(1));
            $query = $this->db->get('users');
            $result = $query->result_array();
            return $result;
        }
        
        public function ConfirmUser_ForAdmin($userID) {
            $this->db->set('Hash', "1");
            $this->db->where('ID', $userID);
            $this->db->update('users');
        }
        
        public function GetMembers_ForAdmin() {
            $conditons = array('Hash' => 1, 'Type' => 'normal');
            $this->db->select('ID,FirstName,LastName,Email,Username,Purpose')->where($conditons);
            $query = $this->db->get('users');
            $result = $query->result_array();
            return $result;
        }
        
        public function RemoveUser_ForAdmin($userID) {
            $this->db->set('Hash', "");
            $conditons = array('Hash' => 1, 'Type' => 'normal', 'ID' => $userID);
            $this->db->where($conditons);
            $this->db->update('users');
        }
        
        public function GetUserProfileData_ForAdmin($userID){
            $this->db->select('ID,FirstName,LastName,Email,Username,Purpose')->where('ID',$userID);
            $query = $this->db->get('users');
            $result = $query->row_array();
            return $result;
        }
}
