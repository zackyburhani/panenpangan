<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tracking extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('M_Customer');
		$this->load->model('ModelDaftar');
		$this->load->helper('form');
		$this->load->library('upload');
	}

	public function index()
	{
		$username = $this->session->username;
		$getNm_Plg = $this->ModelDaftar->getNm_Plg($username);
		$nama = $this->session->nm_plg;
		$data = [
			'getNm_Plg'=> $getNm_Plg,
			'nama' => $nama
		];

		$this->load->view('master/header',$data);
		$this->load->view('view_tracking');
		$this->load->view('master/footer');
	}

	public function daftar()
	{
		$this->load->view('master/header');
		$this->load->view('view_daftar');
		$this->load->view('master/footer');
	}

	public function cari()
	{
		$username = $this->session->username;
		$nama = $this->session->nm_plg;
		$getNm_Plg = $this->ModelDaftar->getNm_Plg($username);
		$id_transaksi = $this->input->get('no_transaksi');
		$cari = $this->M_Customer->getTracking($id_transaksi);
		$status = $cari;
		$data = [
			'getNm_Plg' => $getNm_Plg,
			'nama' => $nama,
			'id_transaksi' => $cari
		];

		if($cari == null) {
			$notFound = "Data Tidak Ditemukan";
			$data2 = [
				'getNm_Plg' => $getNm_Plg,
				'nama' => $nama,
				'id_transaksi' => $cari,
				'notFound'=> $notFound
			];

			$this->load->view('master/header',$data2);
			$this->load->view('view_tracking',$data2);
			$this->load->view('master/footer');
		} else {

			$this->load->view('master/header',$data);
			$this->load->view('view_tracking',$data);
			$this->load->view('master/footer');
		}
	}

	public function konfirmasi($konfirmasi)
	{
		$nama = $this->session->nm_plg;
		
		$status = 2;

		$update = [
			'status' => $status
		];

		$username = $this->session->username;
		$getNm_Plg = $this->ModelDaftar->getNm_Plg($username);
		$result = $this->M_Customer->status($konfirmasi,$update);
		$cari = $this->M_Customer->getTracking($konfirmasi);

		$data = [
			'getNm_Plg' => $getNm_Plg,
			'nama'=> $nama,
			'id_transaksi' => $cari,
		];

		$this->load->view('master/header',$data);
		$this->load->view('view_tracking',$data);
		$this->load->view('master/footer');
	}





}