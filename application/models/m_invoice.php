<?php

if(!defined('BASEPATH')) exit('No direct script access allowed');

class M_invoice extends CI_Model
{
	
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->library('session');
    }

	function invoice($custommer_id=null){  
		$sql_string = "
		SELECT 
			a.`invoice_id`,
			a.`invoice_customer_id`,
			b.`custommer_name`,
			a.`invoice_date`,
			c.`status_name`,
			c.`status_class`,
			a.`invoice_amount`,
			a.`invoice_number`,
			a.`invoice_conf_img`,
			a.`invoice_status`
			
		FROM `dev_invoice` a 
		JOIN `dev_custommer` b ON b.`custommer_id` = a.`invoice_customer_id`
		JOIN `dev_status` c ON c.`status_id` = a.`invoice_status`
		
		WHERE 1 = 1
			--whr--
		";
		
		$where = '';
		if(!is_null($custommer_id) && !empty($custommer_id)){
			$where = 'AND b.`custommer_id` ='.$custommer_id;			
		}
		
		$sql = str_replace("--whr--", $where, $sql_string);
		//var_dump($sql, $where);
		$query = $this->db->query($sql);
		$result = $query->result();
		return $result;		
		
    }
	
	function invoiceDetail($id, $custommer_id=null){
		
		$query = $this->db->query("
		SELECT 
			a.`invoice_id`,
			a.`invoice_number`,
			a.`invoice_customer_id`,
			a.`invoice_courier_pakage`,
			a.`invoice_courier_amount`,
			b.`custommer_name`,
			b.`custommer_phone`,
			b.`custommer_pos_code`,
			a.`invoice_address`,
			a.`invoice_pos_code`,
			e.`city` AS inv_kabupaten,
			d.`province` AS inv_provinsi,
			a.`invoice_date`,
			c.`status_name`,
			c.`status_id`,
			c.`status_class`,
			a.`invoice_amount`,
			b.`custommer_address`,
			a.`invoice_address`,
			g.`province` AS cus_provinsi,
			h.`city` AS cus_kabupaten				
		FROM `dev_invoice` a 
		JOIN `dev_custommer` b ON b.`custommer_id` = a.`invoice_customer_id`
		JOIN `dev_status` c ON c.`status_id` = a.`invoice_status`
		JOIN `ref_province` d ON d.`province_id` = a.`invoice_provinsi_id`
		JOIN `ref_city` e ON e.`city_id` = a.`invoice_kabupaten_id`
		JOIN `ref_province` g ON g.`province_id` = b.`custommer_province_id`
		JOIN `ref_city` h ON h.`city_id` = b.`custommer_city_id`		
		WHERE a.`invoice_id` = '".$id."'
		");
		$result = $query->row();
		return $result;		
		
    }
	
	function productDetail($id){
		
		$query = $this->db->query("
			SELECT
				a.`invoicedetail_invoice_id`,
				b.`product_name`,
				c.`productgenre_name`,
				e.`gender_name`,
				a.`invoicedetail_count`,
				a.`invoicedetail_price`,
				a.`invoicedetail_price_total`
			FROM `dev_invoice_detail` a 
			JOIN `pop_product` b ON b.`product_id` = a.`invoicedetail_product`
			JOIN `pop_genre` c ON c.`productgenre_id` = b.`product_genre_id`
			JOIN `dev_invoice` d ON d.`invoice_id` = a.`invoicedetail_invoice_id`
			JOIN `dev_sex` e ON e.`gender_id` = b.`product_genre_id`
			WHERE a.`invoicedetail_invoice_id`='".$id."'
			
		");
		$execute = $query->result();
		return $execute;	
	}
	
	function getStatus(){
		$query = $this->db->get('dev_status');
		$execute = $query->result();
		return $execute;	
	}
	
	function updateInvoiceStatus($id){
		$status = $_POST['id_status'];
		
		$query = $this->db->query("
			UPDATE dev_invoice 
			SET invoice_status = '".$status."'
			WHERE invoice_id = '".$id."'
		");
		
		return $query;
	}
	
	function getLastInvNumber(){
		$this->db->select_max('invoice_number', 'invoice_number');
		$query = $this->db->get('dev_invoice');
		$result = $query->row();
		return $result;
	}
	
	function addInvoice($params){
		$this->db->insert('dev_invoice', $params);
	}
	function addInvoiceDetail($params){
		$this->db->insert('dev_invoice_detail', $params);
	}
   
	function deleteInvoice($id){
		$result = $this->db->query("DELETE FROM dev_invoice WHERE invoice_id='".$id."'");
		return $result;
	}
	function deleteInvoiceDetail($id){
		$result = $this->db->query("DELETE FROM dev_invoice_detail WHERE invoicedetail_invoice_id ='".$id."'");
		return $result;
	}
	
	function updateConfInv($param, $id){
		return $this->db->update('dev_invoice', $param, "invoice_id = $id");
	}
   
}