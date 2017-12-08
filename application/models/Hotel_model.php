<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Hotel_model extends CI_Model {

    public function insert($data) {

        $this->db->insert('hotel_master', $data);
    }

    public function gethotellist() {
        $query = $this->db->query("select * from hotel_master");
        return $query->result();
    }

    public function drop_state($country_id) {
        $query = $this->db->query("select * from  state_master where country_id='$country_id' ");
        return $query->result();
    }

    public function drop_city($state_id) {
        $query = $this->db->query("select * from  city_master where state_id='$state_id' ");
        return $query->result();
    }

    public function delete($hotel_id) {
        $this->db->where('hotel_id', $hotel_id);
        $this->db->delete('hotel_master');
    }

    public function edit_data($hotel_id) {

        $query = $this->db->query("select * from hotel_master where hotel_id='$hotel_id' ");
        return $query->row_array();
    }

    public function update_data($hotel_id, $name, $email, $mobile, $star, $image, $country_id, $state_id, $city_id) {
        $data = array(
            //'reg_id' => $reg_id,
            'name' => $name,
            'email' => $email,
            'mobile' => $mobile,
            'star' => $star,
            'image' => $image,
            'country_id' => $country_id,
            'state_id' => $state_id,
            'city_id' => $city_id
        );
        $this->db->where('hotel_id', $hotel_id);
        $this->db->update('hotel_master', $data);
    }

}
