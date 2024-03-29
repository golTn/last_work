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

    public function import() {
        $this->load->view('import_country');
    }

    public function index() {
        $data['country_list'] = $this->country_model->getcountrylist();
        $this->load->view('country_view', $data);
    }

    public function addp() {
        $country_data = $this->country_model->check_data($_POST['country_name'],$_POST['status']);
        if (isset($country_data)) {
            redirect('country/index');
        } else {
            $this->country_model->insert($_POST['country_name'],$_POST['status']);
        }
    }

    public function importp() {
        $file = $_FILES['upload']['tmp_name'];
        $handle = fopen($file, "r");
        $c = 0;
        $row = 1;
        $counter = 0;
        $records = 0;
        while (($filesop = fgetcsv($handle, 100000, ",")) !== false) {
            $records++;
            if ($row == 1) {
                $row++;
                continue;
            }
            $country_name = trim($filesop[0]);
            if (strlen($country_name) < 2) {
                continue;
            }
            $country_data = $this->country_model->check_data($country_name);
            if (isset($country_data['country_id'])) {
                continue;
            }
            try {
                $this->country_model->insert($country_name);
                $counter++;
            } catch (Exception $ex) {
                
            }
        }
        $total = ($records - 1);
        $this->session->set_flashdata('message', $counter . " record(s) out of " . ($total == -1 ? 0 : $total) . " successfully imported.");
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
public function update_status_active($country_id) {
        $this->load->model('country_model');
        $status = $this->input->get('status');
        $this->country_model->update_active($country_id, $status);
        redirect('country/index');
    }

    public function update_status_deactive($country_id) {
        $this->load->model('country_model');
        $status = $this->input->get('status');
        $this->country_model->update_deactive($country_id, $status);
        redirect('country/index');
    }
}
