<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_DaftarBarang extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
        $this->load->model('BarangModel');
		$this->load->model('UserModel');
		$this->load->helper('form');
		$this->load->library('upload');
		error_reporting(0);
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
        $data['id_pesan'] = $this->UserModel->getKodePesan();

        $this->load->view('master/header',$data);
       	$this->load->view('view_about',$data);
       	$this->load->view('master/footer');
	}
	///////////searching////////////////////
	function get_autocomplete(){
		if (isset($_GET['term'])) {
		  	$result = $this->BarangModel->search_blog($_GET['term']);
		   	if (count($result) > 0) {
		    foreach ($result as $row)
		     	$arr_result[] = array(
					'label'	=> $row->nm_brg,
				);
		     	echo json_encode($arr_result);
		   	}
		}
	}

	function search(){
		$title=$this->input->get('title');
		$data['dataBarang']=$this->BarangModel->search_blog($title);
		$data['id_pesan'] = $this->UserModel->getKodePesan();

		$semuaKategori = $this->BarangModel->getAllKategori();
		$data['dataKategori'] = $semuaKategori;
	
		
		$this->load->view('master/header');
        $this->load->view('view_about',$data);
        $this->load->view('master/footer');
	}
    ///////////searching////////////////////
}