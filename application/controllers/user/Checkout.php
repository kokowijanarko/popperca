<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Checkout extends CI_Controller {
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
	public function checkout(){
		/*
		$product_id = $_POST['product_id'];
		$product_count = $_POST['product_count'];
		$custommer_id  = $this->session->userdata['user_id'];		
		$InvNumb = $this->invoicenumberGenerator();
		$params = array(
			'product_id' => $product_id,
			'product_count' => $product_count,
			'custommer_id' => $custommer_id,
			'invoice_number' => $InvNumb,
			'kecamatan' => $_POST['kecamatan'],
			'kabupaten' => $_POST['kabupaten'],
			'provinsi' => $_POST['provinsi'],
			'kode_pos' => $_POST['kode_pos'],
			'jumlah' => $_POST['jumlah'],
		);
		$createInvoice = $this->m_invoice->ceateInvoice($params);
		*/
		
		$this->load->view('user/pages/checkout');
		
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
