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
	public function city($province_id){
		$curl = curl_init();

		curl_setopt_array($curl, array(
		 CURLOPT_URL => "http://api.rajaongkir.com/starter/city?id=&province=$province_id",
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
		$result = $cek->rajaongkir->results;
		//var_dump($cek->rajaongkir->results);
		curl_close($curl);
		//if ($err) {
		//  echo "cURL Error #:" . $err;
		//} else {
		//  echo $response;
		//}
		return $result;
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
	
	function input_database(){
		var_dump($_POST);die;
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
		$province = $cek->rajaongkir->results;
		//var_dump($cek->rajaongkir->results);
		
		foreach($province as $prov){
			$params = array(
			'province_id'=>$prov->province_id,
			'province'=>$prov->province
			);
			
			$city = $this->city($prov->province_id);
			//var_dump($city);die;
			//$this->db->trans_start;
			$this->db->insert('ref_province', $params);			
			foreach($city as $ct){
				$par = array(
					'city_id'=>$ct->city_id,
					'city'=>$ct->city_name,
					'province_id'=>$ct->province_id,
					'pos_code'=>$ct->postal_code,
					'type'=>$ct->type
				);
				$this->db->insert('ref_city', $par);
			}			
			//$this->db->trans_complete;			
		}		
		curl_close($curl);
		
	}
	
	public function ongkir(){
		
		
		$curl = curl_init();
		
		curl_setopt_array($curl, array(
		  CURLOPT_URL => "http://api.rajaongkir.com/starter/cost",
		  CURLOPT_RETURNTRANSFER => true,
		  CURLOPT_ENCODING => "",
		  CURLOPT_MAXREDIRS => 10,
		  CURLOPT_TIMEOUT => 30,
		  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		  CURLOPT_CUSTOMREQUEST => "POST",
		  CURLOPT_POSTFIELDS => "origin=501&destination=".$_POST['city_id']."&weight=".$_POST['weight']."&courier=".$_POST['courier']."",
		  CURLOPT_HTTPHEADER => array(
			"content-type: application/x-www-form-urlencoded",
			"key: e3fa537ea5f77590c88e22aa32458005"
		  ),
		));

		$response = curl_exec($curl);
		$err = curl_error($curl);
		$cek = json_decode($response);
		//var_dump($cek->rajaongkir->results[0]->costs);
		echo json_encode($cek->rajaongkir->results[0]->costs);
		exit;		
		curl_close($curl);
		
		
	}
}
