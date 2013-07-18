<?php
if (!defined('BASEPATH'))
	exit('No direct script access allowed');
class M_Constituencies extends MY_Model {
	var $constituencies;

	function __construct() {
		parent::__construct();
		$this -> constituencies = '';
	}

	function getConstituenciesNames() {
		
		$this->em -> getConfiguration() -> setMetadataDriverImpl(new \Doctrine\ORM\Mapping\Driver\DatabaseDriver($this->em -> getConnection() -> getSchemaManager()));
		$cmf = new Doctrine\ORM\Tools\DisconnectedClassMetadataFactory();
		$cmf -> setEntityManager($this->em);
		
		$metadata = $cmf -> getAllMetadata();

		$cme = new \Doctrine\ORM\Tools\Export\ClassMetadataExporter();

		$entityGenerator = new \Doctrine\ORM\Tools\EntityGenerator();
		
		$entityGenerator -> setAnnotationPrefix("");
		$exporter = $cme -> getExporter('annotation', __DIR__ . '/entities');
		$exporter -> setEntityGenerator($entityGenerator);
		$exporter -> setMetadata($metadata);
		$etg = new \Doctrine\ORM\Tools\EntityGenerator;
		$exporter -> setEntityGenerator($etg);
		$exporter -> export();
		
	}

}
