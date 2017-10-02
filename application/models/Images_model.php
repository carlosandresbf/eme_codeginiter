<?php
Class Images_model extends CI_Model {
	function __construct(){
		parent::__construct();

		$this->load->model('configuration_model');
	}

	function get_images_proyectos($codigo, $tipoimagen, $tamano=''){
		if($tamano!=''){$campo_t='BLOB_CONTENT as img';}else{$campo_t='BLOB_PEQUENA as img';}
			$this->db->select('NOM_DOC as name, MIME_TYPE as mime, '.$campo_t);
			$this->db->from("V_LOGOS");
			$this->db->where('COD_OBR', $codigo);
			$this->db->where('TIP_DOC', $tipoimagen);
			$query = $this->db->get();		
			//echo  $this->db->last_query();
			$a =  	$query->result();
		return $a;
				}
				
	function get_images_banner_proyectos($codigo,  $codigo_img, $tamano=''){
		if($tamano!=''){$campo_t='BLOB_CONTENT as img';}else{$campo_t='BLOB_PEQUENA as img';}
			$this->db->select('NOM_DOC as name, MIME_TYPE as mime, '.$campo_t);
			$this->db->from("V_BANNER");
			$this->db->where('COD_OBR', $codigo);
			$this->db->where('COD_DOC', $codigo_img);
			$query = $this->db->get();		
			//echo  $this->db->last_query();
			$a =  	$query->result();
		return $a;
				}
				

	function get_images_proyectos_code($codigo, $codigo_img, $tamano=''){
		if($tamano!=''){$campo_t='BLOB_CONTENT as img';}else{$campo_t='BLOB_PEQUENA as img';}
			$this->db->select('NOM_DOC as name, MIME_TYPE as mime, '.$campo_t);
			$this->db->from("V_LOGOS");
			$this->db->where('COD_OBR', $codigo);
			$this->db->where('COD_DOC', $codigo_img);
			$query = $this->db->get();		
			//echo  $this->db->last_query();
			$a =  	$query->result();
		return $a;
				}
	
	function get_images_used($codigo1, $codigo2, $tipoimagen, $tamano=''){
	if($tamano!=''){$campo_t='BLOB_CONTENT as img';}else{$campo_t='BLOB_PEQUENA as img';}
	if($tipoimagen=='home'){$cod='00000001';}else{$cod=$tipoimagen;}
	$this->db->select('NOM_DOC as name, MIME_TYPE as mime, '.$campo_t);
	$this->db->from("V_FOTOS_USADOS");
	$this->db->where('NRO_ETA', $codigo1);
	$this->db->where('COD_USA', $codigo2);
	$this->db->where('COD_DOC', $cod);
			$query = $this->db->get();		
			//echo  $this->db->last_query(); exit();
			$a =  	$query->result();
			return $a;
		
		
	}	
	
	function get_images_rentas($codigo1, $tipoimagen, $tamano=''){
	if($tamano!=''){$campo_t='BLOB_CONTENT as img';}else{$campo_t='BLOB_PEQUENA as img';}
	if($tipoimagen=='home'){$cod='00000001';}else{$cod=$tipoimagen;}

	$this->db->select('NOM_FOT as name, MIME_TYPE as mime, '.$campo_t);
	$this->db->from("V_FOTOS_ARRIENDOS");
	$this->db->where('COD_INM', $codigo1);
	$this->db->where('COD_MOV', $cod);
			$query = $this->db->get();		
		//	echo  $this->db->last_query(); exit();
			$a =  	$query->result();
			return $a;
		
		
	}
		
		
		

}