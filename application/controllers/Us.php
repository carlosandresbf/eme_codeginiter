<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Us extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->model('page_model');
		$this->load->model('configuration_model');		
			}

		public function index(){
		$data['null']='';
		$data['section'] = $this->load->view('us', $data, true); 

		$this->load->view('template/main', $data);
		}
	
}
