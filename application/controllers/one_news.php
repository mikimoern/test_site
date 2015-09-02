<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class One_news extends CI_Controller {

	public function show ($news_id)
	{
		$this->load->model('news_model');

		$data['one_news'] = $this->news_model->get_one_news($news_id);
			
		if (empty($data['one_news'])){
			
			$this->load->view('one_news_view');	
		}
		else {	
			
			 $count_view = array('view' => $data['one_news']['view'] + 1);
			 $this->news_model->update_news($news_id, $count_view);
			
			$this->load->view('one_news_view', $data);

		} 
	}
}
