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

/* ja_transmenu.php @copyright (C) 2005 Joomlart.com (formerly MamboTheme.com)*/
defined('_JEXEC') or die('Restricted access');
/**
/* Loads main class file
*/
$menu = "Transmenu";

$japarams = new JParameter('');
$japarams->set( 'menu_images', 1 );					//	Source of menu
$japarams->set( 'menu_images_align', 'left' );
$japarams->set( 'menutype', 'mainmenu' );

$japarams->set( 'LSPath', 'templates/ja_megeia/ja_menus/ja_transmenu' );
$japarams->set( 'menutype', 'mainmenu' );					//	Source of menu
//Set style for menu
$japarams->set( 'menu_style', 'horizontal' );			//	Value: horizontal, vertical
$japarams->set( 'menu_direction', 'down' );				//	Value: down, right
$japarams->set( 'menu_position', 'bottomLeft' );		//	Value: bottomLeft, bottomRight, topLeft, topRight
$japarams->set( 'p_t', '0' );
$japarams->set( 'p_l', '0' );
$japarams->set( 'class_sfx', '-trans' );
$japarams->set( 'subpad_x', '0' );
$japarams->set( 'subpad_y', '0' );
$japarams->set( 'menu_images', '0' );
$japarams->set( 'menu_images_align', '0' );

include_once( dirname(__FILE__).DS.'ja_menus/'.$menu.'.class.php' );
$menuclass = "JA_$menu";
$jamenu = new $menuclass ($japarams);

?>

