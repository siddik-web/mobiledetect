<?php
/**
 * @package    Joomla.Plugin
 * @subpackage System.mobiledetect
 *
 * @copyright (C) 2022 Md Siddiqur Rahman <https://siddiqur.com>
 * @license   GNU General Public License version 2 or later; see LICENSE.txt
 */
defined('_JEXEC') or die;

require_once __DIR__ . '/vendor/autoload.php';

use Joomla\CMS\Plugin\CMSPlugin;
use SiddikWeb\Mobiledetect\MobileDetectWrapper;

/**
 * Mobile Detect Plugin class
 * 
 * @since 1.0.0
 */
class PlgSystemMobileDetect extends CMSPlugin
{
    /**
     *  Mobile Detect Class Object
     *
     * @return \Detection\MobileDetect
     *
     * @since 1.0.0
     */
    public function onGetMobileDetectObject() : \Detection\MobileDetect
    {
        return MobileDetectWrapper::getInstance();
    }
}