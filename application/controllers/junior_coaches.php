<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Junior_coaches extends CI_Controller {
	
	public function index()
	{
		$this->load->model('coaches_model');
		
		$data['head_coaches'] = $this->coaches_model->get_head_coach();
		
		$data['assistant_coaches'] = $this->coaches_model->get_assistant_coach();
		
		$data['goalkeeper_coaches'] = $this->coaches_model->get_goalkeeper_coach();
		
		$data['physical_coaches'] = $this->coaches_model->get_physical_coach();
		
		//print_r ($data);
		
		$this->load->view('junior_coaches_view', $data);		
	}	
	
}