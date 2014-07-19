<?php

namespace Mardraze\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CategoryI18n
 *
 * @ORM\Table(name="category_i18n", indexes={@ORM\Index(name="category_has_locale_FKIndex1", columns={"category_id"}), @ORM\Index(name="category_has_locale_FKIndex2", columns={"locale_id"})})
 * @ORM\Entity
 */
class CategoryI18n
{
    /**
     * @var integer
     *
     * @ORM\Column(name="category_id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $categoryId;

    /**
     * @var string
     *
     * @ORM\Column(name="locale_id", type="string", length=31, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $localeId;

    /**
     * @var integer
     *
     * @ORM\Column(name="name", type="string", nullable=true)
     */
    private $name;
    
}
