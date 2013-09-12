<?php

namespace models\Entities;



/**
 * @Entity
 * @Table(name="users")
 */
class E_Users
{
    /**
     * @var integer $userid
     *
     * @Column(name="userID", type="integer", nullable=false)
     * @Id
     * @GeneratedValue(strategy="IDENTITY")
     */
    private $userid;

    /**
     * @var string $userfirstname
     *
     * @Column(name="userFirstName", type="string", length=45, nullable=true)
     */
    private $userfirstname;

    /**
     * @var string $userlastname
     *
     * @Column(name="userLastName", type="string", length=45, nullable=true)
     */
    private $userlastname;

    /**
     * @var string $useremail
     *
     * @Column(name="userEmail", type="string", length=45, nullable=true)
     */
    private $useremail;

    /**
     * @var string $userpassword
     *
     * @Column(name="userPassword", type="string", length=45, nullable=true)
     */
    private $userpassword;

    /**
     * @var integer $useractive
     *
     * @Column(name="userActive", type="integer", nullable=true)
     */
    private $useractive;


    /**
     * Get userid
     *
     * @return integer 
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * Set userfirstname
     *
     * @param string $userfirstname
     * @return Users
     */
    public function setUserfirstname($userfirstname)
    {
        $this->userfirstname = $userfirstname;
        return $this;
    }

    /**
     * Get userfirstname
     *
     * @return string 
     */
    public function getUserfirstname()
    {
        return $this->userfirstname;
    }

    /**
     * Set userlastname
     *
     * @param string $userlastname
     * @return Users
     */
    public function setUserlastname($userlastname)
    {
        $this->userlastname = $userlastname;
        return $this;
    }

    /**
     * Get userlastname
     *
     * @return string 
     */
    public function getUserlastname()
    {
        return $this->userlastname;
    }

    /**
     * Set useremail
     *
     * @param string $useremail
     * @return Users
     */
    public function setUseremail($useremail)
    {
        $this->useremail = $useremail;
        return $this;
    }

    /**
     * Get useremail
     *
     * @return string 
     */
    public function getUseremail()
    {
        return $this->useremail;
    }

    /**
     * Set userpassword
     *
     * @param string $userpassword
     * @return Users
     */
    public function setUserpassword($userpassword)
    {
        $this->userpassword = $userpassword;
        return $this;
    }

    /**
     * Get userpassword
     *
     * @return string 
     */
    public function getUserpassword()
    {
        return $this->userpassword;
    }

    /**
     * Set useractive
     *
     * @param integer $useractive
     * @return Users
     */
    public function setUseractive($useractive)
    {
        $this->useractive = $useractive;
        return $this;
    }

    /**
     * Get useractive
     *
     * @return integer 
     */
    public function getUseractive()
    {
        return $this->useractive;
    }
}