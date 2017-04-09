<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	
        public function __construct()
        {
                parent::__construct();
                $this->load->model('Users_model');
                $this->load->model('Links_model');
                
        }
	public function index()
	{
            if (($this->session->userdata('logged_in')== TRUE))
            {    
		$this->load->view('Templates/stylesheets.php');
                $this->load->view('Templates/header.php');
                
                $profiledata['Profiledata']=$this->Users_model->GetUserProfileData($this->session->userdata('Username'));
                $this->load->view('Templates/Leftmenu.php');
                $this->load->view('Dashboard/titlebar.php');
                $this->load->view('Profile/Customize.php',$profiledata);
                $this->load->view('Templates/scripts.php');
            }
            else
            {
                redirect(base_url());
            }
            
	}
        
        /*public function register()
        {
          
            if($_SERVER['REQUEST_METHOD']=='POST')
            {
                if($this->Users_model->AddUser($this->input->post('validate_firstname'),$this->input->post('validate_lastname'),$this->input->post('validate_username'),$this->input->post('validate_password'),$this->input->post('validate_email'),$this->input->post('purpose')))
                {
                    echo 'User added';
                    
                }
                
                
            }
            else
            {
                echo "This page responds to only post !!ACCESSS Forbidden";
                redirect(base_url());
            }
            
        }*/
}