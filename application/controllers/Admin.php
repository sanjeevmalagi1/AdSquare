<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	
    
        public function __construct()
        {
                parent::__construct();
                $this->load->model('Users_model');
                $this->load->model('Links_model');
                $this->load->model('Platforms_model');
                $this->load->model('Subscriptions_model');
                
        }
	public function MembershipRequests()
	{
            if(($this->session->userdata('logged_in')== TRUE)&& ($this->session->userdata('Type')=== 'admin'))
            {    
		$this->load->view('Templates/stylesheets.php');
                $this->load->view('Templates/header.php');
                
                $this->load->view('Templates/Leftmenu.php');
                $this->load->view('Dashboard/titlebar.php');
                $data['Users']=$this->Users_model->GetMembershipRequests_ForAdmin();
                
                $this->load->view('Admin/MembershipRequests.php',$data);
                $this->load->view('Templates/scripts.php');
            }
            else
            {
                redirect(base_url());
            }
                 
	}
        
        public function Confirm($userID) {
            if(($this->session->userdata('logged_in')== TRUE)&& ($this->session->userdata('Type')=== 'admin'))
            {
                $this->Users_model->ConfirmUser_ForAdmin($userID);
                redirect(base_url().'index.php/Admin/MembershipRequests');
            }
            else
            {
                redirect(base_url());
            }
               
        }
        
        public function Remove($userID) {
            if(($this->session->userdata('logged_in')== TRUE)&& ($this->session->userdata('Type')=== 'admin'))
            {
                $this->Users_model->RemoveUser_ForAdmin($userID);
                redirect(base_url().'index.php/Admin/ManageMembers');
            }
            else
            {
                redirect(base_url());
            }
               
        }
        
        public function ManageMembers()
        {
            if(($this->session->userdata('logged_in')== TRUE)&& ($this->session->userdata('Type')=== 'admin'))
            {    
		$this->load->view('Templates/stylesheets.php');
                $this->load->view('Templates/header.php');
                
                $this->load->view('Templates/Leftmenu.php');
                $this->load->view('Dashboard/titlebar.php');
                $data['Users']=$this->Users_model->GetMembers_ForAdmin();
                
                $this->load->view('Admin/ManageMembers.php',$data);
                $this->load->view('Templates/scripts.php');
            }
            else
            {
                redirect(base_url());
            }
        }
        
        public function AddPlatform() {
            if(($this->session->userdata('logged_in')== TRUE)&& ($this->session->userdata('Type')=== 'admin'))
            {    
		$this->load->view('Templates/stylesheets.php');
                $this->load->view('Templates/header.php');
                
                $this->load->view('Templates/Leftmenu.php');
                $this->load->view('Dashboard/titlebar.php');
                if($_SERVER['REQUEST_METHOD']=='POST')
                {   
                    
                    if (!empty($_FILES)) {
                            $tempFile = $_FILES['file']['tmp_name'];
                            $fileName = $_FILES['file']['name'];
                            $targetPath = getcwd() . '/uploads/';
                            $targetFile = $targetPath . $fileName ;
                            move_uploaded_file($tempFile, $targetFile);

                            {
                                if($this->Platforms_model->AddPlatform($this->input->post('validate_platform_name'),$this->input->post('image-data')))
                                {
                                    print_r($fileName);
                                }
                                
                                
                            }

                    }
                }
                
                $this->load->view('Admin/AddPlatform.php');
                $this->load->view('Templates/scripts.php');
            }
            else
            {
                redirect(base_url());
            }
        }
        
        public function EditPlatform() {
            if(($this->session->userdata('logged_in')== TRUE)&& ($this->session->userdata('Type')=== 'admin'))
            {    
		$this->load->view('Templates/stylesheets.php');
                $this->load->view('Templates/header.php');
                
                $this->load->view('Templates/Leftmenu.php');
                $this->load->view('Dashboard/titlebar.php');
                if($_SERVER['REQUEST_METHOD']=='POST')
                {
                    if($this->Platforms_model->UpdatePlatform($this->input->post('validate_platform_id'),$this->input->post('validate_platform_name')))
                    {
                        redirect(base_url());
                    }
                }
                $platforms=$this->Platforms_model->GetAllPlatforms();
                $count=0;
                
                foreach ($platforms as $platform) {
                    $content['Items'][$count]=$platform;
                    $count++;
                }
                $this->load->view('Admin/EditPlatform.php',$content);
                $this->load->view('Templates/scripts.php');
            }
            else
            {
                redirect(base_url());
            }
        }
        
        public function RemovePlatform($platform=NULL) {
            if(($this->session->userdata('logged_in')== TRUE)&& ($this->session->userdata('Type')=== 'admin'))
            {    
		$this->load->view('Templates/stylesheets.php');
                $this->load->view('Templates/header.php');
                
                $this->load->view('Templates/Leftmenu.php');
                $this->load->view('Dashboard/titlebar.php');
                if($platform == NULL)
                {
                    $platforms=$this->Platforms_model->GetAllPlatforms();
                    $count=0;
                    $content['title']="Remove Platforms";
                    foreach ($platforms as $platform) {
                        $content['Items'][$count]=$platform;
                        $content['Items'][$count]['generatedLink']=  base_url().'index.php/Admin/RemovePlatform/'.$platform['ID'];
                        $count++;
                    }
                    $this->load->view('Dashboard/content.php',$content);
                }
                else
                {
                    $this->Platforms_model->RemovePlatform($platform);
                    $this->Links_model->RemoveLink_platform($platform);
                    $this->Channels_model->RemoveChannel_platform($platform);
                    redirect(base_url().'index.php/Admin/RemovePlatform');
                }
                
                $this->load->view('Templates/scripts.php');
            }
            else
            {
                redirect(base_url());
            }
        }
        
        public function AddChannel() {
            if(($this->session->userdata('logged_in')== TRUE)&& ($this->session->userdata('Type')=== 'admin'))
            {    
		$this->load->view('Templates/stylesheets.php');
                $this->load->view('Templates/header.php');
                
                $this->load->view('Templates/Leftmenu.php');
                if($_SERVER['REQUEST_METHOD']=='POST')
                {
                    $platform=$this->input->post('validate_platform');
                    $channel=$this->input->post('validate_channelname');
                    if($this->Channels_model->AddChannel($platform,$channel))
                    {
                        ;
                    }
                }
                $this->load->view('Dashboard/titlebar.php');
                $data['platforms']=$this->Platforms_model->GetAllPlatforms();
                
                $this->load->view('Admin/AddChannel.php',$data);
                $this->load->view('Templates/scripts.php');
            }
            else
            {
                redirect(base_url());
            }
        }
        
        public function EditChannel() {
            if(($this->session->userdata('logged_in')== TRUE)&& ($this->session->userdata('Type')=== 'admin'))
            {    
		$this->load->view('Templates/stylesheets.php');
                $this->load->view('Templates/header.php');
                
                $this->load->view('Templates/Leftmenu.php');
                $this->load->view('Dashboard/titlebar.php');
                if($_SERVER['REQUEST_METHOD']=='POST')
                {
                    if($this->Channels_model->UpdateChannel($this->input->post('validate_channel_id'),$this->input->post('validate_channel_name')))
                    {
                        redirect(base_url());
                    }
                }
                $channels=$this->Channels_model->GetAllChannels();
                $count=0;
                
                foreach ($channels as $channel) {
                    $content['Items'][$count]=$channel;
                    $content['Items'][$count]['Platform']=$this->Platforms_model->GetNameFormID($channels=$this->Channels_model->GetPlatformFromID($channel['ID']));
                   
                    $count++;
                }
                $this->load->view('Admin/EditChannel.php',$content);
                $this->load->view('Templates/scripts.php');
            }
            else
            {
                redirect(base_url());
            }
        }
        
        public function RemoveChannel($channel=NULL) {
            if(($this->session->userdata('logged_in')== TRUE)&& ($this->session->userdata('Type')=== 'admin'))
            {    
		$this->load->view('Templates/stylesheets.php');
                $this->load->view('Templates/header.php');
                
                $this->load->view('Templates/Leftmenu.php');
                $this->load->view('Dashboard/titlebar.php');
                if($channel == NULL)
                {
                    $channels=$this->Channels_model->GetAllChannels();
                    $count=0;
                    $content['title']="Remove Channel";
                    foreach ($channels as $channel) {
                        $content['Items'][$count]=$channel;
                        $content['Items'][$count]['generatedLink']=  base_url().'index.php/Admin/RemoveChannel/'.$channel['ID'];
                        $count++;
                    }
                    $this->load->view('Dashboard/content.php',$content);
                }
                else
                {
                    $this->Channels_model->RemoveChannel($channel);
                    $this->Links_model->RemoveLink_channel($channel);
                    redirect(base_url().'index.php/Admin/RemoveChannel');
                }
                
                $this->load->view('Templates/scripts.php');
            }
            else
            {
                redirect(base_url());
            }
        }
        
        public function AddSlot() {
            if(($this->session->userdata('logged_in')== TRUE)&& ($this->session->userdata('Type')=== 'admin'))
            {    
		$this->load->view('Templates/stylesheets.php');
                $this->load->view('Templates/header.php');
                
                $this->load->view('Templates/Leftmenu.php');
                if($_SERVER['REQUEST_METHOD']=='POST')
                {
                    $slot=$this->input->post('validate_slotname');
                    $channel=$this->input->post('validate_channel');
                    $platform=$this->Channels_model->GetPlatformFromID($channel);
                    $link=$this->input->post('validate_link');
                    if($this->Links_model->AddSlots($platform,$channel,$slot,$link))
                    {
                        ;
                    }
                }
                $this->load->view('Dashboard/titlebar.php');
                $data['channels']=$this->Channels_model->GetAllChannels();
                $this->load->view('Admin/AddSlots.php',$data);
                $this->load->view('Templates/scripts.php');
            }
            else
            {
                redirect(base_url());
            }
        }
        
        public function EditSlot() {
            if(($this->session->userdata('logged_in')== TRUE)&& ($this->session->userdata('Type')=== 'admin'))
            {    
		$this->load->view('Templates/stylesheets.php');
                $this->load->view('Templates/header.php');
                
                $this->load->view('Templates/Leftmenu.php');
                $this->load->view('Dashboard/titlebar.php');
                if($_SERVER['REQUEST_METHOD']=='POST')
                {
                    if($this->Links_model->UpdateLink($this->input->post('validate_slot_id'),$this->input->post('validate_slot_name')))
                    {
                        redirect(base_url());
                    }
                }
                $slots=$this->Links_model->GetAllSlots();
                $count=0;
                
                foreach ($slots as $slot) {
                    $content['Items'][$count]=$slot;
                    $content['Items'][$count]['Channel']=$this->Channels_model->GetNameFormID($slot['Channel']);
                    $content['Items'][$count]['Platform']=$this->Platforms_model->GetNameFormID($slot['Platform']);
                    //print_r($content['Items']);
                    $count++;
                }
                $this->load->view('Admin/EditSlot.php',$content);
                $this->load->view('Templates/scripts.php');
            }
            else
            {
                redirect(base_url());
            }
        }
        
        public function RemoveSlot($slot=NULL) {
            if(($this->session->userdata('logged_in')== TRUE)&& ($this->session->userdata('Type')=== 'admin'))
            {    
		$this->load->view('Templates/stylesheets.php');
                $this->load->view('Templates/header.php');
                
                $this->load->view('Templates/Leftmenu.php');
                $this->load->view('Dashboard/titlebar.php');
                if($slot == NULL)
                {
                    $slots=$this->Links_model->GetAllSlots();
                    $count=0;
                    $content['title']="Remove Slot";
                    foreach ($slots as $slot) {
                        $content['Items'][$count]['Name']=$slot['Slot'];
                        $content['Items'][$count]['imgLink']=$slot['Slot'];
                        $content['Items'][$count]['generatedLink']=  base_url().'index.php/Admin/RemoveSlot/'.$slot['ID'];
                        $count++;
                    }
                    $this->load->view('Dashboard/content.php',$content);
                }
                else
                {
                   
                    $this->Links_model->RemoveLink($slot);
                    redirect(base_url().'index.php/Admin/RemoveSlot');
                }
                
                $this->load->view('Templates/scripts.php');
            }
            else
            {
                redirect(base_url());
            }
        }
        
        
        public function ViewUser($userID) {
            if(($this->session->userdata('logged_in')== TRUE)&& ($this->session->userdata('Type')=== 'admin'))
            {    
                $profiledata['Profiledata']=$this->Users_model->GetUserProfileData_ForAdmin($userID);
                $subscriptions=$this->Subscriptions_model->GetUserSubscriptions($userID);
                $count=0;
                foreach ($subscriptions as $subscription ) {
                    
                    $data[$count]['Days']=$subscription['Days'];
                    $data[$count]['StartDate']=$subscription['StartDate'];
                    $LinkInformation=$this->Links_model->GetLinkInformation($subscription['links_ID']);
                    $data[$count]['Platform']=$LinkInformation['Platform'];
                    $data[$count]['Name']=$LinkInformation['Name'];
                    $data[$count]['Slot']=$LinkInformation['Slot'];
                    $data[$count]['Link']=$LinkInformation['Link'];
                   
                    $count++;
                }
		$this->load->view('Templates/stylesheets.php');
                $this->load->view('Templates/header.php');
                
                $this->load->view('Templates/Leftmenu.php');
                $this->load->view('Dashboard/titlebar.php');
                $this->load->view('Admin/ViewProfile.php',$profiledata);
                if(isset($data)){
                    $subscription_data['Subscriptions']=$data;
                    $this->load->view('Subscription/content.php',$subscription_data);
                }
                $this->load->view('Templates/scripts.php');
            }
            else
            {
                redirect(base_url());
            }
        }
        
}