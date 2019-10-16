<?php
defined('_JEXEC') or die('Restricted access');

class modHighslide extends JObject
{

	var $_type				=	"";		
	var $_url				=	"";	
	var $_folder				=	"";	
	var $_itemid			=	"";
	var $_modulename		=	"";
	var $_position			=	"";
	var $_contentid			= 	"";
	var $_content 			=	"";
	var $_Height			=	200;
	var $_Width				=	200;
	var $_event				=	"";
	var $_loaddelay			=	5;
	var $_notshowagain		=	"";
	var $_notshowagaintime	=	7;
	var $_dismissbuton		=	"false";
	var $_class				=   "";
	var $_captionText		=	"";
	var $_positions			=   "";
	var $_first_content		=	"";
	var $_centr_content 	=	"";
	var $_last_content 		=	"";
	var $_display 			=	"";
	
	
	function modHighslide($params)
	{							
		$this->_folder				=	$params->get('url-folder', $this->_folder);				
		$this->_type			=	$params->get('type');				
		$this->_url				=	$params->get('url-url', $this->_url);				
		$this->_itemid			=	$params->get ('item-itemid', $this->_itemid);
		$this->_modulename 		=	$params->get ('module-modulename', $this->_modulename);
		$this->_position		=	$params->get ('modules-position', $this->_position);
		$this->_contentid 		=   $params->get ('html-contentid', $this->_contentid);	
		$this->_content			=	$params->get ('html-content', $this->_content);
		$this->_Height			=	$params->get ('Height', $this->_Height);
		$this->_Width			=	$params->get ('Width', $this->_Width);
		$this->_event			=	$params->get ('event' ,$this->_event);			
		$this->_loaddelay		=	$params->get('loaddelay', $this->_loaddelay);
		$this->_notshowagain	=	$params->get('notshowagain', $this->_notshowagain);
		$this->_notshowagaintime=	$params->get ('notshowagaintime',$this->_notshowagaintime);
		$this->_dismissbuton	=	$params->get ('dismissbuton', $this->_dismissbuton);	
		$this->_class			=	$params->get('class', $this->_class);
		$this->_captionText		=	$params->get('captionText', $this->_captionText);
		$this->_positions		=	$params->get('positions',$this->_positions);	
		$this->_first_content	=	$params->get('first-content',$this->_first_content)	;
		$this->_centr_content 	=	$params->get('centr-content',$this->_centr_content);
		$this->_last_content 	=	$params->get('last-content',$this->_last_content);	
		$this->_display			=	$params->get ('display' ,$this->_display);
	}		
	
	function getString()
	{
		
		$s= substr($this->_type,0,4);
		
		if($s=="url-") $this->_type= substr($this->_type,4);
		
		if ($this->_url ||  $this->_itemid || $this->_contentid || $this->_modulename || $this->_position || $this->_folder)
		{
			
			$this->beginHighslide();
			
			switch ($this->_type)
			{
				case "img"				: 	$this->getUrl(); 
											break;	
				case "html"				:   $this->getHtml();
											break;
				case "slideshow-caption": $this->getUrl();
											break;
				case "slideshow-controlbar" : $this->getUrl();
											break;
				case "flash"			:	$this->getUrl();
											break;
				case "iframe"			:	$this->getUrl();
											break;
				case "module"			:	$this->getModule();
											break;
				case "modules"			:	$this->getModules ();
											break;
				case "item"				:	$this->getItem();
											break;
				case "ajax"				: 	$this->getUrl();
											break;
				default					:	$this->getUrl();
											break;
							
			}
			
			$this->endHighslide();
			
			$app = &JFactory::getApplication();
			
			$row = new stdClass();
	
			$row->text = $this->_result;	
						
			$pparams = new JParameter('');
			jimport('joomla.plugin.helper');
	    	JPluginHelper::importPlugin('content', 'ja_highslide');
			$arr = $app->triggerEvent('onPrepareContent', array(&$row, $pparams, 0));				
			
			return $row->text;			
			
		}
		else return "";
		
	}
	
	function beginHighslide()
	{   

		echo $this->_first_content;
		$this->_result	.=	" {highslide "; 		
		$this->_result	.=	"	type=\"".$this->_type."\"";	
		$this->_result	.=	"	height=\"".$this->_Height."\"";	
		$this->_result	.=	"	width=\"".$this->_Width."\"";
		$this->_result	.=	"	event=\"".$this->_event."\"";		
		if($this->_event =="loadbody")
		{
		
			$this->_result	.=	"	loaddelay=\"".$this->_loaddelay."\"";
			$this->_result	.=	"	notshowagain=\"".$this->_notshowagain."\"";
			$this->_result	.=	"	notshowagaintime=\"".$this->_notshowagaintime."\"";
			if ($this->_dismissbuton==1) {
				$_dismissbuton = "true";
			}
			else{
				$_dismissbuton = "false";
			}
			$this->_result	.=	"	dismissbuton=\"".$_dismissbuton."\"";
		}
		$this->_result	.=	"	class=\"".$this->_class."\"";
		$this->_result	.=	"	captionText=\"".$this->_captionText."\"";
		$this->_result	.=	"	positions=\"".$this->_positions."\"";	
		$this->_result  .=  "	display=\"".$this->_display."\"";

	}
	
	function endHighslide(){
		$this->_result .= $this->_centr_content;
		$this->_result .= " {/highslide}";
		$this->_result .= $this->_last_content;		
	}
	
		
	function getUrl()
	{
		if($this->_type=="iframe" || $this->_type=="ajax")
		{	
			$this->_result	.=	"	url=\"".$this->_url."\"";			
			$this->_result .= "}";
		}
		else
		{
			if ($this->_url=='' && $this->_folder!='' && ($this->_type=="slideshow-caption" || $this->_type=="slideshow-controlbar")) {
				$files = '';
				jimport("joomla.filesystem.folder.php");
				$plugin	=& JPluginHelper::getPlugin('content', 'ja_highslide');
				$pluginParams	= new JParameter( $plugin->params);

				if (JFolder::exists(JPATH_BASE.DS.$pluginParams->get('paththum').$this->_folder)) {
					$files = JFolder::files(JPATH_BASE.DS.$pluginParams->get('paththum').$this->_folder);
					if ($files) {
						foreach ($files as $k=>$file){
							$files[$k] = $this->_folder.'/'.$file;
						}
						$files = implode(',', $files);
					}
				}
				$this->_result	.=	"	src=\"".$files."\"";	
			}
			else{
				$this->_result	.=	"	src=\"".$this->_url."\"";	
			}
					
			$this->_result .= "}";
			
		}
	}
	
	function getHtml()
	{
		echo $this->_content;
		$this->_result .= " contentid=\"".$this->_contentid."\"";
		$this->_result .= " }";
	}
	
	function getModule ()
	{
		$this->_result	.=	"	modulename=\"".$this->_modulename."\"";
		$this->_result	.=	"	}";		
	}
	
	function getModules ()
	{
		$this->_result	.=	"	position=\"".$this->_position."\"";
		$this->_result	.=	"	}";
	}
   
   	function getItem ()
	{
		$this->_result	.= "	itemid=\"".$this->_itemid."\"";
		$this->_result	.=	"	}";
	}	 
   
}
