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

	function invoice(){        
		$query = $this->db->query("
		SELECT 
			a.`invoice_id`,
			a.`invoice_customer_id`,
			b.`custommer_name`,
			a.`invoice_date`,
			c.`status_name`,
			c.`status_class`,
			a.`invoice_amount`,
			a.`invoice_number`
		FROM `dev_invoice` a 
		JOIN `dev_custommer` b ON b.`custommer_id` = a.`invoice_customer_id`
		JOIN `dev_status` c ON c.`status_id` = a.`invoice_status`
		");
		$result = $query->result();
		return $result;		
		
    }
	
	function invoiceDetail($id){        
		$query = $this->db->query("
		SELECT 
			a.`invoice_id`,
			a.`invoice_number`,
			a.`invoice_customer_id`,
			b.`custommer_name`,
			b.`custommer_phone`,
			b.`custommer_pos_code`,
			a.`invoice_address`,
			a.`invoice_pos_code`,
			f.`Nama` AS inv_kecamatan,
			e.`Nama` AS inv_kabupaten,
			d.`Nama` AS inv_provinsi,
			a.`invoice_date`,
			c.`status_name`,
			c.`status_id`,
			c.`status_class`,
			a.`invoice_amount`,
			b.`custommer_address`,
			a.`invoice_address`,
			g.`Nama` AS cus_provinsi,
			h.`Nama` AS cus_kabupaten,
			i.`Nama` AS cus_kecamatan				
		FROM `dev_invoice` a 
		JOIN `dev_custommer` b ON b.`custommer_id` = a.`invoice_customer_id`
		JOIN `dev_status` c ON c.`status_id` = a.`invoice_status`
		JOIN `dev_provinsi` d ON d.`IDProvinsi` = a.`invoice_provinsi_id`
		JOIN `dev_kabupaten` e ON e.`IDKabupaten` = a.`invoice_kabupaten_id`
		JOIN `dev_kecamatan` f ON f.`IDKecamatan` = a.`invoice_kecamatan_id`
		JOIN `dev_provinsi` g ON g.`IDProvinsi` = b.`custommer_provinsi_id`
		JOIN `dev_kabupaten` h ON h.`IDKabupaten` = b.`custommer_kabupaten_id`
		JOIN `dev_kecamatan` i ON i.`IDKecamatan` = b.`custommer_kecamatan_id`		
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
   
   
}