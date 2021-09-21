<?php

/*
# -------------------------------------------------------------------------
# Custom Field Documentation for Joomla Backend
# -------------------------------------------------------------------------
# author     WS-Theme.com
# copyright  Copyright (C) 2013 WS-Theme.com. All Rights Reserved.
# @license - http://www.gnu.org/licenses/gpl-3.0.html GNU/GPL
# Websites:  http://www.ws-theme.com
# -------------------------------------------------------------------------
*/

// no direct access
defined('JPATH_BASE') or die;

jimport('joomla.form.formfield');

class JFormFieldWsDocumentation extends JFormField
{
	protected $type = 'WsDocumentation';
	

	
	protected function getLabel() 
	{
	   return '';
  }
  
	protected function getInput()
	{
    $html = array();
           
    $headline = $this->element['headline'];
		$headline = $this->translateLabel ? JText::_($headline) : $headline;     
    $text = $this->element['text']; 
		$text = $this->translateLabel ? JText::_($text) : $text;
		$url = $this->element['url']; 
		$url = $this->translateLabel ? JText::_($url) : $url;
		
    $html[] = '<div class="ws-headline" style="margin-bottom:30px;"><i class="fa fa-file"></i>'.$headline.'</div><div class="ws-text" style="margin-bottom:30px;"><iframe style="margin:0;padding:0;border:0;width:100%;height:800px;" src="'.$url.'" width="100%" height="800" name="documentation"></iframe></div>';

    return implode('',$html);

	}
}
