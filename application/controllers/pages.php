<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pages extends CI_Controller {

	public function index()
	{
		$this->load->model('pages_model');

		$data['progress'] = $this->pages_model->get_progress();

		if (empty($data['progress'])){
			redirect (base_url());
		}

		$this->load->view('index_view', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */