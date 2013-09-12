<?php

namespace models\Entities;



/**
 * @Entity
 * @Table(name="statistics")
 */
class E_Statistics
{
    /**
     * @var integer $statisticid
     *
     * @Column(name="statisticID", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $statisticid;

    /**
     * @var string $statisticname
     *
     * @Column(name="statisticName", type="string", length=45, nullable=true)
     */
    private $statisticname;


    /**
     * Get statisticid
     *
     * @return integer 
     */
    public function getStatisticid()
    {
        return $this->statisticid;
    }

    /**
     * Set statisticname
     *
     * @param string $statisticname
     * @return Statistics
     */
    public function setStatisticname($statisticname)
    {
        $this->statisticname = $statisticname;
        return $this;
    }

    /**
     * Get statisticname
     *
     * @return string 
     */
    public function getStatisticname()
    {
        return $this->statisticname;
    }
}