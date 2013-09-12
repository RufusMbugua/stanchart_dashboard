<?php

namespace models\Entities;


/**
 * @Entity
 * @Table(name="branch")
 * 
 */
class E_Branch {
	/**
	 * @var integer $branchid
	 *
	 * @Column(name="branchID", type="integer", nullable=false)
	 * @Id
	 * @GeneratedValue(strategy="IDENTITY")
	 */
	private $branchid;

	/**
	 * @var string $branchname
	 *
	 * @Column(name="branchName", type="string", length=45, nullable=true)
	 */
	private $branchname;

	/**
	 * Get branchid
	 *
	 * @return integer
	 */
	public function getBranchid() {
		return $this -> branchid;
	}

	/**
	 * Set branchname
	 *
	 * @param string $branchname
	 * @return Branch
	 */
	public function setBranchname($branchname) {
		$this -> branchname = $branchname;
		return $this;
	}

	/**
	 * Get branchname
	 *
	 * @return string
	 */
	public function getBranchname() {
		return $this -> branchname;
	}

}
