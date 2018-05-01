<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('BarangModel');
		$this->load->helper('form');
		$this->load->library('upload');
	}

	public function login()
	{
		$this->load->view('login');
	}	

	public function index()
	{
		$semuaKategori = $this->BarangModel->getAllKategori();
		$data['dataKategori'] = $semuaKategori;
		
		$this->load->view('master/header');
		$this->load->view('index',$data);
		$this->load->view('master/footer');
	}

	public function daftar()
	{
		$this->load->view('master/header');
		$this->load->view('view_daftar_lengkap');
		$this->load->view('master/footer');
	}

	public function tracking()
	{
		$this->load->view('view_tracking');
	}

	public function about()
	{
		$this->load->view('master/header');
		$this->load->view('view_bayar');
		$this->load->view('master/footer');
	}


}
