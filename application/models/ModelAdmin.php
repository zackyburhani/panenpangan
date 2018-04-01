<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ModelAdmin extends CI_Model {

    public function __construct(){
		parent::__construct();
	}

//////////////////START-PETANI/////////////////////////////////

	public function InsertPetani($data){

		$checkinsert = false;
		try{
			$this->db->insert('petani',$data);
			$checkinsert = true;
		}catch (Exception $ex) {
			$checkinsert = false;
		}
		return $checkinsert;

	}

  public function getAllPetani(){
		$result = $this->db->get('petani');
		return $result->result();
	}

  // //read semua data
	// public function readUsername($username,$password){
	// 	$result = $this->db->where('username', $username)->where('password',md5($password))->limit(1)->get('username');
	// 	return $result->result();
	//
	// }

  //fungsi ambil ID dari database
  function get_idPetani($id_petani)
  {
    $this->db->select("*");
    $this->db->where('id_petani', $id_petani);
    $this->db->from("petani");
    return $this->db->get();
  }

    //update data, coded by zacky
    function updatePetani($id_petani,$data)
    {
      $this->db->where('id_petani',$id_petani);
      $this->db->update('petani',$data);
    }

    public function deletePetani($id_petani){
      $this->db->where('id_petani', $id_petani);
      $this->db->delete('petani');
    }


    public function getKodePetani()
   	{
   		$q = $this->db->query("select MAX(RIGHT(id_petani,3)) as kd_max from petani");
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
   		return "PT".$kd;
   	}

////////////////////END-PETANI////////////////////////


////////////////////START-KATEGORI////////////////////////
	public function InsertKategori($data)
	{
		$checkinsert = false;
		try{
			$this->db->insert('kategori',$data);
			$checkinsert = true;
		}catch (Exception $ex) {
			$checkinsert = false;
		}
		return $checkinsert;
	}

	public function getAllKategori()
	{
		$result = $this->db->get('kategori');
		return $result->result();
	}

	//fungsi ambil ID dari database
	function get_idKategori($id_Kategori)
	{
		$this->db->select("*");
		$this->db->where('id_kategori', $id_Kategori);
		$this->db->from("kategori");
		return $this->db->get();
	}

	//update data, coded by zacky
	function updateKategori($data,$where,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function delete($id_Kategori){
		$this->db->where('id_kategori', $id_Kategori);
		$this->db->delete('kategori');
	}

////////////////////END-KATEGORI////////////////////////



////////////////////START-BARANG////////////////////////

	public function InsertBarang($data)
	{
		$checkinsert = false;
		try{
			$this->db->insert('barang',$data);
			$checkinsert = true;
		}catch (Exception $ex) {
			$checkinsert = false;
		}
		return $checkinsert;
	}

	public function getAllBarang()
	{
		$result = $this->db->get('barang');
		return $result->result();
	}

	//fungsi ambil ID dari database
	function get_idBarang($id_barang)
	{
		$this->db->select("*");
		$this->db->where('id_barang', $id_barang);
		$this->db->from("barang");
		return $this->db->get();
	}

	//update data, coded by zacky
	function updateBarang($data,$where,$table)
	{
		$this->db->where($where);
		$this->db->update($table,$data);
	}

	public function deleteBarang($id_barang){
		$this->db->where('id_barang', $id_barang);
		$this->db->delete('barang');
	}

////////////////////END-BARANG////////////////////////
}
