<?php

namespace models\Entities;



/**
 * @Entity
 * @Table(name="parameter")
 */
class E_Parameter
{
    /**
     * @var integer $parameterid
     *
     * @Column(name="parameterID", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $parameterid;

    /**
     * @var string $parametername
     *
     * @Column(name="parameterName", type="string", length=45, nullable=true)
     */
    private $parametername;


    /**
     * Get parameterid
     *
     * @return integer 
     */
    public function getParameterid()
    {
        return $this->parameterid;
    }

    /**
     * Set parametername
     *
     * @param string $parametername
     * @return Parameter
     */
    public function setParametername($parametername)
    {
        $this->parametername = $parametername;
        return $this;
    }

    /**
     * Get parametername
     *
     * @return string 
     */
    public function getParametername()
    {
        return $this->parametername;
    }
}