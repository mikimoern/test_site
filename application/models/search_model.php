<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search_model extends CI_Model {

	public function get_search()
	{
		$match = $this->input->post('query');
		$this->db->like('title',$match);
		$this->db->or_like('description',$match);
		$query = $this->db->get('news');
		return $query->result_array();
	}		
	
	public $search_rules = array
	(
	    array
	    (
	      'field' => 'query',
	      'label' => 'Поисковый запрос',
	      'rules' => 'required|trim|min_length[3]|max_length[50]|xss_clean'
	    )
	);

}