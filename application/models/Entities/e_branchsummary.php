<?php

namespace models\Entities;



/**
 * @Entity
 * @Table(name="branchsummary")

 */
class E_Branchsummary
{
    /**
     * @var integer $branchsummaryid
     *
     * @Column(name="branchSummaryID", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $branchsummaryid;

    /**
     * @var models\Entities\Branch
     *
     * @ManyToOne(targetEntity="models\Entities\Branch")
     * @JoinColumns({
     *   @JoinColumn(name="branchID", referencedColumnName="branchID")
     * })
     */
    private $branchid;

    /**
     * @var models\Entities\Country
     *
     * @ManyToOne(targetEntity="models\Entities\Country")
     * @JoinColumns({
     *   @JoinColumn(name="countryID", referencedColumnName="countryID")
     * })
     */
    private $countryid;


    /**
     * Get branchsummaryid
     *
     * @return integer 
     */
    public function getBranchsummaryid()
    {
        return $this->branchsummaryid;
    }

    /**
     * Set branchid
     *
     * @param models\Entities\Branch $branchid
     * @return Branchsummary
     */
    public function setBranchid(\models\Entities\Branch $branchid = null)
    {
        $this->branchid = $branchid;
        return $this;
    }

    /**
     * Get branchid
     *
     * @return models\Entities\Branch 
     */
    public function getBranchid()
    {
        return $this->branchid;
    }

    /**
     * Set countryid
     *
     * @param models\Entities\Country $countryid
     * @return Branchsummary
     */
    public function setCountryid(\models\Entities\Country $countryid = null)
    {
        $this->countryid = $countryid;
        return $this;
    }

    /**
     * Get countryid
     *
     * @return models\Entities\Country 
     */
    public function getCountryid()
    {
        return $this->countryid;
    }
}