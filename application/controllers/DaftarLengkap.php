<?php defined('BASEPATH') OR exit('No direct script access allowed');

class DaftarLengkap extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->helper('url');
		$this->load->model('ModelDaftar');
	}

  public function index()
	{
		$this->load->view('master/header');
    $this->load->view('view_daftar_lengkap');
		$this->load->view('master/footer');
	}

  public function getLogin()
  {

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
