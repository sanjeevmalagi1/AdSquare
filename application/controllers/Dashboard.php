<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
    
        public function __construct()
        {
                parent::__construct();
                $this->load->model('Links_model');
                
        }
	public function index()
	{
		$this->load->view('Templates/stylesheets.php');
                $this->load->view('Templates/header.php');
                
                $this->load->view('Templates/Leftmenu.php');
                $this->load->view('Dashboard/titlebar.php');
                $data['Items']=$this->Links_model->GetPlatforms();
                $data['ItemType']="Platform";
                $data['title']="Order Ads subscriptions";
                $this->load->view('Dashboard/content.php',$data);
                $this->load->view('Templates/scripts.php');
                 
	}
}