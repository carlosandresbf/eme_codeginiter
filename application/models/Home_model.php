<?php
Class Home_model extends CI_Model {

	function get_data() {
		$this->db->select('*');
		$this->db->from('home');
		
		return $this->db->get()->row();
	}



	function add_report($data){
		$this->db->set('created_at', date('Y-m-d h:i:s'));
		$this->db->insert('reporte_de_errores', $data);
	}

}