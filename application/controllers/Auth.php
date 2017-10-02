<?php 
class Auth extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('auth_model');
		$this->load->model('page_model');
		$this->load->model('configuration_model');
	}

	function verify() {
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|callback_check_database');
		if($this->form_validation->run()) {
			$this->output
		        ->set_content_type('application/json')
		        ->set_output(json_encode(array('success' => true)));
		}else{
			$this->output
		        ->set_content_type('application/json')
		        ->set_output(json_encode(array('success' => false)));
		}
	}

	function check_database($password){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$result = $this->auth_model->login($email);
		if($result){
			foreach($result as $row){
				if (crypt($password, $row->password) == $row->password){
				    $session_array = array(
						'user_id' => $row->id,
						'name' => $row->name,
						'email' => $row->email
					);
					$this->session->set_userdata('logged_front', $session_array);

					return true;
				}else{
				    $this->form_validation->set_message('check_database', $this->lang->line('password_invalid'));
					return false;
				}
			}
		}else{
			$this->form_validation->set_message('check_database', $this->lang->line('name_invalid'));
			return false;
		}
	}

	function update_password(){
		$data['config'] = $this->configuration_model->get_data();
		$data['pages'] = $this->page_model->get_pages();
		$user = $this->session->userdata('logged_front');
		$token = $this->input->get('token');
    	if (empty($user['name']) || empty($user['user_id']) && !empty($token)){
     		$token = explode('/-/', base64_decode($this->input->get('token')));
     		$data['id'] = $token[0];
     		$data['hash'] = $token[1];
     		$verify = $this->auth_model->verify_recovery($data['id'], $data['hash']);
     		if ($verify) {
     			$data['section'] = $this->load->view('/update_password', $data, true);
				$this->load->view('/template/main', $data);
     		}else{
     			redirect('/', 'refresh');
     		}
		}else{
			redirect('/', 'refresh');		
		}
	}

	function save_password(){
		$verify = $this->auth_model->verify_recovery($this->input->post('id'), $this->input->post('hash'));
 		if ($verify) {
 			$data['id'] = $this->input->post('id');
 			$data['password'] = $this->input->post('password');
 			$this->auth_model->edit_user($data);
 			$this->output
		        ->set_content_type('application/json')
		        ->set_output(json_encode(array('success' => false, 'msg' => 'La contraseña ha sido actualizada')));
 		}else{
 			$this->output
		        ->set_content_type('application/json')
		        ->set_output(json_encode(array('success' => true, 'msg' => 'No tiene permiso para cambiar la contraseña')));
 		}
	}

	function recover_password(){
		$data['email'] = $this->input->post('email');
		$data['hash'] = urlencode(substr(base64_encode(openssl_random_pseudo_bytes('30')), 0, 22));
		$data['hash'] = strtr($data['hash'], array('+' => '.', '/' => '.', '%' => '.')); 
		$user = $this->auth_model->get_user_by_email($data['email']);
		if ($user) {
			$data['id'] = $user->id;
			$data['name'] = $user->name;
			$this->auth_model->recover_password($data['email'], $data['hash']);
			$this->load->library('email', config_mail());
			$this->email->set_mailtype("html");
			$this->email->from('no-reply@lafinca.com.co', 'Lafinca.com.co');
			$this->email->to($data['email']); 
			$this->email->subject('Nueva Contraseña - Lafinca.com.co');
			$this->email->message($this->load->view('mail/recover_password',$data,true));	
			$this->email->send();
			$this->output
		        ->set_content_type('application/json')
		        ->set_output(json_encode(array('success' => true, 'msg' => 'Hemos enviado información a su email')));
		}else{

			$this->output
		        ->set_content_type('application/json')
		        ->set_output(json_encode(array('success' => true, 'msg' => 'Este email no está registrado')));
		}
	}

	function signup(){	
		if ($this->is_valid_email()) {
			$data = $this->input->post();
			$this->auth_model->signup( $data );
			$this->verify();
		}else{
			$this->output
		        ->set_content_type('application/json')
		        ->set_output(json_encode(array('success' => false, 'msg' => 'Este email ya está registrado.')));
		}
	}

	function is_valid_email(){
		$return = $this->auth_model->verify_email( $this->input->post('email') );
		if($return)
			return false;

		return true;
	}


	function logout(){
	   	$this->session->unset_userdata('logged_front');
	   	redirect('/', 'refresh');
	}

	function loginFacebook(){
		$redirect = false;
		$user = $this->session->userdata('logged_front');
		if (!$user)
			$redirect = true;
	
		$data = $this->input->post();
		$account = $this->auth_model->facebookAccount($data);

		if (!$account) {
			$account = $this->auth_model->singupFacebook($data);
		}

		$session_array = array(
			'user_id' => $account->id,
			'name' => $account->name,
			'email' => $account->email
		);
		$this->session->set_userdata('logged_front', $session_array);

		$this->output
		        ->set_content_type('application/json')
		        ->set_output(json_encode(array('success' => false, 'redirect' => $redirect)));
	}
}
?>