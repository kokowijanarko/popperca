<?php

if(!defined('BASEPATH')) exit('No direct script access allowed');

class M_useraccount extends CI_Model
{
	
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

	function detail($id){
		$query = $this->db->get_where('dev_custommer', array('custommer_id'=>$id));
		$result = $query->row();
		return $result;
    }
	function getProvinsi($id){
		$query = $this->db->get_where('ref_province', array('province_id'=>$id));
		$result = $query->row();
		return $result;
    }
	function getKabupaten($id){
		$query = $this->db->get_where('ref_city', array('city_id'=>$id));
		$result = $query->row();
		return $result;
    }
	function getKecamatan($id){
		$query = $this->db->get_where('dev_kecamatan', array('IDKecamatan'=>$id));
		$result = $query->row();
		return $result;
    }
   
   
}