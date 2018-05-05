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
		$id_transaksi = $this->input->get('no_transaksi');
		$cari = $this->M_Customer->getTracking($id_transaksi);
		$status = $cari;
		$data = [
			'nama' => $nama,
			'id_transaksi' => $cari
		];

		if($cari == null) {
			$notFound = "Data Tidak Ditemukan";
			$data2 = [
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

		$result = $this->M_Customer->status($konfirmasi,$update);
		$cari = $this->M_Customer->getTracking($konfirmasi);

		$data = [
			'nama'=> $nama,
			'id_transaksi' => $cari,
		];

		$this->load->view('master/header',$data);
		$this->load->view('view_tracking',$data);
		$this->load->view('master/footer');
	}

}