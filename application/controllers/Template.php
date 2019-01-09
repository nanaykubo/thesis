<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Template extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct()
	{
		parent :: __construct();
		$this -> load -> model('getinfo','m');
	}

	function login()
	{
		$this->load->view('template/login');	
	}

	function index()
	{
		$this->load->view('template/try');	
	}

	function login_validation()
	{
		if($this->input->post('login')){
			$username = $this->input->post('txtUsername');
			$password = $this->input->post('txtPassword');

			if($this->m->can_login($username,$password))
			{
				$this->session->set_userdata("username", $username);
				$this->session->set_userdata("password", $password);
				$this->session->set_userdata("logged_in", true);

				redirect('template/logged');	
			}
		}

		$this->session->set_flashdata('error_msg', 'Incorrect Username and Password');
		redirect(base_url('template/login'));
	}

	public function logged()
	{	
		if($this->session->userdata('logged_in')){
			$get= $this->m->getHCID(
				$this->session->userdata('username')
			   ,$this->session->userdata('password')
			);

			$myvars = $get[0]->HCID;

			$hname['hname'] = $this->m->getHCName($myvars);
			$fdata['finfo'] = $this->m->getHCInfo($myvars);

			$data['data'] = array($hname,$fdata);
			$this->load-> view('template/dashboard',$data);
		}	
	}

	public function tables()
	{
		$this->load->view('template/examples/tables');
	}

	public function records()
	{
		$this->load->view('template/records');		
	}

	public function reports()
	{
		$this->load->view('template/reports');		
	}

	public function addpatient()
	{
		$this->load-> view('template/addpatient');
	}

	public function getEventDatatable()
	{
	$getdata = $this->m->ajax();
	$data = array();
	foreach ($getdata as $value)
	{
		$row = array();
		$row[] = $value->code;
		$row[] = $value->HCID;
		$row[] = $value->Name;
		$data[] = $row;
	}

	$output = array(
		"data" => $data,
	);

	echo json_encode($output);
	}

	public function family()
	{
		$this->load->view('template/family');		
	}
}
