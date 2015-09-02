<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Junior_players extends CI_Controller {
	
	public function index()
	{
		$this->load->model('players_model');
		
		$data['junior_goalkeepers'] = $this->players_model->get_junior_goalkeeper();
		
		$data['junior_protectors'] = $this->players_model->get_junior_protector();
		
		$data['junior_midfields'] = $this->players_model->get_junior_midfield();
		
		$data['junior_attackers'] = $this->players_model->get_junior_attacker();
		
		$this->load->view('junior_players_view', $data);		
	}	
	
}
