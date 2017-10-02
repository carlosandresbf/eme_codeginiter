<?php
Class Used_model extends CI_Model {
	function __construct(){
		parent::__construct();

		$this->load->model('configuration_model');
	}


function get_max_price(){
		$this->db->select('MAX(VAL_OFE) as max_value');
		$this->db->from('V_INMUEBLES_USADOS');
		$a = $this->db->get()->result();
		return $a[0]->MAX_VALUE;
		}
function get_min_price(){
		$this->db->select('MIN(VAL_OFE) as min_value');
		$this->db->from('V_INMUEBLES_USADOS');
		$a = $this->db->get()->result();
		return $a[0]->MIN_VALUE;
		}

function get_cities(){
		$this->db->select('*');
		$this->db->from('V_INMUEBLES_USADOS');
		return $this->db->get()->result();
		}
		
function get_zonas(){
		$this->db->select('distinct(TRIM(SEC_BAR)) as IROW');
		$this->db->from('V_INMUEBLES_USADOS');		
		$this->db->order_by("IROW", "asc");
		return $this->db->get()->result();
		}	
			
function get_type(){
		$this->db->select('distinct(TRIM(OTR_TIP)) as IROW');
		$this->db->from('V_INMUEBLES_USADOS');		
		$this->db->order_by("IROW", "asc");
		return $this->db->get()->result();
		}

function get_useds(){
		$this->db->select('*');
		$this->db->from('V_INMUEBLES_USADOS');
		return $this->db->get()->result();	
		}
		
function get_useds_filter($fil){
		$this->db->select('*');
		$this->db->from('V_INMUEBLES_USADOS');
		
		
		if(!empty($fil['order_filter'])){
		$this->db->order_by(strtoupper($fil['order_filter']));		
					}
		if(!empty($fil['price'])){
		$xplode_price = explode(';',$fil['price']);
		$this->db->where('VAL_OFE >=', $xplode_price[0]);	
		$this->db->where('VAL_OFE <=', $xplode_price[1]);		
					}
		if(!empty($fil['codigo'])){
		$this->db->where('COD_INM', $fil['codigo']);		
					}
					
		/*if(!empty($fil['ciudad'])){
		$this->db->where('NRO_ETA', $fil['ciudad']);		
					}*/
		if(!empty($fil['barrio'])){
		$this->db->where('SEC_BAR', $fil['barrio']);		
					}
		if(!empty($fil['tipo'])){
		$this->db->where('OTR_TIP', $fil['tipo']);		
					}
		if(!empty($fil['balcones'])){
		$this->db->where('C107', $fil['balcones']);		
					}
		if(!empty($fil['alcobas'])){
		$this->db->where('C104', $fil['alcobas']);		
					}
		if(!empty($fil['banosalcobas'])){
		$this->db->where('C111', $fil['banosalcobas']);		
					}
		if(!empty($fil['garajes'])){
		$this->db->where('C143', $fil['garajes']);		
					}
		if(!empty($fil['area'])){
		$split = explode(';', $fil['area']);
		$this->db->where('ARE_CON >=', $split[0]);
		$this->db->where('ARE_CON <=', $split[1]);					
		}
		if(!empty($fil['biblioteca'])){
		$this->db->where('C112', 'S');		
					}
		if(!empty($fil['alcobaservicio'])){
		$this->db->where('C103', 'S');		
					}
		if(!empty($fil['banosocial'])){
		$this->db->where('C109', 'S');			
					}
		if(!empty($fil['comedorauxiliar'])){
		$this->db->where('C123', 'S');			
					}
		if(!empty($fil['juegosinfantiles'])){
		$this->db->where('C135', 'S');		
					}
		if(!empty($fil['piscinas'])){
		$this->db->where('C146', 'S');			
					}
					
		$a = $this->db->get()->result();	

		// $this->db->last_query();exit('as');
		return $a;
		}
		
function get_galery_model_used( $codigo1, $codigo2){
	$this->db->select('COD_DOC, COD_USA, NRO_ETA');
	$this->db->from("V_FOTOS_USADOS");
	$this->db->where('NRO_ETA', $codigo1);
	$this->db->where('COD_USA', $codigo2);
		return $this->db->get()->result();
		}
		
function get_new_used_by_code($name, $name1){
		$this->db->select('*');
		$this->db->from('V_INMUEBLES_USADOS');
		$this->db->where('NRO_ETA',$name);
		$this->db->where('COD_INM',$name1);
		$a =  $this->db->get()->result();
		//echo $this->db->last_query();
		return $a;
		}

function get_documents(){
		$this->db->select('CODIGO, NOMBRE, FECHA, DESCRIPCION, OBSERVACIONES');
		$this->db->from('V_DPROCESOS_USADOS');
		$a =  $this->db->get()->result();
	/*	echo $this->db->last_query();
		exit();*/
		return $a;
		}
		
function get_document($code){
		$this->db->select('*');
		$this->db->from('V_DPROCESOS_USADOS');
		$a =  $this->db->get()->result();
		$this->db->where('CODIGO',$code);
	/*	echo $this->db->last_query();
		exit();*/
		return $a;
		}
		
		
		
		


}