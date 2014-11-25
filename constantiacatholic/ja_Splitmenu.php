<?php
/*------------------------------------------------------------------------
# JA Mageia for Joomla 1.5 - Version 1.4 - Licence Owner JA128467
# ------------------------------------------------------------------------
# Copyright (C) 2004-2008 J.O.O.M Solutions Co., Ltd. All Rights Reserved.
# @license - Copyrighted Commercial Software
# Author: J.O.O.M Solutions Co., Ltd
# Websites:  http://www.joomlart.com -  http://www.joomlancers.com
# This file may not be redistributed in whole or significant part.
-------------------------------------------------------------------------*/

defined('_JEXEC') or die('Restricted access');
/**
/* Loads main class file
*/
$menu = "Splitmenu";

$japarams = new JParameter('');
$japarams->set( 'menu_images', 1 );					//	Source of menu
$japarams->set( 'menu_images_align', 'left' );
$japarams->set( 'menutype', 'mainmenu' );

include_once( dirname(__FILE__).DS.'ja_menus/'.$menu.'.class.php' );
//echo '<link rel="stylesheet" href="http://joomla15.com/templates/ja_megeia/ja_menus/ja_splitmenu/ja-splitmenu.css" type="text/css" />';
$menuclass = "JA_$menu";
$jamenu = new $menuclass ($japarams);
?>
