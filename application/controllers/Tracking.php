<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tracking extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('M_Customer');
		$this->load->helper('form');
		$this->load->library('upload');
	}

	public function index()
	{
		$nama = $this->session->nm_plg;
		$data = [
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
		$nama = $this->session->nm_plg;
		$id_transaksi = $this->input->post('no_transaksi');
		$cari = $this->M_Customer->getTracking($id_transaksi);
		$data = [
			'nama' => $nama,
			'id_transaksi' => $cari
		];

		$this->load->view('master/header',$data);
		$this->load->view('view_tracking',$data);
		$this->load->view('master/footer');
	}

	public function konfirmasi()
	{
		$konfirmasi = $this->input->post('id_pesan');
		
		$status = 1;

		$data = [
			'status' => $status
		];

		$result = $this->M_Customer->status($konfirmasi,$data);
		echo json_encode($data);

	}

}
