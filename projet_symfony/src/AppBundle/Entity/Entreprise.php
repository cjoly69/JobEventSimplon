<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Entreprise
 *
 * @ORM\Table(name="entreprise")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EntrepriseRepository")
 */
class Entreprise
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
     * @ORM\Column(name="entName", type="string", length=255)
     */
    private $entName;

    /**
     * @var string
     *
     * @ORM\Column(name="recName", type="string", length=255)
     */
    private $recName;


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
     * Set entName
     *
     * @param string $entName
     *
     * @return Entreprise
     */
    public function setEntName($entName)
    {
        $this->entName = $entName;

        return $this;
    }

    /**
     * Get entName
     *
     * @return string
     */
    public function getEntName()
    {
        return $this->entName;
    }

    /**
     * Set recName
     *
     * @param string $recName
     *
     * @return Entreprise
     */
    public function setRecName($recName)
    {
        $this->recName = $recName;

        return $this;
    }

    /**
     * Get recName
     *
     * @return string
     */
    public function getRecName()
    {
        return $this->recName;
    }
}

