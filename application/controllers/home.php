<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
	
	function __construct(){
        parent::__construct();
        $this->check_isvalidated();
		$this->load->model('auth_model');
		$this->load->library('session');
    }
	
	public function index($msg = NULL){
        // Load our view to be displayed
        // to the user
		$data = array();
		$data['breadcrumb'] = 'Home';
		$data['link'] = base_url().'/index.php/home/';
		$this->load->view('dashboard', $data);
		
    }
	
	private function check_isvalidated()
	{
        if(! $this->session->userdata('validated')){
            redirect('login');
        }
    }
	
	public function logOut()
	{
		$this->session->sess_destroy();
        redirect('login');
	}
	
	public function addNewMember()
	{
		$member_id = $this->input->get('member_id');
		if(isset($member_id))
		{
			$data = array();
			$data['breadcrumb'] = 'Edit Member';
			$data['link'] = base_url().'/index.php/home/addNewMember?'.$member_id;
			$data['edit_member_list'] = $this->auth_model->editMemberList();
			$this->load->view('addNewMember', $data);
		} else {
			$data['breadcrumb'] = 'Add Member List';
			$data['link'] = base_url().'/index.php/home/addNewMember';
			$this->load->view('addNewMember', $data);
		}
	}
	
	public function addPersonalDetails()
	{
		$data = $this->auth_model->addPersonalDetails();
		if($data != 1){
			echo "Error while inserting member detail.";
			exit;
		} else {
			redirect('home/addNewMember');
		}
	}
	
	public function allMemberList()
	{
		$data['breadcrumb'] = 'All Member List';
		$data['link'] = base_url().'/index.php/home/allMemberList';
		$data['all_member_list'] = $this->auth_model->allMemberList();
		$this->load->view('allMemberList', $data);
	}
	
	public function edit_member_list()
	{
		$data = $this->input->get('member_id');
		echo $data;
		exit;
	}
	
	public function plan()
	{
		$member_id = $this->input->get('member_id');
		if(isset($member_id))
		{
			$data = array();
			$data['breadcrumb'] = 'Plan';
			$data['link'] = base_url().'/index.php/home/plan?'.$member_id;
			$data['plan_data'] = $this->auth_model->getPlan();
			$this->load->view("plan", $data);
			#redirect('home/allPlansList');
		} else {
			$data['breadcrumb'] = 'Add Plan';
			$data['link'] = base_url().'/index.php/home/plan';
			$this->load->view("plan", $data);
		}
	}
	
	public function addPlan()
	{
		$data = $this->auth_model->addPlan();
		if($data != 1){
			echo "Error while inserting plan detail.";
			exit;
		} else {
			redirect('home/plan');
		}
	}
	
	public function allPlansList()
	{
		$data['breadcrumb'] = 'All Plans List';
		$data['link'] = base_url().'/index.php/home/allPlansList';
		$data['allPlansList'] = $this->auth_model->allPlansList();
		$this->load->view('allPlansList', $data);
	}
	
	public function planTariff()
	{
		$data['breadcrumb'] = 'Plan Tariff';
		$data['allPlansList'] = $this->auth_model->allPlansList();
		$this->load->view("planTariff", $data);
	}
	
	public function addTariffPlan()
	{
		$data = $this->auth_model->addTariffPlan();
		if($data != 1){
			echo "Error while inserting plan detail.";
			exit;
		} else {
			redirect('home/planTariff');
		}
	}
	
	public function allTariffPlan()
	{
		$data['breadcrumb'] = 'All Tariff Plan';
		$data['link'] = base_url().'/index.php/home/allTariffPlan';
		$data['allTariffPlan'] = $this->auth_model->allTariffPlan();
		$this->load->view('allTariffPlan', $data);
	}
	
	public function markAttendance()
	{
		$this->load->view("markAttendance");
	}
}
?>