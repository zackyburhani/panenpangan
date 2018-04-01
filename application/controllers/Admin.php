<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('ModelAdmin');
	}

	public function index()
	{
		$this->load->view('admin/template/index');
	}


/////////////////////START-PETANI//////////////////////////

	public function petani()
	{
		$semuaPetani = $this->ModelAdmin->getAllPetani();
		$data['dataPetani'] = $semuaPetani;
		$data['id_petani'] = $this->ModelAdmin->getKodePetani();
		$this->load->view('admin/data_petani',$data);
	}

	public function tambahPetani()
	{

		//$autonumber = $this->ModelAdmin->buat_kode();
		// $id_petani = "PTN06";
		$id_petani = $this->input->post('id_petani');
		$nm_petani = $this->input->post('nm_petani');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$alamat = $this->input->post('alamat');
		$no_telp = $this->input->post('no_telp');

		$data = array(
			'id_petani' => $id_petani,
			'nm_petani' =>$nm_petani,
			'tgl_lahir'=> $tgl_lahir,
			'alamat' => $alamat,
			'no_telp' => $no_telp
		);

		$result = $this->ModelAdmin->InsertPetani($data);

		$data = NULL;
		if ($result){
			redirect('Admin/Petani');
		}else{
			echo json_encode(array('success' => false));
		}
	}

	public function editPetani($id_petani)
	{
		$data['dataPetani'] =  $this->ModelAdmin->get_idPetani($id_petani)->result();
		$this->load->view('admin/modal/petani/UpdatePetani',$data);
	}

	public function hapusPetani($id_petani)
	{
		$this->ModelAdmin->deletePetani($id_petani);
		redirect('Admin/Petani');
	}

	public function ubahPetani()
	{
		$id_petani = $this->input->post('id_petani');
		$nm_petani = $this->input->post('nm_petani');
		$tgl_lahir = $this->input->post('tgl_lahir');
		$alamat = $this->input->post('alamat');
		$no_telp = $this->input->post('no_telp');

		$data = array(
			'nm_petani' =>$nm_petani,
			'tgl_lahir'=> $tgl_lahir,
			'alamat' => $alamat,
			'no_telp' => $no_telp
		);

		$result = $this->ModelAdmin->UpdatePetani($id_petani,$data);
		redirect('Admin/Petani');
	}

/////////////////////END-PETANI//////////////////////////



/////////////////////START-KATEGORI//////////////////////////

	public function kategori()
	{
		$semuaKategori = $this->ModelAdmin->getAllKategori();
		$data['dataKategori'] = $semuaKategori;
		$this->load->view('admin/data_kategori',$data);
	}

	public function tambahKategori()
	{
		//$autonumber = $this->ModelAdmin->buat_kode();

		$id_kategori = $this->input->post('id_kategori');
		$nm_kategori = $this->input->post('nm_kategori');
		$data = array(
			'id_kategori' => $id_kategori,
			'nm_kategori' =>$nm_kategori
		);

		$result = $this->ModelAdmin->InsertKategori($data);

		$data = NULL;
		if ($result){
			echo json_encode(array('success' => true));
			redirect('Admin/Kategori');
		}else{
			echo json_encode(array('success' => false));
		}
	}

	public function editKategori($id_kategori)
	{
		$data['dataKategori'] =  $this->ModelAdmin->get_idKategori($id_kategori)->result();
		$this->load->view('admin/modal/petani/UpdateKategori',$data);
	}

	public function hapusKategori($id_kategori)
	{
		$this->ModelAdmin->delete($id_kategori);
		redirect('Admin/Kategori');
	}

/////////////////////END-KATEGORI//////////////////////////



/////////////////////START-BARANG//////////////////////////

	public function barang()
	{
		$semuaBarang = $this->ModelAdmin->getAllBarang();
		$data['dataBarang'] = $semuaBarang;
		$this->load->view('admin/data_barang',$data);
	}

	public function tambahBarang()
	{
		//$autonumber = $this->ModelAdmin->buat_kode();

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

		$result = $this->ModelAdmin->InsertBarang($data);

		$data = NULL;
		if ($result){
			redirect('Barang');
		}else{
			echo json_encode(array('success' => false));
		}
	}

	public function editBarang($id_Barang)
	{
		$data['dataBarang'] =  $this->ModelAdmin->get_idBarang($id_barang)->result();
		$this->load->view('admin/modal/barang/UpdateBarang',$data);
	}

	public function hapusHapus($id_barang)
	{
		$this->ModelAdmin->delete($id_barang);
		redirect('Barang');
	}

/////////////////////END-BARANG//////////////////////////

}
