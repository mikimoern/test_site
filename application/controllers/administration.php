<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administration extends CI_Controller {

	public function index()
	{
		$this->auth_lib->check_admin();

		$data['total_news'] = $this->db->count_all('news');
		$data['total_players'] = $this->db->count_all('players');
		$data['total_coaches'] = $this->db->count_all('coaches');

		$this->load->view('administration/index_view', $data);
	}

	public function login()
	{
	   $this->load->model('administration_model');
	    
	    $this->form_validation->set_rules($this->administration_model->login_rules);

	    if ($this->form_validation->run() == FALSE)
	    {
	        $this->load->view('administration/login_view');
	    }

	    else
	    {
	        $this->auth_lib->do_login($this->input->post('login'),$this->input->post('pass'));
	    }
	}


	public function logout()
	{	    
	    $this->auth_lib->check_admin();
	    $this->auth_lib->do_logout();
	}

}