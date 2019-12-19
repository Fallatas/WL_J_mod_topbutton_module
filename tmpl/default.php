<?php
/**
 * @package    WL_TOPBUTTON_MODULE
 *
 * @author     Thomas Winterling <info@winterling-labs.com>
 * @copyright  Copyright (C) 2011 - 2019
 * @license    http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 **/

defined('_JEXEC') or die;

JHtml::_('stylesheet', 'mod_wl_topbutton_module/style.css', array('version' => 'auto', 'relative' => true));
JHtml::_('script', 'mod_wl_topbutton_module/scripts.js', array('version' => 'auto', 'relative' => true));
JHtml::_('jQuery.Framework');
?>
<div id="wl_topbutton_module">
    <span>Topbutton</span>
</div>
