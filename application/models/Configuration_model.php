<?php
Class Configuration_model extends CI_Model {

	function get_data() {
		$this->db->select('*');
		$this->db->from('configuration');
		$this->db->where('id', 1);
		
		return $this->db->get()->row();
	}
}