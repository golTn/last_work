<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class City_model extends CI_Model {

    public function insert($city_data) {

        $this->db->insert('city_master', $city_data);
    }

    public function getcitylist() {
        $query = $this->db->query("select * from country_master as c, state_master as s, city_master as city where city.country_id=c.country_id and city.state_id=s.state_id ");
        return $query->result();
    }

    public function edit_data($city_id) {
        $query = $this->db->query("select * from  city_master  where city_id='$city_id' ");
        return $query->row_array();
    }

    public function update_data($city_id, $country_id, $state_id, $city_name) {
        $data = array(
            'city_id' => $city_id,
            'country_id' => $country_id,
            'state_id' => $state_id,
            'city_name' => $city_name,
        );

        $this->db->where('city_id', $city_id);

        $this->db->update('city_master', $data);
    }

    public function del($city_id) {
        $this->db->where('city_id', $city_id);
        $this->db->delete('city_master');
    }

    public function drop_state($country_id) {

        $query = $this->db->query("select * from  state_master where country_id='$country_id' ");
        return $query->result();
    }

}
