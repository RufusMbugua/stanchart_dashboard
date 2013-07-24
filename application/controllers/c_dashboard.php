<?php

class C_Dashboard extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$data = array();
	}

	public function index($month = "04", $year = 2012) {
		//Array List of all Tables
		$table_list = array("24_hour_query_resolution", "absolute_volume_or_processing_headcount", "activity_volume_by_country", "backlog_and_tat_compliance", "country_hct_by_weighted_volume", "cur_&_productivity_trend", "customer_complaints_vs_accuracy", "employed_vs_unemployed_worker", "interday_volumes_flow", "mandatory_elearning_completion_rate", "overtime_hours_vs_average_working_hour", "pass1_errors_vs_maker_accuracy", "pass2_errors_vs_checker_accuracy", "processors_&_non_processors_total_hct", "rejects_by_country_percentage", "rejects_or_defectives", "staff_turnover", "standard_&_average_working_days", "total_overtime", "volumes", "volumes_vs_weighted_volumes", "weighted_activity_volume_by_country", "weighted_volume_per_processing_hct");
		//Loop through Tables and generate Charts foreach
		foreach ($table_list as $table) {
			$table_data = $this -> generate($month, $year, $table);
			$data[$table] = $table_data;
		}
		echo json_encode($data)."</br>";
	}

	
	public function generate($month = "", $year = "", $table = "", $dataset = '') {
		$results = "";
		$month = strtolower($month);
		$date = date($year . "-" . $month . "-01");
		$column = strtolower(date('M_y', strtotime($date)));
		$column = "parameter," . $column . " as total";
		$sql = "select $column from `$table`";
		$sql = "select *  from `$table` WHERE parameter='$dataset'";
		$query = $this -> db -> query($sql);
		$results = $query -> result_array();
		$monthArray = array("may_11", "june_11", "july_11", "aug_11", "sept_11", "oct_11", "nov_11", "dec_11", "jan_12", "feb_12", "mar_12", "apr_12", "may_12");

		foreach ($results as $key => $value) {
			foreach ($monthArray as $month) {
				if ($key == $month) {
					$name = $dataset;
					$data[] = (double)$value[$month];
				}
			}
		}
		$results = array('name' => $name, 'data' => $data);
		return $results;
		//$monthArray = array("may_11","june_11,"july_11","aug_11","sept_11"","oct_11","nov_11","dec_11","jan_12","feb_12","mar_12","apr_12","may_12");
		//$monthCounter=0;

		/*
		 foreach($results as $result){
		 $monthval=$monthArray[$monthCounter];
		 $name[]=$result['parameter'];
		 $data[]=$result[$monthval];
		 $monthCounter++;

		 }
		 $results = array('name'=>$name,"data"=>$data);

		 * *
		 */
	}

	public function DayQuery($month = "04", $year = 2012) {
		$monthArray = array("may_11", "june_11", "july_11", "aug_11", "sept_11", "oct_11", "nov_11", "dec_11", "jan_12", "feb_12", "mar_12", "apr_12", "may_12");

		//Array List of all Tables
		//$table_list = array("24_hour_query_resolution", "absolute_volume_or_processing_headcount", "activity_volume_by_country", "backlog_and_tat_compliance", "country_hct_by_weighted_volume", "cur_&_productivity_trend", "customer_complaints_vs_accuracy", "employed_vs_unemployed_worker", "interday_volumes_flow", "mandatory_elearning_completion_rate", "overtime_hours_vs_average_working_hour", "pass1_errors_vs_maker_accuracy", "pass2_errors_vs_checker_accuracy", "processors_&_non_processors_total_hct", "rejects_by_country_percentage", "rejects_or_defectives", "staff_turnover", "standard_&_average_working_days", "total_overtime", "volumes", "volumes_vs_weighted_volumes", "weighted_activity_volume_by_country", "weighted_volume_per_processing_hct");
		//Loop through Tables and generate Charts foreach
		$table = '24_hour_query_resolution';

		$table_data[] = $this -> generate($month, $year, $table, 'Total No. Of Helpline Queries');
		$table_data[] = $this -> generate($month, $year, $table, '24Hrs resolution');
		$table_data[] = $this -> generate($month, $year, $table, '% 24Hr Resolution');

		$results = json_encode($table_data);

		$resultArraySize = 10;
		$data['resultArraySize'] = $resultArraySize;
		$data['container'] = 'chart_expiry';
		$data['chartType'] = 'line';
		$data['title'] = 'Chart';
		$data['chartTitle'] = $table;
		$data['categories'] = json_encode($monthArray);
		$data['yAxis'] = '#';
		$data['resultArray'] = $results;
		$this -> load -> view('chart_v', $data);
		//$data[$table] = $table_data;

		//echo json_encode($data);
	}

	public function AbsoluteVolume($month = "04", $year = 2012) {
		$monthArray = array("may_11", "june_11", "july_11", "aug_11", "sept_11", "oct_11", "nov_11", "dec_11", "jan_12", "feb_12", "mar_12", "apr_12", "may_12");

		//Array List of all Tables
		//$table_list = array("24_hour_query_resolution", "absolute_volume_or_processing_headcount", "activity_volume_by_country", "backlog_and_tat_compliance", "country_hct_by_weighted_volume", "cur_&_productivity_trend", "customer_complaints_vs_accuracy", "employed_vs_unemployed_worker", "interday_volumes_flow", "mandatory_elearning_completion_rate", "overtime_hours_vs_average_working_hour", "pass1_errors_vs_maker_accuracy", "pass2_errors_vs_checker_accuracy", "processors_&_non_processors_total_hct", "rejects_by_country_percentage", "rejects_or_defectives", "staff_turnover", "standard_&_average_working_days", "total_overtime", "volumes", "volumes_vs_weighted_volumes", "weighted_activity_volume_by_country", "weighted_volume_per_processing_hct");
		//Loop through Tables and generate Charts foreach
		$table = 'absolute_volume_or_processing_headcount';

		$table_data[] = $this -> generate($month, $year, $table, 'Absolute Volume/Processing Head Count');

		$results = json_encode($table_data);

		$resultArraySize = 10;
		$data['resultArraySize'] = $resultArraySize;
		$data['container'] = 'chart_expiry';
		$data['chartType'] = 'bar';
		$data['title'] = 'Chart';
		$data['chartTitle'] = $table;
		$data['categories'] = json_encode($monthArray);
		$data['yAxis'] = '#';
		$data['resultArray'] = $results;
		$this -> load -> view('chart_v', $data);
		//$data[$table] = $table_data;

		//echo json_encode($data);
	}

	public function ActivityVolume($month = "04", $year = 2012) {
		$monthArray = array("may_11", "june_11", "july_11", "aug_11", "sept_11", "oct_11", "nov_11", "dec_11", "jan_12", "feb_12", "mar_12", "apr_12", "may_12");

		//Array List of all Tables
		//$table_list = array("24_hour_query_resolution", "absolute_volume_or_processing_headcount", "activity_volume_by_country", "backlog_and_tat_compliance", "country_hct_by_weighted_volume", "cur_&_productivity_trend", "customer_complaints_vs_accuracy", "employed_vs_unemployed_worker", "interday_volumes_flow", "mandatory_elearning_completion_rate", "overtime_hours_vs_average_working_hour", "pass1_errors_vs_maker_accuracy", "pass2_errors_vs_checker_accuracy", "processors_&_non_processors_total_hct", "rejects_by_country_percentage", "rejects_or_defectives", "staff_turnover", "standard_&_average_working_days", "total_overtime", "volumes", "volumes_vs_weighted_volumes", "weighted_activity_volume_by_country", "weighted_volume_per_processing_hct");
		//Loop through Tables and generate Charts foreach
		$table = 'activity_volume_by_country';

		$table_data[] = $this -> generate($month, $year, $table, 'KEN');
		$table_data[] = $this -> generate($month, $year, $table, 'UGA');
		$table_data[] = $this -> generate($month, $year, $table, 'TZA');
		$table_data[] = $this -> generate($month, $year, $table, 'ZAM');
		$table_data[] = $this -> generate($month, $year, $table, 'BOT');
		$table_data[] = $this -> generate($month, $year, $table, 'ZAR');

		$results = json_encode($table_data);

		$resultArraySize = 10;
		$data['resultArraySize'] = $resultArraySize;
		$data['container'] = 'chart_expiry';
		$data['chartType'] = 'line';
		$data['title'] = 'Chart';
		$data['chartTitle'] = $table;
		$data['categories'] = json_encode($monthArray);
		$data['yAxis'] = '#';
		$data['resultArray'] = $results;
		$this -> load -> view('chart_v', $data);
		//$data[$table] = $table_data;

		//echo json_encode($data);
	}

	public function Backlog($month = "04", $year = 2012) {
		$monthArray = array("may_11", "june_11", "july_11", "aug_11", "sept_11", "oct_11", "nov_11", "dec_11", "jan_12", "feb_12", "mar_12", "apr_12", "may_12");

		//Array List of all Tables
		//$table_list = array("24_hour_query_resolution", "absolute_volume_or_processing_headcount", "activity_volume_by_country", "backlog_and_tat_compliance", "country_hct_by_weighted_volume", "cur_&_productivity_trend", "customer_complaints_vs_accuracy", "employed_vs_unemployed_worker", "interday_volumes_flow", "mandatory_elearning_completion_rate", "overtime_hours_vs_average_working_hour", "pass1_errors_vs_maker_accuracy", "pass2_errors_vs_checker_accuracy", "processors_&_non_processors_total_hct", "rejects_by_country_percentage", "rejects_or_defectives", "staff_turnover", "standard_&_average_working_days", "total_overtime", "volumes", "volumes_vs_weighted_volumes", "weighted_activity_volume_by_country", "weighted_volume_per_processing_hct");
		//Loop through Tables and generate Charts foreach
		$table = 'backlog_and_tat_compliance';

		$table_data[] = $this -> generate($month, $year, $table, 'Backlog');
		$table_data[] = $this -> generate($month, $year, $table, 'TAT Compliance');

		$results = json_encode($table_data);

		$resultArraySize = 10;
		$data['resultArraySize'] = $resultArraySize;
		$data['container'] = 'chart_expiry';
		$data['chartType'] = 'line';
		$data['title'] = 'Chart';
		$data['chartTitle'] = $table;
		$data['categories'] = json_encode($monthArray);
		$data['yAxis'] = '#';
		$data['resultArray'] = $results;
		$this -> load -> view('chart_v', $data);
		//$data[$table] = $table_data;

		//echo json_encode($data);
	}

	public function CountryHCT($month = "04", $year = 2012) {
		$monthArray = array("may_11", "june_11", "july_11", "aug_11", "sept_11", "oct_11", "nov_11", "dec_11", "jan_12", "feb_12", "mar_12", "apr_12", "may_12");

		//Array List of all Tables
		//$table_list = array("24_hour_query_resolution", "absolute_volume_or_processing_headcount", "activity_volume_by_country", "backlog_and_tat_compliance", "country_hct_by_weighted_volume", "cur_&_productivity_trend", "customer_complaints_vs_accuracy", "employed_vs_unemployed_worker", "interday_volumes_flow", "mandatory_elearning_completion_rate", "overtime_hours_vs_average_working_hour", "pass1_errors_vs_maker_accuracy", "pass2_errors_vs_checker_accuracy", "processors_&_non_processors_total_hct", "rejects_by_country_percentage", "rejects_or_defectives", "staff_turnover", "standard_&_average_working_days", "total_overtime", "volumes", "volumes_vs_weighted_volumes", "weighted_activity_volume_by_country", "weighted_volume_per_processing_hct");
		//Loop through Tables and generate Charts foreach
		$table = 'country_hct_by_weighted_volume';

		$table_data[] = $this -> generate($month, $year, $table, 'KEN');
		$table_data[] = $this -> generate($month, $year, $table, 'UGA');
		$table_data[] = $this -> generate($month, $year, $table, 'TZA');
		$table_data[] = $this -> generate($month, $year, $table, 'ZAM');
		$table_data[] = $this -> generate($month, $year, $table, 'BOT');
		$table_data[] = $this -> generate($month, $year, $table, 'ZAR');
		
		//echo json_encode($table_data);
		//exit;

		$results = json_encode($table_data);

		$resultArraySize = 10;
		$data['resultArraySize'] = $resultArraySize;
		$data['container'] = 'chart_expiry';
		$data['chartType'] = 'line';
		$data['title'] = 'Chart';
		$data['chartTitle'] = $table;
		$data['categories'] = json_encode($monthArray);
		$data['yAxis'] = '#';
		$data['resultArray'] = $results;
		$this -> load -> view('chart_v', $data);
		//$data[$table] = $table_data;

		//echo json_encode($data);
	}
	
	public function processorsnonprocessorsgraph($month = "04", $year = 2012){
		
				$monthArray = array("may_11", "june_11", "july_11", "aug_11", "sept_11", "oct_11", "nov_11", "dec_11", "jan_12", "feb_12", "mar_12", "apr_12", "may_12");
				$table = 'processors_&_non_processors_total_hct';
	
			$table_data[] = $this -> generate($month, $year, $table, 'No Of Processors');
			$table_data[] = $this -> generate($month, $year, $table, 'No Of Non Processors');
		
			$results = json_encode($table_data);
			
			$resultArraySize = 10;
		$data['resultArraySize'] = $resultArraySize;
		$data['container'] = 'chart_expiry';
		$data['chartType'] = 'column';
		$data['title'] = 'Chart';
		$data['chartTitle'] = $table;
		$data['categories'] = json_encode($monthArray);
		$data['yAxis'] = '#';
		$data['resultArray'] = $results;
		$this -> load -> view('chart_stacked_v', $data);
		 
	
}
	
	public function employedVsunemployed($month = "04", $year = 2012){
		
				$monthArray = array("may_11", "june_11", "july_11", "aug_11", "sept_11", "oct_11", "nov_11", "dec_11", "jan_12", "feb_12", "mar_12", "apr_12", "may_12");
				$table = 'employed_vs_unemployed_worker';
	
			$table_data[] = $this -> generate($month, $year, $table, 'Employed Worker (FTE)');
			$table_data[] = $this -> generate($month, $year, $table, 'Non-employed Worker (NFTE)');
		
			$results = json_encode($table_data);
			
			$resultArraySize = 10;
		$data['resultArraySize'] = $resultArraySize;
		$data['container'] = 'chart_expiry';
		$data['chartType'] = 'column';
		$data['title'] = 'Chart';
		$data['chartTitle'] = $table;
		$data['categories'] = json_encode($monthArray);
		$data['yAxis'] = '#';
		$data['resultArray'] = $results;
		$this -> load -> view('chart_v', $data);
		 
	
}
public function cur_productivity_trend($month = "04", $year = 2012){
		
				$monthArray = array("may_11", "june_11", "july_11", "aug_11", "sept_11", "oct_11", "nov_11", "dec_11", "jan_12", "feb_12", "mar_12", "apr_12", "may_12");
				$table = 'cur_&_productivity_trend';
	
			$table_data[] = $this -> generate($month, $year, $table, 'Standard CUR');
			$table_data[] = $this -> generate($month, $year, $table, 'Available CUR');
			$table_data[] = $this -> generate($month, $year, $table, 'Actual Productivity');
		
			$results = json_encode($table_data);
			
			$resultArraySize = 10;
		$data['resultArraySize'] = $resultArraySize;
		$data['container'] = 'chart_expiry';
		$data['chartType'] = 'line';
		$data['title'] = 'Chart';
		$data['chartTitle'] = $table;
		$data['categories'] = json_encode($monthArray);
		$data['yAxis'] = '#';
		$data['resultArray'] = $results;
		$this -> load -> view('chart_v', $data);
		 
	
}
public function standard_average_working_days($month = "04", $year = 2012){
		
				$monthArray = array("may_11", "june_11", "july_11", "aug_11", "sept_11", "oct_11", "nov_11", "dec_11", "jan_12", "feb_12", "mar_12", "apr_12", "may_12");
				$table = 'standard_&_average_working_days';
	
			$table_data[] = $this -> generate($month, $year, $table, 'Average Working Days');
			$table_data[] = $this -> generate($month, $year, $table, 'Standard Working Days');
			
		
			$results = json_encode($table_data);
			
			$resultArraySize = 10;
		$data['resultArraySize'] = $resultArraySize;
		$data['container'] = 'chart_expiry';
		$data['chartType'] = 'line';
		$data['title'] = 'Chart';
		$data['chartTitle'] = $table;
		$data['categories'] = json_encode($monthArray);
		$data['yAxis'] = '#';
		$data['resultArray'] = $results;
		$this -> load -> view('chart_v', $data);
	
}
public function weighted_activity_volume_by_country($month = "04", $year = 2012){
		
				$monthArray = array("may_11", "june_11", "july_11", "aug_11", "sept_11", "oct_11", "nov_11", "dec_11", "jan_12", "feb_12", "mar_12", "apr_12", "may_12");
				$table = 'weighted_volume_per_processing_hct';
	
			$table_data[] = $this -> generate($month, $year, $table, 'WV/Processor HCT');
			$table_data[] = $this -> generate($month, $year, $table, 'No Of Processors');
			$table_data[] = $this -> generate($month, $year, $table, 'Standard WV per Processor HCT');
			
		
			$results = json_encode($table_data);
			
			$resultArraySize = 10;
		$data['resultArraySize'] = $resultArraySize;
		$data['container'] = 'chart_expiry';
		$data['chartType'] = 'line';
		$data['title'] = 'Chart';
		$data['chartTitle'] = $table;
		$data['categories'] = json_encode($monthArray);
		$data['yAxis'] = '#';
		$data['resultArray'] = $results;
		$this -> load -> view('chart_v', $data);
	
}

}
?>
