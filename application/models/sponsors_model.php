<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sponsors_model extends CI_Model {

	public function get_sponsor()
	{
		$query = $this->db->get('sponsors');
		return $query->result_array();
	}		
	
}