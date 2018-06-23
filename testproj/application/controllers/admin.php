<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');

/*	
 *	@author : Manar Algenidi
 *	date	: 23 July, 2018
 *	This application is a to do list application which add a new note and list current notes
 */

class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
		/*cache control*/

        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
		$this->load->library('upload');

	}
	
	/***Default function, redirects to login page if no admin logged in yet***/
	public function index()
	{
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
		if ($this->session->userdata('admin_login') == 1)
			redirect(base_url() . 'index.php?admin/dashboard', 'refresh');
	}
	
    /****************************************ADMIN DASHBOARD **************************************************/
	function dashboard()
	{
		// Check that the user is an admin or redirect to login screen
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
			
		// Order yhe notes by note ID so that they appear from oldest to newest then retrieve all notes from database
		$this->db->order_by('note_id', 'asc');
		$page_data['notes']    = $this->db->get('notes')->result_array();
		
		// Set the page details then load the interface of this screen
		$page_data['page_name']  = 'dashboard';
		$page_data['page_title'] = 'Dashboard';
		$this->load->view('index', $page_data);
	}
	
	/****************************************ADMIN Add note **************************************************/
	function addnote($param1 = '')
	{
		// Check that the user is an admin or redirect to login screen
		if ($this->session->userdata('admin_login') != 1)
			redirect(base_url() . 'index.php?login', 'refresh');
		// Creating a new note
		if ($param1 == 'create') {
			
			// Get the parameters from screen and add it to the data array to be inserted in database table
			$data['note']           = $this->input->post('note');
			
			// Insert into table notes, ID is created automatically by DB
			$this->db->insert('notes', $data);
			
			// Raise error on screen if insertion failed and insert it in log file
			$this->session->set_flashdata('flash_message', "Your note has been added...");
			
			redirect(base_url() . 'index.php?admin/addnote', 'refresh');
		}
		// Set the page details then load the interface of this screen
		$page_data['page_name']  = 'addnote';
		$page_data['page_title'] = 'Add Note';
		$this->load->view('index', $page_data);
	}

}