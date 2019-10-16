<?php
/**
* @version $Id: artforms_ferforms_link.menu.php v.2.1b7 2007-12-17 19:58:51Z GMT-3 $
* @package ArtForms 2.1b7
* @subpackage Menus
* @copyright Copyright (C) 2005 Open Source Matters. All rights reserved.
* @copyright Copyright (C) 2007 InterJoomla. All rights reserved.
* @license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html GNU/GPL version 2, see LICENSE.txt
* This version may have been modified pursuant to the
* GNU General Public License, and as distributed it includes or is derivative
* of works licensed under the GNU General Public License or other free
* or open source software licenses.
* See COPYRIGHT.txt for copyright notices and details.
*/

defined( '_VALID_MOS' ) or die( 'Restricted access' );

mosAdminMenus::menuItem( $type );

switch ($task) {
	case 'artforms_ferforms_link':
		afferforms_menu::edit( 0, $menutype, $option );
		break;

	case 'edit':
		afferforms_menu::edit( $cid[0], $menutype, $option );
		break;

	case 'save':
	case 'apply':
		saveMenu( $option, $task );
		break;
}
?>
