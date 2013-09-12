<?php

namespace models\Entities;



/**
 * @Entity
 * @Table(name="statiscticssumary")
 */
class E_Statiscticssumary
{
    /**
     * @var integer $statiscticssumaryid
     *
     * @Column(name="statiscticsSumaryID", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $statiscticssumaryid;

    /**
     * @var float $statisticsvalue
     *
     * @Column(name="statisticsValue", type="float", nullable=true)
     */
    private $statisticsvalue;

    /**
     * @var float $statisticsunit
     *
     * @Column(name="statisticsUnit", type="float", nullable=true)
     */
    private $statisticsunit;

    /**
     * @var models\Entities\Statistics
     *
     * @ManyToOne(targetEntity="models\Entities\Statistics")
     * @JoinColumns({
     *   @JoinColumn(name="statisticsID", referencedColumnName="statisticID")
     * })
     */
    private $statisticsid;

    /**
     * @var models\Entities\Parameter
     *
     * @ManyToOne(targetEntity="models\Entities\Parameter")
     * @JoinColumns({
     *   @JoinColumn(name="parameterID", referencedColumnName="parameterID")
     * })
     */
    private $parameterid;

    /**
     * @var models\Entities\Departmentsummary
     *
     * @ManyToOne(targetEntity="models\Entities\Departmentsummary")
     * @JoinColumns({
     *   @JoinColumn(name="departmentSummaryID", referencedColumnName="departmentSummaryID")
     * })
     */
    private $departmentsummaryid;

    /**
     * @var models\Entities\Durationsummary
     *
     * @ManyToOne(targetEntity="models\Entities\Durationsummary")
     * @JoinColumns({
     *   @JoinColumn(name="durationSummaryID", referencedColumnName="durationSummaryID")
     * })
     */
    private $durationsummaryid;


    /**
     * Get statiscticssumaryid
     *
     * @return integer 
     */
    public function getStatiscticssumaryid()
    {
        return $this->statiscticssumaryid;
    }

    /**
     * Set statisticsvalue
     *
     * @param float $statisticsvalue
     * @return Statiscticssumary
     */
    public function setStatisticsvalue($statisticsvalue)
    {
        $this->statisticsvalue = $statisticsvalue;
        return $this;
    }

    /**
     * Get statisticsvalue
     *
     * @return float 
     */
    public function getStatisticsvalue()
    {
        return $this->statisticsvalue;
    }

    /**
     * Set statisticsunit
     *
     * @param float $statisticsunit
     * @return Statiscticssumary
     */
    public function setStatisticsunit($statisticsunit)
    {
        $this->statisticsunit = $statisticsunit;
        return $this;
    }

    /**
     * Get statisticsunit
     *
     * @return float 
     */
    public function getStatisticsunit()
    {
        return $this->statisticsunit;
    }

    /**
     * Set statisticsid
     *
     * @param models\Entities\Statistics $statisticsid
     * @return Statiscticssumary
     */
    public function setStatisticsid(\models\Entities\Statistics $statisticsid = null)
    {
        $this->statisticsid = $statisticsid;
        return $this;
    }

    /**
     * Get statisticsid
     *
     * @return models\Entities\Statistics 
     */
    public function getStatisticsid()
    {
        return $this->statisticsid;
    }

    /**
     * Set parameterid
     *
     * @param models\Entities\Parameter $parameterid
     * @return Statiscticssumary
     */
    public function setParameterid(\models\Entities\Parameter $parameterid = null)
    {
        $this->parameterid = $parameterid;
        return $this;
    }

    /**
     * Get parameterid
     *
     * @return models\Entities\Parameter 
     */
    public function getParameterid()
    {
        return $this->parameterid;
    }

    /**
     * Set departmentsummaryid
     *
     * @param models\Entities\Departmentsummary $departmentsummaryid
     * @return Statiscticssumary
     */
    public function setDepartmentsummaryid(\models\Entities\Departmentsummary $departmentsummaryid = null)
    {
        $this->departmentsummaryid = $departmentsummaryid;
        return $this;
    }

    /**
     * Get departmentsummaryid
     *
     * @return models\Entities\Departmentsummary 
     */
    public function getDepartmentsummaryid()
    {
        return $this->departmentsummaryid;
    }

    /**
     * Set durationsummaryid
     *
     * @param models\Entities\Durationsummary $durationsummaryid
     * @return Statiscticssumary
     */
    public function setDurationsummaryid(\models\Entities\Durationsummary $durationsummaryid = null)
    {
        $this->durationsummaryid = $durationsummaryid;
        return $this;
    }

    /**
     * Get durationsummaryid
     *
     * @return models\Entities\Durationsummary 
     */
    public function getDurationsummaryid()
    {
        return $this->durationsummaryid;
    }
}