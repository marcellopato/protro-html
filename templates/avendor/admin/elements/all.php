<?php

/*
# -------------------------------------------------------------------------
# Custom Field All for Joomla Backend
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

class JFormFieldAll extends JFormField {
	protected $type = 'All';
	
	protected function getLabel() 
	{
	   return ' ';
  }
	
	protected function getInput() {
	
		$module_id = JRequest::getInt('id', 0);
		if ($module_id == 0) {
			$module_cid = JRequest::getVar('cid', array());
			if (count($module_cid)) $module_id = $module_cid[0];
		}
		
		return '

<div class="ws-text">
		
	<p>To insert this module '.$module_id.' inside an article, use the {loadposition xx} command, as follows:</p>

<ol>
<li>Create a module and set its position to any value that doesn\'t conflict with an existing template position. You can type in the position value instead of selecting it from the drop-down list. For example, use the position myposition.</li>
<li>Assign the module to the Menu Items that contain the articles that you want the module to show in. You can also just assign the module to all Menu Items.</li>
<li>Edit the articles where you want this module to appear and insert the text {loadposition myposition} in the article at the place where you want the module.</li>
</ol>

<ul>
<li>Create a module and set its <a href="http://www.google.de">position</a> to any value that doesn\'t conflict with an existing template position. You can type in the position value instead of selecting it from the drop-down list. For example, use the position myposition.</li>
<li>Assign the module to the Menu Items that contain the <span class="ws-color">articles that you want</span> the module to show in. You can also just assign the module to all Menu Items.</li>
<li>Edit the articles where you want this module to <span class="ws-color label">appear</span> and insert the text {loadposition myposition} in the article at the place where you want the module.</li>
</ul>

<p>Note that this only works when the Content - <b>Load Module</b> plugin is enabled. If this plugin is disabled, the text {loadposition myposition} shows unchanged in the article.</p>
<hr />
<p>Note that this only works when the Content - <b>Load Module</b> plugin is enabled. If this plugin is disabled, the text {loadposition myposition} shows unchanged in the article.</p>

<p><a href="#" class="btn">Some Text here</a> <a href="#" class="btn btn-danger">Some Text here</a></p>

<p>Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Maecenas faucibus mollis interdum. Donec sed odio dui. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cum sociis natoque penatibus et magnis dis parturient montes, <span class="ws-color">nascetur ridiculus</span> mus. Fusce dapibus, tellus ac cursus commodo, <span class="ws-color label">tortor mauris condimentum nibh</span>, ut fermentum massa justo sit amet risus. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur. Vestibulum id ligula porta felis euismod semper. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>

<p>Alternative: loadmodule</p>

<h1>Some Headline here</h1>

<h2>Some Headline here</h2>

<h3>Some Headline here</h3>

<h4>Some Headline here</h4>

<h5>Some Headline here</h5>

<code>Here goes my Code</code>

<code>Here goes my Code. Cras mattis consectetur purus sit amet fermentum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras mattis consectetur purus sit amet fermentum. Nullam quis risus eget urna mollis ornare vel eu leo. Nulla vitae elit libero, a pharetra augue. Vestibulum id ligula porta felis euismod semper. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Aenean lacinia bibendum nulla sed consectetur. Sed posuere consectetur est at lobortis. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</code>

<p>An alternative to "{loadposition xx}" is the "{loadmodule yyy}" variation which is handled by the same plugin.</p>

<p>In this case the plugin looks for the first module that who\'s type matches the string \'yyy\'. So, you could load a "mod_wsaccordion" module by placing {loadmodule wsaccordion} in your text.</p>

</div>';
	}
}
