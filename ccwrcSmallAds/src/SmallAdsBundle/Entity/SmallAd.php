<?php

namespace SmallAdsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SmallAd
 *
 * @ORM\Table(name="small_ad")
 * @ORM\Entity(repositoryClass="SmallAdsBundle\Repository\SmallAdRepository")
 */
class SmallAd {
    
    /**
     * Constructor
     */
    public function __construct()
    {
    //    $this->photos = new \Doctrine\Common\Collections\ArrayCollection();
        $this->categories = new \Doctrine\Common\Collections\ArrayCollection();
    //    $this->comments = new \Doctrine\Common\Collections\ArrayCollection();
    }
    
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="string", length=60)
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=9500)
     */
    private $description;

    /**
     * @ORM\Column(type="string")
     * @ORM\OneToMany(targetEntity="Photo", mappedBy="smallAd", cascade={"persist","remove"})
     */
    private $photos;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="startDate", type="datetime")
     */
    private $startDate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="endDate", type="datetime")
     */
    private $endDate;

    /**
     * @ORM\ManyToMany(targetEntity="Category", inversedBy="smallAds", cascade={"persist"})
     * @ORM\JoinTable(name="category_smallad")
     */
    private $categories;

    /**
     * @ORM\OneToMany(targetEntity="Comment", mappedBy="smallAd", cascade={"remove"})
     */
    private $comments;
    
    /**
     * @ORM\ManyToOne(targetEntity="User", inversedBy="smallAds")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id", nullable=false)
     */
    private $user;


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
     * Set title
     *
     * @param string $title
     * @return SmallAd
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set description
     *
     * @param string $description
     * @return SmallAd
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set photos
     *
     * @param string $photos
     * @return SmallAd
     */
    public function setPhotos($photos)
    {
        $this->photos = $photos;

        return $this;
    }

    /**
     * Get photos
     *
     * @return string 
     */
    public function getPhotos()
    {
        return $this->photos;
    }

    /**
     * Set startDate
     *
     * @param \DateTime $startDate
     * @return SmallAd
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;

        return $this;
    }

    /**
     * Get startDate
     *
     * @return \DateTime 
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * Set endDate
     *
     * @param \DateTime $endDate
     * @return SmallAd
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * Get endDate
     *
     * @return \DateTime 
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * Set categories
     *
     * @param \SmallAdsBundle\Entity\Category $categories
     * @return SmallAd
     */
    public function setCategories(\SmallAdsBundle\Entity\Category $categories)
    {
        $this->categories[] = $categories;

        return $this;
    }

//        public function setCategories($categories)
//    {
//        $this->categories = $categories;
//
//        return $this;
//    }
    
//    /**
//     * Get categories
//     *
//     * @return string 
//     */
//    public function getCategories()
//    {
//        return $this->categories;
//    }

    /**
     * Set comments
     *
     * @param string $comments
     * @return SmallAd
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
     * Add photos
     *
     * @param \SmallAdsBundle\Entity\Photo $photos
     * @return SmallAd
     */
    public function addPhoto(\SmallAdsBundle\Entity\Photo $photos)
    {
        $this->photos[] = $photos;

        return $this;
    }

    /**
     * Remove photos
     *
     * @param \SmallAdsBundle\Entity\Photo $photos
     */
    public function removePhoto(\SmallAdsBundle\Entity\Photo $photos)
    {
        $this->photos->removeElement($photos);
    }

//    /**
//     * Add categories
//     *
//     * @param \SmallAdsBundle\Entity\Category $categories
//     * @return SmallAd
//     */
//    public function addCategory(\SmallAdsBundle\Entity\Category $categories)
//    {
//        $this->categories[] = $categories;
//
//        return $this;
//    }

//    /**
//     * Remove categories
//     *
//     * @param \SmallAdsBundle\Entity\Category $categories
//     */
//    public function removeCategory(\SmallAdsBundle\Entity\Category $categories)
//    {
//        $this->categories->removeElement($categories);
//    }

    /**
     * Add comments
     *
     * @param \SmallAdsBundle\Entity\Comment $comments
     * @return SmallAd
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

    /**
     * Set user
     *
     * @param \SmallAdsBundle\Entity\User $user
     * @return SmallAd
     */
    public function setUser(\SmallAdsBundle\Entity\User $user)
    {
        $this->user = $user;

        return $this;
    }

    /**
     * Get user
     *
     * @return \SmallAdsBundle\Entity\User 
     */
    public function getUser()
    {
        return $this->user;
    }


    /**
     * Add categories
     *
     * @param \SmallAdsBundle\Entity\Category $categories
     * @return SmallAd
     */
    public function addCategory(\SmallAdsBundle\Entity\Category $categories)
    {
        $this->categories[] = $categories;

        return $this;
    }

    /**
     * Remove categories
     *
     * @param \SmallAdsBundle\Entity\Category $categories
     */
    public function removeCategory(\SmallAdsBundle\Entity\Category $categories)
    {
        $this->categories->removeElement($categories);
    }

    /**
     * Get categories
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getCategories()
    {
        return $this->categories;
    }
}
