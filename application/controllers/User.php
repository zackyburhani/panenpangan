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

	//////////////////////proses masuk ke cart///////////////////////
	function add_to_cart(){ //fungsi Add To Cart
		$data = array(
			'id' => $this->input->post('id_brg'), 
			'name' => $this->input->post('nm_brg'), 
			'price' => $this->input->post('harga'), 
			'qty' => $this->input->post('quantity'), 
		);

		$this->cart->insert($data);
		echo $this->show_cart(); //tampilkan cart setelah added
	}

	function show_cart(){ //Fungsi untuk menampilkan Cart

		$output = '';
		$no = 0;
		
	//	print_r($this->cart->contents()); die();
		foreach ($this->cart->contents() as $items) {
			$no++;
			$output .= 
			'
				<tr>
		
					<td>'.$items['name'].'</td>
					<td>'.number_format($items['price']).'</td>
					<td>'.$items['qty'].'</td>
					<td>'.number_format($items['subtotal']).'</td>
					<td><button type="button" id="'.$items['rowid'].'" class="hapus_cart btn btn-danger btn-xs">Batal</button></td>
				</tr>
			';
		}
		$output .= '
			<tr>
				<th colspan="3">Total</th>
				<th colspan="2">'.'Rp '.number_format($this->cart->total()).'</th>
			</tr>
		';
		return $output;
	}

	function load_cart(){ //load data cart
		echo $this->show_cart();
	}

	function hapus_cart(){ //fungsi untuk menghapus item cart
		$data = array(
			'rowid' => $this->input->post('row_id'), 
			'qty' => 0, 
		);
		$this->cart->update($data);
		echo $this->show_cart();
	}

	function pesan_cart(){ //fungsi untuk memesan item via cart
		
		$id_pesan = $this->input->post('id_pesan');
		
		$cart = $this->cart->contents();
		foreach($cart as $item){
		
			$id_pesan++;
		$nama = $this->session->username;
     	$tgl=date('Y-m-d');

		  $data = array(
			'id_pesan'=> $id_pesan,
			'id_brg' => $item['id'],
			'qty' => $item['qty'],
			'harga_total' => $item['subtotal'],
			'poin' => 0,
            'status' => "Dalam Perjalanan"
		  );
		  $result = $this->UserModel->detilpesan($data);

		  $data = array(
			'id_pesan'=> $id_pesan,
			'tgl_pesan' => $tgl,
			'username' => $nama
			);        
	
		 $result2 = $this->UserModel->pesan($data);

		}
	  $this->cart->destroy();
	  redirect('User/invoice');
	}

	/////////////////////pesan barang///////////////////////////////////
	public function pesan($id, $harga) {

		$nama = $this->session->username;
		$tgl=date('Y-m-d');

        $qty = $this->input->post('qty');
		$id_pesan = $this->input->post('id_pesan');

		$harga = $harga*$qty;
		
            $data = array(
                'id_pesan'=> $id_pesan,
                'id_brg' => $id,
                'qty' => $qty,
                'harga_total' => $harga,
                'poin' => 0,
                'status' => "Dalam Perjalanan",
                );
      
        $result = $this->UserModel->detilpesan($data);
	 
		$data = array(
		'id_pesan'=> $id_pesan,
		'tgl_pesan' => $tgl,
		'username' => $nama
		);        

		$result2 = $this->UserModel->pesan($data);
      
        $data = NULL;
        if($result && $result2){
                    echo "<script type='text/javascript'>
                    alert ('Sending Request !');
                    window.location.redirect('User/invoice');
                    </script>";
                    redirect('User/invoice');
        }else{
                    echo "<script type='text/javascript'>
                    alert ('Sending Failed, silahkan Login dulu !');
                    window.location.replace('index');
                    </script>";       
                    redirect('Home');
        }
	}
	
	public function invoice(){

		$nama = $this->session->nm_plg;
		$username = $this->session->username;
		$data['nama'] = $nama;
		$data['id_pesan'] = $this->UserModel->getKodePesan();

		$invoice = $this->UserModel->invoice($username);
		$data['idpesan'] = $invoice;

		$this->load->view('master/header',$data);
        $this->load->view('view_bayar',$data);
        $this->load->view('master/footer');
	}

	public function bayar(){

		$encrypted_id = md5("asasjbh");

		$this->load->library('email');
		$config = array();
	    $config['charset'] = 'utf-8';
	    $config['useragent'] = 'Codeigniter';
	    $config['protocol']= "smtp";
	    $config['mailtype']= "html";
	    $config['smtp_host']= "ssl://smtp.gmail.com";
	    $config['smtp_port']= "465";
	    $config['smtp_timeout']= "400";
	    $config['smtp_user']= "verifikasi802@gmail.com";
	    $config['smtp_pass']= "admin123@"; 
	    $config['crlf']="\r\n"; 
	    $config['newline']="\r\n"; 
	    $config['wordwrap'] = TRUE;

	    $this->email->initialize($config);
	    //konfigurasi pengiriman
	    $this->email->from($config['smtp_user']);
	    $this->email->to("lutvi04@gmail.com");
	    $this->email->subject("Pemesanan Barang");
	    $this->email->message(
	     "Ada yang beli !!<br><br>".
	      site_url('User/verification/'.$encrypted_id)
	    );

	    if($this->email->send())
	    {
	        echo "<script type='text/javascript'>
                    alert ('Silahkan Lakukan Pembayaran !');
                    window.location.replace('invoice');
                    </script>";
	    }else
	    {
	        echo "<script type='text/javascript'>
                    alert ('Gagal Melakukan Permintaan Bayar !');
                    window.location.replace('invoice');
                    </script>";
	    }
	  
	    echo "<br><br><a href='".site_url("Home")."'>Kembali ke Home</a>";
	}

	public function verification($key)
	{
		$this->load->helper('url');
		$this->load->model('UserModel');
		$this->UserModel->changeActiveState($key);
		echo "Barang sudah di bayar";
		echo "<br><br><a href='".site_url("Tracking")."'>Silahkan cek di tracking</a>";
	}

}
