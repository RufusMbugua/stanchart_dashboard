<?php


/**
 *model to ProcessorsNonProcessorsTotalHct
 */
use application\models\Entities\ProcessorsNonProcessorsTotalHct;
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class M_ProcessorsNonProcessorsTotalHct extends MY_Model {
	var $ProcessorsNonProcessors;

	function __construct() {
		parent::__construct();
		$this -> constituencies = '';
	}

	function getProcessorsNonProcessors() {
		$this->ProcessorsNonProcessors = $this -> em -> createQuery('SELECT p FROM models\Entities\ProcessorsNonProcessorsTotalHct p');
		$this->ProcessorsNonProcessors=$this->ProcessorsNonProcessors->getResult();
		return $this -> ProcessorsNonProcessors;
	var_dump($this->ProcessorsNonProcessors);
	}

}
