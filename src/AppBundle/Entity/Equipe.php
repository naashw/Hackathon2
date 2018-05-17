<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipe
 *
 * @ORM\Table(name="equipe")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EquipeRepository")
 */
class Equipe
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
     * @ORM\Column(name="village", type="string", length=255)
     */
    private $village;

    /**
     * @var string
     *
     * @ORM\Column(name="poney", type="string", length=255)
     */
    private $poney;

    /**
     * @var string
     *
     * @ORM\Column(name="cavalier", type="string", length=255)
     */
    private $cavalier;

    /**
     * @var string
     *
     * @ORM\Column(name="image", type="string", length=255)
     */
    private $image;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set village
     *
     * @param string $village
     *
     * @return Equipe
     */
    public function setVillage($village)
    {
        $this->village = $village;

        return $this;
    }

    /**
     * Get village
     *
     * @return string
     */
    public function getVillage()
    {
        return $this->village;
    }

    /**
     * Set poney
     *
     * @param string $poney
     *
     * @return Equipe
     */
    public function setPoney($poney)
    {
        $this->poney = $poney;

        return $this;
    }

    /**
     * Get poney
     *
     * @return string
     */
    public function getPoney()
    {
        return $this->poney;
    }

    /**
     * Set cavalier
     *
     * @param string $cavalier
     *
     * @return Equipe
     */
    public function setCavalier($cavalier)
    {
        $this->cavalier = $cavalier;

        return $this;
    }

    /**
     * Get cavalier
     *
     * @return string
     */
    public function getCavalier()
    {
        return $this->cavalier;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Equipe
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }
}

