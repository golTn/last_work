<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class file_upload extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('fileupload_model');
    }

    public function view_file() {
        $data['file_list'] = $this->fileupload_model->getfilelist();
        $this->load->view('file_upload_view', $data);
    }

    public function add_file() {
        $data['file_list'] = $this->fileupload_model->getfilelist();
        $this->load->view('file_upload_frm', $data);
    }
    public function index() {
        $data['file_list'] = $this->fileupload_model->getfilelist();
        $this->load->view('file_upload_view', $data);
    }
    public function do_upload() {
        $config['upload_path'] = './attachment/';
        $config['allowed_types'] = 'gif|jpg|png';
        $config['max_size'] = 800;
        $config['max_width'] = 2024;
        $config['max_height'] = 4000;
        $file_data = array(
            'name' => $_POST['name']
        );
        $file_id = $this->fileupload_model->insert($file_data);
        $filename = $_FILES["image"]["name"];
        $extension = pathinfo($filename, PATHINFO_EXTENSION);
//        $extension = (explode(".", $filename));
        $newfilename = $file_id . "." . $extension;
        $config['file_name'] = $newfilename;
        $this->load->library('upload', $config);

        if (!$this->upload->do_upload('image')) {
            $error = array('error' => $this->upload->display_errors());
            $this->load->view('Reg_message', $error);
        } else {
            $data = array('upload_data' => $this->upload->data());
            $this->fileupload_model->update_filename($file_id, $newfilename);
            redirect("file_upload/index");
        }
  
    }
    /*public function edit_data($country_id) {
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
    }*/
}
