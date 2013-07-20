<?php

namespace models\Entities;

use Doctrine\ORM\Mapping as ORM;

/**
 * models\Entities\EmployedVsUnemployedWorker
 *
 * @ORM\Table(name="employed_vs_unemployed_worker")
 * @ORM\Entity
 */
class EmployedVsUnemployedWorker
{
    /**
     * @var integer $recordid
     *
     * @ORM\Column(name="recordID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $recordid;

    /**
     * @var string $parameter
     *
     * @ORM\Column(name="parameter", type="string", length=45, nullable=false)
     */
    private $parameter;

    /**
     * @var float $may11
     *
     * @ORM\Column(name="may_11", type="float", nullable=false)
     */
    private $may11;

    /**
     * @var float $june11
     *
     * @ORM\Column(name="june_11", type="float", nullable=false)
     */
    private $june11;

    /**
     * @var float $july11
     *
     * @ORM\Column(name="july_11", type="float", nullable=false)
     */
    private $july11;

    /**
     * @var float $aug11
     *
     * @ORM\Column(name="aug_11", type="float", nullable=false)
     */
    private $aug11;

    /**
     * @var float $sept11
     *
     * @ORM\Column(name="sept_11", type="float", nullable=false)
     */
    private $sept11;

    /**
     * @var float $oct11
     *
     * @ORM\Column(name="oct_11", type="float", nullable=false)
     */
    private $oct11;

    /**
     * @var float $nov11
     *
     * @ORM\Column(name="nov_11", type="float", nullable=false)
     */
    private $nov11;

    /**
     * @var float $dec11
     *
     * @ORM\Column(name="dec_11", type="float", nullable=false)
     */
    private $dec11;

    /**
     * @var float $jan12
     *
     * @ORM\Column(name="jan_12", type="float", nullable=false)
     */
    private $jan12;

    /**
     * @var float $feb12
     *
     * @ORM\Column(name="feb_12", type="float", nullable=false)
     */
    private $feb12;

    /**
     * @var float $mar12
     *
     * @ORM\Column(name="mar_12", type="float", nullable=false)
     */
    private $mar12;

    /**
     * @var float $apr12
     *
     * @ORM\Column(name="apr_12", type="float", nullable=false)
     */
    private $apr12;

    /**
     * @var float $may12
     *
     * @ORM\Column(name="may_12", type="float", nullable=false)
     */
    private $may12;


    /**
     * Get recordid
     *
     * @return integer 
     */
    public function getRecordid()
    {
        return $this->recordid;
    }

    /**
     * Set parameter
     *
     * @param string $parameter
     * @return EmployedVsUnemployedWorker
     */
    public function setParameter($parameter)
    {
        $this->parameter = $parameter;
        return $this;
    }

    /**
     * Get parameter
     *
     * @return string 
     */
    public function getParameter()
    {
        return $this->parameter;
    }

    /**
     * Set may11
     *
     * @param float $may11
     * @return EmployedVsUnemployedWorker
     */
    public function setMay11($may11)
    {
        $this->may11 = $may11;
        return $this;
    }

    /**
     * Get may11
     *
     * @return float 
     */
    public function getMay11()
    {
        return $this->may11;
    }

    /**
     * Set june11
     *
     * @param float $june11
     * @return EmployedVsUnemployedWorker
     */
    public function setJune11($june11)
    {
        $this->june11 = $june11;
        return $this;
    }

    /**
     * Get june11
     *
     * @return float 
     */
    public function getJune11()
    {
        return $this->june11;
    }

    /**
     * Set july11
     *
     * @param float $july11
     * @return EmployedVsUnemployedWorker
     */
    public function setJuly11($july11)
    {
        $this->july11 = $july11;
        return $this;
    }

    /**
     * Get july11
     *
     * @return float 
     */
    public function getJuly11()
    {
        return $this->july11;
    }

    /**
     * Set aug11
     *
     * @param float $aug11
     * @return EmployedVsUnemployedWorker
     */
    public function setAug11($aug11)
    {
        $this->aug11 = $aug11;
        return $this;
    }

    /**
     * Get aug11
     *
     * @return float 
     */
    public function getAug11()
    {
        return $this->aug11;
    }

    /**
     * Set sept11
     *
     * @param float $sept11
     * @return EmployedVsUnemployedWorker
     */
    public function setSept11($sept11)
    {
        $this->sept11 = $sept11;
        return $this;
    }

    /**
     * Get sept11
     *
     * @return float 
     */
    public function getSept11()
    {
        return $this->sept11;
    }

    /**
     * Set oct11
     *
     * @param float $oct11
     * @return EmployedVsUnemployedWorker
     */
    public function setOct11($oct11)
    {
        $this->oct11 = $oct11;
        return $this;
    }

    /**
     * Get oct11
     *
     * @return float 
     */
    public function getOct11()
    {
        return $this->oct11;
    }

    /**
     * Set nov11
     *
     * @param float $nov11
     * @return EmployedVsUnemployedWorker
     */
    public function setNov11($nov11)
    {
        $this->nov11 = $nov11;
        return $this;
    }

    /**
     * Get nov11
     *
     * @return float 
     */
    public function getNov11()
    {
        return $this->nov11;
    }

    /**
     * Set dec11
     *
     * @param float $dec11
     * @return EmployedVsUnemployedWorker
     */
    public function setDec11($dec11)
    {
        $this->dec11 = $dec11;
        return $this;
    }

    /**
     * Get dec11
     *
     * @return float 
     */
    public function getDec11()
    {
        return $this->dec11;
    }

    /**
     * Set jan12
     *
     * @param float $jan12
     * @return EmployedVsUnemployedWorker
     */
    public function setJan12($jan12)
    {
        $this->jan12 = $jan12;
        return $this;
    }

    /**
     * Get jan12
     *
     * @return float 
     */
    public function getJan12()
    {
        return $this->jan12;
    }

    /**
     * Set feb12
     *
     * @param float $feb12
     * @return EmployedVsUnemployedWorker
     */
    public function setFeb12($feb12)
    {
        $this->feb12 = $feb12;
        return $this;
    }

    /**
     * Get feb12
     *
     * @return float 
     */
    public function getFeb12()
    {
        return $this->feb12;
    }

    /**
     * Set mar12
     *
     * @param float $mar12
     * @return EmployedVsUnemployedWorker
     */
    public function setMar12($mar12)
    {
        $this->mar12 = $mar12;
        return $this;
    }

    /**
     * Get mar12
     *
     * @return float 
     */
    public function getMar12()
    {
        return $this->mar12;
    }

    /**
     * Set apr12
     *
     * @param float $apr12
     * @return EmployedVsUnemployedWorker
     */
    public function setApr12($apr12)
    {
        $this->apr12 = $apr12;
        return $this;
    }

    /**
     * Get apr12
     *
     * @return float 
     */
    public function getApr12()
    {
        return $this->apr12;
    }

    /**
     * Set may12
     *
     * @param float $may12
     * @return EmployedVsUnemployedWorker
     */
    public function setMay12($may12)
    {
        $this->may12 = $may12;
        return $this;
    }

    /**
     * Get may12
     *
     * @return float 
     */
    public function getMay12()
    {
        return $this->may12;
    }
}