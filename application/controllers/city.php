<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class city extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('country_model');
        $this->load->model('state_model');
        $this->load->model('city_model');
    }

    public function view_city() {
        $data['country_list'] = $this->country_model->getcountrylist();
        $data['state_list'] = $this->state_model->getstatelist();
        $data['city_list'] = $this->city_model->getcitylist();

        $this->load->view('city_view', $data);
    }

    public function add_city() {
        $data['country_list'] = $this->country_model->getcountrylist();
        $data['state_list'] = $this->state_model->getstatelist();
        $data['city_list'] = $this->city_model->getcitylist();

        $this->load->view('city_add', $data);
    }

    public function index() {
        $data['country_list'] = $this->country_model->getcountrylist();
        $data['state_list'] = $this->state_model->getstatelist();
        $data['city_list'] = $this->city_model->getcitylist();
        $this->load->view('city_view', $data);
    }

    public function addp() {
        $city_data = array(
            'country_id' => $_POST['country_id'],
            'state_id' => $_POST['state_id'],
            'city_name' => $_POST['city_name']
        );
        $this->city_model->insert($city_data);
        redirect("city/index");
    }

    public function edit_data($city_id) {
        $data['update_data'] = $this->city_model->edit_data($city_id);

        $data['country_list'] = $this->country_model->getcountrylist();
        $data['state_list'] = $this->state_model->getstatelist();
        $data['city_list'] = $this->city_model->getcitylist();

        $this->load->view('city_add', $data);
    }

    public function editp() {
        $this->city_model->update_data($_POST['city_id'], $_POST['country_id'], $_POST['state_id'], $_POST['city_name']);
        redirect("city/view_city");
    }

    public function update_data($cityid) {
        $data['country_list'] = $this->country_model->getcountrylist();
        $data['update_data'] = $this->state_model->getstatelist();
        $data['update_data'] = $this->city_model->edit_data($city_id);

        $data['city_list'] = $this->city_model->getcitylist();
        $this->load->view('city_view', $data);
    }

    public function del($city_id) {
        $this->city_model->del($city_id);
        redirect("city/index");
    }

    public function drop_state() {
        $data['update_data'] = $this->city_model->drop_state($_POST['country_id']);

        $this->load->view('drop_state', $data);
        //     print_r( $data['update_data']);
    }

}
