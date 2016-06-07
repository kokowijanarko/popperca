<?php

if(!defined('BASEPATH')) exit('No direct script access allowed');

class M_cart extends CI_Model
{
	
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }
	
	public function listGenre(){
		$query = $this->db->query("
			SELECT 
				*
			FROM pop_genre
		");
		$result = $query->result();
		return $result;
	}
	public function getdetailGenre($id){
		$query = $this->db->query("
			SELECT 
				*				
			 FROM pop_genre a			 
			 WHERE a.`productgenre_id`='".$id."'
		");
		$result = $query->row();
		return $result;
	}
	
	public function doAdd($params){
		//var_dump($params);die;
		
		$result = false;
		
		if(!empty($params)){
			//$this->db->trans_start();
			$execute = $this->db->insert('pop_cart', $params);	
			//$this->db->trans_complete($execute);
			$result = true;
		}
		//var_dump($this->db->last_error());die;
		return $result;
	}
	
	public function doEdit($params){
		
		$data = array(
			'productgenre_name'=> $params['gen_name'],			
			'productgenre_description'=> $params['gen_desc']			
		);
		//var_dump($params, $data);die;
		$result = false;
		if(!empty($params)){
			$this->db->update('pop_genre', $data, array('productgenre_id' => $params['gen_id']));
			$result = true;
		}
		return $result;
	}
	
	
	public function doDelete($id){
		$result = false;
		if(!empty($id)){
			$execute = $this->db->delete('pop_genre', array('productgenre_id' => $id));
			$result = true;
		}		
		return $result;		
	}
	
	public function getUserCart($id){
		$query = $this->db->query('
			SELECT
				a.`cart_id`,
				a.`cart_product_id`,
				b.`product_name`,
				b.`product_price`,
				b.`product_gender_id`,
				b.`product_brand`,
				a.`cart_custommer_id`,
				c.`custommer_name`,
				a.`cart_product_count`,
				a.`cart_size_id`,
				d.`size_name`,
				d.`size_code`,
				(SELECT MAX(productimage_name) FROM pop_product_image aa
				WHERE aa.`productimage_product_id` = a.`cart_product_id`
				)AS product_image
				
			FROM pop_cart a 
			LEFT JOIN pop_product b ON b.`product_id` = a.`cart_product_id`
			LEFT JOIN dev_custommer c ON c.`custommer_id` = a.`cart_custommer_id`
			LEFT JOIN pop_size d ON d.`size_id` = a.`cart_size_id`
			WHERE a.`cart_status` = "1"	
				AND a.`cart_custommer_id`="'.$id.'" 
		');
		$execute = $query->result();
		return $execute;
	}
	
	
}