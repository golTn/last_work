<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class country extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('country_model');
    }

    public function view_country() {
        $data['country_list'] = $this->country_model->getcountrylist();

        $this->load->view('country_view', $data);
    }

    public function add_country() {
        $data['country_list'] = $this->country_model->getcountrylist();

        $this->load->view('country_add', $data);
    }

    public function index() {
        $data['country_list'] = $this->country_model->getcountrylist();
        $this->load->view('country_view', $data);
    }

    public function addp() {
        $country_data = array(
            'country_name' => $_POST['country_name']);
        $this->country_model->insert($country_data);
        redirect("country/index");
    }

    public function edit_data($country_id) {
        $data['update_data'] = $this->country_model->edit_data($country_id);
        $data['country_list'] = $this->country_model->getcountrylist();
        $this->load->view('country_add', $data);
    }

    public function editp() {
        $this->country_model->update_data($_POST['country_id'], $_POST['country_name']);
        redirect("country/view_country");
    }

    public function del($country_id) {
        $this->country_model->del($country_id);
        redirect("country/view_country");
         }

}
