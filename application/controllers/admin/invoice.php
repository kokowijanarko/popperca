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
		//$data['view']="admin/pages/invoice/invoice";
		//var_dump($data);
		$this->load->view('admin/pages/invoice/invoice', $data);
		
	}
	public function list_detail($id){
		$data['invoice_detail'] = $this->m_invoice->invoiceDetail($id);
		$data['status'] = $this->m_invoice->getStatus();
		$data['product_detail'] = $this->m_invoice->productDetail($data['invoice_detail']->invoice_id);
		
		$data['view']="admin/pages/invoice/list_detail";
		
		$this->load->view('admin/index', $data);
		
	}
	
	public function update_status($id){
		$execute = $this->m_invoice->updateInvoiceStatus($id);		
		echo json_encode($execute);
		exit;
	}
	
	public function do_delete($id){
		$result = $this->m_invoice->deleteInvoice($id);
		$result = $this->m_invoice->deleteInvoicedetail($id);
		
		if($result){
			$this->invoice();
		}
		
	}
}
