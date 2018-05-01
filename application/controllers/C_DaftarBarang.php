<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_DaftarBarang extends CI_Controller {

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

        $this->load->view('master/header');
        $this->load->view('view_about',$data);
        $this->load->view('master/footer');
        
    }
        
    public function sort($id)
    {
    	$nama = $this->session->nm_plg;
		$semuaKategori = $this->BarangModel->getAllKategori();
		$data['dataKategori'] = $semuaKategori;
		$data['dataBarang'] = $this->BarangModel->getSort($id);
		$data['nama'] = $nama;

        $this->load->view('master/header',$data);
       	$this->load->view('view_about',$data);
       	$this->load->view('master/footer');
        
	}

}