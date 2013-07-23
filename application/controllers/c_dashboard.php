<?php

class C_Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$data = array();
	}

	public function index($month = "04", $year = 2012) {
		//Array List of all Tables
		//$table_list = array("24_hour_query_resolution", "absolute_volume_or_processing_headcount", "activity_volume_by_country", "backlog_and_tat_compliance", "country_hct_by_weighted_volume", "cur_&_productivity_trend", "customer_complaints_vs_accuracy", "employed_vs_unemployed_worker", "interday_volumes_flow", "mandatory_elearning_completion_rate", "overtime_hours_vs_average_working_hour", "pass1_errors_vs_maker_accuracy", "pass2_errors_vs_checker_accuracy", "processors_&_non_processors_total_hct", "rejects_by_country_percentage", "rejects_or_defectives", "staff_turnover", "standard_&_average_working_days", "total_overtime", "volumes", "volumes_vs_weighted_volumes", "weighted_activity_volume_by_country", "weighted_volume_per_processing_hct");
		//Loop through Tables and generate Charts foreach
		$table_list = array('24_hour_query_resolution');
		foreach ($table_list as $table) {
			echo '<p>'.$table.'</p>';
			$table_data = $this -> generate($month, $year, $table);
			echo json_encode($table_data);
			//$data[$table] = $table_data;
		}
		//echo json_encode($data);
	}

	public function generate($month = "", $year = "", $table = "") {
		$results = "";
		$month = strtolower($month);
		$date = date($year . "-" . $month . "-01");
		$column = strtolower(date('M_y', strtotime($date)));
		$column = "parameter," . $column . " as total";
		$sql = "select $column from `$table`";
		$query = $this -> db -> query($sql);
		$results = $query -> result_array();
		
		foreach($results as $result){
			$name[]=$result['parameter'];
			$data[]=$result['total'];
			
		}
		$results = array('name'=>$name,"data"=>$data);
		return $results;
	}

}
?>
