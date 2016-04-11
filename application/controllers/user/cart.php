<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cart extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
		$this->load->model('m_userlogin');
		$this->load->model('m_useraccount');
		$this->load->model('m_custommer');
		$this->load->model('m_product');
		$this->load->model('m_invoice');
		$this->load->library('authex');
		
		/*
		if( ! $this->authex->logged_in())
        {
            //they are not logged in
            redirect(base_url('index.php/user/login/'));  //for example
        }
		*/
    }
	
	public function addToCart(){
		$product_id = $_POST['product_id'];
		$product_count = $_POST['product_count'];
		if(isset($this->session->userdata['user_id'])){
			$custommer_id  = $this->session->userdata['user_id'];
		}else{
			$custommer_id = NULL;
		}
		var_dump($product_id);die;
		$params = array(
			'product_id' => $product_id,
			'product_count' => $product_count,
			'custommer_id' => $custommer_id
		);
		$addCart  = $this->m_cart->addCart($params);
		
		echo json_encode($addCart);
		exit;
	}
	
	public function checkout(){
		/*
		
		*/
		$data['provinsi'] = $this->m_custommer->getProvinsi();
		foreach($_SESSION['product_id'] as $prod_id){
			$products = $this->m_product->getdetailProduct($prod_id);
			$data['product'][] = $products;
			$data['ukuran'][] = $this->m_product->prodSizeById($_SESSION['ukuran'][$prod_id]);
			$data['image'][] = $this->m_product->getImgFirst($prod_id);
		}
		$data['ck_login'] = 0;
		if($this->authex->logged_in())
        {
            $data['ck_login'] = 1;
        }
		
		
		$this->load->view('user/pages/checkout', $data);
	}
	
	public function genInvNumber(){
		$product_id = $this->session->userdata['product_id'];
		$product_count = $this->session->userdata['product_count'];
		$custommer_id  = $this->session->userdata['user_id'];		
		$InvNumb = $this->invoicenumberGenerator();
		$params = array(
			'invoice_number'=>$InvNumb,
			'invoice_customer_id'=>$custommer_id,
			'invoice_provinsi_id'=>$_POST['province'],
			'invoice_kabupaten_id'=>$_POST['distric'],
			'invoice_kecamatan_id'=>$_POST['districs'],
			'invoice_address'=>$_POST['address'],
			'invoice_pos_code'=>$_POST['poscode'],
			'invoice_date'=>date('Y-m-d'),
			'invoice_amount'=>$_POST['amount'],
			'invoice_status'=>1,
			'invoice_input'=>$custommer_id			
		);
		
		$this->db->trans_start();
		$createInvoice = $this->m_invoice->addInvoice($params);		
			$inv_id = $this->db->insert_id();
			foreach($product_id as $prod_id){
				$product_detail = $this->m_product->getdetailProduct($prod_id);
				$product=array(				
					'invoicedetail_invoice_id'=>$inv_id,
					'invoicedetail_product'=>$prod_id,
					'invoicedetail_count'=>$product_count[$prod_id],
					'invoicedetail_price'=>$product_detail->product_price,
					'invoicedetail_price_total'=>$product_detail->product_price * $product_count[$prod_id]
				); 
				$inv_detail =  $this->m_invoice->addInvoiceDetail($product);
			}
		
		$this->db->trans_complete();
		echo json_encode($InvNumb);
		exit;
		
	}
	
	private function invoicenumberGenerator(){
		$lastInvNumber  = $this->m_invoice->getLastInvNumber();
		//var_dump($lastInvNumber->invoice_number);
		if(count($lastInvNumber) == 0){
			$InvnumberStr = "0001";
		}else{
			$lastInvNumber_parsing = explode('/', $lastInvNumber->invoice_number, 2);				
			$invNumber_date = explode('/', $lastInvNumber_parsing[1], 3);
			$invNumber_date = date('d/m/Y', mktime(0, 0, 0, $invNumber_date[1], $invNumber_date[0], $invNumber_date[2]));
			$now_date = date('d/m/Y');
			
			if($invNumber_date == $now_date){				
				$lastInvNumber_number = explode('.', $lastInvNumber_parsing[0], 2);
				$invNumberInt = intval($lastInvNumber_number[1]);
				$invNumberIncrease = $invNumberInt + 1;
				if($invNumberIncrease <= 9){
				$InvnumberStr = '000'.$invNumberIncrease;
				}elseif($invNumberIncrease <= 99){
					$InvnumberStr = '00'.$invNumberIncrease;
				}elseif($invNumberIncrease <= 999){
					$InvnumberStr = '0'.$invNumberIncrease;
				}elseif($invNumberIncrease <= 9999){
					$InvnumberStr = $invNumberIncrease;
				}
				//var_dump($invNumberIncrease);
			}else{
				$InvnumberStr = "0001";
			}			
			//var_dump($invNumber_date);
			//var_dump($now_date);
			//var_dump($InvnumberStr);
		}		
		$newInvNumber = 'INV.'.$InvnumberStr.'/'.date('d').'/'.date('m').'/'.date('Y');
		//var_dump($newInvNumber);die;
		return $newInvNumber;
	}
}
