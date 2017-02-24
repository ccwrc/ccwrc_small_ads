<?php

namespace SmallAdsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Category
 *
 * @ORM\Table(name="category")
 * @ORM\Entity(repositoryClass="SmallAdsBundle\Repository\CategoryRepository")
 */
class Category
{
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @ORM\ManyToMany(targetEntity="SmallAd", mappedBy="categories")
     */
    private $smallAds;


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
     * Set name
     *
     * @param string $name
     * @return Category
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string 
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set smallAds
     *
     * @param string $smallAds
     * @return Category
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
     * Constructor
     */
    public function __construct()
    {
        $this->smallAds = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add smallAds
     *
     * @param \SmallAdsBundle\Entity\SmallAd $smallAds
     * @return Category
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
    public function removeSmallAd(\SmallAdsBundle\Entity\SmallAd $smallAds) {
        $this->smallAds->removeElement($smallAds);
    }

    public function __toString() {
        return (string)$this->name;
    }

}
