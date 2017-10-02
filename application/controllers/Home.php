<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->model('us_model');
		$this->load->model('home_model');
		$this->load->model('page_model');
		$this->load->model('configuration_model');		
		$this->load->model('projects_model');			
		$this->load->model('rent_model');			
		$this->load->model('used_model');	
	}

	public function index(){
		$data['projects_new']=$this->projects_model->get_new_projects();
		$data['rents']=$this->rent_model->get_rents();
		//exit("FLag 2");	
		$data['useds']=$this->used_model->get_useds();
		$data['section'] = $this->load->view('home', $data, true); 

		$this->load->view('template/main', $data);
	}

	public function error_report(){
		$config = $this->configuration_model->get_data();
		$this->home_model->add_report($this->input->post());
		$this->load->library('email', config_mail());
		$this->email->set_mailtype("html");
		$this->email->from('no-reply@lfinmobiliaria.com', 'IMLLA');
		$this->email->to($config->error_reports_emails); 
		$this->email->subject('Reporte de error');
		$this->email->message($this->load->view('mail/error_report', $this->input->post(),true));	
		$this->email->send();

	}

	public function contact(){
		$config = $this->configuration_model->get_data();
		$this->contact_model->add_contact($this->input->post());
		$this->load->library('email', config_mail());
		$this->email->set_mailtype("html");
		$this->email->from('no-reply@lfinmobiliaria.com', 'IMLLA');
		$this->email->to($config->contact_emails); 
		$this->email->to('reservas@lfinmobiliaria.com');//  
		$this->email->subject('Mensaje de contacto');
		$this->email->message($this->load->view('mail/contact', $this->input->post(),true));	
		$this->email->send();	

	}

}
