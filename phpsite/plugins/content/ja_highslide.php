<?php
/*------------------------------------------------------------------------
# JA Quartz for Joomla 1.5 - Version 1.0 - Licence Owner jSharing
# ------------------------------------------------------------------------
# Copyright (C) 2004-2008 J.O.O.M Solutions Co., Ltd. All Rights Reserved.
# @license - Copyrighted Commercial Software
# Author: J.O.O.M Solutions Co., Ltd
# Websites:  http://www.joomlart.com -  http://www.joomlancers.com
# This file may not be redistributed in whole or significant part.
-------------------------------------------------------------------------*/

// Check to ensure this file is included in Joomla!

defined( '_JEXEC' ) or die();
jimport( 'joomla.plugin.plugin' );
jimport('joomla.application.module.helper');

/**
 * Highslide Content Plugin
 *
 * @package		Joomla
 * @subpackage	Content
 * @since 		1.5
 */
class plgContentJA_highslide extends JPlugin
{

	/** @var int */

	
	function plgContentJA_highslide( &$subject, $params )
	{		
		parent::__construct( $subject, $params );
	}

	/**
	 * Highslide prepare content method
	 *
	 * Method is called by the view
	 *
	 * @param 	object		The article object.  Note $article->text is also available
	 * @param 	object		The article params
	 * @param 	int			The 'page' number
	 */
	function onPrepareContent( &$article, &$params, $limitstart )
	{
		global $mainframe;

		$plugin	=& JPluginHelper::getPlugin('content', 'ja_highslide');
		$pluginParams	= new JParameter( $plugin->params);
		if ( !$pluginParams->get( 'enabled', 1 ) ) {
			$article->text = preg_replace( $regex, '', $article->text );
			return $article->text;
		}
		
		if (JString::strpos( $article->text, '{highslide' ) === false){
			$HSmethodDIRECT = false;
		}else{
			$HSmethodDIRECT = true;
		}
		
		if(!defined("HSLPLUGIN_HEADTAG")) $this->highslide_PrepareSettings($pluginParams);
		if($HSmethodDIRECT)
		{
			$_SESSION['width'] = $pluginParams->get('width');
			
			require_once('plugins/content/highslide/parser.php');
			$parser = new ReplaceCallbackParser('highslide');
			$article->text =  $parser->parse ($article->text, array(&$this, 'highslide_replacer_DIRECT'));								
		}
		return $article->text;
	}

	function highslide_PrepareSettings($pluginParams){
		global $mainframe;
		
		$hs_base    = JURI::base().'plugins/content';
		$headtag    = array();
		$headtag[] = '<link rel="stylesheet" href="'.$hs_base.'/highslide/highslide-styles.css" type="text/css" />';
		$headtag[] = "<script type='text/javascript' src='".$hs_base."/highslide/highslide-full.packed.js'></script>";
		$headtag[] = "<script type='text/javascript'>//<![CDATA[\nif (!window.swfobject) document.write('<script type=\"text/javascript\" src=\"".$hs_base."/highslide/swfobject.js\"><\\/script>'); //]]></script>";
		//$headtag[] = "<script type='text/javascript' src='".$hs_base."/highslide/swfobject.js'></script>";
		$headtag[] = "<script type='text/javascript' src='".$hs_base."/highslide/do_cookie.js'></script>";
		
		$headtag[] = "<script type='text/javascript'>";
		$headtag[] = "hs.graphicsDir = '".$hs_base."/highslide/graphics/'; ";
		
		// Credits display
		if($pluginParams->get('showHSCredits') == "1")	$headtag[] = "hs.showCredits = true;";
		else                                        $headtag[] = "hs.showCredits = false;";
		
	// outlineType: outer-glow, rounded-white	
		if($pluginParams->get('outlineType') == "0")		$headtag[] = "hs.outlineType = '';";
		elseif($pluginParams->get('outlineType') == "1")	$headtag[] = "hs.outlineType = 'outer-glow';";
		elseif($pluginParams->get('outlineType') == "2")	$headtag[] = "hs.outlineType = 'rounded-white';";
		elseif($pluginParams->get('outlineType') == "3")	$headtag[] = "hs.outlineType = 'drop-shadow';";
		elseif($pluginParams->get('outlineType') == "4")	$headtag[] = "hs.outlineType = 'beveled';";
		elseif($pluginParams->get('outlineType') == "5")	$headtag[] = "hs.outlineType = 'glossy-dark';";
		elseif($pluginParams->get('outlineType') == "6")	$headtag[] = "hs.outlineType = 'rounded-black';";	
		
		$GLOBALS['_paththum'] = $pluginParams->get('paththum');
		$GLOBALS['autoresize'] = $pluginParams->get('autoresize');
		
		
	// Loading Text
		$headtag[] = "hs.loadingText = '".$pluginParams->get('loadingText')."';";
		
		$headtag[] = "</script>";
		
		$mainframe->addCustomHeadTag(implode("\n", $headtag));
		define("HSLPLUGIN_HEADTAG", TRUE);

	}
	function highslide_replacer_DIRECT($plgAttr, $plgContent)
	{
		global $_paththum;
		
		$paras = ''; $override ='';
		$paras = $this->parseParams($plgAttr);

		/*if (isset($paras['pre']) && $paras['pre']){
			$matches[0] = str_replace('pre=true', '', $matches[0]);
			$matches[0] = str_replace('pre="true"', '', $matches[0]);
			$matches[0] = str_replace("pre='true'", '', $matches[0]);
			return $matches[0];
		}*/
		
		foreach($paras as $k=>$value){
			$arr_type = array('type','event', 'contentid', 'url', 'src', 'position', 'positions', 'hideOnMouseOut', 'dismissbuton', 'modulename', 'itemid', "notshowagain", 'notshowagaintime', 'loaddelay', 'dismissbutton', 'desciption', 'class');
			if(!in_array(trim($k), $arr_type)){
				if(is_numeric($value)){
					$override .= $k.":".$value.",";
				}
				else	$override .= $k.":'".$value."',";
			}
		}
		
		if($override!=''){
			$override = substr($override, 0, strlen($override)-1);
		}
		$paras['override'] = $override;
		
		if(!isset($paras['url'])) $paras['url'] = '';
		
		if(isset($paras['src']) && $paras['src']!='') $paras['url'] = $paras['src'];
		
		if(isset($paras['event']) && $paras['event']=='loadbody') $paras['event'] = true;
		else $paras['event'] = false;
		
		if (!isset($paras['notshowagain']) || (isset($paras['notshowagain']) && ($paras['notshowagain']<=0 || !is_numeric($paras['notshowagain'])))){
			$paras['notshowagain'] = 0;
		}
		
		if (!isset($paras['notshowagaintime']) || (isset($paras['notshowagaintime']) && ($paras['notshowagaintime']<=0 || !is_numeric($paras['notshowagain'])))){
			$paras['notshowagaintime'] = 0;
		}
		
		if (!isset($paras['dismissbuton']) || !in_array($paras['dismissbuton'], array('true', 'false'))) {
			$paras['dismissbuton'] = 'false';
		}
		
		if (!isset($paras['loaddelay']) || (isset($paras['loaddelay']) && (!$paras['loaddelay']>0 || !is_numeric($paras['loaddelay'])))) {
			$paras['loaddelay'] = 3;
		}
		
		if(!isset($paras['width']) || $paras['width']<=0 || !is_numeric($paras['width'])) $paras['width'] = $_SESSION['width'];
		
		if(!isset($paras['height']) || $paras['height']<=0 || !is_numeric($paras['height'])) $paras['height'] = 200;					
		
		$id_link = 'href_'.time();
		
		$id = "'highslide-html-".$id_link."'";
		$id_li = "'li_".$id_link."'";				
		
		if (!isset($paras['type'])) {
			$paras['type'] = '';
		}
		switch($paras['type']){
			case "img":				
				return $this->highslide_img($paras, $plgContent, $id_link, $id, $id_li, $_paththum);
			case "html":
				return $this->highslide_html($paras, $plgContent, $id_link, $id, $id_li);
			case "slideshow-caption":
				return $this->highslide_slideshowcaption($paras, $plgContent, $id_link, $_paththum);
			case "slideshow-controlbar":
				return $this->highslide_slideshowcontrolbar($paras, $plgContent, $id_link, $_paththum);
			case "flash":				
				return $this->highslide_flash($paras, $plgContent, $id_link, $id, $_paththum);
			case "iframe":
				return $this->highslide_iframe($paras, $plgContent, $id_link, $id);
			case "module":				
				return $this->highslide_module($paras, $plgContent, $id_link, $id, $id_li);
			case "modules":				
				return $this->highslide_modules($paras, $plgContent, $id_link, $id, $id_li);
			case "item":
				return $this->highslide_item($paras, $plgContent, $id_link, $id);
			case "ajax":				
				return $this->highslide_ajax($paras, $plgContent, $id_link, $id);
		}
	
	}
	
	function highslide_img($paras, $content, $id_link, $id, $id_li, $_paththum){
		global $autoresize;
		
		$sPhysicPath = $this->PhysicPath();
		$ip = md5('ip_user_client_img');
		
		$path_img = $paras['url'];
		$limage = '';
		$thumb_img = $path_img;
		
		$paras['url'] = trim($paras['url']);
		if(substr($path_img,0,4)!='http'){		
			$path_img = JURI::base().$_paththum.$paras['url'];	
			$path = $sPhysicPath.$_paththum.$paras['url'];
			if (file_exists( $path ) && $autoresize) {
				$obj = new JA_Resize_Images();						
				$thumb_img = $obj->processImage($path, $paras['width'], $paras['height'] );
			}	
			else{
				$thumb_img = $path_img;
			}		
		}
		
		$width = !$autoresize || !function_exists('gd_info')?'width="'.$paras['width'].'"':'';
		
		if(substr($paras['url'],0,4)!='http' && !is_file($sPhysicPath.$_paththum.$paras['url'])){			
			$id = "'highslide-html-".$id_link."'";
			$limage .='<a id="'.$id_link.'" class="highslide" href="#"  onclick="hs.htmlExpand(this, {contentId: '.$id.'}); return false;">';
			$limage .= $content;
			if(!isset($paras['display']) || $paras['display']!='none'){
				
				$class = isset($paras['class'])?$paras['class']:'';
				$limage .= '<img '.$width.'  alt="'.$paras['url'].'" src="'.$path_img.'"  class="'.$class.'" />';
			}
			$limage .= '</a>';
			$limage .= $this->highslide_img_not_found($id_link);
		}
		else{
			
			$limage ='<div>
						<a id="'.$id_link.'" class="highslide" href="'.$path_img.'" 
							onclick="return hs.expand(this, {'.$paras['override'].'});">';

			if(!isset($paras['display']) || (isset($paras['display']) && $paras['display']!='none')){
				$class = isset($paras['class'])?$paras['class']:'';
				$limage .= '<img  alt="'.$paras['url'].'" src="'.$thumb_img.'"  class="'.$class.'" '.$width.'  />';
			}
			
			$limage .= $content.'</a>';			
			
			$limage .= '</div>';
			
			if($paras['event']){				
				$limage .= "<script type='text/javascript'>
								function load_img_cookie(){																
									window.load = hs.expand(document.getElementById('".$id_link."'), {".$paras['override']."});	
									/*if(".$paras['notshowagain'].">0){
										Set_Cookie( '".$ip."', '".date("Ymd")."', ".$paras['notshowagain'].", '/', '', '' );
									}*/															
								}		
								if(!Get_Cookie('".$ip."') ){
									setTimeout(load_img_cookie, ".($paras['loaddelay']*1000).");	
								}	 
							</script>";						
			}
		}
		
		return $limage;
	}

	function highslide_html_type($paras, $content, $id_link, $id, $id_li, $maincontentid, $ip){	
							
		if($paras['override']!=''){ $paras['override']=",".$paras['override']; }
		$html = '<a href="#anco" id="'.$id_link.'" onclick="if(!hs.htmlExpand(this, { contentId: '.$id.$paras['override'].'})) display_none('.$id_li.'); return false;">'.$content.'</a>';

		$html .='<div class="highslide-html-content" id='.$id.'>';
		
		if(!isset($paras['notshowagaintime']) || ( isset($paras['notshowagaintime']) && !$paras['notshowagaintime']>0)) $paras['notshowagaintime'] = 7;
		
		if($paras['event'] && (!isset($paras['dismissbutton']) || $paras['dismissbutton']=="Yes")){			
			$paras['dismissbutton'] = true;							
		}
		else{
			$paras['dismissbutton']= false;
		}
		//first, load header of popup
		$html .= $this->caption_move();
		
		//load content of popup
		$html .= '<div class="highslide-body" id="'.$maincontentid.'">';
		$html .= $paras['content'];
		//load footer of popup		
		$html .= $this->caption_close($id_link, $id_li, $ip, $paras['event'], $paras['dismissbuton'], $paras['notshowagaintime']);
		
		//event onload popup
		if($paras['event']){	
			$html .= "<script type='text/javascript'>			
								function load_html_cookie(){									
									window.load = hs.htmlExpand(document.getElementById('".$id_link."'), {contentId: ".$id.$paras['override']."});
									if(".$paras['notshowagain'].">0){
										Set_Cookie( '".$ip."', true, ".$paras['notshowagain'].", '/', '', '' );		
									}													
								}		
								if(!Get_Cookie('".$ip."')){
									setTimeout(load_html_cookie, ".($paras['loaddelay']*1000).");	
								}	 
					</script>";									
		}
		return $html;
	}
	
	function highslide_html($paras, $content, $id_link, $id, $id_li){
		$paras['content'] = '';
		$maincontentid = rand(); $ip = md5('ip_user_client_html_content');
		if(isset($paras['contentid'])&& $paras['contentid']!=''){
			$paras['content'] = "<script type='text/javascript'>
						if(document.getElementById('".$paras['contentid']."')!=null){
						 	hs.outlineWhileAnimating = true;
							document.getElementById('".$maincontentid."').innerHTML = document.getElementById('".$paras['contentid']."').innerHTML;
							document.getElementById('".$paras['contentid']."').innerHTML ='';
						}
					  </script>";
		}
		return $this->highslide_html_type($paras, $content, $id_link, $id, $id_li, $maincontentid, $ip);
	}
	
	function highslide_slideshowcaption($paras, $content, $id_link, $_paththum){
		global $autoresize;
		
		$sPhysicPath = '';
		$sPhysicPath = $this->PhysicPath();		
				
		if (strpos($paras['url'], ",")===false) {
			$list_img = split("\n", $paras['url']);			
		}
		else{
			$list_img = split(",", $paras['url']);
		}
		
		$id = "'highslide-html-".$id_link."'";
		
		$html = '<div>';

		if ($paras['override']=='') {
			$paras['override'] = "outlineType:'rounded-white'";
		}
		
		for($i=0; $i<count($list_img); $i++){
			$path_img  = trim($list_img[$i]);
			$thumb_img = trim($list_img[$i]);
			$width = !$autoresize || !function_exists('gd_info')?'width="'.$paras['width'].'"':'';
			
			if( substr($path_img, 0, 4)!='http' && !is_file( $sPhysicPath.$_paththum.$path_img ) ){
				$html .='<a  id="thumb'.$i.'" class="highslide" href="#"  onclick="hs.htmlExpand(this, {contentId: '.$id.'}); return false;">';
				$html .= 	'<img src="'.$path_img.'" alt="'.$path_img.'" title="Click to enlarge"    '.$width .' />';			
				$html .= '</a>';
				echo $this->highslide_img_not_found($id_link);
			}
			else{	
				if( substr( $path_img, 0, 4 )!='http' ){		
					$path = $sPhysicPath. $_paththum. $path_img;
					if (file_exists( $path ) && $autoresize) {
						$obj = new JA_Resize_Images();								
						$thumb_img = $obj->processImage($path, $paras['width'], $paras['height']  );
					}
					else{
						$thumb_img = JURI::base().$_paththum.$path_img;
					}	
					$path_img = JURI::base().$_paththum.$path_img;			
				}												
				
				$html .= '<a  id="thumb'.$i.'" href="'.$path_img.'" style="padding-right:7px;"	
								class="highslide" onclick="return hs.expand(this,{'.$paras['override'].',captionId:\''.$id_link.'\', slideshowGroup:\''.$id_link.'\'});">';
				$html .= 	'<img src="'.$thumb_img.'" alt="'.$thumb_img.'" title="Click to enlarge"   '.$width.' />';
				$html .= '</a>';
			}
		}
		
		
		$html .= '<div class="highslide-caption" id="'.$id_link.'">
						<a href="#" onclick="return hs.previous(this); return false;" class="control" style="float:left; display: block">
							Previous
							<br/>
							<small style="font-weight: normal; text-transform: none">left arrow key</small>
	    				</a>
						<a href="#" onclick="return hs.next(this); return false;" class="control" 
								style="float:left; display: block; text-align: right; margin-left: 50px">
							Next
							<br/>
							<small style="font-weight: normal; text-transform: none">right arrow key</small>
						</a>
						<a href="#" onclick="return hs.close(this); return false;" class="control">Close</a>
						<a href="#" onclick="return false" class="highslide-move control">Move</a>
						<div style="clear:both">  </div>
					</div>';
		
		$html .= 	'</div>';		
		
	
		return $html;
	}

	function highslide_slideshowcontrolbar($paras, $content, $id_link, $_paththum){
		global $autoresize;
		
		$sPhysicPath = '';
		$sPhysicPath = $this->PhysicPath();
		
		$id = "'highslide-html-".$id_link."'";	
		$list_position = 'top left';
		if(isset($paras['positions']) && $paras['positions']!='')	$list_position = str_replace(',', ' ', $paras['positions']);

		if (!isset($paras['hideOnMouseOut'])|| $paras['hideOnMouseOut']!=1) $paras['hideOnMouseOut'] = 0;
		
		if (strpos($paras['url'], ",")===false) {
			$list_img = split("\n", $paras['url']);			
		}
		else{
			$list_img = split(",", $paras['url']);
		}
		
		$html = "<script type='text/javascript'>	
					if (hs.registerOverlay) {				
						hs.registerOverlay(
	    				{
								slideshowGroup: 'minigallery',
								overlayId: '$id_link',
								position: '".$list_position."',								
								hideOnMouseOut: true
							}
						);
						hs.outlineType = 'rounded-white';
						hs.captionEval = 'this.thumb.title';
	    			}
				</script>";
	
		$html.= '<div class="thumbwrapper">';	
		
		for($i=0; $i<count($list_img); $i++){
			
			$path_img  = trim($list_img[$i]);
			$thumb_img = trim($list_img[$i]);
			$width = !$autoresize || !function_exists('gd_info')?'width="'.$paras['width'].'"':'';
			if( substr($path_img, 0, 4)!='http' && !is_file( $sPhysicPath.$_paththum.$path_img ) ){
				
				$html .='<a  id="thumb'.$i.'" class="highslide" href="#"  onclick="hs.htmlExpand(this, {contentId: '.$id.'}); return false;">';
				$html .= 	'<img src="'.$path_img.'" alt="'.$path_img.'" title="Click to enlarge"  '.$width .' />';			
				$html .= '</a>';
				echo $this->highslide_img_not_found($id_link);
			}
			else{	
				if( substr( $path_img, 0, 4 )!='http' ){		
					$path = $sPhysicPath. $_paththum. $path_img;
					if (file_exists( $path ) && $autoresize) {
						$obj = new JA_Resize_Images();								
						$thumb_img = $obj->processImage($path, $paras['width'], $paras['height'] );
					}	
					else{
						$thumb_img = JURI::base().$_paththum.$path_img;
					}
					$path_img = JURI::base().$_paththum.$path_img;			
				}		
				
				
					
				$html .= '<a  id="thumb'.$i.'" href="'.$path_img.'" style="padding-right:7px;"	
								class="highslide"onclick="return hs.expand(this, {'.$paras['override'].',slideshowGroup: \'minigallery\'});">';
				$html .= 	'<img src="'.$thumb_img.'" alt="'.$thumb_img.'" title="Click to enlarge"  '.$width.'/>';
				$html .= '</a>';
			}
		}				
		
		$html .= '<div id="'.$id_link.'" class="highslide-overlay controlbar">
						<a href="#" class="previous" onclick="return hs.previous(this)" title="Previous (left arrow key)"></a>
						<a href="#" class="next" onclick="return hs.next(this)" title="Next (right arrow key)"></a>
					    <a href="#" class="highslide-move" onclick="return false" title="Click and drag to move"></a>
					    <a href="#" class="close" onclick="return hs.close(this)" title="Close"></a>
					</div>';
		$html .= '</div>';	
		
		return $html;
	}
	
	function highslide_flash($paras, $content, $id_link, $id, $_paththum){
		$sPhysicPath = $this->PhysicPath();
		$name_flash = $paras['url'];
		if(substr($name_flash,0,4)!='http'){
			$name_flash_1 = JURI::base().$_paththum.$name_flash;
		}
		$html = '';
		$id = "so_".rand();
		
		if($paras['override']!='') $paras['override'] = ','.$paras['override'];
		
		if(substr($name_flash,0,4)!='http' && !is_file($sPhysicPath.$_paththum.$name_flash)){			
			$id = "'highslide-html-".$id_link."'";
			$html .='<a id="'.$id_link.'" class="highslide" href="#"  onclick="hs.htmlExpand(this, {contentId: '.$id.'}); return false;">';
			$html .= $content;			
			$html .= '</a>';
			$html .= $this->highslide_img_not_found($id_link);
		}
		else{
			$ip = md5('ip_user_client_flash_file');
			$html  = '<div>';
			$html .= '<script type="text/javascript">
						hs.outlineType = "rounded-white";
						hs.outlineWhileAnimating = true;
						hs.allowSizeReduction = false;
						hs.preserveContent = false;
						var '.$id.' = new SWFObject("'.JURI::base().$_paththum.$name_flash.'", "my-flash", "'.$paras['width'].'", "'.$paras['height'].'", "7", "#FFFFFF");
						'.$id.'.addParam("wmode", "transparent");
					 </script>';
			$html .= '<a href="'.$name_flash_1.'" id="'.$id_link.'" onclick="return hs.htmlExpand(this, { swfObject: '.$id.$paras['override'].'} );" class="highslide">					
						'.$content.'
					</a>';	
			$html .= '</div>';	
			if($paras['event']){
				
				$html .= "<script type='text/javascript'>
								function load_flash_cookie(){									
									window.load = hs.htmlExpand(document.getElementById('".$id_link."'), { swfObject: ".$id.$paras['override']."} );	
									if(".$paras['notshowagain'].">0){
										Set_Cookie( '".$ip."', '".date("Ymd")."', ".$paras['notshowagain'].", '/', '', '' );
									}														
								}		
								if(!Get_Cookie('".$ip."')){									
									setTimeout(load_flash_cookie, ".($paras['loaddelay']*1000).");	
								}	 
						</script>";	
			}
		}
		return $html;
	}
	
	function highslide_iframe($paras, $content, $id_link, $id){
		$ip = md5('ip_user_client_iframe');
		if($paras['override']!='') $paras['override'] = ','.$paras['override'];
		
		$html  = '<div>';
		$html .= '<a id="'.$id_link.'" href="'.$paras['url'].'" onclick="return hs.htmlExpand(this, { objectType: \'iframe\''.$paras['override'].'  } )">
						'.$content.'
				  </a>';
		
		$html .= '</div>';	
		if($paras['event']){
			$html .= "<script type='text/javascript'>
								function load_iframe_cookie(){									
									window.load = hs.htmlExpand(document.getElementById('".$id_link."'), {objectType: 'iframe'".$paras['override']."});	
									if(".$paras['notshowagain'].">0){
										Set_Cookie( '".$ip."', '".date("Ymd")."', ".$paras['notshowagain'].", '/', '', '' );
									}															
								}		
								if(!Get_Cookie('".$ip."')){									
									setTimeout(load_iframe_cookie, ".($paras['loaddelay']*1000).");	
								}	 
					</script>";				
		}
		return $html;
	}
	
	function highslide_module($paras, $content, $id_link, $id, $id_li){
		$paras['content'] = '';
		$maincontentid = rand();
		$ip = md5('ip_user_client_module_content');
		
		$a = ''; $module_content = '';
		$list_module = '';
		if(isset($paras['modulename'])) $list_module = split(",", $paras['modulename']);
		
		for($i=0; $i<count($list_module); $i++){
			if($list_module[$i]!='mod_jahighslide'){
				$module =  JModuleHelper::getModule(substr(trim($list_module[$i]), 4 ));
				if($module && $module->id){
					$module_content = JModuleHelper::renderModule($module, array());
				}		
			}		
		}		
		if($module_content==''){
			$paras['content'] .= '<div class="highslide-body" style="text-align:center;width:90%;">
								<br/>
								Modue does not exist or is unpublished by Admin !
								<br/>
								<br/><br/>
						</div>';
		}
		else{
			$paras['content'] .= $module_content;
		}
		return $this->highslide_html_type($paras, $content, $id_link, $id, $id_li, $maincontentid, $ip);		
	}
	
	function highslide_modules($paras, $content, $id_link, $id, $id_li){						
		$paras['content'] = '';
		$maincontentid = rand();
		$ip = md5('ip_user_client_modules_content');
		
		$a = ''; $module_content = '';
		$list_postion = array();
		if(isset($paras['position'])) $list_postion = split(",", $paras['position']);
		
		$module_content = '';
		for($i=0; $i<count($list_postion); $i++){
			$list =  JModuleHelper::getModules(trim($list_postion[$i]));
			for($j=0; $j<count($list); $j++){
				if($list[$j]->module!='mod_jahighslide'){
					$module_content .= "<div class=\"modules-title\"><h3>".$list[$j]->title."</h3></div>";
					$module_content .= "<div style=\"position:relative\">";	
					$module_content .= JModuleHelper::renderModule($list[$j], array());
					$module_content .= "</div>";	
					$module_content .= "<br/>";
				}
			}
		}
					
		if($module_content==''){
			$paras['content'] .= '<div class="highslide-body" style="text-align:center;width:90%;">
								<br/>
								Modue does not exist or is unpublished by Admin !
								<br/>
								<br/><br/>
						</div>';
		}
		else{
			$paras['content'] .= $module_content;
		}
		return $this->highslide_html_type($paras, $content, $id_link, $id, $id_li, $maincontentid, $ip);					
	}

	function highslide_item($paras, $content, $id_link, $id){
		$ip = md5('ip_user_client_item_content');	
		$id = "'highslide-html-".$id_link."'";
		$html  = '<div>';
		if($paras['override']!='') $paras['override'] = ','.$paras['override'];
		$html .= '<a id="'.$id_link.'" href="index.php?option=com_content&view=article&id='.$paras['itemid'].'&tmpl=component" 
						onclick="if(!hs.htmlExpand(this, { objectType:\'iframe\''.$paras['override'].'  } )) return false;">
						'.$content.'
				  </a>';
		
		$html .= '</div>';	
		if($paras['event']){
			
			$html .= "<script type='text/javascript'>
								function load_content_cookie(){									
									window.load = hs.htmlExpand(document.getElementById('".$id_link."'), {objectType:'iframe'".$paras['override']."});	
									if(".$paras['notshowagain'].">0){
										Set_Cookie( '".$ip."', '".date("Ymd")."', ".$paras['notshowagain'].", '/', '', '' );
									}														
								}		
								if(!Get_Cookie('".$ip."')){									
									setTimeout(load_content_cookie, ".($paras['loaddelay']*1000).");	
								}	 
					</script>";	

				//hs.addEventListener(window, 'load', function(){hs.htmlExpand(document.getElementById('".$id_link."'), {objectType: ".$type.",".$paras['override']."});});

		}
		return $html;
	}
	
	function highslide_ajax($paras, $content, $id_link, $id){
		//set name for cookie
		$ip = md5('ip_user_client_ajaxcontent');	
		$url = '';
		$url .= $paras['url'];
		if(isset($paras['contentid'])&& $paras['contentid']!='') $url.="#".$paras['contentid'];
		$id = "'highslide-html-".$id_link."'";		
		$html = '<a href="'.$url.'" id="'.$id_link.'"
						onclick="return hs.htmlExpand(this, { objectType:\'ajax\', preserveContent: true, '.$paras['override'].'} );">
					'.$content.'
				</a>';
		
		if($paras['event']){
			$html .= "<script type='text/javascript'>
								function load_content_cookie(){									
									window.load = hs.htmlExpand(document.getElementById('".$id_link."'), {objectType: 'ajax', preserveContent: true,".$paras['override']."});	
									if(".$paras['notshowagain'].">0){
										Set_Cookie( '".$ip."', '".date("Ymd")."', ".$paras['notshowagain'].", '/', '', '' );
									}
								}		
								if(!Get_Cookie('".$ip."')){									
									setTimeout(load_content_cookie, ".($paras['loaddelay']*1000).");	
								}	 
					</script>";				
		}
		return $html;
	}
	function highslide_img_not_found($id_link){		
			$limage = '<div class="highslide-html-content" id="highslide-html-'.$id_link.'">
							<div class="highslide-header">
								<ul>
									<li class="highslide-move">
										<a href="#" onclick="return false">Move</a>
									</li>
									<li class="highslide-close">
										<a href="#" onclick="return hs.close(this)">Close</a>
									</li>
								</ul>	    
							</div>
							<div class="highslide-body" style="text-align:center;width:90%;">
								<br/>
								Wrong image location. There is no image at 
								<a href=" httt://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'"> httt://'.$_SERVER['HTTP_HOST'].$_SERVER['PHP_SELF'].'</a>
								<br/>								
							</div>
							<div class="highslide-footer">
								<div>
									<span class="highslide-resize" title="Resize">
										<span></span>
									</span>
								</div>
							</div>
						</div>';
			return $limage;
	}
	function PhysicPath(){		
		return JPATH_SITE.DS;
	}
	function close_endless($notshowagaintime, $ip){
		$limage = '<script type="text/javascript">	
								function close_endless(obj){
									Set_Cookie( "'.$ip.'","'.date("Ymd").'", '.$notshowagaintime.', "/", "", "" );
									return hs.close(obj);															
								}									
					</script>';
		return $limage;
	}
	function caption_move(){
		
		$limage = '									    
									<div class="highslide-header" >										
										<ul >
											<li class="highslide-move">
												<a href="#" onclick="return false">Move</a>
											</li>											
										</ul>	    
									</div>';
		return $limage;
	}
	function caption_close($id_link, $id_li, $ip, $load, $dismissbutton, $notshowagaintime){
		$html = '</div>
					<hr/>
					<div class="highslide-footer" style="margin-top:-10px; height:23px;">
						<div>
							<span class="" title="Resize" >
								<span>
									<ul id="ul_footer">';
		if($load && $dismissbutton=='true'){															
				$html .='					<li class="highslide-close" id='.$id_li.' style="height:10px">
												<input type="checkbox" id="check_'.$id_link.'" /><label for="check_'.$id_link.'" style="font-size:12px;height:16px; cursor:pointer;color: gray;">Do not show again</label>												
											</li>																						
											';
		}
		$id_link = "'".$id_link."'";
		$ip =  "'".$ip."'";
		$html .= '							<li class="highslide-close" style="top:3px; float:right" >
												<a href="#" onclick="check_close('.$id_link.','.$notshowagaintime.', '.$ip.');return hs.close(this)">Close</a>
											</li>';
		$html .='
										</ul>	    
								</span>
							</span>
						</div>
					</div>
				</div>';	
		return $html;
	}
	
	function getPattern ($tag) {
	  $regex = '#{'.$tag.' ([^}]*)}([^{]*){/'.$tag.'}#m';
	  return $regex;
	}
	
	function parseParams($params) {
		$params = html_entity_decode ($params,ENT_QUOTES);
		$regex = "/\s*([^=\s]+)\s*=\s*('([^']*)'|\"([^\"]*)\"|([^\s]*))/";
		preg_match_all($regex, $params, $matches);
		
		 $paramarray = null;
		 if(count($matches)){
			$paramarray = array();
				for ($i=0;$i<count($matches[1]);$i++){ 
				  $key = $matches[1][$i];
				  $val = $matches[3][$i]?$matches[3][$i]:($matches[4][$i]?$matches[4][$i]:$matches[5][$i]);
				  $paramarray[$key] = $val;
				}
		  }
		  return $paramarray;
	}
}
?>