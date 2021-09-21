<?php
/**
 * @version   $Id: item.php 18937 2014-02-21 22:54:29Z btowles $
 * @author    RocketTheme http://www.rockettheme.com
 * @copyright Copyright (C) 2007 - 2014 RocketTheme, LLC
 * @license   http://www.gnu.org/licenses/gpl-2.0.html GNU/GPLv2 only
 */

/**
 * @var $item RokSprocket_Item
 */
?>
<li<?php echo strlen($item->custom_tags) ? ' class="'.$item->custom_tags.'"' : ''; ?> data-mosaic-item>
	<div class="sprocket-mosaic-item" data-mosaic-content>
		<?php echo $item->custom_ordering_items; ?>
		<div class="overlay-wrapper">
			<img src="<?php if ($item->getPrimaryImage()) :?><?php echo $item->getPrimaryImage()->getSource(); ?><?php endif; ?>" alt="<?php if ($item->getTitle()): ?><?php echo $item->getTitle();?><?php endif; ?>">                                  
			<div class="overlay-wrapper-content">
				<?php if ($item->getTitle()): ?>
				<div class="overlay-title"><h3><?php echo $item->getTitle();?></h3></div>
				<?php endif; ?>
				<div class="overlay-details">
					<a class="color-white" href="<?php if ($item->getPrimaryLink()) : ?><?php echo $item->getPrimaryLink()->getUrl(); ?><?php endif; ?>"><span class="fa fa-link"></span></a>                                    	
				</div>
				<div class="overlay-bg"></div>
			</div>
		</div>										
	</div>
</li>
