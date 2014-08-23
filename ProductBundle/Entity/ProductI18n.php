<?php

namespace Mardraze\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ProductI18n
 *
 * @ORM\Table(name="product_i18n", indexes={@ORM\Index(name="product_has_locale_FKIndex1", columns={"product_id"}), @ORM\Index(name="product_has_locale_FKIndex2", columns={"locale_id"})})
 * @ORM\Entity
 */
class ProductI18n {
	/**
	 *
	 * @var integer @ORM\Column(name="product_id", type="integer", nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="NONE")
	 */
	private $productId;
	
	/**
	 *
	 * @var string @ORM\Column(name="locale_id", type="string", length=31, nullable=false)
	 *      @ORM\Id
	 *      @ORM\GeneratedValue(strategy="NONE")
	 */
	private $localeId;
}
