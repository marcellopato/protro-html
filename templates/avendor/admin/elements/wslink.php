<?php

/*
# -------------------------------------------------------------------------
# Custom Field Link for Joomla Backend
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

class JFormFieldWsLink extends JFormField
{
	protected $type = 'WsLink';
	

	
	protected function getLabel() 
	{
	   return '';
  }
  
	protected function getInput()
	{
    $html = array();
           
    $label = $this->element['label'];
		$label = $this->translateLabel ? JText::_($label) : $label;     
    $link = $this->element['link']; 
		$link = $this->translateLabel ? JText::_($link) : $link;
		
    $html[] = '<div class="ws-link"><a class="btn btn-primary btn-icon-left" target="_blank" href="';
    $html[] = $link;
    $html[] = '"><i class="fa fa-angle-up"></i>';
    $html[] = $label;
    $html[] = '</a></div>';

    return implode('',$html);

	}
}
