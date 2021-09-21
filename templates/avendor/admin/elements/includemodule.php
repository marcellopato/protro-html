<?php

/*
# -------------------------------------------------------------------------
# Custom Field IncludeModule for Joomla Backend
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

class JFormFieldIncludemodule extends JFormField {
	protected $type = 'Includemodule';
	
	protected function getLabel() 
	{
	   return ' ';
  }
	
	protected function getInput() {
		return '

<div class="ws-text">
	
	<h1>How to include this Module in a Article?</h1>
	
	<p>To insert this module inside an article, use the <span class="ws-color label">{loadposition xxx}</span> Shortcode command, as follows:</p>

	<ol>
		<li>Set its Module position to any value <b>that doesn\'t conflict with an existing template position</b>. You can type in the position value instead of selecting it from the drop-down list. For example, use the position myposition.</li>
		<li>Assign the module to the Menu Items that contain the articles that you want the module to show in. You can also just assign the module <b>to all Menu Items</b>. Please don\'t forget to set the Status to <b>published</b>.</li>
		<li>Edit the articles where you want this module to appear and insert the text {loadposition myposition} in the article at the place where you want the module.</li>
	</ol>

	<p><span class="ws-color">Note that this only works when the Content - <b>Load Module</b> plugin is enabled</span>. If this plugin is disabled, the text {loadposition myposition} shows unchanged in the article. To activate the Plugin please navigate to Extensions -> Plug-In Manager -> search for <b>load</b> and set this Plugin to acitvated.</p>
	<hr />
	
	<h1>Alternativ Method</h1>
	
	<p>An alternative to "{loadposition xxx}" is the "{loadmodule yyy}" variation which is handled by the same plugin.</p>

	<p>In this case the plugin looks for the first module that who\'s type matches the string \'yyy\'. So, you could load a "mod_modulename" module by placing {loadmodule modulename} in your text.</p>
	
	<hr />
	
	<h1>Source for Loadposition</h1>
	
	<p>You can also view the original Documentation of the Loadposition Plugin directly at the Joomla Docs. This site is permanent updated.</p>
	
	<p><a href="http://docs.joomla.org/How_do_you_put_a_module_inside_an_article%3F" target="_blank" title="" class="btn">See Joomla Docs</a></p>

</div>';
	}
}
