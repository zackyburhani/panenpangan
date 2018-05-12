<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UserModel extends CI_Model {

    public function __construct(){
		parent::__construct();
	}

    //method daftar user
    public function InsertDaftar($data){

		$checkinsert = false;
		try{
			$this->db->insert('login',$data);
			$checkinsert = true;
		}catch (Exception $ex) {
			$checkinsert = false;
		}
		return $checkinsert;
  }
	

	//ambil semua data dari table barang
	public function getAllBarang(){
		$result = $this->db->get('barang');
		return $result->result();
    }
    
    // get id kategori dari table barang
    function get_id($idkategori)
    {
        $this->db->where('id_kategori', $idkategori);
        $this->db->select("*");
        $this->db->from("barang");
        return $this->db->get();
	}
	
	// function get_idPesan($id_pesan)
	// {
	// 	$this->db->select("*");
	// 	$this->db->where('id_pesan', $id_pesan);
	// 	$this->db->from("detil_pesan");
	// 	return $this->db->get();
	// }

	public function getKodePesan()
   	{
	  $q = $this->db->query("select MAX(RIGHT(id_pesan,3)) as kd_max from pesan");
      $kd = "";
      if($q->num_rows() > 0)
      {
        foreach ($q->result() as $k) {
       	  $tmp = ((int)$k->kd_max)+1;
       	  $kd = sprintf("%03s",$tmp);
        }
      } else
       	{
       		$kd = "001";
       	}
      return "PS".$kd;
	}
	////////////pesan//////////////////
	public function detilpesan($data){
		$result = $this->db->insert('detil_pesan', $data);
		return $result;
		}

	public function pesan($data){
		$result = $this->db->insert('pesan', $data);
		return $result;
		}
	
	/////////////akhir pesan//////////////////


	///////////////////invoice//////////////////

	public function invoice($username){

		$result = $this->db->query("SELECT * FROM login,pesan,detil_pesan,barang,pelanggan 
		WHERE pesan.id_pesan = detil_pesan.id_pesan 
		and pelanggan.username = pesan.username
		and login.username = pelanggan.username
		and barang.id_brg = detil_pesan.id_brg 
		and pesan.username ='".$username."' and status_bayar = 'Belum Bayar'");
		return $result->result();
  
	}
	///////////////akhir invoice/////////////////////

	public function kwitansi($username){
		$result = $this->db->query("SELECT * FROM pesan,detil_pesan,barang WHERE pesan.id_pesan = detil_pesan.id_pesan and detil_pesan.id_brg = barang.id_brg and pesan.username = '".$username."'");
		return $result->result();
	}
}
   ////////////////update bayar///////////////////////
	// function changeActiveState($key)
	// {
	// 	$this->load->database();
	//  	$data = array(
	// 		'status_bayar'=>"LUNAS"
	//  	);

	// 	$this->db->where('md5(username)', $key);
	// 	$this->db->update('detil_pesan', $data);

	// 	return true;
	// }
