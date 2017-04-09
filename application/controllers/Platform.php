<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Platform extends CI_Controller {
        
        public function __construct()
        {
                parent::__construct();
                $this->load->model('Links_model');
                $this->load->model('Imglinks_model');
                $this->load->model('Platforms_model');
                $this->load->model('Channels_model');
                
        }
        
        public function index($platform= NULL,$channel= NULL,$program = NULL) {
            
            if(($this->session->userdata('logged_in')== TRUE))
            {
                $this->load->view('Templates/stylesheets.php');
                $this->load->view('Templates/header.php');
                
                $this->load->view('Templates/Leftmenu.php');
                $this->load->view('Dashboard/titlebar.php');
                if($platform== NULL)
                {
                   
                    $platforms=$this->Links_model->GetPlatforms();
                    $count=0;
                    foreach ($platforms as $platform) {
                        
                        $result=$this->Platforms_model->GetNameImgFormID($platform['Platform']);
                        $data[$count]['Name']=$result['Name'];
                        $data[$count]['imgLink']=$result['imgLink'];
                        $data[$count]['generatedLink']=  base_url().'index.php/Platform/index/'.$result['Name'];
                        $count++;
                    }
                    $content['Items']=$data;
                    $content['title']="Order Ads subscriptions";
                    $this->load->view('Dashboard/content.php',$content);
                    
                }
                elseif ($channel== NULL)
                {
                   
                    $platformID=$this->Platforms_model->GetIDFromName($platform);                   
                    $channels=$this->Links_model->GetChannels($platformID['ID']);                    
                    $count=0;                    
                    foreach ($channels as $channel) {
                        
                        $result=$this->Channels_model->GetNameImgFormID($channel['Channel']);
                        //print_r($channel['Channel']);
                        $data[$count]['Name']=$result['Name'];
                        $data[$count]['imgLink']=$result['imgLink'];
                        $data[$count]['generatedLink']=  base_url().'index.php/Platform/index/'.$platform.'/'.$result['Name'];
                         
                        $count++;
                    }
                    
                    $content['Items']=$data;
                    $content['title']="Select Channel";
                    $this->load->view('Dashboard/content.php',$content);
                }
                elseif ($program== NULL)
                {
                    $channelID=$this->Channels_model->GetIDFromName($channel);                   
                    $slots=$this->Links_model->GetSlots($channelID['ID']);                    
                    $count=0;                    
                    foreach ($slots as $slot) {
                        
                        $data[$count]['Name']=$slot['Slot'];
                        $data[$count]['imgLink']=$slot['Link'];
                        $data[$count]['generatedLink']=$slot['Link'];
                         
                        $count++;
                        
                    }
                    
                    $content['Items']=$data;
                    $content['title']="Select Program Slots";
                    $this->load->view('Dashboard/content.php',$content);
                }

                $this->load->view('Templates/scripts.php');
            }
            else 
            {
                redirect(base_url().'index.php/LogIn');
            }
        }
	/*
	public function TV($channel = FALSE)
	{
            $this->load->view('Templates/stylesheets.php');
            $this->load->view('Templates/header.php');
            $this->load->view('Templates/Leftmenu.php');
            $this->load->view('Dashboard/titlebar.php');
            if($channel == FALSE)
            {
                $data['Items']=$this->Links_model->GetChannels("TV");
                $data['ItemType']="Name";
                
                $data['title']="Select Channel";
                $this->load->view('Dashboard/content.php',$data);
            }
            else
            {
                $data['Items']=$this->Links_model->GetSlots($channel);
                $data['ItemType']="Link";
                
                $data['title']="Select Program";
                $this->load->view('Dashboard/Table.php',$data);
            }
            
            $this->load->view('Templates/scripts.php');
	}
        
        public function Radio($channel = FALSE)
	{
	    $this->load->view('Templates/stylesheets.php');
            $this->load->view('Templates/header.php');
            $this->load->view('Templates/Leftmenu.php');
            $this->load->view('Dashboard/titlebar.php');
            if($channel == FALSE)
            {
                $data['Items']=$this->Links_model->GetChannels("Radio");
                $data['ItemType']="Name";
                
                $data['title']="Select Channel";
                $this->load->view('Dashboard/content.php',$data);
            }
            else
            {
                $data['Items']=$this->Links_model->GetSlots($channel);
                $data['ItemType']="Link";
                
                $data['title']="Select Program";
                $this->load->view('Dashboard/Table.php',$data);
            }
            
            $this->load->view('Templates/scripts.php');
	}
        
        public function Newspaper($channel = FALSE)
	{
            $this->load->view('Templates/stylesheets.php');
            $this->load->view('Templates/header.php');
            $this->load->view('Templates/Leftmenu.php');
            $this->load->view('Dashboard/titlebar.php');
            if($channel == FALSE)
            {
                $data['Items']=$this->Links_model->GetChannels("NewsPaper");
                $data['ItemType']="Name";
                
                $data['title']="Select Channel";
                $this->load->view('Dashboard/content.php',$data);
            }
            else
            {
                $data['Items']=$this->Links_model->GetSlots($channel);
                $data['ItemType']="Link";
                
                $data['title']="Select Program";
                $this->load->view('Dashboard/Table.php',$data);
            }
            
            $this->load->view('Templates/scripts.php');
	}
        
        public function Banner($channel = FALSE)
	{
            $this->load->view('Templates/stylesheets.php');
            $this->load->view('Templates/header.php');
            $this->load->view('Templates/Leftmenu.php');
            $this->load->view('Dashboard/titlebar.php');
            if($channel == FALSE)
            {
                $data['Items']=$this->Links_model->GetChannels("Banner");
                $data['ItemType']="Name";
                
                $data['title']="Select Channel";
                $this->load->view('Dashboard/content.php',$data);
            }
            else
            {
                $data['Items']=$this->Links_model->GetSlots($channel);
                $data['ItemType']="Link";
                
                $data['title']="Select Program";
                $this->load->view('Dashboard/Table.php',$data);
            }
            
            $this->load->view('Templates/scripts.php');
	}*/
}