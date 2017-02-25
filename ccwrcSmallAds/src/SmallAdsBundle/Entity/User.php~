<?php

namespace SmallAdsBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\UploadedFile;

/**
 * User
 *
 * @ORM\Table(name="fos_user")
 * @ORM\Entity(repositoryClass="SmallAdsBundle\Repository\UserRepository")
 */
class User extends BaseUser {
    
    public function __construct() {
        parent::__construct();
        
        $this->smallAds = new \Doctrine\Common\Collections\ArrayCollection();
        $this->comments = new \Doctrine\Common\Collections\ArrayCollection();
    }

        /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\OneToMany(targetEntity="SmallAd", mappedBy="user", cascade={"remove"})
     */
    private $smallAds;

    /**
     * @ORM\OneToMany(targetEntity="Comment", mappedBy="user", cascade={"remove"})
     */
    private $comments;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set smallAds
     *
     * @param string $smallAds
     * @return User
     */
    public function setSmallAds($smallAds)
    {
        $this->smallAds = $smallAds;

        return $this;
    }

    /**
     * Get smallAds
     *
     * @return string 
     */
    public function getSmallAds()
    {
        return $this->smallAds;
    }

    /**
     * Set comments
     *
     * @param string $comments
     * @return User
     */
    public function setComments($comments)
    {
        $this->comments = $comments;

        return $this;
    }

    /**
     * Get comments
     *
     * @return string 
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Add smallAds
     *
     * @param \SmallAdsBundle\Entity\SmallAd $smallAds
     * @return User
     */
    public function addSmallAd(\SmallAdsBundle\Entity\SmallAd $smallAds)
    {
        $this->smallAds[] = $smallAds;

        return $this;
    }

    /**
     * Remove smallAds
     *
     * @param \SmallAdsBundle\Entity\SmallAd $smallAds
     */
    public function removeSmallAd(\SmallAdsBundle\Entity\SmallAd $smallAds)
    {
        $this->smallAds->removeElement($smallAds);
    }

    /**
     * Add comments
     *
     * @param \SmallAdsBundle\Entity\Comment $comments
     * @return User
     */
    public function addComment(\SmallAdsBundle\Entity\Comment $comments)
    {
        $this->comments[] = $comments;

        return $this;
    }

    /**
     * Remove comments
     *
     * @param \SmallAdsBundle\Entity\Comment $comments
     */
    public function removeComment(\SmallAdsBundle\Entity\Comment $comments)
    {
        $this->comments->removeElement($comments);
    }
}
