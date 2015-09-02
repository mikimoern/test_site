<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Stadiums extends CI_Controller {

	public function index()
	{		
		$this->load->view('stadium_view');
	}
}