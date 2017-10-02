<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Images extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->model('images_model');
	}
	
	public function load_default_image(){
	$name = 'logo_eme.jpg';		
    $file = base_url().'assets/img/'.$name;
	  $mimes = array
    (
        'jpg' => 'image/jpg',
        'jpeg' => 'image/jpg',
        'gif' => 'image/gif',
        'png' => 'image/png'
    );

    $ext = strtolower(end(explode('.', $name)));
    header('content-type: '. $mimes[$ext]);
    header('content-disposition: inline; filename="'.$name.'";');
    readfile($file);
		
												}

	public function imagen_proyecto($codigo_proyecto){
		$data = $this->uri->uri_to_assoc(4);
		if(isset($data['size']) && !empty($data['size'])){$tamano=$data['size'];}else{$tamano='';}
		$img = $this->images_model->get_images_proyectos($codigo_proyecto, strtoupper($data['type']), $tamano);
		if(!empty($img[0]->img)){
		header("Content-type:".$img[0]->mime);
		echo  $img[0]->img->load();
		}else{
		$this->load_default_image();	
			}
	}


	public function imagen_banner_proyecto_code($codigo_proyecto){
		$data = $this->uri->uri_to_assoc(4);
		if(isset($data['size']) && !empty($data['size'])){$tamano=$data['size'];}else{$tamano='';}
		$img = $this->images_model->get_images_banner_proyectos($codigo_proyecto, strtoupper($data['code']), $tamano);
		if(!empty($img[0]->img)){
		header("Content-type:".$img[0]->mime);
		echo  $img[0]->img->load();
		}else{
		$this->load_default_image();	
			}
	}

	public function imagen_proyecto_code($codigo_proyecto){
		$data = $this->uri->uri_to_assoc(4);
		if(isset($data['size']) && !empty($data['size'])){$tamano=$data['size'];}else{$tamano='';}
		$img = $this->images_model->get_images_proyectos_code($codigo_proyecto, strtoupper($data['code']), $tamano);
		if(!empty($img[0]->img)){
		header("Content-type:".$img[0]->mime);
		echo  $img[0]->img->load();
		}else{
		$this->load_default_image();	
			}
	}

	public function imagen_usados($codigo_proyecto){
		$data = $this->uri->uri_to_assoc(4);
		if(isset($data['size']) && !empty($data['size'])){$tamano=$data['size'];}else{$tamano='';}
		$img = $this->images_model->get_images_used($codigo_proyecto, $data['code'], $data['type'], $tamano);
			if(!empty($img[0]->img)){
		header("Content-type:".$img[0]->mime);
		echo  $img[0]->img->load();
		}else{
		$this->load_default_image();	
			}
	}
	
	public function imagen_rentas($codigo_proyecto){
		$data = $this->uri->uri_to_assoc(4);
		if(isset($data['size']) && !empty($data['size'])){$tamano=$data['size'];}else{$tamano='';}
		$img = $this->images_model->get_images_rentas($codigo_proyecto, $data['type'], $tamano);
				if(!empty($img[0]->img)){
		header("Content-type:".$img[0]->mime);
		echo  $img[0]->img->load();
		}else{
		$this->load_default_image();	
			}
					
	}
			
	

}
