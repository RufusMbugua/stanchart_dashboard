<?php

class C_Front extends CI_Controller {
	var $data;

	public function __construct() {
		parent::__construct();
		$this -> data = array();
		$this -> load -> database();
		$this -> load -> library('carabiner');
	}

	public function index() {

		$this->load->model('m_constituencies');
	//	$this->m_constituencies->getConstituenciesNames();
		
		$this -> load -> library('carabiner');
		
		
		// $this -> load -> library('Github_updater');
		// $gitUpdate=$this->github_updater->has_update();
		// if($gitUpdate==TRUE){
		// $this->github_updater->update();
		 //}

	//	$this->load->model('M_AbsoluteVolumeOrProcessingHeadcount');
		//$this->M_AbsoluteVolumeOrProcessingHeadcount->getResult();
		
		$this -> load -> library('carabiner');
		/*
		 *
		 $this -> load -> library('Github_updater');
		 * $gitUpdate=$this->github_updater->has_update();
		 if($gitUpdate==TRUE){
		 $this->github_updater->update();
		 }
>>>>>>> 24a321f3e80dd1c22612e38ecacc316eb00ca559
		 
*/
		$this -> carabiner -> empty_cache();
		// add a js file
		//$jsArray = array( array('jquery.js'), array('highcharts/highcharts.js'), array('datatable/jquery.dataTables.js'), array('jquery.multiselect.js'),array('Merged_JS.js'));
		$cssArray = array( array('styles.css'), array('bootstrap.css'));

		//$this -> carabiner -> js($jsArray);

		// add a css file
		$this -> carabiner -> css($cssArray);
		$assets = $this -> carabiner -> display_string();
		$this -> session -> set_userdata('assets', $assets);

		$data['contentView'] = "index";
		$data['title'] = "Home";
		$data['graphTitle'] = 'poverty trends';
		$data['reports'] = 'poverty reports';
		$data['summaries'] = '';
		$this -> load -> view('template', $data);

		 
		 

	}
public function processorsnonprocessors(){
	//$this->load->model('m_processorsNonProcessorsTotalHct');
	
	$query = $this->db->get('processors_&_non_processors_total_hct');
	
	foreach ($query->result() as $row)
{
    echo $row->parameter;
}
	//var_dump($query);
	
	//$this->m_processorsNonProcessorsTotalHct->getProcessorsNonProcessors();
	
	
	
}
}
?>
