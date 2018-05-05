<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class M_Customer extends CI_Model {

    public function __construct(){
		parent::__construct();
	}


  //insert data, coded by mas galih
	public function InsertUsername($data){

		$checkinsert = false;
		try{
			$this->db->insert('username',$data);
			$checkinsert = true;
		}catch (Exception $ex) {
			$checkinsert = false;
		}
		return $checkinsert;

	}

  //read semua data
	public function readUsername($username,$password){
		$result = $this->db->where('username', $username)->where('password',md5($password))->limit(1)->get('username');
		return $result->result();

	}

  //fungsi ambil ID dari database
  function get_id($user_id)
  {
    $this->db->where('id_user', $user_id);
    $this->db->select("*");
    $this->db->from("username");
    return $this->db->get();
  }

  //fungsi ambil semua namaa username, coded by mas galih
	public function getAllUsername(){
		$result = $this->db->get('username');
		return $result->result();
	}

    //update data, coded by zacky
    function update_data($data,$where,$table)
    {
      $this->db->where($where);
      $this->db->update($table,$data);
    }

    //Delete, coded by zacky
    public function delete($id_user){
      $this->db->where('id_user', $id_user);
      $this->db->delete('username');
    }


    //kode Transaksi
    public function getKodeTransaksi()
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
      return "TS".$kd;
    }

    public function getTracking($id_pesan)
    { 
      $result = $this->db->query("SELECT * FROM detil_pesan,barang,pesan WHERE pesan.id_pesan = detil_pesan.id_pesan and barang.id_brg = detil_pesan.id_brg and detil_pesan.id_pesan ='".$id_pesan."'");
      return $result->result();
    }


}
