<?php

namespace models\Entities;



/**
 * @Entity
 *
 * @Table(name="department")
 */
class E_Department
{
    /**
     * @var integer $departmentid
     *
     * @Column(name="departmentID", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $departmentid;

    /**
     * @var string $departmentname
     *
     * @Column(name="departmentName", type="string", length=45, nullable=true)
     */
    private $departmentname;


    /**
     * Get departmentid
     *
     * @return integer 
     */
    public function getDepartmentid()
    {
        return $this->departmentid;
    }

    /**
     * Set departmentname
     *
     * @param string $departmentname
     * @return Department
     */
    public function setDepartmentname($departmentname)
    {
        $this->departmentname = $departmentname;
        return $this;
    }

    /**
     * Get departmentname
     *
     * @return string 
     */
    public function getDepartmentname()
    {
        return $this->departmentname;
    }
}