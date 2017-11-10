<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model {

	
	public function index()
	{
		$this->load->view('login_view');
	}
        public function validate($user_name,$password)
	{
		$sql="select * from login_master
		where user_name = ?
		AND password = ?";
		return $this->db->query($sql,array($user_name,$password))->row_array();
	}

}
