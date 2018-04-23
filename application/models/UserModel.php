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
}