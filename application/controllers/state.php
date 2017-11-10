<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class State extends CI_Controller {

	 public function __construct() {
        parent::__construct();
        $this->load->model('country_model');
        $this->load->model('state_model');
    }
  public function view_state()
    {
       $data['country_list'] = $this->country_model->getcountrylist();
        $data['state_list'] = $this->state_model->getstatelist();
         $this->load->view('state_view',$data);
    }
    
              public function add_state()
    {
                   $data['country_list'] = $this->country_model->getcountrylist();
        $data['state_list'] = $this->state_model->getstatelist();
         $this->load->view('state_add',$data);
    }
    public function index() {
        $data['country_list'] = $this->country_model->getcountrylist();
        $data['state_list'] = $this->state_model->getstatelist();
        $this->load->view('state_view', $data);
    }

    public function addp() {
        $state_data = array(
            'country_id' => $_POST['country_id'],
            'state_name' => $_POST['state_name']
        );
        $this->state_model->insert($state_data);
        redirect("state/index");
    }

    public function edit_data($state_id) {
        $data['update_data'] = $this->state_model->edit_data($state_id);
        $data['country_list'] = $this->country_model->getcountrylist();
        $data['state_list'] = $this->state_model->getstatelist();
        $this->load->view('state_add', $data);
    }

    public function editp() {
        $this->state_model->update_data($_POST['state_id'], $_POST['country_id'], $_POST['state_name']);
        redirect("state/view_state");
    }

    public function del($state_id) {
        $this->load->model('country_model');
        $this->load->model('state_model');
        $this->state_model->del($state_id);
        redirect("state/index");
        //$this->session->set_flashdata('message', 'Your filed is empty!');
        //redirect('country/index');
    }

    public function update_data($id) {
        $data['country_list'] = $this->country_model->getcountrylist();
        $data['update_data'] = $this->state_model->edit_data($state_id);
        $data['state_list'] = $this->state_model->getstatelist();
        $this->load->view('state_view', $data);
    }

	
	
}
