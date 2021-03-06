<?php
/**
 * @package     Joomla.Site
 * @subpackage  com_search
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>

<div class="search-results<?php echo $this->pageclass_sfx; ?>">
<?php foreach ($this->results as $result) : ?>


		
		
  <!--
	<?php if ($result->section) : ?>
		<dd class="result-category">
			<span class="small<?php echo $this->pageclass_sfx; ?>">
				(<?php echo $this->escape($result->section); ?>)
			</span>
		</dd>
	<?php endif; ?>
  -->
	<!--
	<?php if ($this->params->get('show_date')) : ?>
		<dd class="result-created<?php echo $this->pageclass_sfx; ?>">
			<?php echo JText::sprintf('JGLOBAL_CREATED_DATE_ON', $result->created); ?>
		</dd>
	<?php endif; ?>
	-->
	
	<div class="search-results-item">
    <div class="search-number"><?php echo $this->pagination->limitstart + $result->count.'.';?></div>
    <h4>
      <?php if ($result->href) :?>
			<a href="<?php echo JRoute::_($result->href); ?>"<?php if ($result->browsernav == 1) :?> target="_blank"<?php endif;?>>
      <?php echo $this->escape($result->title);?>
			</a>
      <?php else:?>
			<?php echo $this->escape($result->title);?>
      <?php endif; ?>
    </h4>
    <p><?php echo $result->text; ?></p>
    
    <?php if ($result->href) :?>
		<a class="btn btn-xs btn-primary btn-alt" href="<?php echo JRoute::_($result->href); ?>"<?php if ($result->browsernav == 1) :?> target="_blank"<?php endif;?>>
      {icon-livicon name="more" size="20" color="original" colorhover="#ffffff" animate="true" loop="false" iteration="1" duration="auto" onparent="true"}
		</a>
    <?php else:?>
		<?php echo $this->escape($result->title);?>
    <?php endif; ?>
    
  </div>
	
	
	
	
	
<?php endforeach; ?>
</div>

<div class="pagination">
	<?php echo $this->pagination->getPagesLinks(); ?>
</div>



