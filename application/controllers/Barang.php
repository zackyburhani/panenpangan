<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Barang extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('ModelBarang');
	}

	public function index()
	{
		$semuaBarang = $this->ModelBarang->getAllBarang();
		$data['dataBarang'] = $semuaBarang;
		$this->load->view('admin/data_barang',$data);
	}

	public function tambah(){

		//$autonumber = $this->ModelPetani->buat_kode();

		$id_barang = $this->input->post('id_barang');
		$nm_barang = $this->input->post('nm_barang');
		$stok = $this->input->post('stok');
		$harga = $this->input->post('harga');
		$ongkir = $this->input->post('ongkir');
		$rating = $this->input->post('rating');
		$gambar = $this->input->post('gambar');
		$id_kategori = $this->input->post('kategori');

		$data = array(
			'id_brg' => $id_barang,
			'nm_brg' => $nm_barang,
			'stok' => $stok,
			'harga' => $harga,
			'ongkir' => $ongkir,
			'rating' => $rating,
			'gambar' => $gambar,
			'id_kategori' => $id_kategori
		);

		$result = $this->ModelBarang->InsertBarang($data);

		$data = NULL;
		if ($result){
			redirect('Barang');
		}else{
			echo json_encode(array('success' => false));
		}
	}

	public function edit($id_Barang) {

		$data['dataBarang'] =  $this->ModelBarang->get_id($id_barang)->result();
		$this->load->view('admin/modal/barang/UpdateBarang',$data);

	}

	public function hapus($id_barang) {
		$this->ModelBarang->delete($id_barang);
		redirect('Barang');
	}

}
