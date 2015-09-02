<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Standings_model extends CI_Model {

	public function get_standing()
	{
		$query = $this->db->order_by('point','desc');
		$query = $this->db->order_by('difference', 'desc');
		$query = $this->db->get('standings');
		return $query->result_array();
	}		
	
}