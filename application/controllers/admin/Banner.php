<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner extends CI_Controller {
	public function __construct()
    {
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
		$this->load->model('m_banner');
		//$this->load->model('m_access');
		
    }
	
	public function show(){		
		
		$data['banner'] = $this->m_banner->show();		
		foreach($data['banner'] as $key=>$banner){
			$data['banner'][$key]->images = $this->m_banner->getImgName($banner->banner_id);
		}
		
		// var_dump($this->db->last_query(), $data);die;
		
		$this->load->view('admin/pages/banner/list', $data);
	}
	
	public function insert(){
		$msg = '';
		$params=$_POST;	
		// var_dump($params, $_FILES);die;
		
		if(empty($params['banner_id'])){
			$this->db->trans_start();
			$result = $this->m_banner->do_add($params);	
			if($result){
				$id = $this->db->insert_id();
				foreach($_FILES['gambar'] as $key=>$val){
					$i = 0;	
					foreach($val as $v){
						$file[$i][$key] = $v;               		
						$i++;
					}
				}
				unset($_FILES['gambar']);
				
				foreach($file as $idx=>$val){
					if($val['type'] != 'image/jpeg'){
						$msg .= '
							<div class="alert alert-danger alert-dismissible">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<h4><i class="icon fa fa-check"></i>one or more image(s) file type is not in jpg format!</h4>
							</div>
						';
						$this->session->set_flashdata('msg', $msg);
						redirect(site_url('admin/banner/show'));
						break;
					}
				}	
				
				$i=1;
				foreach($file as $key=>$val){
					$image_data  = array(
						'bandet_file_name' => $id.'_'.$i.'.jpg',
						'bandet_banner_id' => $id				
					);					
					$source =$val['tmp_name']; 
					$name = $id.'_'.$i.'.jpg';
					$this->process_image($source, $name);
					$result = $result && $this->m_banner->do_addImage($image_data);
					$i++;
				}		
			}
			// var_dump($result);die;
			$this->db->trans_complete($result);
			if($result){
				$msg .= '
					<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-check"></i>Add Banner Profile success</h4>
					</div>
				';
				$this->session->set_flashdata('msg', $msg);			
			}else{
				$msg .= '
					<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-check"></i>Add Banner Profile Fail</h4>
					</div>
				';
				$this->session->set_flashdata('msg', $msg);
			}
			
		}else{
			$this->db->trans_start();
			$result = $this->m_banner->doEdit($params);
			
			if($result){
				if($_FILES['gambar']['error'][0] == 0){
					$id = $params['banner_id'];

					$old_files = $this->m_banner->getImgName($id);
					foreach($old_files as $idx=>$val){
						unlink('file/banner/'. $val->bandet_file_name);
					}
					
					$result = $result && $this->m_banner->delImg($params['banner_id']);
					
					
					foreach($_FILES['gambar'] as $key=>$val){
						$i = 0;	
						foreach($val as $v){
							$file[$i][$key] = $v;               		
							$i++;
						}
					}
					unset($_FILES['gambar']);
					
					foreach($file as $idx=>$val){
						if($val['type'] != 'image/jpeg'){
							$msg .= '
								<div class="alert alert-danger alert-dismissible">
									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
									<h4><i class="icon fa fa-check"></i>one or more image(s) file type is not in jpg format!</h4>
								</div>
							';
							$this->session->set_flashdata('msg', $msg);
							redirect(site_url('admin/banner/show'));
							break;
						}
					}	
					
					$i=1;
					foreach($file as $key=>$val){
						$image_data  = array(
							'bandet_file_name' => $id.'_'.$i.'.jpg',
							'bandet_banner_id' => $id				
						);					
						$source =$val['tmp_name']; 
						$name = $id.'_'.$i.'.jpg';
						$this->process_image($source, $name);
						$result = $result && $this->m_banner->do_addImage($image_data);
						$i++;
					}
				}
			}
			
			$this->db->trans_complete($result);
			if($result){
				$msg .= '
					<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-check"></i>Edit Banner Profile success</h4>
					</div>
				';
				$this->session->set_flashdata('msg', $msg);			
			}else{
				$msg .= '
					<div class="alert alert-danger alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
						<h4><i class="icon fa fa-check"></i>Edit Banner Profile Fail</h4>
					</div>
				';
				$this->session->set_flashdata('msg', $msg);
			}
		}		
		redirect(site_url('admin/banner/show'));
	}
	
	public function do_delete($id){
		$return = $this->m_banner->doDelete($id);
		if($return == true){
			redirect(base_url('index.php/admin/size/list_size'));
		}else{
			$msg = 'Add new size failed';
		}
	}
	
	public function delete_img($id){
		$result = $this->m_banner->deleteImg($id);
		echo json_encode($result);
		exit;
	}
	
	
	public function edit(){
		$data['banner'] = $this->m_banner->getBannerById($_POST['id']);		
		foreach($data['banner'] as $key=>$banner){
			$data['banner'][$key]->images = $this->m_banner->getImgName($banner->banner_id);
		}
		
		echo json_encode($data);
		exit;
	}
	
	function process_image($source, $name){
	$size = getimagesize($source);
	//var_dump($size);die;
	if($size[0] < 5000)
		{
		move_uploaded_file($source,"file/banner/" . $name);	
		}	
	else
		{
		  //identitas file asli
		  $im_src = imagecreatefromjpeg($source);
		  $src_width = imageSX($im_src);
		  $src_height = imageSY($im_src);


		  //Set ukuran gambar hasil perubahan
		  $dst_width = 5000;
		  $dst_height = ($dst_width/$src_width)*$src_height;

		  //proses perubahan ukuran
		  $im = imagecreatetruecolor($dst_width,$dst_height);
		  imagecopyresampled($im, $im_src, 0, 0, 0, 0, $dst_width, $dst_height, $src_width, $src_height);

		  //Simpan gambar
		  imagejpeg($im,"file/product_img/" . $name);
		  
		  //Hapus gambar di memori komputer
		  imagedestroy($im_src);
		  imagedestroy($im);
		}
	}
}
