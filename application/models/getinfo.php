<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class getinfo extends CI_Model 
{
	public function can_login($username,$password)
	{
		$this->db->select('*');
		$this->db->where('username',$username);
		$this->db->where('password',$password);

		$query =  $this->db->get('users');

		if ($query -> num_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function admin_login($username,$password)
	{
		$this->db->select('*');
		$this->db->where('username',$username);
		$this->db->where('password',$password);

		$query =  $this->db->get('admin');

		if ($query -> num_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function getAdmin($username,$password)
	{
		$this->db->select('*');
		$this->db->where('username',$username);
		$this->db->where('password',$password);

		$query = $this->db->get('admin');
		return $query->result();
	}

	public function getUser($username,$password)
	{
		$this->db->select('*');
		$this->db->where('username',$username);
		$this->db->where('password',$password);

		$query = $this->db->get('users');
		return $query->result();
	}

	public function ajaxTable($HCID)
	{
		$this->db->select('*');

		$this->db->where('HCID',$HCID);

		$query = $this->db->get('brgy');
		return $query->result();
	}

	public function activateuser($portid,$assist,$note,$date)
	{
	$logs = array(
		'code' => $assist,
		'activity' => $note,
		'date' => $date
	);    

	$this->db->insert('logs', $logs);

	$isfalse = array('is_delete' => "1");    
	$this->db->where('id', $portid);
	$this->db->update('tabletest', $isfalse); 
	$this->db->where('id', $portid);
	$this->db->update('precords', $isfalse); 
	$this->db->where('id', $portid);
	$this->db->update('fdesc', $isfalse); 

	if($this->db->affected_rows() > 0)
	{
		return true;
	}

	else
	{
		return false;
	}
	}

	public function activatefamily($portid,$assist,$note,$date)
	{
	$logs = array(
		'code' => $assist,
		'activity' => $note,
		'date' => $date
	);    

	$this->db->insert('adminlogs', $logs);

	$isfalse = array('is_delete' => 1);    
	$this->db->where('familyno', $portid);
	$this->db->update('family', $isfalse); 

	if($this->db->affected_rows() > 0)
	{
		return true;
	}

	else
	{
		return false;
	}
	}


	public function pinfo()
	{
		$this->db->select('*');
		$this->db->where('is_delete',"0");
		$query = $this->db->get('tabletest');
		return $query->result();
	}

	public function finfo()
	{
		$this->db->select('*');
		$this->db->where('is_delete',"0");
		$query = $this->db->get('family');
		return $query->result();
	}

	public function getUserCode($code)
	{
		$this->db->select('*');
		$this->db->where('code',$code);

		$query = $this->db->get('logs');
		return $query->result();
	}

	public function getAI()
	{
		$this->db->select('*');
		$this->db->from('INFORMATION_SCHEMA.TABLES');
		$this->db->where('TABLE_SCHEMA','revisions');
		$this->db->where('TABLE_NAME','precords');
		$query = $this->db->get();
		return $query->result();
	}

	public function getUsersAI()
	{
		$this->db->select('*');
		$this->db->from('INFORMATION_SCHEMA.TABLES');
		$this->db->where('TABLE_SCHEMA','revisions');
		$this->db->where('TABLE_NAME','users');
		$query = $this->db->get();
		return $query->result();
	}

	public function getHCInfo($HCID)
	{
		$this->db->where('HCID',$HCID);
		$query = $this->db->get('tabletest');
		return $query->result();
	}
	
	public function getHCName($HCID)
	{
		$this->db->select('*');
		$this->db->where('HCID',$HCID);
		$query = $this->db->get('hc');
		return $query->result();
	}

	public function ajax()
	{																
		$this->db->select("*");
		$this->db->where('is_delete',"1");
		$query = $this->db->get('tabletest');
		return $query->result();
	}

	public function family($HCID)
	{																
		$this->db->select("*");
		$this->db->where('is_delete', "1");
		$this->db->where('HCID',$HCID);
		$query = $this->db->get('family');
		return $query->result();
	}

	public function get1stQ($txtYear,$txtQuarter)
	{																
		$this->db->select("*");
		$this->db->where('HCID',$HCID);
		$query = $this->db->get('tabletest');
		return $query->result_array();
	}

	public function getAnnual($txtYear,$HCID)
	{
		$this->db->select("*");
		$this->db->where('YEAR(dateinsert)',$txtYear);
		$this->db->where('is_delete',"1");
		$this->db->where('HCID',$HCID);
		$query = $this->db->get('tabletest');
		return $query->result_array();
	}

	public function getBrgyAnnual($txtYear,$HCID)
	{
		$this->db->select("*");
		$this->db->where('YEAR(dateinsert)',$txtYear);
		$this->db->where('is_delete',"1");
		$this->db->where('HCID',$HCID);
		$query = $this->db->get('family');
		return $query->result_array();
	}

	public function getCaseAnnual($txtYear,$HCID)
	{
		$this->db->select("tabletest.ID,tabletest.FN,tabletest.LN,tabletest.MN,`Diag`,recordno")
		->from('tabletest');
		$this->db->join('precords', 'tabletest.ID = precords.id and tabletest.HCID=precords.HCID');
		$this->db->where('YEAR(DATE)',$txtYear);
		$this->db->where('tabletest.HCID',$HCID);
		$this->db->where('r_delete',"1");
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getCaseQuarter($txtYear,$txtQuarter,$HCID)
	{
		$this->db->select("tabletest.ID,tabletest.FN,tabletest.LN,tabletest.MN,`Diag`,recordno")
		->from('tabletest');
		$this->db->join('precords', 'tabletest.ID = precords.id and tabletest.HCID=precords.HCID');
		$this->db->where('YEAR(DATE)',$txtYear);
		$this->db->where('QUARTER(DATE)',$txtQuarter);
		$this->db->where('tabletest.HCID',$HCID);
		$this->db->where('r_delete',"1");
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getBrgyQuarter($txtYear,$txtQuarter,$HCID)
	{
		$this->db->select("*");
		$this->db->where('QUARTER(dateinsert)',$txtQuarter);
		$this->db->where('YEAR(dateinsert)',$txtYear);
		$this->db->where('is_delete',"1");
		$this->db->where('HCID',$HCID);
		$query = $this->db->get('family');
		return $query->result_array();
	}

	public function getQuarter($txtYear,$txtQuarter,$HCID)
	{
		$this->db->select("*");
		$this->db->where('QUARTER(dateinsert)',$txtQuarter);
		$this->db->where('YEAR(dateinsert)',$txtYear);
		$this->db->where('is_delete',"1");
		$this->db->where('HCID',$HCID);
		$query = $this->db->get('tabletest');
		return $query->result_array();
	}

		public function getCaseMonth($txtMonth,$txtYear,$HCID)
	{
		$this->db->select("tabletest.ID,tabletest.FN,tabletest.LN,tabletest.MN,`Diag`,recordno")
		->from('tabletest');
		$this->db->join('precords', 'tabletest.ID = precords.id and tabletest.HCID=precords.HCID');
		$this->db->where('MONTH(DATE)',$txtMonth);
		$this->db->where('YEAR(DATE)',$txtYear);
		$this->db->where('tabletest.HCID',$HCID);
		$this->db->where('r_delete',"1");
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getMonth($txtMonth,$txtYear,$HCID)
	{
		$this->db->select("*");
		$this->db->where('MONTH(dateinsert)',$txtMonth);
		$this->db->where('YEAR(dateinsert)',$txtYear);
		$this->db->where('is_delete',"1");
		$this->db->where('HCID',$HCID);
		$query = $this->db->get('tabletest');
		return $query->result_array();
	}

	public function getBrgyMonth($txtMonth,$txtYear,$HCID)
	{
		$this->db->select("*");
		$this->db->where('MONTH(dateinsert)',$txtMonth);
		$this->db->where('YEAR(dateinsert)',$txtYear);
		$this->db->where('is_delete',"1");
		$this->db->where('HCID',$HCID);
		$query = $this->db->get('family');
		return $query->result_array();
	}

	public function getCustom($txtStart,$txtEnd,$HCID)
	{
		$this->db->select("*");
		$this->db->where('dateinsert >=', $txtStart);
		$this->db->where('dateinsert <=', $txtEnd);
		$this->db->where('HCID',$HCID);	
		$query = $this->db->get('tabletest');
		return $query->result_array();
	}

	public function getBrgyCustom($txtStart,$txtEnd,$HCID)
	{
		$this->db->select("*");
		$this->db->where('dateinsert >=', $txtStart);
		$this->db->where('dateinsert <=', $txtEnd);
		$this->db->where('HCID',$HCID);	
		$query = $this->db->get('family');
		return $query->result_array();
	}

	public function getCaseCustom($txtStart,$txtEnd,$HCID)
	{
		$this->db->select("tabletest.ID,tabletest.FN,tabletest.LN,tabletest.MN,`Diag`,recordno")
		->from('tabletest');
		$this->db->join('precords', 'tabletest.ID = precords.id and tabletest.HCID=precords.HCID');
		$this->db->where('dateinsert >=', $txtStart);
		$this->db->where('dateinsert <=', $txtEnd);
		$this->db->where('tabletest.HCID',$HCID);
		$this->db->where('r_delete',"1");
		$query = $this->db->get();
		return $query->result_array();
	}

	public function getRecords($ID)
	{
		$this->db->select("*");
		$this->db->where('ID',$ID);
		$query = $this->db->get('logs');
		return $query->result();
	}

	public function getPatientRecords($ID)
	{
		$this->db->select("*");
		$this->db->where('ID',$ID);
		$query = $this->db->get('precords');
		return $query->result();
	}

	public function getInfoID($ID)
	{
		$this->db->select('*');
		$this->db->where('ID', $ID);
		$this->db->where('is_delete', "1");
		$query = $this->db->get('tabletest');
		return $query->result();
	}

	public function getInfoCode($code)
	{
		$this->db->select('*');
		$this->db->where('code', $code);
		$query = $this->db->get('users');
		return $query->result();
	}

	public function getHCCode($HCID)
	{
		$this->db->select('hc.*,(SELECT GROUP_CONCAT(brgy.BRGY) FROM brgy WHERE hc.HCID = brgy.HCID) AS combinedsolutions');
		$this->db->where('hc.HCID', $HCID);
		$this->db->from('hc');
		$query = $this->db->get();
		return $query->result();
	}

	public function getAllInfo()
	{
		$this->db->select('*');
		$this->db->where('POSITION', "ADMIN");
		$query = $this->db->get('users');
		return $query->result();
	}

	public function getHC()
	{
		$this->db->select('hc.*,(SELECT GROUP_CONCAT(brgy.BRGY)  FROM brgy WHERE hc.HCID = brgy.HCID) AS combinedsolutions');
		$this->db->from('hc');
		$query = $this->db->get();
		return $query->result();
	}

	public function getFam($familyno)
	{
		$this->db->select('*');
		$this->db->where('familyno', $familyno);
		$query = $this->db->get('tabletest');
		return $query->result();
	}

	public function getLogs($code)
	{
		$this->db->select("activity,date");
		$this->db->where('code',$code);
		$query = $this->db->get('logs');
		return $query->result();
	}

	public function getNotif($ID)
	{
		$this->db->select("reportno,title");
		$this->db->where('ID',$ID);
		$this->db->where('is_resolve',0);
		$query = $this->db->get('reports');
		return $query->result();
	}

	public function getallLogs()
	{
		$this->db->select("*");
		$query = $this->db->get('logs');
		return $query->result();
	}

	public function getMessage($reportno)
	{
		$this->db->select("Message");
		$this->db->where('reportno',$reportno);	
		$query = $this->db->get('reports');
		return $query->result();
	}

	public function Resolve($reportno,$code,$date)
	{
		$resolve = array(
		'is_resolve' => 0,
		);    

		$logs = array(
			'code'=>$code,
			'activity'=>"Resolve Report No. ".$reportno,
			'date'=>$date
			);

		$this->db->where('reportno',$reportno);	
		$this->db->update('reports', $resolve);
		$this->db->insert('adminlogs', $logs);
		return $query->result();
	}

	public function getallReports()
	{
		$this->db->where('is_resolve','1');	
		$query = $this -> db -> get('reports');
		if ($query -> num_rows() > 0)
		{
			return $query -> result();
		}
		else
		{
			return false;
		}
	}

	public function getadminLogs($code)
	{
		$this->db->select("*");
		$this->db->where('code',$code);	
		$query = $this->db->get('adminlogs');
		return $query->result();
	}

	public function getPieChart($HCID)
	{
		$this->db->select('brgy.BRGY, brgy.HCID,COUNT(family.Brgy) as total')
		->from('brgy');
		$this->db->join('family', 'brgy.BRGY = family.Brgy','left')
         ->group_by('brgy.Brgy');	
        $this->db->having('brgy.HCID=',$HCID);
        $query = $this->db->get();
		return $query->result();
	}

	public function getAdminDB()
	{
		$this->db->select('title, count(*) as total')
		->from('reports');
		$this->db->group_by('title');
        $query = $this->db->get();
		return $query->result();
	}

	public function getBarChart($HCID)
	{
		$this->db->select('MONTHNAME(CONCAT("2019-", Months.m, "-01")) as month, COUNT(`dateinsert`) AS total')
		->from('(
		SELECT 1 as m
		UNION SELECT 2 as m 
		UNION SELECT 3 as m 
		UNION SELECT 4 as m 
		UNION SELECT 5 as m 
		UNION SELECT 6 as m 
		UNION SELECT 7 as m 
		UNION SELECT 8 as m 
		UNION SELECT 9 as m 
		UNION SELECT 10 as m 
		UNION SELECT 11 as m 
		UNION SELECT 12 as m
		) as Months');
		$this->db->join('tabletest', 'Months.m = MONTH(`dateinsert`)  
		AND YEAR(`dateinsert`) = "2019" and HCID = '.$HCID,'left')
         ->group_by('Months.m');
        $query = $this->db->get();
		return $query->result();
	}

	public function getLineChart($HCID)
	{
		$this->db->select('MONTHNAME(CONCAT("2019-", Months.m, "-01")) as month, 
		sum(case when Diag = "Conjuctivitis(Diagnosis)" then 1 else 0 end) Conjuctivitis,
        sum(case when Diag = "Pnuemonia (Diagnosis)" then 1 else 0 end) Pnuemonia,
        sum(case when Diag = "Hypentesion(Diagnosis)" then 1 else 0 end) Hypertension,
        sum(case when Diag = "Vaginitis(Diagnosis)" then 1 else 0 end) Vaginitis,
        sum(case when Diag = "Diabetis(Diagnosis)" then 1 else 0 end) Diabetis,
        sum(case when Diag = "Upper Respiratory Tract Infection(Diagnosis)" then 1 else 0 end) URTI,
        sum(case when Diag = "Diarrehea(Diagnosis)" then 1 else 0 end) Diarrehea,
        sum(case when Diag = "Arthritis(Diagnosis)" then 1 else 0 end) Arthritis,
        sum(case when Diag = "Sore Throat(Diagnosis)" then 1 else 0 end) SoreThroat,
        sum(case when Diag = "UTI(Diagnosis)" then 1 else 0 end) UTI,
        sum(case when Diag = "Primary Tuberculosis(Diagnosis)" then 1 else 0 end) PrimaryTB')
		->from('(
		SELECT 1 as m
		UNION SELECT 2 as m 
		UNION SELECT 3 as m 
		UNION SELECT 4 as m 
		UNION SELECT 5 as m 
		UNION SELECT 6 as m 
		UNION SELECT 7 as m 
		UNION SELECT 8 as m 
		UNION SELECT 9 as m 
		UNION SELECT 10 as m 
		UNION SELECT 11 as m 
		UNION SELECT 12 as m
		) as Months');
		$this->db->join('precords', 'Months.m = MONTH(`DATE`) AND HCID = '.$HCID,'left')
         ->group_by('Months.m');
        $query = $this->db->get();
		return $query->result();
	}

	public function create($data)
	{
	$records = array(
			'HCID'=>$this->input->post('inputHCID'),
			'Name'=>$this->input->post('inputHC'),	
			'Location'=>$this->input->post('inputLoc'),
			'City'=>$this->input->post('HCname')
			);

	$this->db->insert('hc',$records);
	$this->db->insert_batch('brgy', $data);
	if($this->db->affected_rows() > 0)
	{
		return true;
	}

	else
	{
		return false;	
	}
	}

	public function getTotalUsers()
	{
		$this->db->select('COUNT(code) as count');
		$this->db->where('POSITION','NURSE');
		$this->db->or_where('POSITION', "DOCTOR");
		$this->db->from('users');
		$query = $this->db->get();
		if ($query->num_rows() > 0 )
		{
		$row = $query->row();
		return $row->count;
		}
		return 0;
	}

	public function HCname($HCID)
	{
		$this->db->select('Name as name');
		$this->db->where('HCID',$HCID);
		$this->db->from('hc');
		$query = $this->db->get();
		if ($query->num_rows() > 0 )
		{
		$row = $query->row();
		return $row->name;
		}
		return 0;
	}

	public function getTotalAdmin()
	{
		$this->db->select('COUNT(code) as count');
		$this->db->or_where('POSITION', "ADMIN");
		$this->db->from('users');
		$query = $this->db->get();
		if ($query->num_rows() > 0 )
		{
		$row = $query->row();
		return $row->count;
		}
		return 0;
	}


	public function getTotalReports()
	{
		$this->db->select('COUNT(reportno) as count');
		$this->db->where('is_resolve',1);
		$this->db->from('reports');
		$query = $this->db->get();
		if ($query->num_rows() > 0 )
		{
		$row = $query->row();
		return $row->count;
		}
		return 0;
	}

	public function getTotalPatients($HCID)
	{
		$this->db->select('COUNT(ID) as count');
		$this->db->from('tabletest');
		$this->db->where('HCID',$HCID);
		$query = $this->db->get();
		if ($query->num_rows() > 0 )
		{
		$row = $query->row();
		return $row->count;
		}
		return 0;
	}

	public function getDiseaseMax($HCID)
	{
		$this->db->select('DIAG')
		->from('precords')
		->WHERE('HCID',$HCID)
		->group_by('diag')
		->having('count("Diag")=
			(SELECT MAX(patientcount) FROM (SELECT `HCID`,`Diag`,COUNT(*) AS patientcount FROM precords
			WHERE HCID='.$HCID.' GROUP BY Diag) t1)');
		$query = $this->db->get();
		if ($query->num_rows() > 0 )
		{
		$row = $query->row();
		return $row->DIAG;
		}
		return 0;
	}

	public function getTotalFamily($HCID)
	{
		$this->db->select('COUNT(familyno) as family');
		$this->db->from('family');
		$this->db->where('HCID',$HCID);
		$this->db->or_where('is_delete', "1");
		$query = $this->db->get();
		if ($query->num_rows() > 0 )
		{
		$row = $query->row();
		return $row->family;
		}
		return 0;
	}

	public function getUserActivity($code)
	{
		$this->db->select('COUNT(code) as family');
		$this->db->from('family');
		$this->db->where('HCID',$HCID);
		$query = $this->db->get();
		if ($query->num_rows() > 0 )
		{
		$row = $query->row();
		return $row->family;
		}
		return 0;
	}

	public function getServices()
	{
		$query = $this -> db -> get('services');
		if ($query -> num_rows() > 0)
		{
		return $query -> result();
		}
		else
		{
		return false;
		}
	}
	
	public function getFilteredInfo($HCID,$searchValue)
	{
		$this->db->where('HCID',$HCID);
		$this->db->like('LN',$searchValue);
		$this->db->or_like('FN',$searchValue);
		$this->db->or_like('ID',$searchValue);
		$this->db->or_like('FamilyCode',$searchValue);
		$query = $this->db->get('tabletest');
		return $query->result();
	}

	public function viewHCBrgy($HCID)
	{
		$this->db->select('BRGY');
		$this->db->where('HCID',$HCID);
		$query = $this->db->get('brgy');
		return $query->result();
	}

	public function getBrgyInfo($HCID)
	{
		$this->db->where('HCID',$HCID);
		$query = $this->db->get('brgy');
		return $query->result();
	}

	public function getRecordsByID()
	{
		$this->db->select('*');
		$query = $this->db->get('records');
		return $query->result();
	}

	public function getInfoById($username,$password)
	{
		$query = $this->db->get('tabletest');
		if ($query -> num_rows() > 0)
		{
			return $query -> row();
		}
		else
		{
			return false;
		}
	}

	public function getUsername($username)
 	{
 	 $this->db->where('ID' , $username);
  	$query = $this->db->get('tabletest');

  	if($query->num_rows()>0){
  	 return true;
  	}
  	else {
  	 return false;
  	}
 	}

 	public function getCode($code)
 	{
 	$this->db->where('code' , $code);
  	$query = $this->db->get('users');

  	if($query->num_rows()>0){
  	 return true;
  	}
  	else {
  	 return false;
  	}
 	}

	public function getID($id)
	{
		$this->db->select("Brgy");
		$this->db->where('HCID', $id);
		$query = $this->db->get('brgy');
		return $query->result();
	}

	public function insertLogs()
	{
		$logs = array(
			'code'=>$this->input->post('inputassist'),
			'activity'=>$this->input->post('inputnote'),
			'date'=>$this->input->post('inputinsert')
			);

		$this->db->insert('adminlogs', $logs);
	}

	public function getFDesc($FNo)
	{
		$this->db->select("*");
		$this->db->where('familyno', $FNo);
		$query = $this->db->get('fdesc');
		return $query->result();
	}

	public function getRecordsInfo($Rno)
	{
		$this->db->select("*");
		$this->db->where('recordno', $Rno);
		$query = $this->db->get('precords');
		return $query->result();
	}

	public function getallHCID()
	{
		$this->db->select("*");
		$query = $this->db->get('hc');
		return $query->result();
	}

	public function getImage($RNo)
	{	
		$this->db->select("images");
		$this->db->where('recordno', $RNo);
		$query = $this->db->get('attached');	
		$data = $query->row_array();
		return $query->result();
	}

	public function addNewRecords()
	{	
		$_POST['inputS'] = strtoupper($_POST['inputS']);
		$_POST['inputType'] = strtoupper($_POST['inputType']);
		$_POST['inputAge'] = strtoupper($_POST['inputAge']);
		$_POST['inputSe'] = strtoupper($_POST['inputSe']);
		$_POST['inputLN'] = strtoupper($_POST['inputLN']);
		$_POST['inputFN'] = strtoupper($_POST['inputFN']);
		$_POST['inputMN'] = strtoupper($_POST['inputMN']);
		$_POST['inputBrgy'] = strtoupper($_POST['inputBrgy']);
		$_POST['inputSt'] = strtoupper($_POST['inputSt']);
		$_POST['inputC'] = strtoupper($_POST['inputC']);
		$_POST['inputCS'] = strtoupper($_POST['inputCS']);
		$_POST['inputR'] = strtoupper($_POST['inputR']);

	 		$records = array(
			'ID'=>$this->input->post('inputID2'),
			'HCID'=>$this->input->post('txtHCID'),	
			'Status'=>$this->input->post('inputS'),
			'Type'=>$this->input->post('inputType'),
			'Age'=>$this->input->post('inputAge'),
			'Sex'=>$this->input->post('inputSe'),	
			'LN'=>$this->input->post('inputLN'),	
			'FN'=>$this->input->post('inputFN'),
			'MN'=>$this->input->post('inputMN'),	
			'Nationality'=>$this->input->post('inputN'),
			'Brgy'=>$this->input->post('inputBrgy'),
			'BirthDate'=>$this->input->post('inputBD'),
			'St'=>$this->input->post('inputSt'),
			'City'=>$this->input->post('inputC'),
			'Address'=>$this->input->post('inputAdd'),
			'CivilStatus'=>$this->input->post('inputCS'),
			'familyno'=>$this->input->post('inputFam'),
			'Philhealth'=>$this->input->post('inputPN'),
			'dateinsert'=>$this->input->post('inputinsert'),
			'Assist'=>$this->input->post('inputassist'),
			'Remarks'=>$this->input->post('inputR'),
			'is_delete'=>("1")	
			);

	$_POST['inputnote'] = "ADDED PATIENT ID" ."(". $_POST['inputID2'].")"." ".$_POST['inputLN'] ." " .$_POST['inputFN'];
	
	 $logs = array(
			'code'=>$this->input->post('inputassist'),
			'activity'=>$this->input->post('inputnote'),
			'date'=>$this->input->post('inputinsert')
			);

	 $fam = array(
			'ID'=>$this->input->post('inputID2'),
			'familyno'=>$this->input->post('inputFam')
			);

	$this->db->insert('tabletest', $records);
	$this->db->insert('logs', $logs);
	$this->db->insert('fdesc', $fam);
	
	if($this->db->affected_rows() > 0)
	{
		return true;
	}

	else
	{
		return false;
	}
	}

	public function addReport()
	{
		$_POST['inputTitle'] = strtoupper($_POST['inputTitle']);
		$_POST['inputMsg'] = strtoupper($_POST['inputMsg']);

		$reports = array(
			'ID'=>$this->input->post('inputID'),
			'Title'=>$this->input->post('inputTitle'),	
			'Message'=>$this->input->post('inputMsg'),
			'is_resolve'=>'1'
		);

	$this->db->insert('reports', $reports);
	
	if($this->db->affected_rows() > 0)
	{
		return true;
	}

	else
	{
		return false;	
	}
	}

	public function addNewAdmins()
	{
		$_POST['inputLN'] = strtoupper($_POST['inputLN']);
		$_POST['inputFN'] = strtoupper($_POST['inputFN']);
		$_POST['inputMN'] = strtoupper($_POST['inputMN']);

		$records = array(
			'code'=>$this->input->post('inputCode'),
			'username'=>$this->input->post('inputUser'),	
			'password'=>$this->input->post('inputPass'),	
			'HCID'=>$this->input->post('inputHCID'),
			'LN'=>$this->input->post('inputLN'),
			'FN'=>$this->input->post('inputFN'),
			'MN'=>$this->input->post('inputMN'),
			'POSITION'=>$this->input->post('Position'),
			'date'=>$this->input->post('inputinsert')
		);

	$this->db->insert('users', $records);
	if($this->db->affected_rows() > 0)
	{
		return true;
	}

	else
	{
		return false;	
	}
	}

	public function addNewUsers()
	{
		$_POST['inputLN'] = strtoupper($_POST['inputLN']);
		$_POST['inputFN'] = strtoupper($_POST['inputFN']);
		$_POST['inputMN'] = strtoupper($_POST['inputMN']);

		$records = array(
			'code'=>$this->input->post('inputCode'),
			'username'=>$this->input->post('inputUser'),	
			'password'=>$this->input->post('inputPass'),	
			'HCID'=>$this->input->post('inputHCID'),
			'LN'=>$this->input->post('inputLN'),
			'FN'=>$this->input->post('inputFN'),
			'MN'=>$this->input->post('inputMN'),
			'POSITION'=>$this->input->post('Position'),
			'date'=>$this->input->post('inputinsert')
		);

		$_POST['inputnote'] = "ADDED USER" ."(". $_POST['inputCode'].")"." ".$_POST['inputLN'] ." " .$_POST['inputFN'];

		$logs = array(
			'code'=>$this->input->post('inputassist'),
			'activity'=>$this->input->post('inputnote'),
			'date'=>$this->input->post('inputinsert')
			);

	$this->db->insert('users', $records);
	$this->db->insert('adminlogs', $logs);
	
	if($this->db->affected_rows() > 0)
	{
		return true;
	}

	else
	{
		return false;	
	}
	}

	public function updateUser()
	{
		$_POST['inputLN'] = strtoupper($_POST['inputLN']);
		$_POST['inputFN'] = strtoupper($_POST['inputFN']);
		$_POST['inputMN'] = strtoupper($_POST['inputMN']);

		$code= $this->input->post('inputCode');

		$records = array(
			'username'=>$this->input->post('inputUser'),	
			'HCID'=>$this->input->post('inputHCID'),
			'LN'=>$this->input->post('inputLN'),
			'FN'=>$this->input->post('inputFN'),
			'MN'=>$this->input->post('inputMN'),
			'POSITION'=>$this->input->post('Position'),
			'date'=>$this->input->post('inputinsert')
		);

		// $_POST['inputnote'] = "EDITED USER CODE" ."(". $_POST['inputCode'].")"." ".$_POST['inputLN'] ." " .$_POST['inputFN'];

		// // $logs = array(
		// // 	'code'=>$this->input->post('inputassist'),
		// // 	'activity'=>$this->input->post('inputnote'),
		// // 	'date'=>$this->input->post('inputinsert')
		// // 	);

	$this->db->where('code', $code);
	$this->db->update('users', $records);
	// $this->db->insert('adminlogs', $logs);
	
	if($this->db->affected_rows() > 0)
	{
		return true;
	}

	else
	{
		return false;	
	}
	}

	public function updateHC($data)
	{
	$HCID = $this->input->post('inputHCID');

	$this->db->where('HCID', $HCID);
	$this->db->delete('brgy');
	$this->db->insert_batch('brgy', $data);
	if($this->db->affected_rows() > 0)
	{
		return true;
	}

	else
	{
		return false;	
	}

	}
	
	public function update()
	{
		$_POST['inputS'] = strtoupper($_POST['inputS']);
		$_POST['inputType'] = strtoupper($_POST['inputType']);
		$_POST['inputAge'] = strtoupper($_POST['inputAge']);
		$_POST['inputSe'] = strtoupper($_POST['inputSe']);
		$_POST['inputLN'] = strtoupper($_POST['inputLN']);
		$_POST['inputFN'] = strtoupper($_POST['inputFN']);
		$_POST['inputMN'] = strtoupper($_POST['inputMN']);
		$_POST['inputBrgy'] = strtoupper($_POST['inputBrgy']);
		$_POST['inputSt'] = strtoupper($_POST['inputSt']);
		$_POST['inputC'] = strtoupper($_POST['inputC']);
		$_POST['inputCS'] = strtoupper($_POST['inputCS']);
		$_POST['inputR'] = strtoupper($_POST['inputR']);

		$id = $this->input->post('inputID2');

		$field = array(
			'HCID'=>$this->input->post('txtHCID'),	
			'Status'=>$this->input->post('inputS'),
			'Type'=>$this->input->post('inputType'),
			'LN'=>$this->input->post('inputLN'),	
			'FN'=>$this->input->post('inputFN'),
			'MN'=>$this->input->post('inputMN'),	
			'Brgy'=>$this->input->post('inputBrgy'),
			'BirthDate'=>$this->input->post('inputBD'),
			'St'=>$this->input->post('inputSt'),
			'City'=>$this->input->post('inputC'),
			'CivilStatus'=>$this->input->post('inputCS'),
			'familyno'=>$this->input->post('inputFam'),
			'Philhealth'=>$this->input->post('inputPN'),
			'Remarks'=>$this->input->post('inputR'),
			'Sex'=>$this->input->post('inputSe'),
			'Age'=>$this->input->post('inputAge'),	
			'Assist'=>$this->input->post('inputassist'),
			'dateinsert'=>$this->input->post('inputinsert'),
			'Nationality'=>$this->input->post('inputN'),
			'Religion'=>$this->input->post('inputRe'),
			'Address'=>$this->input->post('inputAdd'),
			'Zipcode'=>$this->input->post('inputZ'),
			'Landline'=>$this->input->post('inputM'),
			'Relation'=>$this->input->post('inputRel')
		);

		$_POST['inputnote'] = "EDITED PATIENT NO" ."(". $_POST['inputID2'].")"." ".$_POST['inputLN'] ." " .$_POST['inputFN'];

		$logs = array(
			'code'=>$this->input->post('inputassist'),
			'activity'=>$this->input->post('inputnote'),
			'date'=>$this->input->post('inputinsert')
			);

	$this->db->where('ID', $id);
	$this->db->update('tabletest', $field);
	$this->db->insert('logs', $logs);

	if($this->db->affected_rows() > 0)
	{
		return true;
	}

	else
	{
		return false;
	}
	}

	public function addNewFamilyRecords()
	{
		$records = array(
			'HCID'=>$this->input->post('txtHCID'),	
			'LN'=>$this->input->post('inputLN'),
			'FN'=>$this->input->post('inputFN'),
			'MN'=>$this->input->post('inputMN'),
			'Brgy'=>$this->input->post('inputBrgy'),	
			'City'=>$this->input->post('inputC'),
			'dateinsert'=>$this->input->post('inputinsert'),
			'is_delete'=>("1")
		);

		$_POST['inputnote'] = "ADDED FAMILY " .$_POST['inputLN'] ." " .$_POST['inputFN'];

		$logs = array(
			'code'=>$this->input->post('inputAssist'),
			'activity'=>$this->input->post('inputnote'),
			'date'=>$this->input->post('inputinsert')
			);

	$this->db->insert('family', $records);
	$this->db->insert('logs', $logs);
	
	if($this->db->affected_rows() > 0)
	{
		return true;
	}

	else
	{
		return false;	
	}
	}

	public function editFam()
	{
		$records = array(
			'LN'=>$this->input->post('inputLN'),
			'FN'=>$this->input->post('inputFN'),
			'MN'=>$this->input->post('inputMN'),
			'Brgy'=>$this->input->post('inputBrgy'),	
			'City'=>$this->input->post('inputC')
		);

		$id = $this->input->post('inputFam');

		$_POST['inputnote'] = "UPDATED FAMILY NO" ."(". $_POST['inputFam'].")"." ".$_POST['inputLN'] ." " .$_POST['inputFN'];

		$logs = array(
			'code'=>$this->input->post('inputAssist'),
			'activity'=>$this->input->post('inputnote'),
			'date'=>$this->input->post('inputinsert')
			);

	$this->db->where('familyno', $id);
	$this->db->update('family', $records);
	$this->db->insert('logs', $logs);
	
	if($this->db->affected_rows() > 0)
	{
		return true;
	}

	else
	{
		return false;	
	}
	}


	public function addPRecords()
	{
	$records = array(
			'ID'=>$this->input->post('txtID'),	
			'HCID'=>$this->input->post('txtHCID'),
			'RecordType'=>$this->input->post('inputType'),
			'DATE'=>$this->input->post('inputDate'),
			'RETURNDATE'=>$this->input->post('inputReturn'),	
			'Diag'=>$this->input->post('inputDiagnosis'),
			'OUTCOME'=>$this->input->post('inputResult'),
			'PRESCRIPTION'=>$this->input->post('inputPrescripton'),
			'r_delete'=> "1"
		);

	$_POST['inputnote'] = "ADDED RECORD " .$_POST['inputLN'] ." " .$_POST['inputFN'];

	$logs = array(
		'code'=>$this->input->post('inputassist'),
		'activity'=>$this->input->post('inputnote'),
		'date'=>$this->input->post('inputinsert')
		);

	$this->db->insert('precords', $records);
	$this->db->insert('logs', $logs);
	
	if($this->db->affected_rows() > 0)
	{
		return true;
	}

	else
	{
		return false;	
	}
	}


	public function testsubmit()
	{
	$_POST['inputS'] = "1001";		
	$_POST['input1'] = "Added patient " .$_POST['input2'] ." ".$_POST['input2'];
	$logs = array(
	'code'=>$this->input->post('inputS'),
	'activity'=>$this->input->post('input1'),
	'date'=>$this->input->post('input2')
	);

	$this->db->insert('logs', $logs);

	if($this->db->affected_rows() > 0)
	{
	return true;
	}

	else
	{
	return false;
	}
	}

	public function deletefam($id)
	{
	$isfalse = array('is_delete' => 0);    
	$this->db->where('familyno', $id);
	$this->db->update('family', $isfalse); 
	
	if($this->db->affected_rows() > 0)
	{
		return true;
	}

	else
	{
		return false;
	}
	
	}

	public function updateFam()
	{
	$logs = array(
		'code' => $code,
		'activity' => $note,
		'date' => $date
	);    

	$Fno = $this->input->post('inputLN');
	$fam = array(
		'LN' => $this->input->post('inputLN'),
		'FN' => $this->input->post('inputFN'),
		'MN' => $this->input->post('inputMN'),
		'Brgy' => $this->input->post('inputBrgy'),
		'City' => $this->input->post('inputC')
	);  

	$this->db->where('family', $fam);
	$this->db->update('family', $fam);
	$this->db->insert('logs', $logs);

	if($this->db->affected_rows() > 0)
	{
		return true;
	}

	else
	{
		return false;
	}
	}

	public function updateProfile()
	{
	$code = $this->input->post('code');
	$note = "UPDATED PROFILE NAME";
	$date = $this->input->post('inputinsert');

	$logs = array(
		'code' => $code,
		'activity' => $note,
		'date' => $date
	);    

	$fam = array(
		'LN' => $this->input->post('inputLN'),
		'FN' => $this->input->post('inputFN'),
		'MN' => $this->input->post('inputMN')
	);  

	$this->db->where('code', $code);
	$this->db->update('users', $fam); 
	$this->db->insert('logs', $logs);

	if($this->db->affected_rows() > 0)
	{
		return true;
	}

	else
	{
		return false;
	}
	}

	public function delete($id,$code,$note,$date)
	{
	$logs = array(
		'code' => $code,
		'activity' => $note,
		'date' => $date
	);    

	$this->db->insert('logs', $logs);

	$isfalse = array('is_delete' => 0);    
	$this->db->where('id', $id);
	$this->db->update('tabletest', $isfalse); 
	$this->db->where('id', $id);
	$this->db->update('precords', $isfalse); 
	$this->db->where('id', $id);
	$this->db->update('fdesc', $isfalse); 

	if($this->db->affected_rows() > 0)
	{
		return true;
	}

	else
	{
		return false;
	}
	
	}

	public function getFamilyCode($id)
	{
		$this->db->select("*");
		$this->db->where('HCID', $id);
		$query = $this->db->get('family');
		return $query->result();
	}

	public function getallRecords($id)
	{
		$this->db->select("*");
		$this->db->where('ID', $id);
		$query = $this->db->get('precords');
		return $query->result();
	}

	public function getblob($recordno)
	{
		$this->db->select("Attached");
		$this->db->where('recordno', $recordno);
		$query = $this->db->get('precords');
		return $query->result();
	}

	public function getFamily($FNo)
	{
		$this->db->select("*");
		$this->db->where('familyno', $FNo);
		$query = $this->db->get('family');
		return $query->result();
	}

	public function getallFamily($id)
	{
		$this->db->select("*");
		$this->db->where('HCID', $id);
		$query = $this->db->get('family');
		return $query->result();
	}

}