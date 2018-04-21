<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
	}

	public function index()
	{
		$this->load->view('view_detilbarang');
	}

	public function daftar()
	{
		$this->load->view('view_daftar');
	}

	public function tracking()
	{
		$this->load->view('view_tracking');
	}


}
