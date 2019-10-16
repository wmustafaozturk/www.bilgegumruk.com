<?php
// Check to ensure this file is included in Joomla!
defined('_JEXEC') or die( 'Restricted access' );

class JElementModule extends JElement
{
	/*
	 * Element name
	 *
	 * @access	protected
	 * @var		string
	 */
	var	$_name = 'Module'; 

	function fetchElement($name, $value, &$node, $control_name)
	{
		$options = $this->getModules();			
		$arrOpt = array();
		for($i=0; $i < count($options); $i++){		
			$arrOpt[$i]['keys'] = $arrOpt[$i]['value'] = $options[$i]->module; 
		}		
		
		array_unshift($arrOpt, JHTML::_('select.option', '0', '- '.JText::_('Select module name').' -', 'keys', 'value'));
		
		return JHTML::_('select.genericlist',  $arrOpt, ''.$control_name.'['.$name.']', 'class="inputbox"', 'keys', 'value', $value, $control_name.$name );
	}
	
	function getModules()
	{
		$db =& JFactory::getDBO();
		
		$query = 'SELECT DISTINCT module'
		. ' FROM #__modules '
		. " WHERE published = 1 and module!= 'mod_jahigshlide'"
		. ' ORDER BY module'
		;
		$db->setQuery( $query );
		$db->getQuery();
		$options = $db->loadObjectList();		
		return $options;
	}
	
}