<?php

namespace models\Entities;


/**
 * @Entity
 *
 * @Table(name="durationsummary")

 */
class E_Durationsummary
{
    /**
     * @var integer $durationsummaryid
     *
     * @Column(name="durationSummaryID", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $durationsummaryid;

    /**
     * @var models\Entities\Year
     *
     * @ManyToOne(targetEntity="models\Entities\Year")
     * @JoinColumns({
     *   @JoinColumn(name="yearID", referencedColumnName="yearID")
     * })
     */
    private $yearid;

    /**
     * @var models\Entities\Month
     *
     * @ManyToOne(targetEntity="models\Entities\Month")
     * @JoinColumns({
     *   @JoinColumn(name="monthID", referencedColumnName="monthID")
     * })
     */
    private $monthid;


    /**
     * Get durationsummaryid
     *
     * @return integer 
     */
    public function getDurationsummaryid()
    {
        return $this->durationsummaryid;
    }

    /**
     * Set yearid
     *
     * @param models\Entities\Year $yearid
     * @return Durationsummary
     */
    public function setYearid(\models\Entities\Year $yearid = null)
    {
        $this->yearid = $yearid;
        return $this;
    }

    /**
     * Get yearid
     *
     * @return models\Entities\Year 
     */
    public function getYearid()
    {
        return $this->yearid;
    }

    /**
     * Set monthid
     *
     * @param models\Entities\Month $monthid
     * @return Durationsummary
     */
    public function setMonthid(\models\Entities\Month $monthid = null)
    {
        $this->monthid = $monthid;
        return $this;
    }

    /**
     * Get monthid
     *
     * @return models\Entities\Month 
     */
    public function getMonthid()
    {
        return $this->monthid;
    }
}