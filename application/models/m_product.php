<?php

if(!defined('BASEPATH')) exit('No direct script access allowed');

class M_product extends CI_Model
{
	
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }
	
	public function list_product(){
		$query = $this->db->query("
			SELECT 
				a.`product_id`,
				a.`product_name`,
				c.`productgenre_name`,
				c.`productgenre_id`,				
				d.`gender_name`,
				a.`product_stock`,
				a.`product_description`				
			 FROM pop_product a
			 JOIN `pop_genre` c ON c.`productgenre_id` = a.`product_genre_id`
			 JOIN `dev_sex` d ON d.`gender_id` = a.`product_gender_id`
		");
		$result = $query->result();
		return $result;
	}
	
	public function prodSize($id){
		$query = $this->db->query("
			SELECT 
				b.size_name,
				b.size_code,
				a.productsize_stock,
				a.productsize_product_id
			FROM pop_product_size a 
			JOIN pop_size b ON a.productsize_size_id = b.size_id
			WHERE a.productsize_product_id = '".$id."'
		");
		$result = $query->result();
		return $result;
	}
	
	public function getImg($id){
		$query = $this->db->get_where('pop_product_image', array('productimage_product_id'=>$id));
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
	
	public function getdetailProduct($id){
		$query = $this->db->query("
			SELECT 
				a.`product_id`,
				a.`product_name`,
				c.`productgenre_name`,
				c.`productgenre_id`,
				d.`gender_name`,
				d.`gender_id`,
				a.`product_stock`,
				a.`product_price`,
				a.`product_brand`,
				a.`product_description`,
				a.`product_is_show`
			 FROM pop_product a
			 JOIN `pop_genre` c ON c.`productgenre_id` = a.`product_genre_id`
			 JOIN `dev_sex` d ON d.`gender_id` = a.`product_gender_id`
			 WHERE a.`product_id`='".$id."'
		");
		$result = $query->row();
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
			$last_id  = $this->db->insert_id();
			$result = $last_id;
		}
		return $result;
	}
	
	
	
	public function addSizeStock($params){
		$data = array(
			'productsize_product_id'=>$params['product_id'],
			'productsize_size_id'=>$params['size_id'],
			'productsize_stock'=>$params['stock']
		);
		$execute = $this->db->insert('pop_product_size', $data);
	}
	
	public function doEditSize($params){
		$data = array(
			'productsize_size_id' => $params['size_id'],
			'productsize_stock' => $params['stock']
		);
		//var_dump($data);die;
		//$this->db->update('pop_product_size', $data, array('productsize_id' => $params['id']));
		$this->db->query("
			UPDATE `pop_product_size` 
			SET 
			`productsize_size_id` = '".$params['size_id']."', 
			`productsize_stock` = '".$params['stock']."' 
			WHERE `productsize_id` = '".$params['id']."'
		");
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
			'product_is_show' => $params['show']
		);
		//var_dump($data);die;
		if(!empty($data)){
			$this->db->update('pop_product', $data, array('product_id' => $params['id']));
			$result = true;
		}
		return $result;
	}	
	
	public function list_genre(){
		$query = $this->db->query("
			SELECT * FROM pop_genre
		");
		$result = $query->result();
		return $result;
	}
	
	public function list_size(){
		$query = $this->db->query("
			SELECT * FROM pop_size
		");
		$result = $query->result();
		return $result;
	}
	public function sizeProductByIdProduct($id){
		$query = $this->db->query("
			SELECT 
				a.`productsize_stock`,
				b.`size_name`,
				b.`size_code`,
				a.`productsize_size_id`,
				a.`productsize_id`
			FROM pop_product_size a
			JOIN pop_size b ON b.`size_id` = a.`productsize_size_id`
			WHERE a.`productsize_product_id` = '".$id."'			
		");
		$result = $query->result();
		return $result;
	}
	
	public function size(){
		$query = $this->db->query('SELECT * FROM pop_size');
		$result = $query->result();
		return $result;
	}
	public function prodSizeById($id){
		$query = $this->db->query('
		SELECT 
				a.`productsize_stock`,
				b.`size_name`,
				b.`size_code`,
				a.`productsize_size_id`,
				a.`productsize_id`
			FROM pop_product_size a
			JOIN pop_size b ON b.`size_id` = a.`productsize_size_id`
			WHERE a.`productsize_id` = "'.$id.'"
		
		');
		$result = $query->row();
		return $result;
	}
	
	public function list_sex(){
		$query = $this->db->query("
			SELECT * FROM dev_sex
		");
		$result = $query->result();
		return $result;
	}
	
	
	public function delImg($id){
		$query = $this->db->delete('pop_product_image', array('productimage_id' => $id));
		return $query;
	}
}