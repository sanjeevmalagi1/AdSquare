<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Subscription extends CI_Controller {

	
        public function __construct()
        {
                parent::__construct();
                
                
        }
	public function index()
	{
            if (($this->session->userdata('logged_in')== TRUE))
            {    
		$this->load->view('Templates/stylesheets.php');
                $this->load->view('Templates/header.php');
                $subscriptions=$this->Subscriptions_model->GetUserSubscriptions($this->session->userdata('ID'));
                $count=0;
                foreach ($subscriptions as $subscription ) {
                    
                    $data[$count]['Days']=$subscription['Days'];
                    $data[$count]['StartDate']=$subscription['StartDate'];
                    $LinkInformation=$this->Links_model->GetLinkInformation($subscription['links_ID']);
                    $data[$count]['Platform']=$this->Platforms_model->GetNameFormID($LinkInformation['Platform']);
                    $data[$count]['Name']=$this->Channels_model->GetNameFormID($LinkInformation['Channel']);
                    $data[$count]['Slot']=$LinkInformation['Slot'];
                    $data[$count]['Link']=$LinkInformation['Link'];
                   
                    $count++;
                }
               // print_r($data[1]);
                $this->load->view('Templates/Leftmenu.php');
                $this->load->view('Dashboard/titlebar.php');
                if(isset($data)){
                    $subscription_data['Subscriptions']=$data;
                    $this->load->view('Subscription/content.php',$subscription_data);
                }
                
                $this->load->view('Templates/scripts.php');
            }
            else
            {   
                
                redirect(base_url().'index.php/');
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