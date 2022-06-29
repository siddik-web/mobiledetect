<?php
/**
 * @package    Joomla.Plugin
 * @subpackage System.mobiledetect
 *
 * @copyright (C) 2022 Md Siddiqur Rahman <https://siddiqur.com>
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */
namespace SiddikWeb\Mobiledetect;

use Detection\MobileDetect;

defined('_JEXEC') or die();

/**
 * Application class
 *
 * @since 1.0.0
 */
final class MobileDetectWrapper
{
    /**
     * Undocumented function
     *
     * @return MobileDetect
     * 
     * @since 1.0.0
     */
    public static function getInstance() : MobileDetect
    {
        return new MobileDetect();
    }

}