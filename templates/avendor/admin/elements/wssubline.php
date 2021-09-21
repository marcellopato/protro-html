<?php

/*
# -------------------------------------------------------------------------
# Custom Field Subline for Joomla Backend
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

class JFormFieldWsSubline extends JFormField
{
	protected $type = 'WsSubline';
	

	
	protected function getLabel() 
	{
	   return '';
  }
  
	protected function getInput()
	{
    $html = array();
           
    $label = $this->element['label'];
		$label = $this->translateLabel ? JText::_($label) : $label;     
		
    $html[] = '<div class="ws-subline">';
    $html[] = $label;
    $html[] = '</div>';

    return implode('',$html);

	}
}
