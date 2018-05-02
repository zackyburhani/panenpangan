<?php defined('BASEPATH') OR exit('No direct script access allowed');

class DaftarLengkap extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('ModelDaftar');
	}

  public function index()
	{
		$nama = $this->session->nm_plg;
		$username = $this->session->username;
		$data = [
			'nama' => $nama,
			'username' => $username
		];
		$this->load->view('master/header',$data);
   		$this->load->view('view_daftar_lengkap');
		$this->load->view('master/footer');
	}

  public function DataLengkap()
  {

    	$idplg = $this->ModelDaftar->getIdPlg();

		$no_telp = $this->input->post('no_telp');
		$alamat = $this->input->post('alamat');
		$kodepos = $this->input->post('kodepos');
		$username = $this->input->post('username');

		$data = array(
			'no_telp' =>$no_telp,
			'alamat'=>$alamat,
			'kodepos' => $kodepos,
			'username' => $username,
      		'id_plg' => $idplg
		);

		$result = $this->ModelDaftar->InsertData($data);

		$data = NULL;
		if ($result){
			echo json_encode(array('success' => true));
		}else{
			echo json_encode(array('success' => false));
		}

		redirect('');

  }

	public function auth()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$checkUsername = $this->ModelAdmin->readUsername($username,$password);

		if($checkUsername==NULL){

			echo "<script type='text/javascript'>
               alert ('Maaf Username Dan Password Anda Salah !');
               window.location.replace('index');
      			</script>";

		}else{
			$newdata = array(
				'username'  => $checkUsername->username,
				'name'  => $checkUsername->nama
			  );
			//set seassion
			$this->session->set_userdata($newdata);
			redirect('Admin');
		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('Admin/Login');
	}
}
