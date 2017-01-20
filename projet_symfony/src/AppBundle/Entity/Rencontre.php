<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rencontre
 *
 * @ORM\Table(name="rencontre")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\RencontreRepository")
 */

class Rencontre
{
  /**
    * @ORM\ManyToOne(targetEntity="AppBundle\Entity\User", inversedBy="rencontres")
    * @ORM\JoinColumn(nullable=false)
    */
   private $user;

   /**
   * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Event", inversedBy="rencontres")
   * @ORM\JoinColumn(nullable=false)
   */

   private $event;

   /**
   * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Entreprise", inversedBy="rencontres")
   * @ORM\JoinColumn(nullable=false)
   */
   
   private $entreprise;


    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }
}
