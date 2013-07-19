<?php



namespace models\Entities;

/**
 * DayQueryResolution
 *
 * @ORM\Table(name="day_query_resolution")
 * @ORM\Entity
 */
class DayQueryResolution
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

  
    
    public function getRecordid() {
        return $this->recordid;
    }

    public function setRecordid($recordid) {
        $this->recordid = $recordid;
    }

    public function getParameter() {
        return $this->parameter;
    }

    public function setParameter($parameter) {
        $this->parameter = $parameter;
    }

    public function getMay11() {
        return $this->may11;
    }

    public function setMay11($may11) {
        $this->may11 = $may11;
    }

    public function getJune11() {
        return $this->june11;
    }

    public function setJune11($june11) {
        $this->june11 = $june11;
    }

    public function getJuly11() {
        return $this->july11;
    }

    public function setJuly11($july11) {
        $this->july11 = $july11;
    }

    public function getAug11() {
        return $this->aug11;
    }

    public function setAug11($aug11) {
        $this->aug11 = $aug11;
    }

    public function getSept11() {
        return $this->sept11;
    }

    public function setSept11($sept11) {
        $this->sept11 = $sept11;
    }

    public function getOct11() {
        return $this->oct11;
    }

    public function setOct11($oct11) {
        $this->oct11 = $oct11;
    }

    public function getNov11() {
        return $this->nov11;
    }

    public function setNov11($nov11) {
        $this->nov11 = $nov11;
    }

    public function getDec11() {
        return $this->dec11;
    }

    public function setDec11($dec11) {
        $this->dec11 = $dec11;
    }

    public function getJan12() {
        return $this->jan12;
    }

    public function setJan12($jan12) {
        $this->jan12 = $jan12;
    }

    public function getFeb12() {
        return $this->feb12;
    }

    public function setFeb12($feb12) {
        $this->feb12 = $feb12;
    }

    public function getMar12() {
        return $this->mar12;
    }

    public function setMar12($mar12) {
        $this->mar12 = $mar12;
    }

    public function getApr12() {
        return $this->apr12;
    }

    public function setApr12($apr12) {
        $this->apr12 = $apr12;
    }

    public function getMay12() {
        return $this->may12;
    }

    public function setMay12($may12) {
        $this->may12 = $may12;
    }


}