<?php

namespace models\Entities;



/**
 * @Entity
 *
 * @Table(name="country")

 */
class E_Country
{
    /**
     * @var integer $countryid
     *
     * @Column(name="countryID", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $countryid;

    /**
     * @var string $countryname
     *
     * @Column(name="countryName", type="string", length=45, nullable=true)
     */
    private $countryname;


    /**
     * Get countryid
     *
     * @return integer 
     */
    public function getCountryid()
    {
        return $this->countryid;
    }

    /**
     * Set countryname
     *
     * @param string $countryname
     * @return Country
     */
    public function setCountryname($countryname)
    {
        $this->countryname = $countryname;
        return $this;
    }

    /**
     * Get countryname
     *
     * @return string 
     */
    public function getCountryname()
    {
        return $this->countryname;
    }
}