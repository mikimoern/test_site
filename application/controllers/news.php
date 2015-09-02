<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class News extends CI_Controller {

	public function index()
	{
		$this->load->model('news_model');

		//параметры постраничной навигации
		$config['base_url'] = base_url().'news/index';
		$config['total_rows'] = $this->db->count_all('news');
		$config['per_page'] = 3;
		$config['first_link'] = 'На початок';
		$config['last_link'] = 'В кінець';
		$config['next_link'] = '&raquo;';
		$config['prev_link'] = '&laquo;';
		
		// открывющий тэг перед навигацией
		$config['full_tag_open'] = '<ul id="pagination">';
		
		// закрывающий тэг после навигации 
		$config['full_tag_close'] = '</ul>';
		
		// первая страница открывающий тэг 
		$config['first_tag_open'] = '<li>'; 
		
		// первая страница закрывающий тэг 
		$config['first_tag_close'] = '</li>';
		
		// последняя страница открывающий тэг 
		$config['last_tag_open'] = '<li>'; 
		
		// последняя страница закрывающий тэг
		$config['last_tag_close'] = '</li>'; 
		
		// предыдущая страница открывающий тэг
		$config['prev_tag_open'] = '<li>';
		
		// предыдущая страница закрывающий тэг 
		$config['prev_tag_close'] = '</li>';
		
		// текущая страница открывающий тэг
		$config['cur_tag_open'] = '<li class = "active">'; 
		
		// текущая страница закрывающий тэг
		$config['cur_tag_close'] = '</li>';
			
		$config['num_tag_open'] = '<li>'; // цифровая ссылка открывающий тэг
		$config['num_tag_close'] = '</li>'; // цифровая ссылка закрывающий тэг
		
		// следующая страница открывающий тэг
		$config['next_tag_open'] = '<li>'; 
		
		// следующая страница закрывающий тэг
		$config['next_tag_close'] = '</li>';
		
		$this->pagination->initialize($config);

		$data['news'] = $this->news_model->get_news($config['per_page'],$this->uri->segment(3));

		$this->load->view('news_view', $data); 
	} 

}
