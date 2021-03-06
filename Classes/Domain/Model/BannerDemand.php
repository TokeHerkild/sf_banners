<?php
namespace DERHANSEN\SfBanners\Domain\Model;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/**
 * Banner demand
 *
 * @author Torben Hansen <derhansen@gmail.com>
 */
class BannerDemand extends AbstractEntity
{

    /**
     * Categories
     *
     * @var string
     */
    protected $categories;

    /**
     * Startingpoint(s)
     *
     * @var string
     */
    protected $startingPoint;

    /**
     * Display Mode - default is to display all banners
     *
     * @var string
     */
    protected $displayMode = 'all';

    /**
     * The current page uid
     *
     * @var int
     */
    protected $currentPageUid;

    /**
     * Setter for currentPageUid
     *
     * @param string $categories The categories
     * @return void
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;
    }

    /**
     * Getter for categories
     *
     * @return string
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * Setter for currentPageUid
     *
     * @param int $currentPageUid Current Page UID
     * @return void
     */
    public function setCurrentPageUid($currentPageUid)
    {
        $this->currentPageUid = $currentPageUid;
    }

    /**
     * Getter for currentPageUid
     *
     * @return int
     */
    public function getCurrentPageUid()
    {
        return $this->currentPageUid;
    }

    /**
     * Setter for startingPoint
     *
     * @param string $displayMode Displaymode
     * @return void
     */
    public function setDisplayMode($displayMode)
    {
        $this->displayMode = $displayMode;
    }

    /**
     * Getter for displayMode
     *
     * @return string
     */
    public function getDisplayMode()
    {
        return $this->displayMode;
    }

    /**
     * Setter for startingPoint
     *
     * @param string $startingPoint Startingpoint(s)
     * @return void
     */
    public function setStartingPoint($startingPoint)
    {
        $this->startingPoint = $startingPoint;
    }

    /**
     * Getter for startingPoint
     *
     * @return string
     */
    public function getStartingPoint()
    {
        return $this->startingPoint;
    }
}
