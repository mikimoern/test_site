<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class History_coaches_model extends CI_Model {

	public function get_coach()
	{
		$query = $this->db->get('history_coaches');
		return $query->result_array();
	}			
	
}