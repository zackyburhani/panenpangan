<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ModelDaftar extends CI_Model {

    public function __construct(){
		parent::__construct();
	}

  public function InsertData($data){
    $checkinsert = false;
		try{
			$this->db->insert('pelanggan',$data);
			$checkinsert = true;
		}catch (Exception $ex) {
			$checkinsert = false;
		}
		return $checkinsert;
  }

  public function getIdPlg()
  {
    $q = $this->db->query("select MAX(RIGHT(id_plg,3)) as kd_max from pelanggan");
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
    return "PL".$kd;
  }
