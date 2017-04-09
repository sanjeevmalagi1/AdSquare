<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

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
                $this->load->model('Users_model');
                
        }
	public function index()
	{
            if(($this->session->userdata('logged_in')== FALSE))
            {    
		$this->load->view('Templates/stylesheets.php');
               // $this->load->view('Templates/header.php');
                //$this->load->view('Templates/Leftmenu.php');
                $this->load->view('SignUp/Form.php');
                $this->load->view('Templates/scripts.php');
                
                if($_SERVER['REQUEST_METHOD']=='POST')
                {
                   echo $_POST['errors'];
                }
            }
            else
            {
                redirect(base_url().'index.php/Platform/');
            }    
	}
        
        public function register()
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
            
        }
}