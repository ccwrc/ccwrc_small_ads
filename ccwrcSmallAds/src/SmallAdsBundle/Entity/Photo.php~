<?php

namespace SmallAdsBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Photo
 *
 * @ORM\Table(name="photo")
 * @ORM\Entity(repositoryClass="SmallAdsBundle\Repository\PhotoRepository")
 */
class Photo
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
     * @ORM\Column(name="path", type="string", length=400)
     */
    private $path;

    /**
     * @ORM\ManyToOne(targetEntity="SmallAd", inversedBy="photos")
     * @ORM\JoinColumn(name="smallAd_id", referencedColumnName="id", nullable=true)
     */
    private $smallAd;


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
     * Set path
     *
     * @param string $path
     * @return Photo
     */
    public function setPath($path)
    {
        $this->path = $path;

        return $this;
    }

    /**
     * Get path
     *
     * @return string 
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * Set smallAd
     *
     * @param string $smallAd
     * @return Photo
     */
    public function setSmallAd($smallAd)
    {
        $this->smallAd = $smallAd;

        return $this;
    }

    /**
     * Get smallAd
     *
     * @return string 
     */
    public function getSmallAd()
    {
        return $this->smallAd;
    }
}
