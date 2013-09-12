<?php

namespace models\Entities;



/**
 * @Entity
 * @Table(name="usersummary")
 */
class E_Usersummary
{
    /**
     * @var integer $usersummaryid
     *
     * @Column(name="userSummaryID", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $usersummaryid;

    /**
     * @var models\Entities\Users
     *
     * @ManyToOne(targetEntity="models\Entities\Users")
     * @JoinColumns({
     *   @JoinColumn(name="userID", referencedColumnName="userID")
     * })
     */
    private $userid;

    /**
     * @var models\Entities\Branchsummary
     *
     * @ManyToOne(targetEntity="models\Entities\Branchsummary")
     * @JoinColumns({
     *   @JoinColumn(name="branchSummaryID", referencedColumnName="branchSummaryID")
     * })
     */
    private $branchsummaryid;


    /**
     * Get usersummaryid
     *
     * @return integer 
     */
    public function getUsersummaryid()
    {
        return $this->usersummaryid;
    }

    /**
     * Set userid
     *
     * @param models\Entities\Users $userid
     * @return Usersummary
     */
    public function setUserid(\models\Entities\Users $userid = null)
    {
        $this->userid = $userid;
        return $this;
    }

    /**
     * Get userid
     *
     * @return models\Entities\Users 
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set branchsummaryid
     *
     * @param models\Entities\Branchsummary $branchsummaryid
     * @return Usersummary
     */
    public function setBranchsummaryid(\models\Entities\Branchsummary $branchsummaryid = null)
    {
        $this->branchsummaryid = $branchsummaryid;
        return $this;
    }

    /**
     * Get branchsummaryid
     *
     * @return models\Entities\Branchsummary 
     */
    public function getBranchsummaryid()
    {
        return $this->branchsummaryid;
    }
}