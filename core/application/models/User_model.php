<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

	public function validate_UserCredentials( $data ){

        $this->db->select( 'users.id, users.password' );
        $this->db->from( 'users' );
        $this->db->where( 'users.email', $data['email'] );

        $result = $this->db->get()->row();

        if($result){

            if( $result->password == $data['password']){

                return 1;
            }
            else{

                return 0;
            }
        }
    }
		public function register($data)
     {
				$this->db->insert('users',$data);

     }


}
