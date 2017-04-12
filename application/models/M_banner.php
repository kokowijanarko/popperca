<?php

if(!defined('BASEPATH')) exit('No direct script access allowed');

class M_banner extends CI_Model
{
	
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }
	
	public function show(){
		$query = $this->db->query("
			SELECT * FROM dev_banner;
		");
		$result = $query->result();
		return $result;
	}
	
	
	public function getImgName($id){
		$query = $this->db->get_where('dev_banner_images', array('bandet_banner_id'=>$id));
		$result = $query->result();
		return $result;
	}
	public function getImgFirst($id){
		$query = $this->db->get_where('pop_product_image', array('productimage_product_id'=>$id));
		$result = $query->row();
		return $result;
	}
	public function getImgById($id){
		$query = $this->db->get_where('pop_product_image', array('productimage_id'=>$id));
		$result = $query->result();
		return $result;
	}
	public function getImgLast($id){
		$query = $this->db->query("
			SELECT MAX(productimage_name) AS productimage_name 
			FROM pop_product_image 
			WHERE productimage_product_id ='".$id."'
		");
		$result = $query->result();
		return $result;
	}	
	
	public function do_add($params){
		//var_dump($params);die;
		$data = array(
			'product_name'=> $params['name'],			
			'product_brand'=>$params['brand'],
			'product_genre_id'=> $params['genre'],
			'product_description' => $params['description'],
			'product_gender_id' => $params['sex'],
			'product_price' => $params['price'],
			'product_is_show' => $params['show']
		);
		//var_dump($data);die;
		
		if(!empty($params)){
			//$this->db->trans_start();
			$execute = $this->db->insert('pop_product', $data);	
		//$this->db->trans_complete();
			// $last_id  = $this->db->insert_id();
			// $result = $last_id;
		}
		return $execute;
	}
	
	
	
	public function do_addImage($params){
		$this->db->trans_start();
		$execute = $this->db->insert('pop_product_image', $params);	
		$this->db->trans_complete();
		return $execute;		
	}
	
	public function do_delete($id){
		$result = false;
		if(!empty($id)){
			$execute = $this->db->delete('pop_product', array('product_id' => $id));
			$result = true;
		}		
		return $result;		
	}
	
	public function doEdit($params){
		$result = false;
		$data = array(
			'product_name'=> $params['name'],
			'product_genre_id'=> $params['genre'],
			'product_description' => $params['description'],
			'product_gender_id' => $params['sex'],
			'product_price' => $params['price'],
			'product_is_show' => $params['show'],
			'product_brand' => $params['brand']
		);
		if(!empty($data)){
			$this->db->update('pop_product', $data, array('product_id' => $params['id']));
			$result = true;
		}
		return $result;
	}		
	
	public function delImg($id){
		$query = $this->db->delete('pop_product_image', array('productimage_id' => $id));
		return $query;
	}
}