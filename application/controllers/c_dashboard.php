<?php

class C_Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$data = array();
	}

	public function index() {
		$data = array();
		$this -> loadPage($data);
	}

	public function getColumns($table = "") {
		$sql = "desc `$table`";
		$columns = array();
		$query = $this -> db -> query($sql);
		$results = $query -> result_array();
		$del_firstval = "recordID";
		$del_secondval = "parameter";
		foreach ($results as $value) {
			if ($value['Field'] == $del_firstval) {
				unset($value['Field']);
			} else if ($value['Field'] == $del_secondval) {
				unset($value['Field']);
			} else {
				$columns[] = $value['Field'];
			}

		}
		return $columns;
	}
	public function loadBranch($table,$branches = array(1,2)) {
		$data['compare']=1;
		foreach ($branches as $branch) {
           $this->getChart($table,"line",$branch,$data);
		}
	}
	public function getChart($table = "24_hour_query_resolution", $chartType = "line",$branch=1,$data = array()) {
		$chartTypeArray = array('column', 'column', 'line', 'line');
		$table = str_replace("%26", "&", $table);
		$openview = "";
		$columns = $this -> getColumns($table);	
		if($table=='24_hour_query_resolution'){
			$sql = "select * from `$table` WHERE branch=$branch";
		}	
		else{
			$sql = "select * from `$table`";
		}
		
		$query = $this -> db -> query($sql);
		$results = $query -> result_array();
		$series = array();
		$total_series = array();
		$chartCount = 0;
		foreach ($results as $key => $result) {
			foreach ($result as $column => $value) {
				foreach ($columns as $month) {
					if (($column == $month)&& ($column !="branch")) {
							$table_data[] = (double)$value;
						
					}
				}
			}
			if ($table == 'overtime_hours_vs_average_working_hour') {
				$series = array('type' => $chartTypeArray[$chartCount], 'name' => $result['parameter'], 'data' => $table_data);
				$chartCount++;
			} else {
				$series = array('name' => $result['parameter'], 'data' => $table_data);
			}

			$total_series[] = $series;
			unset($table_data);

		}
		if ($chartType == "line" || $chartType == "column" || $chartType == "bar") {
			$openview = 'chart_v';
		} else if ($chartType == "stacked_column") {
			$openview = 'chart_stacked_v';
			$chartType = "column";
		} else if ($chartType == "stacked_bar") {
			$openview = 'chart_stacked_v';
			$chartType = "bar";
		}

		foreach ($columns as $column) {
			$categories[] = ucfirst(trim(str_replace('_', ' ', $column)));
		}
		$results = json_encode($total_series);

		$resultArraySize = 10;
		$data['resultArraySize'] = $resultArraySize;
		$data['container'] = 'chart_expiry'.$branch;
		//$data['compare'] = 1;
		$data['chartType'] = $chartType;
		$data['chartTitle'] = trim(str_replace('_', ' ', $table).' Branch'.$branch);
		$data['categories'] = json_encode($categories);
		$data['yAxis'] = 'No. of Queries';
		$data['resultArray'] = $results;
		$data['chartTypelist'] = array("line", "column", "bar", "stacked_column", "stacked_bar");
		$data['table_list'] = array("24_hour_query_resolution", "absolute_volume_or_processing_headcount", "activity_volume_by_country", "backlog_and_tat_compliance", "country_hct_by_weighted_volume", "cur_&_productivity_trend", "customer_complaints_vs_accuracy", "employed_vs_unemployed_worker", "interday_volumes_flow", "mandatory_elearning_completion_rate", "overtime_hours_vs_average_working_hour", "pass1_errors_vs_maker_accuracy", "pass2_errors_vs_checker_accuracy", "processors_&_non_processors_total_hct", "rejects_by_country_percentage", "rejects_or_defectives", "staff_turnover", "standard_&_average_working_days", "total_overtime", "volumes", "volumes_vs_weighted_volumes", "weighted_activity_volume_by_country", "weighted_volume_per_processing_hct");

		$data['contentView'] = $openview;
		$this -> loadChart($data);
	}

	public function loadPage($data) {
		$openview = 'index';
		$data['chartTitle'] = 'No chart chosen';
		$data['title'] = 'Stanchart Dashboard';
		$data['chartTypelist'] = array("line", "column", "bar", "stacked_column", "stacked_bar");
		$data['table_list'] = array("24_hour_query_resolution", "absolute_volume_or_processing_headcount", "activity_volume_by_country", "backlog_and_tat_compliance", "country_hct_by_weighted_volume", "cur_&_productivity_trend", "customer_complaints_vs_accuracy", "employed_vs_unemployed_worker", "interday_volumes_flow", "mandatory_elearning_completion_rate", "overtime_hours_vs_average_working_hour", "pass1_errors_vs_maker_accuracy", "pass2_errors_vs_checker_accuracy", "processors_&_non_processors_total_hct", "rejects_by_country_percentage", "rejects_or_defectives", "staff_turnover", "standard_&_average_working_days", "total_overtime", "volumes", "volumes_vs_weighted_volumes", "weighted_activity_volume_by_country", "weighted_volume_per_processing_hct");
		$data['contentView'] = $openview;
		$this -> load -> view('template', $data);
	}

	public function loadChart($data) {
		$this -> load -> view('chartLoader', $data);
	}

	/*=======
	 $this -> load -> view($openview, $data);
	 }

	 >>>>>>> 669b5e0e7531231ec0ea76a6981b15f5f290fb40
	 * *
	 */
}
?>
