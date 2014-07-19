<?php

namespace Mardraze\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Locale
 *
 * @ORM\Table(name="locale")
 * @ORM\Entity
 */
class Locale
{
    /**
     * @var string
     *
     * @ORM\Column(name="id", type="string", length=31, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     */
    private $name;


}
