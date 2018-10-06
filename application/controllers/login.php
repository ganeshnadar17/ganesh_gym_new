<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
	
	function __construct(){
        parent::__construct();
        $this->check_isvalidated();
		$this->load->model('auth_model');
		$this->load->library('session');
    }
	
	public function index($msg = NULL){
        // Load our view to be displayed
        // to the user
		$this->load->helper('url');
		$this->load->helper('html');
		$this->load->model('auth_model');
        $data['msg'] = $msg;
        $this->load->view('login');
    }
	
	public function process()
	{
		$result = $this->auth_model->validate();
		if(!$result){
            // If user did not validate, then show them login page again
            $msg = '<font color=red>Invalid username and/or password.</font><br />';
            $this->index($msg);
        }else{
			redirect('home');
        } 
	}
		
	private function check_isvalidated()
	{
        if($this->session->userdata('validated')){
            redirect('home');
		}
    }
}
?>