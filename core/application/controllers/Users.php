<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index(){

		$this->load->view('welcome_message');
	}

	public function check_credentials(){
		$data['email'] 		= $this->input->post('username');
		$data['password'] = hash('sha256', $password . '123');
		$this->db->set('password', $data['password']);
		$this->load->model("User_model");
		$result = $this->User_model->validate_UserCredentials( $data );


		if( $result == 0 ){

			$data = array(
				'error_msg' => 'Your credentials are invalid!'
			);

			$this->load->view('welcome_message', $data );
		}
		else{

			$data_session = array(
				'logged_in' => 1
			);

			$this->session->set_userdata( $data_session );

			redirect('/');
		}
	}

	public function logout(){

		$this->session->sess_destroy();
		redirect('/');
	}

}
