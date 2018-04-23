<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct() {
		parent::__construct();
			$this->load->model('UserModel');
	}


	public function index()
	{
		
	}


	public function InsertDaftar(){

		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$nama = $this->input->post('nm_plg');
		$email = $this->input->post('email');

		$data = array(
		'username' =>$username,
		'password'=> md5($password),
		'nm_plg'=>$nama,
		'email' => $email

		);

		$result = $this->UserModel->InsertDaftar($data);

		$data = NULL;
		if($result){

			$data['result'] = "Sukses";
		}else{

			$data['result'] = "Gagal";
		}

		$newdata = array(
			'username'  => $checkUsername->username,
			'name'  => $checkUsername->nama,
			'email'  => $checkUsername->email
		  );
		//set seassion
		$this->session->set_userdata($newdata);
		//$this->load->view('Insert',$data);
		redirect('Home');
	}

}
