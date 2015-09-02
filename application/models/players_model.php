<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Players_model extends CI_Model {

	public function get_goalkeeper()
	{
		$this->db->where('position','Воротар');
		$this->db->where('team','1');
		$query = $this->db->get('players');
		return $query->result_array();
	}		
	
	public function get_protector()
	{
		$this->db->where('position','Захисник');
		$this->db->where('team','1');
		$query = $this->db->get('players');
		return $query->result_array();
	}
	
	public function get_midfield()
	{
		$this->db->where('position','Півзахисник');
		$this->db->where('team','1');
		$query = $this->db->get('players');
		return $query->result_array();
	}
	
	public function get_attacker()
	{
		$this->db->where('position','Нападник');
		$this->db->where('team','1');
		$query = $this->db->get('players');
		return $query->result_array();
	}
	
	public function get_junior_goalkeeper()
	{
		$this->db->where('position','Воротар');
		$this->db->where('team','2');
		$query = $this->db->get('players');
		return $query->result_array();
	}		
	
	public function get_junior_protector()
	{
		$this->db->where('position','Захисник');
		$this->db->where('team','2');
		$query = $this->db->get('players');
		return $query->result_array();
	}
	
	public function get_junior_midfield()
	{
		$this->db->where('position','Півзахисник');
		$this->db->where('team','2');
		$query = $this->db->get('players');
		return $query->result_array();
	}
	
	public function get_junior_attacker()
	{
		$this->db->where('position','Нападник');
		$this->db->where('team','2');
		$query = $this->db->get('players');
		return $query->result_array();
	}			
	
	public function get_all()
	{
		$query = $this->db->order_by('id', 'asc');
		$query = $this->db->get('players');
		return $query->result_array();
	}

	public function get($player_id)
	{
		$this->db->where('id', $player_id);
		$query = $this->db->get('players');
		return $query->row_array();
	}

	public $add_rules = array
	(
		array
		(
			'field' => 'name',
			'label' => 'Імя та призвище',
			'rules' => 'required|max_length[250]'
		),
		array
		(
			'field' => 'number',
			'label' => 'Номер гравця',
			'rules' => 'required|numeric'
		),
		array
		(
			'field' => 'country',
			'label' => 'Країна',
			'rules' => 'required|max_length[250]'
		),
		array
		(
			'field' => 'img',
			'label' => 'Зображення',
			'rules' => 'required'
		),
		array
		(
			'field' => 'position',
			'label' => 'Позиція',
			'rules' => 'required'
		),
		array
		(
			'field' => 'team',
			'label' => 'Виберіть команду',
			'rules' => 'required'
		)
	);

	public $update_rules = array
	(
		array
		(
			'field' => 'name',
			'label' => 'Імя та призвище',
			'rules' => 'required|max_length[250]'
		),
		array
		(
			'field' => 'number',
			'label' => 'Номер гравця',
			'rules' => 'required|numeric'
		),
		array
		(
			'field' => 'country',
			'label' => 'Країна',
			'rules' => 'required|max_length[250]'
		),
		array
		(
			'field' => 'img',
			'label' => 'Зображення',
			'rules' => 'required'
		),
		array
		(
			'field' => 'position',
			'label' => 'Позиція',
			'rules' => 'required'
		),
		array
		(
			'field' => 'team',
			'label' => 'Виберіть команду',
			'rules' => 'required'
		)
	);

	public function add()
	{
		$data = array();
		foreach ($this->add_rules as $item) 
		{
			$f = $item['field'];
			$data[$f] = $this->input->post($f);

		}
		$this->db->insert('players', $data);
	}

	public function update($player_id)
	{
	     $data = array ();

         foreach ($this->update_rules as $item)
         {
             $f = $item['field'];
             $data[$f] = $this->input->post($f);           
	     }             

	     $this->db->where('id',$player_id);
		 $this->db->update('players', $data);
	}

	public function delete($player_id)
	{
		$this->db->where ('id',$player_id);
		$this->db->delete('players');
	}

}