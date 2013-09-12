<?php
namespace models\Entities;

/**
 * @Entity
 * @Table(name="year")
 */
class E_Year
{
    /**
     * @var integer $yearid
     *
     * @Column(name="yearID", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="AUTO")
     */
    private $yearid;

    /**
     * @var string $yearname
     *
     * @Column(name="yearName", type="string", length=45, nullable=true)
     */
    private $yearname;


    /**
     * Get yearid
     *
     * @return integer 
     */
    public function getYearid()
    {
        return $this->yearid;
    }

    /**
     * Set yearname
     *
     * @param string $yearname
     * @return Year
     */
    public function setYearname($yearname)
    {
        $this->yearname = $yearname;
        return $this;
    }

    /**
     * Get yearname
     *
     * @return string 
     */
    public function getYearname()
    {
        return $this->yearname;
    }
}