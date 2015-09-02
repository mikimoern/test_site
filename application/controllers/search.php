<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Search extends CI_Controller {

	public function news()
	{
		$this->load->model('search_model');

		if (isset($_POST['search']))
    {  
        
        $this->form_validation->set_rules($this->search_model->search_rules);
        
        $val_res = $this->form_validation->run();
        if ($val_res == TRUE)
        {
        	$data['query'] = $this->search_model->get_search();

			$this->load->view('search_view', $data); 
        }
		else
		{
			$data = array('info' => 'Мінімальна кількість букв повина перевищувати 3');       
	        $this->load->view('info_view', $data);
		}
	}

	} 

}
