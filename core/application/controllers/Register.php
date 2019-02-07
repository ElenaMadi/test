<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index(){

		$this->load->view('register_view');
	}

  public function insertuser() {
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$confirmpassword = $this->input->post('confirm-password');

		$data['email'] = $this->input->post('email');
		$data['password'] = $this->input->post('password');
		//$this->db->set('email', $email);
		//$this->db->set('password', $password);
		//$this->db->insert('users');
		  $this->load->model("User_model");
	    $result = $this->User_model->register( $data );
    //return $this->db->affected_rows();
		print_r($data);
  }
}
