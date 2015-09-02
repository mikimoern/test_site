<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Coaches_model extends CI_Model {

	public function get_head()
	{
		$this->db->where('position','Головний тренер');
		$this->db->where('team','1');
		$query = $this->db->get('coaches');
		return $query->result_array();
	}		
	
	public function get_assistant()
	{
		$this->db->where('position','Помічник головного тренера');
		$this->db->where('team','1');
		$query = $this->db->get('coaches');
		return $query->result_array();
	}
	
	public function get_goalkeeper()
	{
		$this->db->where('position','Тренер воротарів');
		$this->db->where('team','1');
		$query = $this->db->get('coaches');
		return $query->result_array();
	}
	
	public function get_physical()
	{
		$this->db->where('position','Тренер з фізпідготовки');
		$this->db->where('team','1');
		$query = $this->db->get('coaches');
		return $query->result_array();
	}
	
	public function get_head_coach()
	{
		$this->db->where('position','Старший тренер');
		$this->db->where('team','2');
		$query = $this->db->get('coaches');
		return $query->result_array();
	}		
	
	public function get_assistant_coach()
	{
		$this->db->where('position','Асистент тренера');
		$this->db->where('team','2');
		$query = $this->db->get('coaches');
		return $query->result_array();
	}
	
	public function get_goalkeeper_coach()
	{
		$this->db->where('position','Тренер воротарів');
		$this->db->where('team','2');
		$query = $this->db->get('coaches');
		return $query->result_array();
	}
	
	public function get_physical_coach()
	{
		$this->db->where('position','Начальник команди');
		$this->db->where('team','2');
		$query = $this->db->get('coaches');
		return $query->result_array();
	}
	
	public function get_all()
	{
		$query = $this->db->order_by('id', 'asc');
		$query = $this->db->get('coaches');
		return $query->result_array();
	}

	public function get($coach_id)
	{
		$this->db->where('id', $coach_id);
		$query = $this->db->get('coaches');
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
			'label' => 'Посада',
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
			'label' => 'Посада',
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
		$this->db->insert('coaches', $data);
	}

	public function update($coach_id)
	{
	     $data = array ();

         foreach ($this->update_rules as $item)
         {
             $f = $item['field'];
             $data[$f] = $this->input->post($f);           
	     }             

	     $this->db->where('id',$coach_id);
		 $this->db->update('coaches', $data);
	}

	public function delete($coach_id)
	{
		$this->db->where ('id',$coach_id);
		$this->db->delete('coaches');
	}


}
