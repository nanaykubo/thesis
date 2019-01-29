<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class getinfo extends CI_Model 
{
	public function can_login($username,$password)
	{
		$this->db->where('username',$username);	
		$this->db->where('password',$password);

		$query = $this->db->get('users');

		if ($query -> num_rows() > 0)
		{
			return true;
		}
		else
		{
			return false;
		}
	}

	public function getUser($username,$password)
	{
		$this->db->select('*');
		$this->db->where('username',$username);
		$this->db->where('password',$password);

		$query = $this->db->get('users');
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
		$query = $this->db->get('healthcenters');
		return $query->result();
	}

	public function ajax($HCID)
	{																
		$this->db->select("*");
		$this->db->where('HCID',$HCID);
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

	public function getAnnual($txtYear)
	{
		$this->db->select("*");
		$this->db->where('YEAR(dateinsert)',$txtYear);
		$this->db->where('is_delete',"1");
		$query = $this->db->get('tabletest');
		return $query->result_array();
	}

	public function getQuarter($txtYear,$txtQuarter)
	{
		$this->db->select("*");
		$this->db->where('QUARTER(dateinsert)',$txtQuarter);
		$this->db->where('YEAR(dateinsert)',$txtYear);
		$this->db->where('is_delete',"1");
		$query = $this->db->get('tabletest');
		return $query->result_array();
	}

	public function getMonth($txtMonth,$txtYear)
	{
		$this->db->select("*");
		$this->db->where('MONTH(dateinsert)',$txtMonth);
		$this->db->where('YEAR(dateinsert)',$txtYear);
		$this->db->where('is_delete',"1");
		$query = $this->db->get('tabletest');
		return $query->result_array();
	}

	public function getCustom($txtStart,$txtEnd)
	{
		$this->db->select("*");
		$this->db->where('dateinsert >=', $txtStart);
		$this->db->where('dateinsert <=', $txtEnd);
		$query = $this->db->get('tabletest');
		return $query->result_array();
	}

	public function getRecords($ID)
	{
		$this->db->select("*");
		$this->db->where('ID',$ID);
		$query = $this->db->get('logs');
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

	public function getPieChart($HCID)
	{
		$this->db->select('brgy.BRGYID, brgy.HCID,COUNT(family.Brgy) as total')
		->from('brgy');
		$this->db->join('family', 'brgy.BRGYID = family.Brgy','left')
         ->group_by('brgy.BRGYID');	
        $this->db->having('brgy.HCID=',$HCID);
        $query = $this->db->get();
		return $query->result();
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

	public function getTotalFamily($HCID)
	{
		$this->db->select('COUNT(familyno) as family');
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

	public function getID($id)
	{
		$this->db->select("BRGYID");
		$this->db->where('HCID', $id);
		$query = $this->db->get('brgy');
		return $query->result();
	}

	public function getFDesc($FNo)
	{
		$this->db->select("*");
		$this->db->where('familyno', $FNo);
		$query = $this->db->get('fdesc');
		return $query->result();
	}

	public function getImage($RNo)
	{
		$this->db->select("Attached");
		$this->db->where('recordno', $RNo);
		$query = $this->db->get('precords');
		$data = $query->row_array();
		$value = $data['Attached'];
		return $value;
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
			'ID'=>$this->input->post('inputID'),
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
			'Remarks'=>$this->input->post('inputR')		
	);

	$_POST['inputnote'] = "ADDED PATIENT " .$_POST['inputLN'] ." " .$_POST['inputFN'];
	
	 $logs = array(
			'code'=>$this->input->post('inputassist'),
			'activity'=>$this->input->post('inputnote'),
			'date'=>$this->input->post('inputinsert')
			);

	 $fam = array(
			'ID'=>$this->input->post('inputID'),
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

		$id = $this->input->post('inputID');

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
			'Landline'=>$this->input->post('inputM')
		);

	$_POST['inputnote'] = "EDIT PATIENT " .$_POST['inputLN'] ." " .$_POST['inputFN'];
		
	 $logs = array(
		'code'=>$this->input->post('inputassist'),
		'activity'=>$this->input->post('inputnote'),
		'date'=>$this->input->post('inputinsert')
		);

	$this->db->where('ID',$id);
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
			'St'=>$this->input->post('inputSt'),
			'City'=>$this->input->post('inputC')
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

	public function addPRecords($image)
	{

	$records = array(
			'ID'=>$this->input->post('txtID'),	
			'HCID'=>$this->input->post('txtHCID'),
			'RecordType'=>$this->input->post('inputType'),
			'DATE'=>$this->input->post('inputDate'),
			'RETURNDATE'=>$this->input->post('inputReturn'),	
			'RESULT'=>$this->input->post('inputResult'),
			'PRESCRIPTION'=>$this->input->post('inputPrescripton'),
			'Attached'=> $image,
			'is_delete'=> "1"
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

	public function getFamily($id)
	{
		$this->db->select("*");
		$this->db->where('code', $id);
		$query = $this->db->get('fdesc');
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