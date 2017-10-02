<?php
Class Page_model extends CI_Model {

	function get_pages($page = null) {
		$this->db->select('*');
		$this->db->from('links_de_interes');
		$this->db->where('activo_radio', 'Si');
		$this->db->order_by('record_order', 'DESC');

		if (!is_null($page)) {
			$this->db->like('titulo_text', $page);
			return $this->db->get()->row();
		}
		return $this->db->get()->result();
	}
	
	function get_page_id($id) {
		$this->db->select('*');
		$this->db->from('links_de_interes');
		$this->db->order_by('record_order', 'DESC');

			$this->db->like('id', $id);
			return $this->db->get()->row();
		
	}	
	
	function get_banner_info($site = 'IMLLA'){
		$this->db->select('*');
		$this->db->from('banners');
		$this->db->where('seccion_select', $site);
		$this->db->where('activo_radio', 'Si');
		$this->db->order_by('record_order');
	    return $this->db->get()->result();
												}
	
	function get_footer_info() {
		
		
		$this->db->select('titulo_text, descripcion_corta_text, imagen_file');
		$this->db->from('links_de_interes');
		$this->db->order_by('record_order', 'DESC');
		$this->db->like('titulo_text', 'Nosotros');
		$nosotros =  $this->db->get()->result();
	
		$this->db->select('titulo_text, descripcion_corta_text, imagen_file');
		$this->db->from('links_de_interes');
		$this->db->order_by('record_order', 'DESC');
		$this->db->like('titulo_text', 'Nuestra visión');
		$vision =  $this->db->get()->result();
		
		$this->db->select('titulo_text, descripcion_corta_text, imagen_file');
			$this->db->from('links_de_interes');
		$this->db->order_by('record_order', 'DESC');
		$this->db->like('titulo_text', 'Términos y condiciones');
		$terminos =  $this->db->get()->result();
				
		$this->db->select('S.*, C.nombre_text as ciudad');
		$this->db->from('sucursales as S');
		$this->db->join('ciudades as C', 'C.id = S.ciudades_relation');
		$this->db->order_by('S.record_order', 'DESC');
		$sucursales =  $this->db->get()->result();
		
		$out=array('vision'=>array('titulo'=> $vision[0]->titulo_text, 'subtitulo' => $vision[0]->descripcion_corta_text, 'imagen' => base_url().'admin/uploads/files/'.$vision[0]->imagen_file) , 
				   'nosotros'=>array('titulo'=> $nosotros[0]->titulo_text, 'subtitulo' => $nosotros[0]->descripcion_corta_text, 'imagen' =>  base_url().'admin/uploads/files/'.$nosotros[0]->imagen_file), 
				   'terminos'=>array('titulo'=> $terminos[0]->titulo_text, 'subtitulo' => $terminos[0]->descripcion_corta_text, 'imagen' =>  base_url().'admin/uploads/files/'.$terminos[0]->imagen_file),
				   'sucursales' => $sucursales );
	
		return $out;
	}
}