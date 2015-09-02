<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Standings extends CI_Controller {

	public function index()
	{
		$this->load->model('standings_model');

		$data['standings'] = $this->standings_model->get_standing();

		$this->load->view('standings_view', $data);
	}
}
