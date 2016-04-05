<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Courier_cost extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
		$this->load->model('m_home');
		$this->load->model('m_product');
		$this->load->model('m_custommer');
		$this->load->model('m_invoice');
		$this->load->library('authex');
		
		
		
    }
	
	public function province(){
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "http://api.rajaongkir.com/starter/province?id=",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_HTTPHEADER => array(
			"key: e3fa537ea5f77590c88e22aa32458005"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);
		$cek = json_decode($response);
		var_dump($cek->rajaongkir->results);
		curl_close($curl);

		//if ($err) {
		//  echo "cURL Error #:" . $err;
		//} else {
		//  echo $response;
		//}
		
	}
	public function city(){
		$curl = curl_init();

		curl_setopt_array($curl, array(
		 CURLOPT_URL => "http://api.rajaongkir.com/starter/city?id=39&province=5",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "GET",
		  CURLOPT_HTTPHEADER => array(
			"key: e3fa537ea5f77590c88e22aa32458005"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);
		$cek = json_decode($response);
		var_dump($cek->rajaongkir->results);
		curl_close($curl);

		//if ($err) {
		//  echo "cURL Error #:" . $err;
		//} else {
		//  echo $response;
		//}
		
	}
	
	public function cost(){
		$curl = curl_init();

		curl_setopt_array($curl, array(
		  CURLOPT_URL => "http://api.rajaongkir.com/starter/cost",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => "origin=501&destination=114&weight=1000&courier=jne",
		  CURLOPT_HTTPHEADER => array(
			"content-type: application/x-www-form-urlencoded",
			"key: e3fa537ea5f77590c88e22aa32458005"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);
		$cek = json_decode($response);
		//var_dump($cek->rajaongkir->results[0]->costs);
		
		foreach($cek->rajaongkir->results[0]->costs as $costs){
			var_dump($costs->cost);
		}
		
		curl_close($curl);

		//if ($err) {
		//  echo "cURL Error #:" . $err;
		//} else {
		//  echo $response;
		//}
		
	}
	
	
}
