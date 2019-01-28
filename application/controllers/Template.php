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
		redirect('template/login');
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

	public function test()
	{
		$this->load-> view('template/try');
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

	public function getFDesc()
	{
		$data = $this->input->post();

		$getFam = $this->m->getFam($data['FNo']);

		foreach ($getFam as $value) 
		{
			$row = array();
			$row[0] = $value->ID;
			$row[1] = $value->LN;
			$row[2] = $value->FN;
			$row[3] = $value->MN;
			$row[4] = $value->Relation;
			$data2[] = $row;
		}

		echo json_encode($data2);
	}

	public function getRecords()
	{
		if($this->session->userdata('logged_in')){
			$get= $this->m->getUser(
				$this->session->userdata('username')
			   ,$this->session->userdata('password')
			);

			$this->load->library('upload');

			$portid = $this->uri->segment(3);
			$patientinfo['pinfo'] = $this->m->getInfoID($portid);
			$userlist['userlist'] = $get;
			$precords['precords'] =	$this->m->getallRecords($portid);

			$data['data'] = array($patientinfo,$userlist,$precords);

			$this->load-> view('template/records',$data);
		}	
	}

	public function testsubmit()
	{
		$result = $this->m->testsubmit();
		redirect(base_url('template/test'));
	}

	public function deletePInfo()
	{
		$portid = $this->uri->segment(3);
		$code = $this->uri->segment(4);
		$note = $this->uri->segment(5);
		$note2 = urldecode($note);
		$date = $this->uri->segment(6);
		$result = $this->m->delete($portid,$code,$note2,$date);
		redirect(base_url('template/addpatient'));
	}

	public function deleteFam()
	{
		$portid = $this->uri->segment(3);
		$code = $this->uri->segment(4);
		$note = $this->uri->segment(5);
		$date = $this->uri->segment(6);
		$result = $this->m->deletefam($portid,$code,$note,$date);
		redirect(base_url('template/family'));
	}

	public function pRecords()
	{
		$something = $this->input->post('txtID');

		$config['upload_path']   = './uploads/';
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']      = 0;

		$this->load->library('upload', $config);
		$this->upload->do_upload('inputBlob');
		$data_upload_files = $this->upload->data();

		$image = $data_upload_files[full_path]; 

		$result = $this->m->addPRecords($image);
		redirect(base_url('template/getRecords/'.$something));
	}

	public function submitNewRecords()
	{
		$result = $this->m->addNewRecords();
		redirect(base_url('template/addpatient'));
	}

	public function submitFamilyRecords()
	{
		$result = $this->m->addNewFamilyRecords();
		redirect(base_url('template/family'));
	}

	public function updateNewRecords()
	{
		$result = $this->m->update();
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
		$data = $this->input->post();

		$values = $this->m->getInfoID($data['ID']);

		foreach ($values as $value) {
			$row = array();
			$row[0] = $value->ID;
			$row[1] = $value->FN;
			$row[2] = $value->MN;
			$row[3] = $value->LN;
			$row[4] = $value->Status;
			$row[5] = $value->Sex;
			$row[6] = $value->Religion;
			$row[7] = $value->BirthDate;
			$row[8] = $value->Type;
			$row[9] = $value->Age;
			$row[10] = $value->Nationality;
			$row[11] = $value->CivilStatus;
			$row[12] = $value->Philhealth;
			$row[13] = $value->familyno;
			$row[14] = $value->Address;
			$row[15] = $value->Brgy;
			$row[16] = $value->St;
			$row[17] = $value->City;
			$row[18] = $value->Zipcode;
			$row[19] = $value->Landline;
			$row[20] = $value->Remarks;
			$row[20] = $value->HCID;
			$data2[] = $row;
		}
		
		echo json_encode($data2);
	}

	public function getAnnual()
	{
	$data = $this->input->post();

	$Year = $this->m->getAnnual($data['Year']);

	$output = array(
		"data" => $Year,
	);

	echo json_encode($output);
	}

	public function getQuarter()
	{
	$data = $this->input->post();

	$Year = $data['Year'];
	$Quarter = $data['Quarter'];

	$result = $this->m->getQuarter($Year,$Quarter);

	$output = array(
		"data" => $result,
	);

	echo json_encode($output);
	}

	public function getMonth()
	{
	$data = $this->input->post();

	$Month = $data['Month'];
	$Year = $data['Year'];

	$result = $this->m->getMonth($Month,$Year);

	$output = array(
		"data" => $result,
	);

	echo json_encode($output);
	}

	public function getCustom()
	{
	$data = $this->input->post();

	$start = $data['Start'];
	$end = $data['End'];

	$result = $this->m->getCustom($start,$end);

	$output = array(
		"data" => $result,
	);

	echo json_encode($output);
	}

	public function getLogs($code)
	{
	$getdata = $this->m->getLogs($code);
	$data = array();
	foreach ($getdata as $value)
	{
		$row = array();
		$row[] = $value->activity;
		$row[] = $value->date;
		$data[] = $row;
	}

	$output = array(
		"data" => $data,
	);

	echo json_encode($output);
	}

	public function getTest()
	{
	$data = $this->input->post();

	$txtYear = $this->m->getAnnual($data['Year']);

	print_r($txtYear);
	}

	public function getEventDatatable($code)
	{
	$getdata = $this->m->ajax($code);
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
		$data[] = $row;
	}

	$output = array(
		"data" => $data,
	);

	echo json_encode($output);
	}

	public function getFamilyCode($HCID)
	{
	$getdata = $this->m->family($HCID);
	$data = array();
	foreach ($getdata as $value)
	{
		$row = array();
		$row[] = $value->familyno;
		$row[] = $value->LN;
		$row[] = $value->FN;
		$row[] = $value->MN;
		$row[] = array(
                    $value->Brgy,
                    $value->St,
                    $value->City               
               );
		$data[] = $row;
	}

	$output = array(
		"data" => $data,
	);

	echo json_encode($output);
	}

	public function family()
	{
		if($this->session->userdata('logged_in')){
			$get= $this->m->getUser(
				$this->session->userdata('username')
			   ,$this->session->userdata('password')
			);

		$myvars = $get[0]->HCID;

		$brgylist['brgylist'] = $this->m->getBrgyInfo($myvars);

		$userlist['userlist'] = $get;

		$data['data'] = array($brgylist,$userlist);

		$this->load->view('template/family',$data);		
		}	
	}
}
