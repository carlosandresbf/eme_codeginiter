<?php
Class Auth_model extends CI_Model {

	function login($email) {
		$this->db->select('id, name, password, email');
		$this->db->from('user');
		$this->db->where('email', $email);
		$this->db->limit(1);

		$query = $this->db->get();
		return $query->result();

	}

	function get_agent($id){
		$this->db->select('id, picture, name, email, telephone_1, telephone_2, facebook, twitter');
		$this->db->from('administrator');
		$this->db->where('id', $id);

		$query = $this->db->get();
		return $query->row();
	}

	function get_user_by_email($email){
		$this->db->select('id, name, email');
		$this->db->from('user');
		$this->db->where('email', $email);

		$query = $this->db->get();
		return $query->row();
	}

	function recover_password($email, $hash){
		$recovery_date = strtotime ('+5 day', strtotime(date('Y-m-d h:i:s')));
		$recovery_date = date('Y-m-d h:i:s', $recovery_date);

		$this->db->set('updated_at', date('Y-m-d h:i:s'));
		$this->db->set('recovery_hash', $hash);
		$this->db->set('recovery_date', $recovery_date);

		$this->db->where('email', $email);
		$this->db->update('user');
	}

	function verify_recovery($user, $hash){
		$this->db->select('id');
		$this->db->from('user');
		$this->db->where('id', $user);
		$this->db->where('recovery_hash', $hash);
		$this->db->where('recovery_date >=', date('Y-m-d h:i:s'));

		$query = $this->db->get();
		if ($query->num_rows() > 0)
			return true;

		return false;
	}

	function signup($data){
		$hash = $this->encrypt_password($data['password']);
		$data['password'] = $hash;
		$this->db->set('created_at', date('Y-m-d h:i:s'));
		$this->db->insert('user', $data);
	}

	function edit_user($data){
		$user_id = $data['id'];
		unset($data['id']);
		
		if (!empty($data['password'])) {
			$password = $data['password'];
			$password = $this->encrypt_password($password);
			$data['password'] = $password;
		}else{
			unset($data['password']);
		}
		
		$data['updated_at'] = date('Y-m-d h:i:s');
		$this->db->where('id', $user_id);
		$this->db->update('user', $data); 
	}

	function encrypt_password($password){
		$salt = substr(base64_encode(openssl_random_pseudo_bytes('30')), 0, 22);
		$salt = strtr($salt, array('+' => '.')); 

		$hash = crypt($password, '$2y$10$' . $salt);
		return $hash;
	}

	function verify_email($email){
		$this->db->select('email');
		$this->db->from('user');
		$this->db->where('email', $email);

		$query = $this->db->get();
		return $query->num_rows();
	}

	function facebookAccount($data){
		$this->db->select('name, email, id');
		$this->db->from('user');
		$this->db->where('email', $data['email']);
		$this->db->where('facebook_provider', $data['id']);

		$query = $this->db->get();
		return $query->row();
	}

	function singupFacebook($data){
		$this->db->set('name', $data['name']);
		$this->db->set('facebook_provider', $data['id']);
		$this->db->set('email', $data['email']);
		$this->db->set('created_at', date('Y-m-d h:i:s'));

		$this->db->insert('user');

		return $this->get_user_by_email($data['email']);
	}
}