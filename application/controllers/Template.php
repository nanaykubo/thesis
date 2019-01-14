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
			$get= $this->m->getUser(
				$this->session->userdata('username')
			   ,$this->session->userdata('password')
			);

			$myvars = $get[0]->HCID;

			$totalpatients= $this->m->getTotalPatients($myvars);
			$totalfamily= $this->m->getTotalFamily($myvars);
			$userlist['userlist'] = $get;

			$data['data'] = array($userlist,$totalpatients,$totalfamily);

			$this->load-> view('template/dashboard',$data);
		}	
	}

	public function test($HCID)
	{
		$totalpatients = $this->m->getTotalFamily($HCID);
		print_r($totalpatients);
	}

	public function getpie($HCID)
	{
			$charts=$this->m->getPieChart($HCID);

			$responce->cols[] = array( 
			"id" => "", 
			"label" => "BRGYID", 
			"pattern" => "", 
			"type" => "string" 
			); 
			$responce->cols[] = array( 
			"id" => "", 
			"label" => "No of Families", 
			"pattern" => "", 
			"type" => "number" 
			); 

			foreach($charts as $cd) 
			{ 
			$responce->rows[]["c"] = array( 
			array( 
			    "v" => "$cd->BRGYID", 
			    "f" => null 
			) , 
			array( 
			    "v" => (int)$cd->total, 
			    "f" => null 	
			) 
			); 
			} 

			echo json_encode($responce); 
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
		if($this->session->userdata('logged_in')){
			$get= $this->m->getUser(
				$this->session->userdata('username')
			   ,$this->session->userdata('password')
			);

			$myvars = $get[0]->HCID;

			$hname['hname'] = $this->m->getHCName($myvars);
			$brgylist['brgylist'] = $this->m->getID($myvars);
			$familylist['famlist'] = $this->m->getFamilyCode($myvars);
			$userlist['userlist'] = $get;

			$data['data'] = array($hname,$brgylist,$familylist,$userlist);

			$this->load-> view('template/addpatient',$data);
		}	
	}

	public function submitNewRecords()
	{
		$result = $this->m->addNewRecords();
		redirect(base_url('template/addpatient'));
	}

	public function checkUsername()
 	{
  	if($this->m->getUsername($_POST['username']))
  	{
  	 echo '<label class="text-danger"><span><i class="fa fa-times" aria-hidden="true">
   </i> This ID is already registered</span></label>';
  	}
 	 else 
 	 {
  	 echo '<label class="text-success"><span><i class="fa fa-check" aria-hidden="true"></i> ID is available</span></label>';
 	 }
 	}

 	public function edit()
	{
		redirect(base_url('template/dashboard'));
	}

	public function getEventDatatable($HCID)
	{
	$getdata = $this->m->ajax($HCID);
	$data = array();
	foreach ($getdata as $value)
	{
		$row = array();
		$row[] = $value->ID;
		$row[] = $value->Status;
		$row[] = $value->LN;
		$row[] = $value->FN;
		$row[] = $value->BirthDate;
		$row[] = $value->Sex;
		$row[] = array(
                    $value->Brgy,
                    $value->St,
                    $value->City               
               );
		$row[] = "<a class='btn btn-sm btn-icon-only text-light' href='#'' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
        <i class='fas fa-ellipsis-v'></i>
      </a>
      <div class='dropdown-menu dropdown-menu-right dropdown-menu-arrow'>
        <a class='dropdown-item' href='records'><i class='fas fa-folder-open'></i>View Records</a>
        <a class='dropdown-item' data-toggle='modal' data-target='#edit' href='#'><i class='fas fa-edit'></i>Edit</a>
        <a class='dropdown-item' href='#''><i class='fas fa-trash-alt'></i>Delete</a>
      </div>";
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
