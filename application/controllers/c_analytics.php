<?php

class C_Analytics extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$data = array();
		$this->load->model('m_year');
	}
	
	public function getYear(){
		$years = $this->m_year->getAllYears();
		var_dump($years);
	}
	
	
}