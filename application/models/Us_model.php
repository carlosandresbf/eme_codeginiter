<?php
Class Us_model extends CI_Model {

	function get_data() {
		$this->db->select('*');
		$this->db->from('nosotros');
		
		return $this->db->get()->row();
	}

	function get_testimonials(){
		$this->db->select('*');
		$this->db->from('testimonios');
		$this->db->order_by('record_order');
		
		return $this->db->get()->result();
	}
}