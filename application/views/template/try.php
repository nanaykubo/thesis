<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$db = new PDO('mysql:host=localhost;dbname=medrec','root','');	

class RPDF extends FPDF
{
// Page header
function Header(){
    // Logo
    $this->Image(base_url().'assets/img/brand/setLOGO.jpg',50,-4,-400);
    $this->SetFont('Arial','B',30);
    $this->Cell(350,5,'Medical Records Tracking System',5,5,'C');
    $this->Ln();
    $this->SetFont('Times','',12);
    // Title
    // Line break
    $this->Ln(20);
}

function ViewHeader($db,$get)
{
	date_default_timezone_set('US/Eastern');
	$currentdate = date("m-d-Y");
	$this->SetFont('Arial','I',15);
	$stmt= $db->query('select FN,LN,MN from tabletest where ID='.$get);
	$data = $stmt->fetch(PDO::FETCH_OBJ);
	$this->Cell(350,5,"PATIENT NAME : ".$data->FN." ".$data->MN." ".$data->LN,5,5,'C');
	  $this->Ln();
	$this->Cell(350,5,"Date Exported : ".$currentdate,5,5,'C');
	$this->Ln(10);
}

// Page footer
function Footer(){
    // Position at 1.5 cm from bottom
    $this->SetY(-15);
    // Arial italic 8
    $this->SetFont('Arial','I',8);
    // Page number
    $this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}

function headerTable()
{
	$this->SetFont('Times','B',12);
	$this->Cell(40,10,'Record No',1,0,'C');
	$this->Cell(40,10,'Record Type',1,0,'C');
	$this->Cell(30,10,'Date',1,0,'C');
	$this->Cell(30,10,'Return Date',1,0,'C');
	$this->Cell(60,10,'Diagnosis',1,0,'C');
	$this->Cell(80,10,'Outcome',1,0,'C');
	$this->Cell(60,10,'Prescription',1,0,'C');
	$this->Ln();
}

function viewTable($db,$get)
{
	$this->SetFont('Times','B',12);
	$stmt= $db->query('select * from precords where ID='.$get);
	while($data = $stmt->fetch(PDO::FETCH_OBJ))
	{
	$this->Cell(40,10,$data->recordno,1,0,'C');
	$this->Cell(40,10,$data->RecordType,1,0,'C');
	$this->Cell(30,10,$data->DATE,1,0,'C');
	$this->Cell(30,10,$data->RETURNDATE,1,0,'C');
	$this->Cell(60,10,$data->Diag,1,0,'C');
	$this->Cell(80,10,$data->OUTCOME,1,0,'C');
	$this->Cell(60,10,$data->PRESCRIPTION,1,0,'C');
	$this->Ln();
	}
}

function viewImages($db,$get)
{
	$this->SetFont('Times','B',12);
	$stmt= $db->query('select * from precords where ID='.$get);
	while($data = $stmt->fetch(PDO::FETCH_OBJ))
	{
	$this->Cell(40,10,$data->ID,1,0,'C');
	$this->Cell(40,10,$data->RecordType,1,0,'C');
	$this->Cell(30,10,$data->DATE,1,0,'C');
	$this->Cell(30,10,$data->RETURNDATE,1,0,'C');
	$this->Cell(60,10,$data->Diag,1,0,'C');
	$this->Cell(80,10,$data->OUTCOME,1,0,'C');
	$this->Cell(60,10,$data->PRESCRIPTION,1,0,'C');
	$this->Ln();
	}
}

function viewAttached($db,$get)
{
	$this->SetFont('Times','B',12);
	$stmt= $db->query('select * from attached where ID='.$get);
	while($data = $stmt->fetch(PDO::FETCH_OBJ))
	{
	 $this->Image(base_url('assets/uploads/'.$data->images),80,25,200);
	}
}

}

// Instanciation of inherited class
$this->myfpdf = new RPDF();
$this->myfpdf->AliasNbPages();
$this->myfpdf->AddPage('L','Legal',0);
$this->myfpdf->ViewHeader($db,$get);
$this->myfpdf->headerTable();
$this->myfpdf->viewTable($db,$get);
$this->myfpdf->AddPage('L','Legal',0);
$this->myfpdf->viewAttached($db,$get);
$this->myfpdf->SetFont('Times','',12);
for($i=1;$i<=40;$i++)
$this->myfpdf->Output();
?>