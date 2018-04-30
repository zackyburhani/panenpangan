<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CRUDModel extends CI_Model {

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
}
