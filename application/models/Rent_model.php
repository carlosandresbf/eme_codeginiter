<?php
Class Rent_model extends CI_Model {
	function __construct(){
		parent::__construct();

		$this->load->model('configuration_model');
	}

function get_max_price(){
		$this->db->select('MAX(VAL_OFE) as max_value');
		$this->db->from('V_INMUEBLES_ARRIENDOS');
		$a = $this->db->get()->result();
		return $a[0]->MAX_VALUE;
		}
function get_min_price(){
		$this->db->select('MIN(VAL_OFE) as min_value');
		$this->db->from('V_INMUEBLES_ARRIENDOS');
		$a = $this->db->get()->result();
		return $a[0]->MIN_VALUE;
		}
		
function get_cities(){
		$this->db->select('Distinct(DES_CIU)  as IROW');
		$this->db->from('V_INMUEBLES_ARRIENDOS');
		return $this->db->get()->result();
		}

function get_zonas(){
		$this->db->select('distinct(TRIM(DES_BAR)) as IROW');
		$this->db->from('V_INMUEBLES_ARRIENDOS');
		$this->db->order_by("IROW", "asc");

		return $this->db->get()->result();
		} 

function get_type(){
		$this->db->select('distinct(TRIM(DES_TIP)) as IROW');
		$this->db->from('V_INMUEBLES_ARRIENDOS');		
		$this->db->order_by("IROW", "asc");
		return $this->db->get()->result();
		}

function get_rents_filter($fil){
		$this->db->select('*');
		$this->db->from('V_INMUEBLES_ARRIENDOS');
		
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
		if(!empty($fil['ciudad'])){
		if(strtoupper($fil['ciudad'])=='MEDELLÍN'){
		$this->db->where('DES_CIU', 'ARRENDAMIENTOS');	
			}else{		
		$this->db->where('DES_CIU', 'ARRENDAMIENTOS '.strtoupper($fil['ciudad']));	
			}
				
					}
		if(!empty($fil['barrio'])){
		$this->db->where('DES_BAR', $fil['barrio']);		
					}
		if(!empty($fil['tipo'])){
		$this->db->where('TRIM(DES_TIP)', $fil['tipo']);		
					}
		if(!empty($fil['balcones'])){
		$this->db->where('DES_BAL', $fil['balcones']);		
					}
		if(!empty($fil['alcobas'])){
		$this->db->where('DES_ALC', $fil['alcobas']);		
					}
		if(!empty($fil['banosalcobas'])){
		$this->db->where('DES_BAN', $fil['banosalcobas']);		
					}
		if(!empty($fil['banosfamiliares'])){
		$this->db->where('DES_BAF', $fil['banosfamiliares']);		
					}
		if(!empty($fil['garajes'])){
		$this->db->where('DES_GAR', $fil['garajes']);		
					}
		if(!empty($fil['area'])){
		$split = explode(';', $fil['area']);
		$this->db->where('ARE_CON >=', $split[0]);
		$this->db->where('ARE_CON <=', $split[1]);					
		}
		if(!empty($fil['biblioteca'])){
		$this->db->where('DES_BIB', 'S');		
					}
		if(!empty($fil['alcobaservicio'])){
		$this->db->where('DES_ALS', 'S');		
					}
		if(!empty($fil['banosocial'])){
		$this->db->where('DES_BAS', 'S');			
					}
		if(!empty($fil['comedorauxiliar'])){
		$this->db->where('DES_DOR', 'S');			
					}
		if(!empty($fil['juegosinfantiles'])){
		$this->db->where('DES_JUE', 'S');		
					}
		if(!empty($fil['piscinas'])){
		$this->db->where('DES_PCN >', '0');			
					}
		
		$a = $this->db->get()->result();	

		// echo  $this->db->last_query();exit();
		return $a;
	}
	
function get_rents(){
		$this->db->select('*');
		$this->db->from('V_INMUEBLES_ARRIENDOS');
		$a = $this->db->get()->result();	

		// $this->db->last_query();exit('as');
		return $a;
	}
	
	
	/*$this->db->select('p.*, l.MIME_TYPE, l.BLOB_PEQUENA');
		$this->db->from('V_INMUEBLES_ARRIENDOS p');	
		$this->db->join('V_FOTOS_ARRIRENDOS l', 'l.COD_INM=p.COD_INM');
		$this->db->order_by("p.DES_TIP", "asc");
		$a =  $this->db->get()->result();
		return $a;*/
	
	
	
				
	function get_galery_model_rent($id_proy){
		$this->db->select('COD_INM, COD_MOV');
		$this->db->from('V_FOTOS_ARRIENDOS');
		$this->db->where('COD_INM',$id_proy);
		return $this->db->get()->result();
		}
		
function get_documents(){
		$this->db->select('CODIGO, NOMBRE, FECHA, DESCRIPCION, OBSERVACIONES');
		$this->db->from('V_DPROCESOS_ARRIENDOS');
		$a =  $this->db->get()->result();
	/*	echo $this->db->last_query();
		exit();*/
		return $a;
		}
		
function get_document($code){
		$this->db->select('*');
		$this->db->from('V_DPROCESOS_ARRIENDOS');
		$a =  $this->db->get()->result();
		$this->db->where('CODIGO',$code);
	/*	echo $this->db->last_query();
		exit();*/
		return $a;
		}
		

}