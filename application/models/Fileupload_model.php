<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Fileupload_model extends CI_Model {

   public function insert($file_data) {
        $this->db->insert('file_master', $file_data);
        return $this->db->insert_id();
    }
    function update_filename($file_id, $file_name) {
        $this->db->set('image', $file_name);
        $this->db->where('file_id', $file_id);
        $this->db->update('file_master');
    }

    public function getfilelist() {
        $query = $this->db->query("select * from file_master");
        return $query->result();
    }
/*
    public function edit_data($country_id) {
        $query = $this->db->query("select * from country_master where country_id='$country_id'");
        return $query->row_array();
    }

    public function update_data($country_id, $country_name) {
        $data = array(
            'country_name' => $country_name,
        );
        $this->db->where('country_id', $country_id);
        $this->db->update('country_master', $data);
    }

    public function del($country_id) {
        $this->db->where('country_id', $country_id);
        $this->db->delete('country_master');
    }
    public function update_active($country_id, $status) {
        $data = array(
            'country_id' => $country_id,
            'status' => 1
        );
        $this->db->where('country_id', $country_id);
        $this->db->update('country_master', $data);
    }

    public function update_deactive($country_id, $status) {
        $data = array(
            'country_id' => $country_id,
            'status' => 0
        );
        $this->db->where('country_id', $country_id);
        $this->db->update('country_master', $data);
    }
*/
}
