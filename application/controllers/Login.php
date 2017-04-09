<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
                $this->load->view('LogIn/Form.php');
                $this->load->view('Templates/scripts.php');
                if($_SERVER['REQUEST_METHOD']=='POST')
                {
                    $result=$this->Users_model->CheckUser($this->input->post('validate_username'),$this->input->post('validate_password'));
                    
                    if($result === "user found")
                    {
                        $sessiondata=$this->Users_model->GetUserSessionData($this->input->post('validate_username'));
                        $session = array(
                                    'ID'  => $sessiondata['ID'],
                                    'FirstName'  => $sessiondata['FirstName'],
                                    'LastName'  => $sessiondata['LastName'],
                                    'Email'  => $sessiondata['Email'],
                                    'Username'  => $this->input->post('validate_username'),
                                    'Type'  => $sessiondata['Type'],
                                    'logged_in' => TRUE
                                    );

                        $this->session->set_userdata($session);
                        redirect(base_url().'index.php/Platform/');
                        
                    }
                }
            }
            else {
                redirect(base_url().'index.php/Platform/');
            }
	}
        
        public function LogOut()
        {
            $this->session->sess_destroy();
            redirect(base_url().'index.php/LogIn');
        }
        
}