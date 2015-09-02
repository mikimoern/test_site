<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Administration_model extends CI_Model {

	public $login_rules = array
	(
	    array
	    (
	      'field' => 'login',
	      'label' => 'Логин',
	      'rules' => 'trim|required|alpha_dash|max_length[50]'
	    ),
	    array
	    (
	      'field' => 'pass',
	      'label' => 'Пароль',
	      'rules' => 'trim|required|alpha_dash|max_length[50]'
	    )
	);			
	
}