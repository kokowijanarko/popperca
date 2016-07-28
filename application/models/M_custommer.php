<?php

if(!defined('BASEPATH')) exit('No direct script access allowed');

class M_custommer extends CI_Model
{
	
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }
	
	public function listCustommer(){
		$query = $this->db->query("
			SELECT
				a.`custommer_id`,
				a.`custommer_name`,
				a.`custommer_province_id`,
				a.`custommer_city_id`,
				a.`custommer_address`,
				a.`custommer_phone`,
				a.`custommer_pos_code`,
				a.`custommer_type`,
				b.`custommertype_type`,
				c.`province` AS cus_provinsi,
				d.`city` AS cus_kabupaten
			FROM dev_custommer a 
			JOIN `dev_custommer_type` b ON b.`custommertype_id` = a.`custommer_type`
			JOIN `ref_province` c ON c.`province_id` = a.`custommer_province_id`
			JOIN `ref_city` d ON d.`city_id` = a.`custommer_city_id`
		");
		$result = $query->result();
		return $result;
	}
	public function getDetailCustommer($id){
		$query = $this->db->query("
			SELECT 
				*				
			 FROM dev_custommer a			 
			 WHERE a.`productgenre_id`='".$id."'
		");
		$result = $query->row();
		return $result;
	}	
	
	public function getCustomerdetailById($id){
		$query = $this->db->query('
			SELECT	*
			FROM dev_custommer a
			JOIN ref_province b ON b.`province_id` = a.`custommer_province_id`
			JOIN ref_city c ON c.`city_id`= a.`custommer_city_id` 
			WHERE a.`custommer_id` = "'.$id.'"
		');
		$result = $query->row();
		return $result;
	}
	
	public function doAdd($params){		
		$result = false;
		if(!empty($params)){
			$execute = $this->db->insert('dev_custommer', $params);	
			$result = true;
		}
		return $result;
	}
	
	public function doEdit($params, $id){
		$result = false;
		if(!empty($params)){
			$this->db->update('dev_custommer', $params, array('custommer_id' => $id));
			$result = true;
		}
		return $result;
	}
	
	
	public function doDelete($id){
		$result = false;
		if(!empty($id)){
			$execute = $this->db->delete('dev_custommer', array('productgenre_id' => $id));
			$result = true;
		}		
		return $result;		
	}
	
	public function getProvinsi(){
		$query = $this->db->get('ref_province');
		$result = $query->result();
		return $result;
	}
	
	public function getKabupaten($id){
		$query = $this->db->get_where('ref_city', array('province_id'=>$id));
		$result = $query->result();
		return $result;
	}
	
	
	public function getKecamatan($id){
		$query = $this->db->get_where('dev_kecamatan', array('IDKabupaten'=>$id));
		$result = $query->result();
		return $result;
	}
	
	public function getCustommerType(){
		$query = $this->db->get_where('dev_custommer_type');
		$result = $query->result();
		return $result;
	}
	
	public function getCustommerDetail($id){
		$query = $this->db->get_where('dev_custommer', array('custommer_id'=>$id));
		$result = $query->row();
		return $result;
	}
	
}