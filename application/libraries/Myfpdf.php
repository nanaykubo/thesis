<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require('fpdf/fpdf.php');

class Myfpdf extends FPDF {
	function __construct()
	{
		parent::__construct();
		$ci =& get_instance();
	}

}
?>