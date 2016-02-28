<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Invoice extends CI_Controller {	
	
	public function __construct(){
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
		$this->load->model('m_invoice');
		//$this->load->model('m_access');
		
    }
	public function invoice(){
		$data['invoice'] = $this->m_invoice->invoice();
		$data['view']="pages/admin/invoice/invoice";
		//var_dump($data);
		$this->load->view('index', $data);
		
	}
	public function list_detail($id){
		$data['invoice_detail'] = $this->m_invoice->invoiceDetail($id);
		$data['status'] = $this->m_invoice->getStatus();
		$data['product_detail'] = $this->m_invoice->productDetail($data['invoice_detail']->invoice_id);
		//var_dump($data);die;
		//var_dump($data);die;
		$data['view']="pages/admin/invoice/list_detail";
		//var_dump($data);
		$this->load->view('index', $data);
		
	}
}
