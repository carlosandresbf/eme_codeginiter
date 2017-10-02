<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Contact_us extends CI_Controller {

	function __construct(){
		parent::__construct();

		$this->load->model('page_model');
		$this->load->model('configuration_model');		
        $this->load->library('email_sender');  		
	}
 
public	function go_contact(){

 	date_default_timezone_set('America/Bogota');
 	$table = 'reservas_de_clientes';
	$data['nombre'] = $this->input->post('nombre');
	$data['correo'] = $this->input->post('email');
	$data['asunto'] = $this->input->post('asunto');
	$data['mensaje'] = $this->input->post('mensaje');
	$data['redireccion'] = ($this->input->post('redirect'))?$this->input->post('redirect'):'';
	
	$data['mail'] = $this->load->view('/mail/contact_mail', $data, true); 
	
	$destino[0]['email']= "arriendos@emepropiedadraiz.com.co";
	$destino[0]['nombre']= "Arriendos - EME Propiedad Raiz";
	
	$destino[1]['email']= "emepropiedadraiz@une.net.co";
	$destino[1]['nombre']= "EME Propiedad Raiz";
	
	$destino[2]['email']= "mariaadelaidal@emepropiedadraiz.com.co";
	$destino[2]['nombre']= "Maria Adelaida - EME Propiedad Raiz";
	
	$destino[3]['email']= "mariaisabel@emepropiedadraiz.com.co";
	$destino[3]['nombre']= "Maria Isabel - EME Propiedad Raiz";
	
	$destino[4]['email']= "danielduque@emepropiedadraiz.com.co";
	$destino[4]['nombre']= "Daniel Duque - EME Propiedad Raiz";
	
	$destino[5]['email']= "jorge.clavijo@imaginamos.com";
	$destino[5]['nombre']= "Jorge Andres Clavijo Giraldo";
	
	$destino[6]['email']= "cabeltran31@misena.edu.co";
	$destino[6]['nombre']= "Carlos Andrés Beltrán Franco";
	
	$result = $this->email_sender->send_email($destino, 'Contacto Web - EME Propiedad Raiz', $data['mail']);
	if($result==true){
	$this->index("Pronto estaremos en contacto contigo.<br>Gracias.", 'alert-success',$data['redireccion']);
	//$arr = array ('enviado'=>'Si');						
					}else{
	$this->index("Ha ocurrido un inconveniente.<br> Intenta de nuevamente mas tarde.", 'alert-warning',$data['redireccion']);
	///$arr = array ('enviado'=>'No');	
	}

	 }	
	 
public	function go_contact_property(){

 	date_default_timezone_set('America/Bogota');
 	$table = 'reservas_de_clientes';
	$data['nombre'] = $this->input->post('nombre');
	$data['correo'] = $this->input->post('correo');
	$data['telefono'] = $this->input->post('telefono');
	$data['tipo'] = $this->input->post('tipo');
	$data['barrio'] = $this->input->post('barrio');
	$data['direccion'] = $this->input->post('direccion');
	$data['comodidades'] = $this->input->post('comodidades');
	$data['valor'] = $this->input->post('valor');
	
	$data['mail'] = $this->load->view('/mail/consigar_inmueble_mail', $data, true); 
	
	$destino[0]['email']= "arriendos@emepropiedadraiz.com.co";
	$destino[0]['nombre']= "Arriendos - EME Propiedad Raiz";
	
	$destino[1]['email']= "emepropiedadraiz@une.net.co";
	$destino[1]['nombre']= "EME Propiedad Raiz";
	
	$destino[2]['email']= "mariaadelaidal@emepropiedadraiz.com.co";
	$destino[2]['nombre']= "Maria Adelaida - EME Propiedad Raiz";
	
	$destino[3]['email']= "mariaisabel@emepropiedadraiz.com.co";
	$destino[3]['nombre']= "Maria Isabel - EME Propiedad Raiz";
	
	$destino[4]['email']= "danielduque@emepropiedadraiz.com.co";
	$destino[4]['nombre']= "Daniel Duque - EME Propiedad Raiz";
	
	$destino[5]['email']= "jorge.clavijo@imaginamos.com";
	$destino[5]['nombre']= "Jorge Andres Clavijo Giraldo";
	
	$destino[6]['email']= "cabeltran31@misena.edu.co";
	$destino[6]['nombre']= "Carlos Andrés Beltrán Franco";
	
	$result = $this->email_sender->send_email($destino, 'Consigna tu inmueble - EME Propiedad Raiz', $data['mail']);
	if($result==true){
	$this->index("Pronto estaremos en contacto contigo.<br>Gracias.", 'alert-success');
	//$arr = array ('enviado'=>'Si');						
					}else{
	$this->index("Ha ocurrido un inconveniente.<br> Intenta de nuevamente mas tarde.", 'alert-warning');
	///$arr = array ('enviado'=>'No');	
	}

	 }	
	 
	 
	 
		public function index($response = '', $type='', $redirect=""){
		$data['null']='';
		$data['response']=$response;
		$data['type']=$type;
		if(!empty($redirect)){
			     redirect($redirect.'?response='.$data['response'].'&type='.$data['type'], 'refresh');

			}else{
		$data['section'] = $this->load->view('contact_us', $data, true); 
		}
		$this->load->view('template/main', $data);
		} 
	
}
