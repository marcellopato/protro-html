<?php
defined('_JEXEC') or die;
if (!isset($this->error)) {
	$this->error = JError::raiseWarning(404, JText::_('JERROR_ALERTNOAUTHOR'));
	$this->debug = false; 
}else{
	switch($this->error->getCode()) {
		case "404":
			JApplication::redirect("index.php/404-error"); // replace the redirect URL with your own
			break;
		case "403":
			JApplication::redirect("index.php/404-error"); // replace the redirect URL with your own
			break;
	}
}  