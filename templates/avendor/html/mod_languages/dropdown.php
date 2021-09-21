<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_languages
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<li>
	<div class="dropdown">
		<a href="#" data-toggle="dropdown" class="dropdown-toggle"><i class="fa fa-globe"></i><?php echo $params->get('full_name', 1) ? $language->title_native : strtoupper($language->sef);?> <b class="caret"></b></a>
		<ul class="dropdown-menu dropdown-menu-right">
			<?php foreach ($list as $language) : ?>
			<?php if ($params->get('show_active', 0) || !$language->active):?>
			<li class="<?php echo $language->active ? 'active' : '';?>" dir="<?php echo JLanguage::getInstance($language->lang_code)->isRTL() ? 'rtl' : 'ltr' ?>"><a href="<?php echo $language->link;?>"><?php echo $params->get('full_name', 1) ? $language->title_native : strtoupper($language->sef);?></a></li>
			<?php endif;?>
			<?php endforeach;?>
		</ul>
	</div>
</li>




