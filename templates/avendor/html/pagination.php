<?php
// no direct access
defined('_JEXEC') or die('Restricted access');

function pagination_list_render($list) {
	// Initialize variables
	$html = '<ul class="pagination">';
	
	if ($list['start']['active']==1)   $html .= $list['start']['data'];
	if ($list['previous']['active']==1) $html .= $list['previous']['data'];

	foreach ($list['pages'] as $page) {
		$html .= $page['data'];
	}

	if ($list['next']['active']==1) $html .= $list['next']['data'];
	if ($list['end']['active']==1)  $html .= $list['end']['data'];

	$html .= "</ul>";
	
	return $html;
}

function pagination_item_active(&$item) {
	
	$cls = '';
	
    if ($item->text == JText::_('JNEXT')) { $item->text = '&raquo;'; $cls = "arrow"; }
    if ($item->text == JText::_('JPREV')) { $item->text = '&laquo;'; $cls = "arrow"; }
	if ($item->text == JText::_('JLIB_HTML_START')) { $cls = "first"; }
    if ($item->text == JText::_('JLIB_HTML_END'))   { $cls = "last"; }
	
    return "<li><a class=\"".$cls."\" href=\"".$item->link."\" title=\"".$item->text."\">".$item->text."</a></li>";
}

function pagination_item_inactive(&$item) {
	return "<li class=\"current\"><a href=\"\">".$item->text."</a></li>";
}