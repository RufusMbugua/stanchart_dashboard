<?php


namespace models\Entities;

/**
 * TotalOvertime
 *
 * @ORM\Table(name="total_overtime")
 * @ORM\Entity
 */
class TotalOvertime
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


}