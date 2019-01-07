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
	public function index()
	{
		$this->load->view('template/dashboard');
	}

	public function tables()
	{
		$this->load->view('template/examples/tables');
	}

	public function login()
	{
		$this->load->view('template/login');		
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
		$data['brand'] = 'Add Patient';
		$this->load->view('template/addpatient', $data);		
	}

	public function family()
	{
		$this->load->view('template/family');		
	}
}
