<?php

namespace models\Entities;



/**
 * @Entity
 *
 * @Table(name="month")

 */
class E_Month
{
    /**
     * @var integer $monthid
     *
     * @Column(name="monthID", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $monthid;

    /**
     * @var string $monthname
     *
     * @Column(name="monthName", type="string", length=45, nullable=true)
     */
    private $monthname;


    /**
     * Get monthid
     *
     * @return integer 
     */
    public function getMonthid()
    {
        return $this->monthid;
    }

    /**
     * Set monthname
     *
     * @param string $monthname
     * @return Month
     */
    public function setMonthname($monthname)
    {
        $this->monthname = $monthname;
        return $this;
    }

    /**
     * Get monthname
     *
     * @return string 
     */
    public function getMonthname()
    {
        return $this->monthname;
    }
}