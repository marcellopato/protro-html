<?php

/*
# -------------------------------------------------------------------------
# Custom Field iFrame for Joomla Backend
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

class JFormFieldWsIframe extends JFormField
{
	protected $type = 'WsIframe';
	

	
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
		$sizex = $this->element['sizex']; 
		$sizex = $this->translateLabel ? JText::_($sizex) : $sizex;
		$sizey = $this->element['sizey']; 
		$sizey = $this->translateLabel ? JText::_($sizey) : $sizey;
		
    $html[] = '<div class="ws-image"><a class="modal-button btn btn-primary btn-icon-left" rel="{handler: \'iframe\', size: {x: '.$sizex.', y: '.$sizey.'}}" href="';
    $html[] = $link;
    $html[] = '"><i class="fa fa-angle-up"></i>';
    $html[] = $label;
    $html[] = '</a></div>';

    return implode('',$html);

	}
}
