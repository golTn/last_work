<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function index()
	{
                                            $this->load->model('login_model');
		$this->load->view('login_view');
	}
        function checkdata() {
      	{
		$this->load->model('login_model');
		$checkdata=$this->login_model->validate($_POST['user_name'],$_POST['password']);
		if(isset($checkdata['user_id']))
		{
			$userdata=$data['checkdata'];
			$this->session->set_userdata('user_id',$userdata['user_id']);
			$this->session->set_userdata('password',$userdata['password']);
			 redirect("country/index");
		}
		else
		{
			$this->session->set_flashdata('message', 'try again..');
			redirect("Login/index");
		}
	}
	
    }
}
