<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Players extends CI_Controller {

	public function index ()
	{
		$this->load->model('players_model');
		
		$data['goalkeepers'] = $this->players_model->get_goalkeeper();
		
		$data['protectors'] = $this->players_model->get_protector();
		
		$data['midfields'] = $this->players_model->get_midfield();
		
		$data['attackers'] = $this->players_model->get_attacker();
		
		$this->load->view('players_view', $data);
	}

	public function add()
	{
		$this->auth_lib->check_admin();
		$this->load->model('players_model');

		if (isset ($_POST['add_button']))
		{
			$this->form_validation->set_rules($this->players_model->add_rules);

			if ($this->form_validation->run() == TRUE)
			{
				$this->players_model->add();

				$data = array('info' => 'Гравець добавлений'); 

				$this->load->view('administration/info_view', $data);
			}
			else
			{
				$this->load->view('administration/add_players_view');
			}
		}
		else
		{
			$this->load->view('administration/add_players_view');
		}
	}

	public function edit_list()
	{ 	
		$this->auth_lib->check_admin();
		$this->load->model('players_model');

	    $data['players_list'] = $this->players_model->get_all(); 
	    
	    $this->load->view('administration/edit_list_players_view',$data);    
	}

	public function edit($player_id = '')
	{
	    $this->auth_lib->check_admin();
	    $this->load->model('players_model');

	    $data = array();
	    $data = $this->players_model->get($player_id);

	    if (empty($data))
	    {
	        $data = array('info' => 'Такого гравця не існує');
	        $this->load->view('administration/info_view', $data);                   
	    }

	    else
	    {     
	      $this->load->view('administration/edit_player_view', $data);
	    }
	}

	public function update($player_id = '')
	{
	   $this->auth_lib->check_admin();
	   $this->load->model('players_model');

	   if (isset($_POST['update_button']))
	   {         
	       $this->form_validation->set_rules($this->players_model->update_rules);
			
		   if ($this->form_validation->run() == TRUE)
	       {
	           $this->players_model->update($player_id);

	           $data = array('info' => 'Новина обновлена');       
	           $this->load->view('administration/info_view', $data);  
	       } 
	       
	       else
	       {
	            $data = array();
	            $data = $this->players_model->get($player_id); 

	            $this->load->view('administration/edit_player_view', $data);			
	       }       
	   }   
	   else
	   {
	       $data = array('info' => 'Інформація не була обновлена, так як вы не нажали кнопку "Оновити"');
	       $this->load->view('administration/info_view', $data);
	   }
	}

	public function delete()
	{
	    $this->auth_lib->check_admin();
	    $this->load->model('players_model');
	    
	    if ( ! isset($_POST['delete_button']))
	    {
	        $data['players_list'] = $this->players_model->get_all(); 
   
	        $this->load->view('administration/delete_players_view',$data);
	    }
	    	    
	    else
	    {        
	        if ( ! isset($_POST['id']))
	        {
	            $data = array('info' => 'Не вибран гравець для видалення');
	            $this->load->view('administration/info_view', $data);        
	        }       
	        else 
	        {       
	            $player_id = $this->input->post('id');
	            
	            $this->players_model->delete($player_id);           
	            
	            $data = array('info' => 'Гравць видаленний');
	            $this->load->view('administration/info_view', $data);
	        }
	    }
	}

}
