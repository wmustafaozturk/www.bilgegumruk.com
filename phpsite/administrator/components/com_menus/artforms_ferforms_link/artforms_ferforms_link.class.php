<?php
/**
* @version $Id: artforms_ferforms_link.class.php v.2.1b7 2007-12-17 19:58:51Z GMT-3 $
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

class afferforms_menu {

	function edit( &$uid, $menutype, $option ) {

                global $database, $my, $mainframe, $mosConfig_lang, $mosConfig_absolute_path;

                if (file_exists($mosConfig_absolute_path.'/components/com_artforms/language/'.$mosConfig_lang.'.php')) {
                   @include_once($mosConfig_absolute_path.'/components/com_artforms/language/'.$mosConfig_lang.'.php');
                } else {
                   @include_once($mosConfig_absolute_path.'/components/com_artforms/language/english.php');
                }

                $menu = new mosMenu( $database );
		$menu->load( (int)$uid );

		if ($menu->checked_out && $menu->checked_out != $my->id) {
			mosErrorAlert( ARTF_JMENU_ALERTEDITA." ".$menu->title." ".ARTF_JMENU_ALERTEDITB );
		}

		if ($uid) {
			$menu->checkout( $my->id );
		} else {
			$menu->type 		= 'artforms_ferforms_link';
			$menu->menutype 	= $menutype;
			$menu->browserNav 	= 0;
			$menu->ordering 	= 9999;
			$menu->parent 		= intval( mosGetParam( $_POST, 'parent', 0 ) );
			$menu->published 	= 1;
		}

		// build html select list for target window
		$lists['target'] 	= mosAdminMenus::Target( $menu );

		// build the html select list for ordering
		$lists['ordering'] 	= mosAdminMenus::Ordering( $menu, $uid );

                // build the html select list for the group access
		$lists['access'] 	= mosAdminMenus::Access( $menu );

                // build the html select list for paraent item
		$lists['parent'] 	= mosAdminMenus::Parent( $menu );

                // build published button option
		$lists['published'] 	= mosAdminMenus::Published( $menu );

                // build the url link output
                $afquery="SELECT form_id FROM #__artforms_inbox";
                $database->setQuery( $afquery );
                $afrows1 = $database->loadResultArray();
                $afrows = array_unique($afrows1);
                
                $afurl1 = 'index.php?option=com_artforms&task=ferforms';
                $afurl2 = 'index.php?option=com_artforms&task=tferforms';
                $listsaforms[] 	 = mosHTML::makeOption( '', ARTF_JMENU_SELALINK );
                $listsaforms[] 	 = mosHTML::makeOption( $afurl1, ARTF_JMENU_FERF );
                foreach ( $afrows as $afrow ){
		$listsaforms[] 	 = mosHTML::makeOption( $afurl1.'&viewform='.$afrow, ARTF_JMENU_FERFFORM.' #'.$afrow );
                }
                $listsaforms[] 	 = mosHTML::makeOption( $afurl2, ARTF_JMENU_TFERF );
                foreach ( $afrows as $afrow ){
		$listsaforms[] 	 = mosHTML::makeOption( $afurl2.'&viewform='.$afrow, ARTF_JMENU_TFERFFORM.' #'.$afrow );
                }
                $lists['link'] = mosHTML::selectList( $listsaforms, 'link', 'class="inputbox" size="1" style="width:245px;"', 'value', 'text', $menu->link );

		// get params definitions
		$params = new mosParameters( $menu->params, $mainframe->getPath( 'menu_xml', $menu->type ), 'menu' );

		afferforms_menu_html::edit( $menu, $lists, $params, $option );
	}
}
?>
