<?php

namespace models\Entities;


/**
 * @Entity
 *
 * @Table(name="departmentsummary")

 */
class E_Departmentsummary
{
    /**
     * @var integer $departmentsummaryid
     *
     * @Column(name="departmentSummaryID", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $departmentsummaryid;

    /**
     * @var models\Entities\Department
     *
     * @ManyToOne(targetEntity="models\Entities\Department")
     * @JoinColumns({
     *   @JoinColumn(name="departmentID", referencedColumnName="departmentID")
     * })
     */
    private $departmentid;

    /**
     * @var models\Entities\Branchsummary
     *
     * @ManyToOne(targetEntity="models\Entities\Branchsummary")
     * @JoinColumns({
     *   @JoinColumn(name="branchSummaryID", referencedColumnName="branchSummaryID")
     * })
     */
    private $branchsummaryid;


    /**
     * Get departmentsummaryid
     *
     * @return integer 
     */
    public function getDepartmentsummaryid()
    {
        return $this->departmentsummaryid;
    }

    /**
     * Set departmentid
     *
     * @param models\Entities\Department $departmentid
     * @return Departmentsummary
     */
    public function setDepartmentid(\models\Entities\Department $departmentid = null)
    {
        $this->departmentid = $departmentid;
        return $this;
    }

    /**
     * Get departmentid
     *
     * @return models\Entities\Department 
     */
    public function getDepartmentid()
    {
        return $this->departmentid;
    }

    /**
     * Set branchsummaryid
     *
     * @param models\Entities\Branchsummary $branchsummaryid
     * @return Departmentsummary
     */
    public function setBranchsummaryid(\models\Entities\Branchsummary $branchsummaryid = null)
    {
        $this->branchsummaryid = $branchsummaryid;
        return $this;
    }

    /**
     * Get branchsummaryid
     *
     * @return models\Entities\Branchsummary 
     */
    public function getBranchsummaryid()
    {
        return $this->branchsummaryid;
    }
}