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

	public function index()
	{
		$getBarang = $this->BarangModel->getBarang();
		$semuaBarang = $this->BarangModel->getAllBarang();
		$semuaKategori = $this->BarangModel->getAllKategori();
		$data['getBarang'] = $getBarang;
		$data['dataKategori'] = $semuaKategori;
		$data['dataBarang'] = $semuaBarang;
		$data['id_brg'] = $this->BarangModel->getKodeBarang();

		$this->load->view('view_detilbarang',$data);
	}

	public function sortir($id_kategori){

		$getBarang = $this->BarangModel->getBarang();
		$semuaBarang = $this->BarangModel->getAllBarang();
		$semuaKategori = $this->BarangModel->getAllKategori();
		$data['getBarang'] = $getBarang;
		$data['dataKategori'] = $semuaKategori;
		$data['dataBarang'] = $semuaBarang;
		$data['id_brg'] = $this->BarangModel->getKodeBarang();
		
		$sortkategori = $this->BarangModel->sortir($id_kategori);
		$data['id_kategori'] = $sortkategori;
		
		$this->load->view('view_detilbarang',$data);

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
