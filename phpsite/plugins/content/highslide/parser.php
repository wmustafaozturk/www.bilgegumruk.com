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

if (!class_exists('ReplaceCallbackParser')) {
	define ('_OPEN_TAG', 1);
	define ('_CLOSE_TAG', 2);
	define ('_FULL_TAG', 3);
	class ReplaceCallbackParser {
		var $_source = '';
		var $_tagname = '';
		var $_open = '{';
		var $_close = '}';
		var $_callback = '';
		function ReplaceCallbackParser($tagName, $tagAttr='{', $tagClose='}') {
			$this->_tagname = $tagName;
			$this->_open = $tagAttr;
			$this->_close = $tagClose;
		}
		
		function parse ($strinput, $callback) {
			$this->_source = $strinput;
			$this->_callback = $callback;
			//Build delimiter
			$regex = "/(".$this->_open . "[\/]?".$this->_tagname."[^}]*".$this->_close.")/";
			$arr = preg_split($regex, $this->_source, -1, PREG_SPLIT_DELIM_CAPTURE | PREG_SPLIT_NO_EMPTY);
			
			$empty = true;
			$matches = array();
			$tagAttr = '';
			$isOpened = false;
	
			$stroutput = '';
			foreach ($arr as $item) {
		    	$tagtype = $this->parseTag($item);
		    	if ($tagtype == _OPEN_TAG) {
		    		if ($isOpened) {
		    			$stroutput .= $this->callBack ($tagAttr, $tagContent);
		    			$isOpened = false;
		    		}
		    		$tagAttr = substr($item, strlen($this->_open)+strlen($this->_tagname),strlen($item)-strlen($this->_tagname)-strlen($this->_close)-strlen($this->_open));
		    		$tagContent = '';
		    		$isOpened = true;
		    		
		    		continue;
		    	}
		    	if ($tagtype == _FULL_TAG) {
		    		if ($isOpened) {
		    			$stroutput .= $this->callBack ($tagAttr, $tagContent);
		    			$isOpened = false;
		    		}
		    		$tagAttr = substr($item, strlen($this->_open)+strlen($this->_tagname),strlen($item)-strlen($this->_close)-strlen($this->_tagname)-strlen($this->_open)-1);
		    		$tagContent = '';
		    		$stroutput .= $this->callBack ($tagAttr, $tagContent);
		    		continue;
		    	}
		    	if ($tagtype == _CLOSE_TAG) {
		  			$stroutput .= $this->callBack ($tagAttr, $tagContent);
		  			$isOpened = false;
		    		continue;
		    	}
		    	
		  		if ($isOpened) {
		  			$tagContent .= $item;
		  		} else {
		  			$stroutput .= $item;
		  		}	  		
		    }
			if ($isOpened) {
				$stroutput .= $this->callBack ($tagAttr, $tagContent);
				$isOpened = false;
			}
			
			return $stroutput;
		}
		
		function parseTag ($tag) {
			$arr = split ($this->_tagname, $tag, 2);
			if (count($arr) < 2) return 0;
	//print_r ($arr);		
			if ($arr[0] == $this->_open) {
				if (substr($arr[1], - (strlen ($this->_close)+1)) == '/'.$this->_close) return _FULL_TAG;
				else return _OPEN_TAG;
			}
			if ($arr[0] == $this->_open.'/') return _CLOSE_TAG;
			return 0;
		}
		
		function callBack ($tagAttr, $tagContent) {
			if (is_array($this->_callback) && count($this->_callback) >= 2) {
				$callbackobj = $this->_callback[0];
				$callbackmethod = $this->_callback[1]; 
				return $callbackobj->$callbackmethod($tagAttr, $tagContent);
			} else {
				if (function_exists($this->_callback)) {
					$callback = $this->_callback;
					return $callback($tagAttr, $tagContent);
				}
			}
		}	
	}
}

class JA_Resize_Images{
	
	function processImage ( &$img, $width, $height, $keepratio=1) {
		if(!$img) return;
		if (substr($img, 0, 4)!='http') {
			$img = $img;
		}
		$img = str_replace(JURI::base(),'',$img);
		$img = str_replace("'",'',$img);
		$img = rawurldecode($img);		
		$imagesurl = (file_exists($img)) ? $this->jaResize($img,$width,$height, $keepratio) :  '' ;
		return $imagesurl;
	}
	
	function jaResize($image,$max_width,$max_height, $keepratio=1){
		$path = JPATH_SITE;
		$image = str_replace (array('\\','/'), DS, $image);
		$image = str_replace ($path.DS, '', $image);
		$imagepath = $path.DS.$image;
		if (!function_exists('imagecreatetruecolor')) return str_replace ('\\', '/', $image);
		$sizeThumb = getimagesize($imagepath);		
		$width = $sizeThumb[0];
		$height = $sizeThumb[1];
		if(!$max_width && !$max_height) {
			$max_width = $width;
			$max_height = $height;
		}else{
			if(!$max_width) $max_width = 1000;
			if(!$max_height) $max_height = 1000;
		}
		if ($keepratio) {
			$x_ratio = $max_width / $width;
			$y_ratio = $max_height / $height;
			if (($width <= $max_width) && ($height <= $max_height) ) {
				$tn_width = $width;
				$tn_height = $height;
			} else if (($x_ratio * $height) < $max_height) {
				$tn_height = ceil($x_ratio * $height);
				$tn_width = $max_width;
			} else {
				$tn_width = ceil($y_ratio * $width);
				$tn_height = $max_height;
			}
		}else{
			$tn_width = $max_width;
			$tn_height = $max_height;
		}
		// read image
		$ext = strtolower(substr(strrchr($image, '.'), 1)); // get the file extension
		$rzname = strtolower(substr($image, 0, strpos($image,'.')))."_{$tn_width}_{$tn_height}.{$ext}"; // get the file extension
		$resized = $path.DS.'images'.DS.'resized'.DS.$rzname;
		if(file_exists($resized)){
			$smallImg = getimagesize($resized);
			if (($smallImg[0] <= $tn_width && $smallImg[1] == $tn_height) ||
					($smallImg[1] <= $tn_height && $smallImg[0] == $tn_width)) {
				return "images/resized/".str_replace('\\','/',$rzname);
			}
		}
		
		if(!file_exists($path.DS.'images'.DS.'resized'.DS) && !mkdir($path.DS.'images'.DS.'resized'.DS,0755)) return '';
		$folders = explode(DS,$image);
		$tmppath = $path.DS.'images'.DS.'resized'.DS;
		for($i=0;$i < count($folders)-1; $i++){
			if(!file_exists($tmppath.$folders[$i]) && !mkdir($tmppath.$folders[$i],0755)) return '';
			$tmppath = $tmppath.$folders[$i].DS;
		}
		switch ($ext) {
		case 'jpg':     // jpg
			$src = imagecreatefromjpeg($imagepath);
			break;
		case 'png':     // png
			$src = imagecreatefrompng($imagepathe);
			break;
		case 'gif':     // gif
			$src = imagecreatefromgif($imagepath);
			break;
		default:
			return '';
		}
		$dst = imagecreatetruecolor($tn_width,$tn_height);
		//imageantialias ($dst, true);
		if (function_exists('imageantialias')) imageantialias ($dst, true);
		imagecopyresampled ($dst, $src, 0, 0, 0, 0, $tn_width, $tn_height, $width, $height);
		imagejpeg($dst, $resized, 90); // write the thumbnail to cache as well...
		
		return "images/resized/".str_replace('\\','/',$rzname);
	}

}
?>
