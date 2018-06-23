<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

class Login extends CI_Controller
{
	
	
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		/*cash control*/
		$this->output->set_header('Last-Modified: ' . gmdate("D, d M Y H:i:s") . ' GMT');
		$this->output->set_header('Cache-Control: no-store, no-cache, must-revalidate, post-check=0, pre-check=0');
		$this->output->set_header('Pragma: no-cache');
		$this->output->set_header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
		
	}
	
	/***default functin, redirects to login page if no admin logged in yet***/
	public function index()
	{

            
        if ($this->session->userdata('admin_login') == 1)
			redirect(base_url() . 'index.php?admin/dashboard', 'refresh');                 
		
		if ($this->session->userdata('manager_login') == 1)
			redirect(base_url() . 'index.php?manager/dashboard', 'refresh');
            
		if ($this->session->userdata('employee_login') == 1)
			redirect(base_url() . 'index.php?employee/dashboard', 'refresh');
		
		
		
		$config = array(
			array(
				'field' => 'name',
				'label' => 'Name',
				'rules' => 'required|xss_clean'
			),
			array(
				'field' => 'password',
				'label' => 'Password',
				'rules' => 'required|xss_clean|callback__validate_login'
			)
		);
		
		$this->form_validation->set_rules($config);
		$this->form_validation->set_message('_validate_login',' Login failed!');
		$this->form_validation->set_error_delimiters('<div class="alert alert-error">
								<button type="button" class="close" data-dismiss="alert">×</button>', '</div>');
		
		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login');
		} else {
			log_message('error', "Login success"
					." - login type = ".$this->session->userdata('login_type')
					." - name = ".$this->session->userdata('user_name'));
			if ($this->session->userdata('admin_login') == 1)
				redirect(base_url() . 'index.php?admin/dashboard', 'refresh');                 
			
			if ($this->session->userdata('manager_login') == 1)
				redirect(base_url() . 'index.php?manager/dashboard', 'refresh');
	            
			if ($this->session->userdata('employee_login') == 1)
				redirect(base_url() . 'index.php?employee/dashboard', 'refresh');
		}
		
	}
	
	/***validate login****/
	function _validate_login($str)
	{
		$query = $this->db->get_where('users', array(
			'name' => $this->input->post('name'),
			'password' => $this->input->post('password')
		));
		if ($query->num_rows() > 0) {
			$row = $query->row();
			
			$this->session->set_userdata('login_type', $row->account_type); //admin, manager or employee
			$this->session->set_userdata($row->login_type, '1');  //admin_login , manager_login, or employee_login
			$this->session->set_userdata('user_id', $row->user_id);			
			$this->session->set_userdata('user_name', $row->name);			

			return TRUE;
		} else {
			log_message('error', "Login failed");
			$this->session->set_flashdata('flash_message', 'Login Failed');
			return FALSE;
		}
	}
	/*******LOGOUT FUNCTION *******/
	function logout()
	{
		log_message('error', "logout"
					." - login type = ".$this->session->userdata('login_type')
					." - name = ".$this->session->userdata('user_name'));
		$this->session->unset_userdata();
		$this->session->sess_destroy();
		$this->session->set_flashdata('flash_message', 'Logout');
		redirect(base_url() . 'index.php?login', 'refresh');
	}
	
	/***DEFAULT NOR FOUND PAGE*****/
	function four_zero_four()
	{
		$this->load->view('four_zero_four');
	}
	
}
