<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Userclub
 *
 * @ORM\Table(name="userclub", indexes={@ORM\Index(name="idUser", columns={"idUser"}), @ORM\Index(name="idClub", columns={"idClub"})})
 * @ORM\Entity
 */
class Userclub
{
    /**
     * @var integer
     *
     * @ORM\Column(name="iduc", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $iduc;

    /**
     * @var integer
     *
     * @ORM\Column(name="idUser", type="integer", nullable=false)
     */
    private $iduser;

    /**
     * @var integer
     *
     * @ORM\Column(name="idClub", type="integer", nullable=false)
     */
    private $idclub;


}

