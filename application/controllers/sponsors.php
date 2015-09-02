<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sponsors extends CI_Controller {

	public function index()
	{		
		$this->load->model('sponsors_model');

		$data['sponsors'] = $this->sponsors_model->get_sponsor();

		$this->load->view('sponsor_view', $data);
	}
}