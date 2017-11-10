<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Country_model extends CI_Model {

    public function insert($country_data) {
        $this->db->insert('country_master', $country_data);
    }

    public function getcountrylist() {
        $query = $this->db->query("select * from country_master");
        return $query->result();
    }

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

}
