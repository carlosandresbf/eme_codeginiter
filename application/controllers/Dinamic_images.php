<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dinamic_images extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->model('page_model');
		$this->load->model('catalog_model');
		$this->load->model('configuration_model');		
			}

	public function process_images_used(){
		$data['imgs'] = $this->Images_model->get_images_used();
		
		$dir = 'assets/img/used_proyects/';     
		$files = sandir($dir); // Devuelve un vector con todos los archivos y directorios
		foreach($files as $f){
		   if (is_file($dir.$f)) {
			  unlink($dir.$file);
			}
		}
		
		foreach($data['imgs'] as $imgs){
			if(!file_exists('assets/img/used_proyects/'.$imgs->NRO_ETA)){
			mkdir('assets/img/used_proyects/'.$imgs->NRO_ETA, 0777, true);
					}
			if(!file_exists('assets/img/used_proyects/'.$imgs->NRO_ETA.'/thumbnail')){
			mkdir('assets/img/used_proyects/'.$imgs->NRO_ETA.'/thumbnail', 0777, true);
					}
			if(!file_exists('assets/img/used_proyects/'.$imgs->NRO_ETA.'/big')){
			mkdir('assets/img/used_proyects/'.$imgs->NRO_ETA.'/big', 0777, true);
					}
		file_put_contents('assets/img/used_proyects/'.$imgs->NRO_ETA.'/thumbnail/'.$imgs->NOM_DOC, $imgs->BLOB_PEQUENA);
		file_put_contents('assets/img/used_proyects/'.$imgs->NRO_ETA.'/big/'.$imgs->NOM_DOC, $imgs->BLOB_CONTENT);

										
				
				}
		
	}
	
}
