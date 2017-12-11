<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class State extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('country_model');
        $this->load->model('state_model');
    }

    public function view_state() {
        $data['country_list'] = $this->country_model->getcountrylist();
        $data['state_list'] = $this->state_model->getstatelist();
        $this->load->view('state_view', $data);
    }

    public function add_state() {
        $data['country_list'] = $this->country_model->getcountrylist();
        $data['state_list'] = $this->state_model->getstatelist();
        $this->load->view('state_add', $data);
    }
    public function index() {
        $data['country_list'] = $this->country_model->getcountrylist();
        $data['state_list'] = $this->state_model->getstatelist();
        $this->load->view('state_view', $data);
    }

    public function import_state() {
        $this->load->view('import_state');
    }
    public function addp() {
        $state_data = $this->state_model->insert($_POST['country_id'], $_POST['state_name'], $status);
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

    public function update_status_active($state_id) {
        $this->load->model('country_model');
        $this->load->model('state_model');
        $status = $this->input->get('status');
        $this->state_model->update_active($state_id, $status);
        redirect('state/index');
    }

    public function update_status_deactive($state_id) {
        $this->load->model('country_model');
        $this->load->model('state_model');
        $status = $this->input->get('status');
        $this->state_model->update_deactive($state_id, $status);
        redirect('state/index');
    }
    public function importp() {
        $file = $_FILES['upload']['tmp_name'];
        $handle = fopen($file, "r");
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
            $state_name = trim($filesop[1]);
            if (strlen($state_name) < 2) {
                continue;
            }
            $country_data = $this->state_model->getcountryid($country_name);
            $country_id = $country_data['country_id'];
            try {
                $param = array(
                    'country_id' => $country_id
                    , 'state_name' => $state_name
                    , 'status' => 1
                );
           
                $this->state_model->insert($param);
                $counter++;
            } catch (Exception $ex) {
                
            }
        }
        $total = ($records - 1);
        $this->session->set_flashdata('message', $counter . " record(s) out of " . ($total == -1 ? 0 : $total) . " successfully imported.");
        redirect("state/index");
    }

}
