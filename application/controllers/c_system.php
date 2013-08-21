<?php

class C_System extends CI_Controller {
	function __construct() {
		parent::__construct();
		//$this -> load -> library('PHPExcel');
		$this -> load -> helper('url');

	}

	public function index() {
		$this->load_assets();
		redirect('c_dashboard');
	}

	public function load_assets() {
		$this -> load -> library('carabiner');
		$this -> carabiner -> empty_cache();
		// add a js file
		$jsArray = array( array('jquery-1.10.2.js'), array('bootstrap/bootstrap.min.js'),array('highcharts/highcharts.js'), array('highcharts/highcharts-more.js'), array('highcharts/modules/exporting.js'));

		$cssArray = array( array('styles.css'),array('bootstrap.css'), array('bootstrap.min.css'), array('bootstrap-responsive.min.css'));

		// add a css file
		$this -> carabiner -> css($cssArray);

		$this -> carabiner -> js($jsArray);
		$assets = $this -> carabiner -> display_string();
		
		$this -> session -> set_userdata('assets', $assets);
	}

}
