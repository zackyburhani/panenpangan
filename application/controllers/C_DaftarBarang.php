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

		$semuaKategori = $this->BarangModel->getAllKategori();
		$data['dataKategori'] = $semuaKategori;
		$data['dataBarang'] = $this->BarangModel->getSort($id);

        $this->load->view('master/header');
        $this->load->view('view_about',$data);
        $this->load->view('master/footer');
        
        }
        
    public function pesan($id, $harga) {

        $qty = $this->input->post('qty');

            $data = array(
                'id_pesan'=> 1,
                'id_brg' => $id,
                'qty' => $qty,
                'harga_total' => $harga,
                'poin' => 0,
                'status' => "Dalam Perjalanan",
                );
      
        $result = $this->BarangModel->pesan($data);
      
        $data = NULL;
        if($result){
                    echo "<script type='text/javascript'>
                    alert ('Sending Request !');
                    window.location.replace('index');
                    </script>";
                    redirect('Home');
        }else{
                    echo "<script type='text/javascript'>
                    alert ('Sending Failed, silahkan Login dulu !');
                    window.location.replace('index');
                    </script>";       
                    redirect('Home');
        }
    }
    
}