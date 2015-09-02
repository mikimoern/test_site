<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class History_coaches extends CI_Controller {

	public function index ()
	{
		$this->load->model('history_coaches_model');

		$data['coaches'] = $this->history_coaches_model->get_coach();
			
		$this->load->view('history_coaches_view', $data);
	}
}
