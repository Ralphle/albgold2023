<?php

//namespace GeorgRinger\News\Domain\Model;
namespace Tn34\Albgold\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;
use TYPO3\CMS\Extbase\Persistence\Generic\LazyLoadingProxy;
use TYPO3\CMS\Extbase\Persistence\ObjectStorage;

/**
 * Category Model
 */
class Category extends AbstractEntity
{
	/**
	 * catcolor
	 *
	 * @var string
	 */
	protected $catcolor;

	/**
	 * Returns the catcolor
	 *
	 * @return string catcolor
	 */
	public function getCatcolor() {
		return $this->catcolor;
	}

	/**
	 * Sets the catcolor
	 *
	 * @param string $catcolor
	 * @return void
	 */
	public function setCatcolor($catcolor) {
		$this->catcolor = $catcolor;
	}

}