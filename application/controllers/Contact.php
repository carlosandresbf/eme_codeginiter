<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contact extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->model('us_model');
		$this->load->model('page_model');
		$this->load->model('catalog_model');
		$this->load->model('configuration_model');		
	}

	public function index(){
		$data['config'] = $this->configuration_model->get_data();
		
		$data['pages'] = $this->page_model->get_pages();
		$data['footer'] = $this->page_model->get_footer_info();	
		$data['banner'] = $this->page_model->get_banner_info();
		$data['custom_filter'] = $this->catalog_model->get_catalog_filter();
		
		$data['us'] = $this->us_model->get_data();
		$data['section'] = $this->load->view('contact', $data, true); 

		$this->load->view('template/main', $data);
	}
}
