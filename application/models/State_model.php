<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class State_model extends CI_Model {

	
	public function insert($state_data)
	{
		$this->db->insert('state_master',$state_data);
	}

	public function getstatelist()
	{
		$query=$this->db->query("select * from country_master as c, state_master as s where c.country_id=s.country_id ");
	return	$query->result();
	}
	
	public function edit_data($state_id)
	{
	$query=$this->db->query("select * from country_master as c, state_master as s where state_id='$state_id'");
	return $query->row_array();
	}

	public function update_data($state_id,$country_id,$state_name)
	{
		$data = array(
		'country_id' => $country_id,
		'state_name' => $state_name,		
		);
		$this->db->where('state_id',$state_id);
		$this->db->update('state_master',$data);
	}
	
	public function del($state_id)
	{
		$this->db->where('state_id',$state_id);
		$this->db->delete('state_master');
	}

        
}
