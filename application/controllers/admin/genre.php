<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Genre extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
		$this->load->model('m_genre');
		//$this->load->model('m_access');
		
    }
	
	public function list_genre(){		
		$genre = $this->m_genre->listGenre();
		$data['genre'] = $genre;
		//$data['view']="admin/pages/genre/list_genre";
		$this->load->view('admin/pages/genre/list_genre', $data);
		//var_dump(count($genre));die;
	}
	
	public function add_genre(){	
		$data['sex'] = $this->m_genre->list_sex();
		$data['genre'] = $this->m_genre->list_genre();
		$data['size'] = $this->m_genre->list_size();
		$data['view'] = "admin/pages/genre/add_genre";
		//var_dump($data);die;
		$this->load->view('admin/index', $data);
	}
	
	public function do_add(){
		$params=$_POST;
		//var_dump($params);die;
		
		if(!empty($params['gen_id'])){
			$return = $this->m_genre->doEdit($params);
			
		}else{
			$return = $this->m_genre->doAdd($params);
		}
		
		if($return == true){
			redirect(base_url('index.php/admin/genre/list_genre'));
		}else{
			$msg = 'Add new genre failed';
		}
	}
	
	public function do_delete($id){
		$return = $this->m_genre->doDelete($id);
		if($return == true){
			redirect(base_url('index.php/admin/genre/list_genre'));
		}else{
			$msg = 'Add new genre failed';
		}
	}
	
	public function edit($id){
		$genre = $this->m_genre->listGenre();
		$data['genre'] = $genre;
		$data['detail'] = $this->m_genre->getDetailgenre($id);		
		$data['view'] = "admin/pages/genre/list_genre";
		$this->load->view('admin/index', $data);
	}
}
