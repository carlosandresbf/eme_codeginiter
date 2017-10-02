<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proyectos extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->model('page_model');		
		$this->load->model('projects_model');
		$this->load->model('configuration_model');		
			}

		public function index(){
		$data['projects_new']=$this->projects_model->get_new_projects();	
		$data['section'] = $this->load->view('proyectos/list', $data, true); 
		$this->load->view('template/main', $data);
		}
		
		public function search(){
		$data['projects_new']=$this->projects_model->get_new_projects();	
		$data['section'] = $this->load->view('proyectos/list', $data, true); 
		$this->load->view('template/main', $data);
		}
		
		public function show(){
		
	    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		if(empty($page)){ redirect('/proyectos', 'refresh');}
		$itm=$page; 
		$page = str_replace('_',' ',urldecode($page));	
		$xpl =  explode('_',$itm);	
		
		$data['response']=$this->input->get('response');
		$data['type']==$this->input->get('type');
		
		$data['projects_new']=$this->projects_model->get_new_projects_by_code($xpl[0]);	
		$data['banners']=$this->projects_model->get_banners_proyect($xpl[0]);
		$data['galery_mod']=$this->projects_model->get_galery_model_proyect($xpl[0]);
		$data['galery_virtuales']=$this->projects_model->get_galery_virtual_proyect($xpl[0]);	
		$data['galery_arqu']=$this->projects_model->get_galery_planos_arquitectonicos_proy($xpl[0]);	
		$data['galery_avances']=$this->projects_model->get_galery_avances_proyect($xpl[0]);		
		$data['documentos'] = $this->projects_model->get_documents($data['projects_new'][0]->CODIGO_VENDEDOR); 
		$data['section'] = $this->load->view('proyectos/show', $data, true); 

		$this->load->view('template/main', $data);
		}
					
		public function download_doc($code){
		$data['documentos'] = $this->projects_model->get_document($code); 
			
			header("Content-type:".$data['documentos'][0]->MIME_TYPE);
			header("Content-disposition: attachment; filename=\"".basename($data['documentos'][0]->NOMBRE)."\"");

			echo  $data['documentos'][0]->BLOB_CONTENT->load();
						
						
											}
											
											
		public function async_load_module_avances(){
		$code_project  = $this->input->post('project');
		$data['galery_avances']=$this->projects_model->get_galery_avances_proyect($code_project);
		echo $this->load->view('proyectos/avances', $data, true); 
		}
		
	
}
