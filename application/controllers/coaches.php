<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Coaches extends CI_Controller {
	
	public function index()
	{
		$this->load->model('coaches_model');
		
		$data['head_coaches'] = $this->coaches_model->get_head();
		
		$data['assistant_coaches'] = $this->coaches_model->get_assistant();
		
		$data['goalkeeper_coaches'] = $this->coaches_model->get_goalkeeper();
		
		$data['physical_coaches'] = $this->coaches_model->get_physical();
		
		$this->load->view('coaches_view', $data);		
	}	
	
	public function add()
	{
		$this->auth_lib->check_admin();
		$this->load->model('coaches_model');

		if (isset ($_POST['add_button']))
		{
			$this->form_validation->set_rules($this->coaches_model->add_rules);

			if ($this->form_validation->run() == TRUE)
			{
				$this->coaches_model->add();

				$data = array('info' => 'Тренер добавлений'); 

				$this->load->view('administration/info_view', $data);
			}
			else
			{
				$this->load->view('administration/add_coaches_view');
			}
		}
		else
		{
			$this->load->view('administration/add_coaches_view');
		}
	}

	public function edit_list()
	{ 	
		$this->auth_lib->check_admin();
		$this->load->model('coaches_model');

	    $data['coaches_list'] = $this->coaches_model->get_all(); 
	    
	    $this->load->view('administration/edit_list_coaches_view',$data);    
	}

	public function edit($coach_id = '')
	{
	    $this->auth_lib->check_admin();
	    $this->load->model('coaches_model');

	    $data = array();
	    $data = $this->coaches_model->get($coach_id);

	    if (empty($data))
	    {
	        $data = array('info' => 'Такого тренера не існує');
	        $this->load->view('administration/info_view', $data);                   
	    }

	    else
	    {     
	      $this->load->view('administration/edit_coaches_view', $data);
	    }
	}

	public function update($coach_id = '')
	{
	   $this->auth_lib->check_admin();
	   $this->load->model('coaches_model');

	   if (isset($_POST['update_button']))
	   {         
	       $this->form_validation->set_rules($this->coaches_model->update_rules);
			
		   if ($this->form_validation->run() == TRUE)
	       {
	           $this->coaches_model->update($coach_id);

	           $data = array('info' => 'Інформація обновлена');       
	           $this->load->view('administration/info_view', $data);  
	       } 
	       
	       else
	       {
	            $data = array();
	            $data = $this->coaches_model->get($coach_id); 

	            $this->load->view('administration/edit_coaches_view', $data);			
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
	    $this->load->model('coaches_model');
	    
	    if ( ! isset($_POST['delete_button']))
	    {
	        $data['coaches_list'] = $this->coaches_model->get_all(); 
   
	        $this->load->view('administration/delete_coaches_view',$data);
	    }
	    	    
	    else
	    {        
	        if ( ! isset($_POST['id']))
	        {
	            $data = array('info' => 'Не вибран тренер для видалення');
	            $this->load->view('administration/info_view', $data);        
	        }       
	        else 
	        {       
	            $coach_id = $this->input->post('id');
	            
	            $this->coaches_model->delete($coach_id);           
	            
	            $data = array('info' => 'Тренер видаленний');
	            $this->load->view('administration/info_view', $data);
	        }
	    }
	}

}