<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News_model extends CI_Model {

	public function get_news($num, $offset)
	{
		$query = $this->db->order_by('date', 'desc');
		$query = $this->db->get('news', $num, $offset);
		return $query->result_array();
	}		
	
	public function get_one_news($news_id)
	{
		$this->db->where('id', $news_id);
		$query = $this->db->get('news');
		return $query->row_array();
	}

	public function update_news($news_id, $count_view)
	{
		$this->db->where('id', $news_id);
		$this->db->update('news', $count_view);
	}	

	public function get_all()
	{
		$query = $this->db->order_by('date', 'desc');
		$query = $this->db->get('news');
		return $query->result_array();
	}

	public function get($news_id)
	{
		$this->db->where('id', $news_id);
		$query = $this->db->get('news');
		return $query->row_array();
	}	
	
	public $add_rules = array
	(
		array
		(
			'field' => 'title',
			'label' => 'Назва',
			'rules' => 'required|max_length[250]'
		),
		array
		(
			'field' => 'date',
			'label' => 'Дата',
			'rules' => 'required'
		),
		array
		(
			'field' => 'image',
			'label' => 'Зображення',
			'rules' => 'required'
		),
		array
		(
			'field' => 'big_img',
			'label' => 'Зображення для новини',
			'rules' => 'required'
		),
		array
		(
			'field' => 'description',
			'label' => 'Короткий опис',
			'rules' => 'required'
		),
		array
		(
			'field' => 'text',
			'label' => 'Текс новини',
			'rules' => 'required'
		)
	);

	public $update_rules = array
	(                   
	    array
		(
			'field' => 'title',
			'label' => 'Назва',
			'rules' => 'required|max_length[250]'
		),
		array
		(
			'field' => 'date',
			'label' => 'Дата',
			'rules' => 'required'
		),
		array
		(
			'field' => 'image',
			'label' => 'Зображення',
			'rules' => 'required'
		),
		array
		(
			'field' => 'big_img',
			'label' => 'Зображення для новини',
			'rules' => 'required'
		),
		array
		(
			'field' => 'description',
			'label' => 'Короткий опис',
			'rules' => 'required'
		),
		array
		(
			'field' => 'text',
			'label' => 'Текс новини',
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
		$this->db->insert('news', $data);
	}	

	public function update($news_id)
	{
	     $data = array ();

         foreach ($this->update_rules as $item)
         {
             $f = $item['field'];
             $data[$f] = $this->input->post($f);           
	     }             

	     $this->db->where('id',$news_id);
		 $this->db->update('news', $data);
	}

	public function delete($news_id)
	{
		$this->db->where ('id',$news_id);
		$this->db->delete('news');
	}

}