<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('BarangModel');
		$this->load->model('ModelDaftar');
		$this->load->helper('form');
		$this->load->library('upload');
	}

	public function index()
	{
		$nama = $this->session->nm_plg;
		$username = $this->session->username;
		$semuaKategori = $this->BarangModel->getAllKategori();
		$getNm_Plg = $this->ModelDaftar->getNm_Plg($username);
		$data = [
			'getNm_Plg' => $getNm_Plg,
			'dataKategori' => $semuaKategori,
			'nama' => $nama
		];
		
		$this->load->view('master/header',$data);
		$this->load->view('index',$data);
		$this->load->view('master/footer');
	}

	public function daftar()
	{	$getNm_Plg = $this->ModelDaftar->getNm_Plg($username);
		$nama = $this->session->nm_plg;
		$data = [
			'getNm_Plg' => $getNm_Plg,
			'nama' => $nama
		];
		$this->load->view('master/header',$data);
		$this->load->view('view_daftar');
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
