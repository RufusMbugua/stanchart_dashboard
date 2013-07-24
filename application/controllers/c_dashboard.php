<?php

class C_Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$data = array();
	}

	public function index() {
		$this -> getChart();
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

	public function getChart($table = "24_hour_query_resolution") {
		$table = str_replace("%26", "&", $table);
		$columns = $this -> getColumns($table);
		$sql = "select * from `$table`";
		$query = $this -> db -> query($sql);
		$results = $query -> result_array();
		$series = array();
		$total_series = array();
		foreach ($results as $key => $result) {
			foreach ($result as $column => $value) {
				foreach ($columns as $month) {
					if ($column == $month) {
						$table_data[] = (double)$value;
					}
				}
			}
			$series = array('name' => $result['parameter'], 'data' => $table_data);
			$total_series[] = $series;
			unset($table_data);
		}
		$results = json_encode($total_series);
		$resultArraySize = 10;
		$data['resultArraySize'] = $resultArraySize;
		$data['container'] = 'chart_expiry';
		$data['chartType'] = 'line';
		$data['title'] = 'Stanchart Dashboard';
		$data['chartTitle'] = $table;
		$data['categories'] = json_encode($columns);
		$data['yAxis'] = 'Quantity';
		$data['resultArray'] = $results;
		$data['table_list'] = array("24_hour_query_resolution", "absolute_volume_or_processing_headcount", "activity_volume_by_country", "backlog_and_tat_compliance", "country_hct_by_weighted_volume", "cur_&_productivity_trend", "customer_complaints_vs_accuracy", "employed_vs_unemployed_worker", "interday_volumes_flow", "mandatory_elearning_completion_rate", "overtime_hours_vs_average_working_hour", "pass1_errors_vs_maker_accuracy", "pass2_errors_vs_checker_accuracy", "processors_&_non_processors_total_hct", "rejects_by_country_percentage", "rejects_or_defectives", "staff_turnover", "standard_&_average_working_days", "total_overtime", "volumes", "volumes_vs_weighted_volumes", "weighted_activity_volume_by_country", "weighted_volume_per_processing_hct");
		$this -> load -> view('chart_v', $data);
	}

}
?>
