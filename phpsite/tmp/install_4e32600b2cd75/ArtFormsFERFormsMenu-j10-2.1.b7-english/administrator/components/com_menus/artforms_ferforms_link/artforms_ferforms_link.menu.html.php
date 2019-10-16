<?php
/**
* @version $Id: artforms_ferforms_link.menu.html.php v.2.1b7 2007-12-17 19:58:51Z GMT-3 $
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

class afferforms_menu_html {

	function edit( $menu, $lists, $params, $option ) {

                global $mosConfig_live_site, $mosConfig_absolute_path, $mosConfig_lang;

                if (file_exists($mosConfig_absolute_path.'/components/com_artforms/language/'.$mosConfig_lang.'.php')) {
                   include($mosConfig_absolute_path.'/components/com_artforms/language/'.$mosConfig_lang.'.php');
                } else {
                   include($mosConfig_absolute_path.'/components/com_artforms/language/english.php');
                }
		?>
                <div id="overDiv" style="position:absolute; visibility:hidden; z-index:10000;"></div>
		<script language="javascript" type="text/javascript">
		function submitbutton(pressbutton) {
			var form = document.adminForm;
			if (pressbutton == 'cancel') {
				submitform( pressbutton );
				return;
			}

			// do field validation
			if (trim(form.name.value) == ""){
				alert( "<?php echo ARTF_JMENU_ALERTNAME; ?>" );
			} else if (trim(form.link.value) == ""){
				alert( "<?php echo ARTF_JMENU_ALERTFORM; ?>" );
			} else {
				submitform( pressbutton );
			}
		}
		</script>

		<form action="index2.php" method="post" name="adminForm">
		<table class="adminheading">
		<tr>
			<th>
			<?php echo $menu->id ? ARTF_JMENU_EDIT : ARTF_JMENU_NEW;?><?php echo ' '.ARTF_JMENU_RFORMSTITLE;?>
			</th>
		</tr>
		</table>

		<table width="100%">
		<tr valign="top">
			<td width="60%">
				<table class="adminform">
				<tr>
					<th colspan="2">
                                         <?php echo ARTF_JMENU_DETAILS; ?>
					</th>
				</tr>
				<tr>
					<td width="20%" align="right">
					<?php echo ARTF_JMENU_NAME.':'; ?>
					</td>
					<td width="80%">
					<input class="inputbox" type="text" name="name" size="50" maxlength="150" value="<?php echo $menu->name; ?>" />
					</td>
				</tr>
				<tr>
					<td width="20%" align="right">
					<?php echo ARTF_JMENU_RFORMMODE.':'; ?>
					</td>
					<td width="80%">
					<?php echo $lists['link']; ?>
					</td>
				</tr>
				<tr>
					<td valign="top" align="right">
					<?php echo ARTF_JMENU_TARGET.':'; ?>
					</td>
					<td>
					<?php echo $lists['target']; ?>
					</td>
				</tr>
				<tr>
					<td align="right">
					<?php echo ARTF_JMENU_PARENT.':'; ?>
					</td>
					<td>
					<?php echo $lists['parent']; ?>
					</td>
				</tr>
				<tr>
					<td valign="top" align="right">
					<?php echo ARTF_JMENU_ORDER.':'; ?>
					</td>
					<td>
					<?php echo $lists['ordering']; ?>
					</td>
				</tr>
				<tr>
					<td valign="top" align="right">
					<?php echo ARTF_JMENU_ACCESS.':'; ?>
					</td>
					<td>
					<?php echo $lists['access']; ?>
					</td>
				</tr>
				<tr>
					<td valign="top" align="right">
					<?php echo ARTF_JMENU_PUBLISH.':'; ?>
					</td>
					<td>
					<?php echo $lists['published']; ?>
					</td>
				</tr>
				</table>
			</td>
			<td width="40%">
				<table class="adminform">
				<tr>
					<th>
					<?php echo ARTF_JMENU_PARAMS.':'; ?>
					</th>
				</tr>
				<tr>
					<td>
					<?php echo $params->render();?>
					</td>
				</tr>
				</table>
			</td>
		</tr>
		</table>

		<input type="hidden" name="option" value="<?php echo $option;?>" />
		<input type="hidden" name="id" value="<?php echo $menu->id; ?>" />
		<input type="hidden" name="menutype" value="<?php echo $menu->menutype; ?>" />
		<input type="hidden" name="type" value="<?php echo $menu->type; ?>" />
		<input type="hidden" name="task" value="" />
		<input type="hidden" name="hidemainmenu" value="0" />
		</form>
		<script language="Javascript" src="<?php echo $mosConfig_live_site;?>/includes/js/overlib_mini.js"></script>
		<?php
	}
}
?>
