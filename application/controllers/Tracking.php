<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tracking extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('BarangModel');
		$this->load->helper('form');
		$this->load->library('upload');
	}

	public function index()
	{
		$this->load->view('master/header');
		$this->load->view('view_tracking');
		$this->load->view('master/footer');
	}

	public function daftar()
	{
		$this->load->view('master/header');
		$this->load->view('view_daftar');
		$this->load->view('master/footer');
	}

	public function tracking()
	{
		$this->load->view('view_tracking');
	}


}
