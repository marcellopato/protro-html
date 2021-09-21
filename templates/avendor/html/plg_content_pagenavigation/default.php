<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  Content.pagenavigation
 *
 * @copyright   Copyright (C) 2005 - 2013 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>
<hr class="mt30 mb30" />
<div class="page-navigation text-center">
	<a class="btn btn-default btn-lg prev <?php if (!$row->prev) echo 'disabled' ;?>" href="<?php if ($row->prev) { echo $row->prev; } else { echo 'javascript:void(0)'; } ?>" rel="prev"><i class="fa fa-chevron-left"></i></a>
	<a class="btn btn-default btn-lg next <?php if (!$row->next) echo 'disabled' ;?>" href="<?php if ($row->next) { echo $row->next; } else { echo 'javascript:void(0)'; } ?>" rel="next"><i class="fa fa-chevron-right"></i></a>
</div>

