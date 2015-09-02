<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin_news extends CI_Controller {

	public function index()
	{
		$this->auth_lib->check_admin();
		$this->load->model('news_model');

		if (isset ($_POST['add_button']))
		{
			$this->form_validation->set_rules($this->news_model->add_rules);

			if ($this->form_validation->run() == TRUE)
			{
				$this->news_model->add();

				$data = array('info' => 'Новина добавлена'); 

				$this->load->view('administration/info_view', $data);
			}
			else
			{
				$this->load->view('administration/add_news_view');
			}
		}
		else
		{
			$this->load->view('administration/add_news_view');
		}
	} 

	public function edit_list()
	{ 	
		$this->auth_lib->check_admin();
		$this->load->model('news_model');
	    $data['news_list'] = $this->news_model->get_all(); 
	    
	    $this->load->view('administration/edit_list_news_view',$data);    
	}

	public function edit($news_id = '')
	{
	    $this->auth_lib->check_admin();
	    $this->load->model('news_model');

	    $data = array();
	    $data = $this->news_model->get($news_id);

	    if (empty($data))
	    {
	        $data = array('info' => 'Такої новини не існує');
	        $this->load->view('administration/info_view', $data);                   
	    }

	    else
	    {     
	      $this->load->view('administration/edit_news_view', $data);
	    }
	}
 
	public function update($news_id = '')
	{
	   $this->auth_lib->check_admin();
	   $this->load->model('news_model');

	   if (isset($_POST['update_button']))
	   {         
	       $this->form_validation->set_rules($this->news_model->update_rules);
			
		   if ($this->form_validation->run() == TRUE)
	       {
	           $this->news_model->update($news_id);

	           $data = array('info' => 'Новина обновлена');       
	           $this->load->view('administration/info_view', $data);  
	       } 
	       
	       else
	       {
	            $data = array();
	            $data = $this->news_model->get($news_id); 

	            $this->load->view('administration/edit_news_view', $data);			
	       }       
	   }   
	   else
	   {
	       $data = array('info' => 'Новина не була обновлена, так як вы не нажали кнопку "Оновити"');
	       $this->load->view('administration/info_view', $data);
	   }
	}

	public function delete()
	{
	    $this->auth_lib->check_admin();
	    $this->load->model('news_model');
	    
	    if ( ! isset($_POST['delete_button']))
	    {
	        $data['news_list'] = $this->news_model->get_all(); 
   
	        $this->load->view('administration/delete_news_view',$data);
	    }  
	    else
	    {        
	        if ( ! isset($_POST['id']))
	        {
	            $data = array('info' => 'Не вибрана новина для видалення');
	            $this->load->view('administration/info_view', $data);        
	        }	       
	        else 
	        {  	            
	            $news_id = $this->input->post('id');
	            
	            $this->news_model->delete($news_id);           
	            
	            $data = array('info' => 'Новина видаленна');
	            $this->load->view('administration/info_view', $data);
	        }
	    }
	}

}
