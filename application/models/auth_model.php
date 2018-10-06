<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class Auth_model extends CI_Model{
    function __construct(){
			parent::__construct();
			$this->load->helper('date');
    }
	
    public function validate(){
        // grab user input
        $username = $this->security->xss_clean($this->input->post('username'));
        $password = $this->security->xss_clean($this->input->post('password'));
    
        // Prep the query
        $this->db->where('username', $username);
		$this->db->where('password', $password);
        
        // Run the query
        $query = $this->db->get('auth');
		$row = $query->row();
		
        // Let's check if there are any results
		if($row)
        {
            // If there is a user, then create session data
            $data = array(
                    'userid' => $row->id,
                    'name' => $row->name,
                    'email_id' => $row->email_id,
                    'username' => $row->username,
					'role' => $row->role,
                    'validated' => true
                    );
            $this->session->set_userdata($data);
            return true;
        }
        // If the previous process did not validate
        // then return false.
        return false;
    }
	
	public function addPersonalDetails()
	{
		#print_r($_POST); exit;
		$result["user_id"] = $this->session->userdata('userid');
		$result["name"] = $this->input->post("name");
		$result["email_id"] = $this->input->post("email_id");
		$result["number"] = $this->input->post("number");
		$result["password"] = $this->input->post("password");
		$result["member_id"] = $this->input->post("member_id");
		$result["address"] = $this->input->post("address");
		$result["gender"] = $this->input->post("gender");
		$result["role"] = $this->input->post("role");
		$result["status"] = 1;
		$result["id"] = trim($this->input->post("member_id_hidden"));
		if($result["id"] != '')
		{
			$this->db->where('id', $result["id"]);
			$this->db->where('user_id', $result["user_id"]);
			$this->db->update("member_list", $result);
		} else {
			$this->db->insert("member_list", $result);
		}
		return true;
	}
	
	public function allMemberList()
	{
		$result["user_id"] = $this->session->userdata('userid');
		$this->db->where('user_id', $result["user_id"]);
		$query = $this->db->get("member_list");
		$result = $query->result_array();
		return $result;
	}
	
	public function editMemberList()
	{
		$result["user_id"] = $this->session->userdata('userid');
		$result['id'] = $this->input->get('member_id');
		$this->db->where('user_id', $result["user_id"]);
		$this->db->where('id', $result['id']);
		$query = $this->db->get("member_list");
		$result = $query->result_array();
		#print_r($result); exit;;
		return $result;
	}
	
	public function addPlan()
	{
		#print_r($_POST); exit;
		$result["user_id"] = $this->session->userdata('userid');
		$result["plan_name"] = $this->input->post("plan_name");
		$result["plan_code"] = $this->input->post("plan_code");
		$result["id"] = trim($this->input->post("plan_id"));
		if($result["id"] != '')
		{
			$this->db->where('id', $result["id"]);
			$this->db->where('user_id', $result["user_id"]);
			$this->db->update("plan", $result);
		} else {
			$this->db->insert("plan", $result);
		}
		return true;
	}
	
	public function allPlansList()
	{
		$result["user_id"] = $this->session->userdata('userid');
		$this->db->where('user_id', $result["user_id"]);
		$query = $this->db->get("plan");
		$result = $query->result_array();
		return $result;
	}
	
	public function getPlan()
	{
		$result["user_id"] = $this->session->userdata('userid');
		$result['id'] = $this->input->get('member_id');
		$this->db->where('user_id', $result["user_id"]);
		$this->db->where('id', $result['id']);
		$query = $this->db->get("plan");
		$result = $query->result_array();
		#print_r($result); exit;;
		return $result;
	}
	
	public function addTariffPlan()
	{
		#print_r($_POST); exit;
		$result["user_id"] = trim($this->session->userdata('userid'));
		$result["plan_id"] = trim($this->input->post("plan_id"));
		$result["duration"] = trim($this->input->post("duration"));
		$result["price"] = trim($this->input->post("price"));
		$result["offer"] = trim($this->input->post("offer"));
		$result["notes"] = trim($this->input->post("notes"));
		$result["id"] = "";
		if($result["id"] != '')
		{
			$this->db->where('id', $result["id"]);
			$this->db->where('user_id', $result["user_id"]);
			$this->db->update("plan", $result);
		} else {
			$this->db->insert("teriff", $result);
		}
		return true;
	}
	
	public function allTariffPlan()
	{
		$result["user_id"] = $this->session->userdata('userid');
		$this->db->where('t.user_id', $result["user_id"]);
		$this->db->join('plan p', 'p.id = t.plan_id');
		$query = $this->db->get("teriff t");
		$result = $query->result_array();
		return $result;
	}
}
?>