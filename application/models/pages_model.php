<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages_model extends CI_Model {

	public function get_progress()
	{
		$query = $this->db->get('progress');
		return $query->result_array();
	}		
	
}