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

	function index()
	{
		$this->load->view('Template/login');	
	}

	public function profile()
	{
		if($this->session->userdata('logged_in')){
			$get['userlist']= $this->m->getUser(
				$this->session->userdata('username')
			   ,$this->session->userdata('password')
			);

			$userlist = $get;

			$this->load->view('Template/profile',$userlist);	
		}
	}


	public function logout()
	{
            $this->session->unset_userdata('username','password','logged_in');
            session_destroy();
            redirect(base_url('Template/index'));
	}

	public function addhc()
	{
		if($this->session->userdata('logged_in')){
			$get['userlist']= $this->m->getUser(
				$this->session->userdata('username')
			   ,$this->session->userdata('password')
			);

			$userlist = $get;

			$this->load->view('Template/addhc',$userlist);	

		}
	}

	public function admin()
	{
		if($this->session->userdata('logged_in')){
			$get= $this->m->getUser(
				$this->session->userdata('username')
			   ,$this->session->userdata('password')
			);

			$user['user']=$get;
			$reports['reports']=$this->m->getallReports();
			$data['data']=array($user,$reports);

			$this->load->view('Template/admindb',$data);	
		}
	}

	public function adduser()
	{
		if($this->session->userdata('logged_in')){
			$get= $this->m->getUser(
				$this->session->userdata('username')
			   ,$this->session->userdata('password')
			);

			$admincode['get']=$get;
			$hcid['hcid']=$this->m->getallHCID();
			$data['data']=array($hcid,$admincode);

			$this->load->view('Template/adduser',$data);	
		}
	}

	public function viewlogs()
	{
		if($this->session->userdata('logged_in')){
			$get= $this->m->getUser(
				$this->session->userdata('username')
			   ,$this->session->userdata('password')
			);

			$data['data']=$get;

			$this->load->view('Template/viewlogs',$data);	
		}
	}

	public function insertlogs()
	{
		$result = $this->m->insertLogs();
		redirect(base_url('Template/adduser'));
	}

	public function getallUsers()
	{
			$allInfo= $this->m->getAllInfo();

			foreach ($allInfo as $value) 
			{
			$row = array();
			$row[0] = $value->code;
			$row[1] = $value->HCID;
			$row[2] = $value->FN;
			$row[3] = $value->MN;
			$row[4] = $value->LN;
			$row[5] = $value->POSITION;
			$data2[] = $row;
			}

			$output = array(
			"data" => $data2,
			);

			echo json_encode($output);
	}

	public function getHC()
	{
			$allInfo= $this->m->getHC();

			foreach ($allInfo as $value) 
			{
			$row = array();
			$row[0] = $value->HCID;
			$row[1] = $value->Name;
			$row[2] = $value->Location;
			$row[3] = $value->City;
			$row[4] = $value->combinedsolutions;
			$data[] = $row;
			}

			$output = array(
			"data" => $data,
			);

			echo json_encode($output);
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
				$get= $this->m->getAdmin($username,$password);
				$myvars = $get[0]->POSITION;
				if($myvars == 'ADMIN')
				{
					redirect('Template/admin');	
				}
				else
				{
					redirect('Template/logged');	
				}

			}
			else
			{
			$this->session->set_flashdata('error_msg', 'Incorrect Username and Password');
			redirect('Template/index');
			}
		}

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

			$this->load-> view('Template/dashboard',$data);
		}	
	}

	public function test()
	{
		$this->load-> view('Template/try');
	}

	public function getBarChart($HCID)
	{
		$result = $this->m->getBarChart($HCID);

		foreach ($result as $value) 
			{
			$row = array();
			$row[0] = $value->month;
			$row[1] = $value->total;
			$data2[] = $row;
			}

			echo json_encode($data2);
	}


	public function getpie($HCID)
	{
			$charts=$this->m->getPieChart($HCID);
			
			foreach ($charts as $value) 
			{
			$row = array();	
			$row[0] = $value->BRGY;
			$row[1] = $value->total;
			$data2[] = $row;
			}

			echo json_encode($data2); 
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

			$this->load-> view('Template/addpatient',$data);
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

	public function getFInfo()
	{
		$data = $this->input->post();

		$getFam = $this->m->getFamily($data['FNo']);

		foreach ($getFam as $value) 
		{
			$row = array();	
			$row[0] = $value->familyno;
			$row[1] = $value->LN;
			$row[2] = $value->FN;
			$row[3] = $value->MN;
			$row[4] = $value->Brgy;
			$row[5] = $value->City;
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
			$ai['ai']= $this->m->getAI();
			$precords['precords'] =	$this->m->getallRecords($portid);

			$data['data'] = array($patientinfo,$userlist,$precords,$ai);

			$this->load-> view('Template/records',$data);
		}	
	}

	public function testsubmit()
	{
		$result = $this->m->testsubmit();
		redirect(base_url('Template/test'));
	}

	public function deletePInfo()
	{
		$portid = $this->uri->segment(3);
		$code = $this->uri->segment(4);
		$note = $this->uri->segment(5);
		$note2 = urldecode($note);
		$date = $this->uri->segment(6);
		$result = $this->m->delete($portid,$code,$note2,$date);
		redirect(base_url('Template/addpatient'));
	}

	public function deleteFam()
	{
		$portid = $this->uri->segment(3);
		$code = $this->uri->segment(4);
		$note = $this->uri->segment(5);
		$date = $this->uri->segment(6);
		$result = $this->m->deletefam($portid,$code,$note,$date);
		redirect(base_url('Template/family'));
	}

	
	public function viewRecord()
	{
		$data = $this->input->post();

		$values = $this->m->getImage($data['RNo']);

		foreach ($values as $value) {
			$row = array();
			$row[0] = $value->images;
			$data2[] = $row;
		}
		
		echo json_encode($data2);
	}

	public function reports()
	{
		if($this->session->userdata('logged_in')){
			$get= $this->m->getUser(
				$this->session->userdata('username')
			   ,$this->session->userdata('password')
			);

			$myvars = $get[0]->HCID;

			$userlist['userlist'] = $get;

			$this->load-> view('Template/reports',$userlist);
		}	
	}

	public function pRecords()
	{
		$something = $this->input->post('txtID');
		$this->load->library('upload');
		// Write code below to save $this->input->post() to record table
        $files = $_FILES;
        $filesCount = count($_FILES['userfile']['name']);
        for($i=0; $i<$filesCount; $i++)
        {                   	
            $_FILES['userfile']['name']= $files['userfile']['name'][$i];
            $_FILES['userfile']['type']= $files['userfile']['type'][$i];
            $_FILES['userfile']['tmp_name']= $files['userfile']['tmp_name'][$i];
            $_FILES['userfile']['error']= $files['userfile']['error'][$i];
            $_FILES['userfile']['size']= $files['userfile']['size'][$i];    
            $this->upload->initialize($this->set_upload_options());
			if (!$this->upload->do_upload()) {
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
			} 
			else 
			{
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
				$arr_image= $this->upload->data();

	        	// FILE DATA 
	        	$fileData = array(
	        		'recordno' => $this->input->post('inputRecordNo'),
	        		'images' => $files['userfile']['name'][$i]
	        	);

	        	print_r($fileData);  		
    			$this->db->insert('attached', $fileData);	
			}
		}

	}

	private function set_upload_options()
    {   
        $config = array();
        $config['upload_path'] = '/xampp/htdocs/medrec/assets/uploads';
		$config['allowed_types'] = 'gif|jpg|jpeg|png';                
        $config['overwrite']     = FALSE;

        return $config;
    }

	public function submitNewRecords()
	{
		$result = $this->m->addNewRecords();
		redirect(base_url('Template/addpatient'));
	}

	public function submitUser()
	{
		$result = $this->m->addNewUsers();
		redirect(base_url('Template/adduser'));
	}

	public function create()
	{
		$foods = $this->input->post('Brgy');
		$name= $this->input->post('inputHCID');
		$data = array();
		foreach($foods as $k => $v){
		$data[$k]['HCID']=$name;
		$data[$k]['BRGY']=$v;
		}

		$this->m->create($data);
		redirect(base_url('Template/addhc'));
	}

	public function activateuser()
	{
		$portid = $this->uri->segment(3);
		$FN = $this->uri->segment(4);
		$assist = $this->uri->segment(5);
		$date = $this->uri->segment(6);
		$note = urldecode($FN);
		$result = $this->m->activateuser($portid,$assist,$note,$date);
		redirect(base_url('Template/viewlogs'));
	}

	public function activatefam()
	{
		$portid = $this->uri->segment(3);
		$FN = $this->uri->segment(4);
		$assist = $this->uri->segment(5);
		$date = $this->uri->segment(6);
		$note = urldecode($FN);
		$result = $this->m->activatefamily($portid,$assist,$note,$date);
		redirect(base_url('Template/viewlogs'));
	}

	public function submitFamilyRecords()
	{
		$result = $this->m->addNewFamilyRecords();
		redirect(base_url('Template/family'));
	}

	public function submitReport()
	{
		$result = $this->m->addReport();
		redirect(base_url('Template/logged'));
	}

	public function editFam()
	{
		$result = $this->m->editFam();
		redirect(base_url('Template/family'));
	}

	public function getMessage()
	{
		$data = $this->input->post();

		$values = $this->m->getMessage($data['Rno']);

		foreach ($values as $value) {
			$row = array();
			$row[]= $value->Message;
			$data2[] = $row;
		}
		
		echo json_encode($data2);
	}

	public function Resolve()
	{
		$data = $this->input->post();

		$result = $this->m->Resolve($data['Rno'],$data['Code']);

		redirect(base_url('Template/admin'));
	}

	public function updateNewRecords()
	{
		$result = $this->m->update();
		redirect(base_url('Template/addpatient'));
	}

	public function updateUser()
	{
		$result = $this->m->updateUser();
		redirect(base_url('Template/adduser'));
	}

	public function updateHC()
	{
		$foods = $this->input->post('Brgy');
		$name= $this->input->post('inputHCID');
		$data = array();
		foreach($foods as $k => $v){
		$data[$k]['HCID']=$name;
		$data[$k]['BRGY']=$v;
		}

		$this->m->updateHC($data);
		redirect(base_url('Template/addhc'));
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
			$row[21] = $value->Relation;
			$row[22] = $value->HCID;
			$data2[] = $row;
		}
		
		echo json_encode($data2);
	}

	public function editUser()
	{
		$data = $this->input->post();

		$values = $this->m->getInfoCode($data['code']);

		foreach ($values as $value) {
			$row = array();
			$row[0] = $value->code;
			$row[1] = $value->HCID;
			$row[2] = $value->username;
			$row[3] = $value->password;
			$row[4] = $value->LN;
			$row[5] = $value->FN;
			$row[6] = $value->MN;
			$row[7] = $value->POSITION;
			$data2[] = $row;
		}
		
		echo json_encode($data2);
	}

	public function editHC()
	{
		$data = $this->input->post();

		$values = $this->m->getHCCode($data['HCID']);

		foreach ($values as $value) {
			$row = array();
			$row[0] = $value->HCID;
			$row[1] = $value->Name;
			$row[2] = $value->Location;
			$row[3] = $value->City;
			$row[4] = $value->combinedsolutions;
			$data2[] = $row;
		}
		
		echo json_encode($data2);
	}


	public function getAnnual()
	{
	$data = $this->input->post();

	$Year = $this->m->getAnnual($data['Year'],$data['HCID']);

	$output = array(
		"data" => $Year,
	);

	echo json_encode($output);
	}

	public function getBrgyAnnual()
	{
	$data = $this->input->post();

	$Year = $this->m->getBrgyAnnual($data['Year'],$data['HCID']);

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
	$HCID = $data['HCID'];

	$result = $this->m->getQuarter($Year,$Quarter,$HCID);

	$output = array(
		"data" => $result,
	);

	echo json_encode($output);
	}

	public function getBrgyQuarter()
	{
	$data = $this->input->post();

	$Year = $data['Year'];
	$Quarter = $data['Quarter'];
	$HCID = $data['HCID'];

	$result = $this->m->getBrgyQuarter($Year,$Quarter,$HCID);

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
	$HCID = $data['HCID'];

	$result = $this->m->getMonth($Month,$Year,$HCID);

	$output = array(
		"data" => $result,
	);

	echo json_encode($output);
	}

	public function getBrgyMonth()
	{
	$data = $this->input->post();

	$Month = $data['Month'];
	$Year = $data['Year'];
	$HCID = $data['HCID'];

	$result = $this->m->getBrgyMonth($Month,$Year,$HCID);

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
	$HCID = $data['HCID'];


	$result = $this->m->getCustom($start,$end,$HCID);

	$output = array(
		"data" => $result,
	);

	echo json_encode($output);
	}

	public function pinfo()
	{
		$pinfo=$this->m->pinfo();

		if($pinfo==null)
		{
			echo '{
			"sEcho": 1,
			"iTotalRecords": "0",
			"iTotalDisplayRecords": "0",
			"aaData": []
			}';
		}
		else
		{
		foreach ($pinfo as $value)
		{
		$row = array();
		$row[0] = $value->ID;
		$row[1] = $value->FN;
		$row[2] = $value->MN;
		$row[3] = $value->LN;
		$row[4] = $value->is_delete;
		$data[] = $row;
		}

		$output = array(
		"data" => $data,
		);

		echo json_encode($output);
		}
	}

	public function finfo()
	{
		$finfo=$this->m->finfo();

		if($finfo==null)
		{
			echo '{
			"sEcho": 1,
			"iTotalRecords": "0",
			"iTotalDisplayRecords": "0",
			"aaData": []
			}';
		}
		else
		{
		foreach ($finfo as $value)
		{
		$row = array();
		$row[0] = $value->familyno;
		$row[1] = $value->FN;
		$row[2] = $value->MN;
		$row[3] = $value->LN;
		$row[4] = $value->is_delete;
		$data[] = $row;
		}

		$output = array(
		"data" => $data,
		);

		echo json_encode($output);
	}
	}

	public function getallLogs()
	{
	$getdata = $this->m->getallLogs();
	$data = array();

	if($getdata==null)
		{
			echo '{
			"sEcho": 1,
			"iTotalRecords": "0",
			"iTotalDisplayRecords": "0",
			"aaData": []
			}';
		}
	else
	{
	foreach ($getdata as $value)
	{
		$row = array();
		$row[] = $value->code;
		$row[] = $value->activity;
		$row[] = $value->date;
		$data[] = $row;
	}

	$output = array(
		"data" => $data,
	);

	echo json_encode($output);
	}
	}

	public function getallReports()
	{
	$getdata = $this->m->getallReports();
	$data = array();

	foreach ($getdata as $value)
	{
		$row = array();
		$row[] = $value->reportno;
		$row[] = $value->ID;
		$row[] = $value->Title;
		$data[] = $row;
	}

	$output = array(
		"data" => $data,
	);

	echo json_encode($output);
	}

	public function getallLogs2()
	{
		$data = $this->input->post();

		$hcid=$this->m->getUserCode($data['code']);

		foreach ($hcid as $value) 
			{
			$row = array();
			$row[0] = $value->activity;
			$row[1] = $value->date;
			$data2[] = $row;
			}

			echo json_encode($data2);
	}

	public function getadminLogs()
	{
	$getdata = $this->m->getadminLogs();
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

		$hname['hname'] = $this->m->getHCName($myvars);

		$data['data'] = array($brgylist,$userlist,$hname);

		$this->load->view('Template/family',$data);		
	}
	}
}
