<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Arrendamientos extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->model('page_model');
		$this->load->model('rent_model');		
		$this->load->model('projects_model');
		$this->load->model('configuration_model');		
			}

		public function index(){
		//$data['projects_new']=$this->projects_model->get_new_projects();	
		
		if($this->input->get('order_filter') == 'VAL_OFE ASC' || $this->input->get('order_filter') == 'VAL_OFE DESC'){ $data['filter']['order_filter'] = $this->input->get('order_filter');
											}else{ $data['filter']['order_filter'] =  ''; }
		if($this->input->get('price') != ''){ $data['filter']['price'] = $this->input->get('price');
											}else{ $data['filter']['price'] =  ''; }	
		if($this->input->get('codigo') != ''){ $data['filter']['codigo'] = $this->input->get('codigo');
											}else{ $data['filter']['codigo'] =  ''; }
		if($this->input->get('ciudad') != ''){ $data['filter']['ciudad'] = $this->input->get('ciudad');
											}else{ $data['filter']['ciudad'] =  ''; }
		if($this->input->get('barrio') != ''){ $data['filter']['barrio'] = $this->input->get('barrio');
											}else{ $data['filter']['barrio'] =  ''; }
		if($this->input->get('tipo') != ''){ $data['filter']['tipo'] = $this->input->get('tipo');
											}else{ $data['filter']['tipo'] =  ''; }
		if($this->input->get('balcones') != '0' & $this->input->get('balcones') != ''){ $data['filter']['balcones'] = $this->input->get('balcones');
											}else{ $data['filter']['balcones'] =  ''; }
		if($this->input->get('alcobas') != '0' & $this->input->get('alcobas') != ''){ $data['filter']['alcobas'] = $this->input->get('alcobas');
											}else{ $data['filter']['alcobas'] =  ''; }
		if($this->input->get('banosalcobas') != '0' & $this->input->get('banosalcobas') != ''){ $data['filter']['banosalcobas'] = $this->input->get('banosalcobas');
											}else{ $data['filter']['banosalcobas'] =  ''; }
		if($this->input->get('garajes') != '0' & $this->input->get('garajes') != ''){ $data['filter']['garajes'] = $this->input->get('garajes');
											}else{ $data['filter']['garajes'] =  ''; }								
		if($this->input->get('banosfamiliares') != '0' & $this->input->get('banosfamiliares') != ''){ $data['filter']['banosfamiliares'] = $this->input->get('banosfamiliares');
											}else{ $data['filter']['banosfamiliares'] =  ''; }
		if($this->input->get('area') != ''){ $data['filter']['area'] = urldecode($this->input->get('area'));
											}else{ $data['filter']['area'] =  ''; }
											
		if($this->input->get('biblioteca') != ''){ $data['filter']['biblioteca'] = $this->input->get('biblioteca');
											}else{ $data['filter']['biblioteca'] =  ''; }
		if($this->input->get('alcobaservicio') != ''){ $data['filter']['alcobaservicio'] = $this->input->get('alcobaservicio');
											}else{ $data['filter']['alcobaservicio'] =  ''; }
		if($this->input->get('banosocial') != ''){ $data['filter']['banosocial'] = $this->input->get('banosocial');
											}else{ $data['filter']['banosocial'] =  ''; }
		if($this->input->get('comedorauxiliar') != ''){ $data['filter']['comedorauxiliar'] = $this->input->get('comedorauxiliar');
											}else{ $data['filter']['comedorauxiliar'] =  ''; }
		if($this->input->get('juegosinfantiles') != ''){ $data['filter']['juegosinfantiles'] = $this->input->get('juegosinfantiles');
											}else{ $data['filter']['juegosinfantiles'] =  ''; }											
		if($this->input->get('piscinas') != ''){ $data['filter']['piscinas'] = $this->input->get('piscinas');
											}else{ $data['filter']['piscinas'] =  ''; }
		
		$data['items']=$this->rent_model->get_rents_filter($data['filter']);		
		$data['filtro1']=$this->rent_model->get_cities();
		$data['filtro2']=$this->rent_model->get_zonas();
		$data['filtro3']=$this->rent_model->get_type();		
		$data['max_price']=$this->rent_model->get_max_price();
		$data['min_price']=$this->rent_model->get_min_price();

		$data['section'] = $this->load->view('arrendamientos/list', $data, true); 

		$this->load->view('template/main', $data);
		}
		
		public function show(){
		
	    $page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		if(empty($page)){ redirect('/proyectos', 'refresh');}
		$itm=$page; 
		$page = str_replace('_',' ',urldecode($page));	
		$xpl =  explode('_',$itm);	
		$data['proyecto']=$this->projects_model->get_new_rent_by_code($xpl[0]);	
		$data['galery_mod']=$this->rent_model->get_galery_model_rent($xpl[0]);		
		$data['documentos'] = $this->rent_model->get_documents(); 
		$data['section'] = $this->load->view('arrendamientos/show', $data, true); 

		$this->load->view('template/main', $data);
		} 
		

		
		public function download_doc($code){
		$data['documentos'] = $this->rent_model->get_document($code); 
			
			header("Content-type:".$data['documentos'][0]->MIME_TYPE);
			header("Content-disposition: attachment; filename=\"".basename($data['documentos'][0]->NOMBRE)."\"");

			echo  $data['documentos'][0]->BLOB_CONTENT->load();
						
						
											}


public function comparar_add(){

		$item = $this->input->post('property');
		$comparative = $this->session->userdata('property_rent');
		if (empty($comparative)){
			$comparative = array();
		}
		if(in_array($item, $comparative)){

		}else{
			array_shift($comparative);
			array_values($comparative);
			array_push($comparative, $item);
			$this->session->set_userdata('property_rent', $comparative);
		}
}

public function comparar_remove(){
		$item = $this->input->post('property');
		$comparative = $this->session->userdata('property_rent');
		if (empty($comparative)){
	
		} if(in_array($item, $comparative)){

		if (($key = array_search($item, $comparative)) !== false) {
		    unset($comparative[$key]);
		}
			array_values($comparative);
			$this->session->set_userdata('property_rent', $comparative);
		}

}

}			
