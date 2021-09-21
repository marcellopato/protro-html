<?php
/**
 * @package		Joomla.Site
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

// no direct access
defined('_JEXEC') or die;

/**
 * This is a file to add template specific chrome to module rendering.  To use it you would
 * set the style attribute for the given module(s) include in your template to use the style
 * for each given modChrome function.
 *
 * eg.  To render a module mod_test in the sliders style, you would use the following include:
 * <jdoc:include type="module" name="test" style="slider" />
 *
 * This gives template designers ultimate control over how modules are rendered.
 *
 * NOTICE: All chrome wrapping methods should be named: modChrome_{STYLE} and take the same
 * two arguments.
 *
 * This module chrome file creates custom output for modules used with the Atomic template.
 * The first function wraps modules using the "container" style in a DIV. The second function
 * uses the "bottommodule" style to change the header on the bottom modules to H6. The third
 * function uses the "sidebar" style to change the header on the sidebar to H3.
 */

function modChrome_avendor($module, &$params, &$attribs)
{
	$moduleTag      = $params->get('module_tag', 'div');
	$headerTag      = htmlspecialchars($params->get('header_tag', 'h3'));
	$bootstrapSize  = (int) $params->get('bootstrap_size', 0);
	$moduleClass    = $bootstrapSize != 0 ? ' col-md-' . $bootstrapSize : '';

	// Temporarily store header class in variable
	$headerClass	= $params->get('header_class');
	$headerClass	= !empty($headerClass) ? ' class="' . htmlspecialchars($headerClass) . '"' : '';

	if (!empty ($module->content)) : ?>
		<<?php echo $moduleTag; ?> class="moduletable <?php echo htmlspecialchars($params->get('moduleclass_sfx')) . $moduleClass; ?>">

		<?php if ((bool) $module->showtitle) :?>
			<<?php echo $headerTag . $headerClass . '><span>' . $module->title; ?></span></<?php echo $headerTag; ?>>
		<?php endif; ?>

			<?php echo $module->content; ?>

		</<?php echo $moduleTag; ?>>

	<?php endif;
}

function modChrome_avendor_sidebar($module, &$params, &$attribs)
{
	$moduleTag      = $params->get('module_tag', 'div');
	$headerTag      = htmlspecialchars($params->get('header_tag', 'h4'));
	$bootstrapSize  = (int) $params->get('bootstrap_size', 0);
	$moduleClass    = $bootstrapSize != 0 ? ' col-md-' . $bootstrapSize : '';

	// Temporarily store header class in variable
	$headerClass	= $params->get('header_class');
	$headerClass	= !empty($headerClass) ? ' class="' . htmlspecialchars($headerClass) . '"' : '';

	if (!empty ($module->content)) : ?>
		<<?php echo $moduleTag; ?> class="sidebar-widget <?php echo htmlspecialchars($params->get('moduleclass_sfx')) . $moduleClass; ?>">

		<?php if ((bool) $module->showtitle) :?>
			<<?php echo $headerTag; ?> class="title-widget fancy-title <?php echo $headerClass; ?>" ><span><?php echo $module->title; ?></span></<?php echo $headerTag; ?>>
		<?php endif; ?>

			<?php echo $module->content; ?>

		</<?php echo $moduleTag; ?>>

	<?php endif;
}

function modChrome_Well($module, &$params, &$attribs)
{
	$moduleTag      = $params->get('module_tag', 'div');
	$headerTag      = htmlspecialchars($params->get('header_tag', 'h3'));
	$bootstrapSize  = (int) $params->get('bootstrap_size', 0);
	$moduleClass    = $bootstrapSize != 0 ? ' col-md-' . $bootstrapSize : '';

	// Temporarily store header class in variable
	$headerClass	= $params->get('header_class');
	$headerClass	= !empty($headerClass) ? ' class="' . htmlspecialchars($headerClass) . '"' : '';

	if (!empty ($module->content)) : ?>
		<<?php echo $moduleTag; ?> class="moduletable well <?php echo htmlspecialchars($params->get('moduleclass_sfx')) . $moduleClass; ?>">

		<?php if ((bool) $module->showtitle) :?>
			<<?php echo $headerTag . $headerClass . '><span>' . $module->title; ?></span></<?php echo $headerTag; ?>>
		<?php endif; ?>

			<?php echo $module->content; ?>

		</<?php echo $moduleTag; ?>>

	<?php endif;
}

function modChrome_Well_Templatecolor($module, &$params, &$attribs)
{
	$moduleTag      = $params->get('module_tag', 'div');
	$headerTag      = htmlspecialchars($params->get('header_tag', 'h3'));
	$bootstrapSize  = (int) $params->get('bootstrap_size', 0);
	$moduleClass    = $bootstrapSize != 0 ? ' col-md-' . $bootstrapSize : '';

	// Temporarily store header class in variable
	$headerClass	= $params->get('header_class');
	$headerClass	= !empty($headerClass) ? ' class="' . htmlspecialchars($headerClass) . '"' : '';

	if (!empty ($module->content)) : ?>
		<<?php echo $moduleTag; ?> class="moduletable well-template <?php echo htmlspecialchars($params->get('moduleclass_sfx')) . $moduleClass; ?>">

		<?php if ((bool) $module->showtitle) :?>
			<<?php echo $headerTag . $headerClass . '><span>' . $module->title; ?></span></<?php echo $headerTag; ?>>
		<?php endif; ?>

			<?php echo $module->content; ?>

		</<?php echo $moduleTag; ?>>

	<?php endif;
}

function modChrome_Well_Black($module, &$params, &$attribs)
{
	$moduleTag      = $params->get('module_tag', 'div');
	$headerTag      = htmlspecialchars($params->get('header_tag', 'h3'));
	$bootstrapSize  = (int) $params->get('bootstrap_size', 0);
	$moduleClass    = $bootstrapSize != 0 ? ' col-md-' . $bootstrapSize : '';

	// Temporarily store header class in variable
	$headerClass	= $params->get('header_class');
	$headerClass	= !empty($headerClass) ? ' class="' . htmlspecialchars($headerClass) . '"' : '';

	if (!empty ($module->content)) : ?>
		<<?php echo $moduleTag; ?> class="moduletable well-black <?php echo htmlspecialchars($params->get('moduleclass_sfx')) . $moduleClass; ?>">

		<?php if ((bool) $module->showtitle) :?>
			<<?php echo $headerTag . $headerClass . '><span>' . $module->title; ?></span></<?php echo $headerTag; ?>>
		<?php endif; ?>

			<?php echo $module->content; ?>

		</<?php echo $moduleTag; ?>>

	<?php endif;
}


function modChrome_Well_Default_Border($module, &$params, &$attribs)
{
	$moduleTag      = $params->get('module_tag', 'div');
	$headerTag      = htmlspecialchars($params->get('header_tag', 'h3'));
	$bootstrapSize  = (int) $params->get('bootstrap_size', 0);
	$moduleClass    = $bootstrapSize != 0 ? ' col-md-' . $bootstrapSize : '';

	// Temporarily store header class in variable
	$headerClass	= $params->get('header_class');
	$headerClass	= !empty($headerClass) ? ' class="' . htmlspecialchars($headerClass) . '"' : '';

	if (!empty ($module->content)) : ?>
		<<?php echo $moduleTag; ?> class="moduletable well-default-border <?php echo htmlspecialchars($params->get('moduleclass_sfx')) . $moduleClass; ?>">

		<?php if ((bool) $module->showtitle) :?>
			<<?php echo $headerTag . $headerClass . '><span>' . $module->title; ?></span></<?php echo $headerTag; ?>>
		<?php endif; ?>

			<?php echo $module->content; ?>

		</<?php echo $moduleTag; ?>>

	<?php endif;
}

function modChrome_Well_Template_Border($module, &$params, &$attribs)
{
	$moduleTag      = $params->get('module_tag', 'div');
	$headerTag      = htmlspecialchars($params->get('header_tag', 'h3'));
	$bootstrapSize  = (int) $params->get('bootstrap_size', 0);
	$moduleClass    = $bootstrapSize != 0 ? ' col-md-' . $bootstrapSize : '';

	// Temporarily store header class in variable
	$headerClass	= $params->get('header_class');
	$headerClass	= !empty($headerClass) ? ' class="' . htmlspecialchars($headerClass) . '"' : '';

	if (!empty ($module->content)) : ?>
		<<?php echo $moduleTag; ?> class="moduletable well-template-border <?php echo htmlspecialchars($params->get('moduleclass_sfx')) . $moduleClass; ?>">

		<?php if ((bool) $module->showtitle) :?>
			<<?php echo $headerTag . $headerClass . '><span>' . $module->title; ?></span></<?php echo $headerTag; ?>>
		<?php endif; ?>

			<?php echo $module->content; ?>

		</<?php echo $moduleTag; ?>>

	<?php endif;
}

function modChrome_Well_Black_Border($module, &$params, &$attribs)
{
	$moduleTag      = $params->get('module_tag', 'div');
	$headerTag      = htmlspecialchars($params->get('header_tag', 'h3'));
	$bootstrapSize  = (int) $params->get('bootstrap_size', 0);
	$moduleClass    = $bootstrapSize != 0 ? ' col-md-' . $bootstrapSize : '';

	// Temporarily store header class in variable
	$headerClass	= $params->get('header_class');
	$headerClass	= !empty($headerClass) ? ' class="' . htmlspecialchars($headerClass) . '"' : '';

	if (!empty ($module->content)) : ?>
		<<?php echo $moduleTag; ?> class="moduletable well-black-border <?php echo htmlspecialchars($params->get('moduleclass_sfx')) . $moduleClass; ?>">

		<?php if ((bool) $module->showtitle) :?>
			<<?php echo $headerTag . $headerClass . '><span>' . $module->title; ?></span></<?php echo $headerTag; ?>>
		<?php endif; ?>

			<?php echo $module->content; ?>

		</<?php echo $moduleTag; ?>>

	<?php endif;
}

function modChrome_Panel_Default_Heading_Top($module, &$params, &$attribs)
{
	$moduleTag      = $params->get('module_tag', 'div');
	$headerTag      = htmlspecialchars($params->get('header_tag', 'h3'));
	$bootstrapSize  = (int) $params->get('bootstrap_size', 0);
	$moduleClass    = $bootstrapSize != 0 ? ' col-md-' . $bootstrapSize : '';

	// Temporarily store header class in variable
	$headerClass	= $params->get('header_class');
	$headerClass	= !empty($headerClass) ? ' class="' . htmlspecialchars($headerClass) . '"' : '';

	if (!empty ($module->content)) : ?>
		<<?php echo $moduleTag; ?> class="moduletable panel <?php echo htmlspecialchars($params->get('moduleclass_sfx')) . $moduleClass; ?>">

		<?php if ((bool) $module->showtitle) :?>
			<div class="panel-heading"><span class="panel-title"><?php echo $module->title; ?></span></div>
		<?php endif; ?>
		
			<div class="panel-body">
			<?php echo $module->content; ?>
			</div>

		</<?php echo $moduleTag; ?>>

	<?php endif;
}

function modChrome_Panel_Default_Heading_Bottom($module, &$params, &$attribs)
{
	$moduleTag      = $params->get('module_tag', 'div');
	$headerTag      = htmlspecialchars($params->get('header_tag', 'h3'));
	$bootstrapSize  = (int) $params->get('bootstrap_size', 0);
	$moduleClass    = $bootstrapSize != 0 ? ' col-md-' . $bootstrapSize : '';

	// Temporarily store header class in variable
	$headerClass	= $params->get('header_class');
	$headerClass	= !empty($headerClass) ? ' class="' . htmlspecialchars($headerClass) . '"' : '';

	if (!empty ($module->content)) : ?>
		<<?php echo $moduleTag; ?> class="moduletable panel <?php echo htmlspecialchars($params->get('moduleclass_sfx')) . $moduleClass; ?>">

			<div class="panel-body">
			<?php echo $module->content; ?>
			</div>
			
			<?php if ((bool) $module->showtitle) :?>
			<div class="panel-footer"><span class="panel-title"><?php echo $module->title; ?></span></div>
			<?php endif; ?>

		</<?php echo $moduleTag; ?>>

	<?php endif;
}

function modChrome_Panel_Primary_Heading_Top($module, &$params, &$attribs)
{
	$moduleTag      = $params->get('module_tag', 'div');
	$headerTag      = htmlspecialchars($params->get('header_tag', 'h3'));
	$bootstrapSize  = (int) $params->get('bootstrap_size', 0);
	$moduleClass    = $bootstrapSize != 0 ? ' col-md-' . $bootstrapSize : '';

	// Temporarily store header class in variable
	$headerClass	= $params->get('header_class');
	$headerClass	= !empty($headerClass) ? ' class="' . htmlspecialchars($headerClass) . '"' : '';

	if (!empty ($module->content)) : ?>
		<<?php echo $moduleTag; ?> class="moduletable panel panel-primary <?php echo htmlspecialchars($params->get('moduleclass_sfx')) . $moduleClass; ?>">

		<?php if ((bool) $module->showtitle) :?>
			<div class="panel-heading"><span class="panel-title"><?php echo $module->title; ?></span></div>
		<?php endif; ?>
		
			<div class="panel-body">
			<?php echo $module->content; ?>
			</div>

		</<?php echo $moduleTag; ?>>

	<?php endif;
}

function modChrome_Panel_Primary_Heading_Bottom($module, &$params, &$attribs)
{
	$moduleTag      = $params->get('module_tag', 'div');
	$headerTag      = htmlspecialchars($params->get('header_tag', 'h3'));
	$bootstrapSize  = (int) $params->get('bootstrap_size', 0);
	$moduleClass    = $bootstrapSize != 0 ? ' col-md-' . $bootstrapSize : '';

	// Temporarily store header class in variable
	$headerClass	= $params->get('header_class');
	$headerClass	= !empty($headerClass) ? ' class="' . htmlspecialchars($headerClass) . '"' : '';

	if (!empty ($module->content)) : ?>
		<<?php echo $moduleTag; ?> class="moduletable panel panel-primary <?php echo htmlspecialchars($params->get('moduleclass_sfx')) . $moduleClass; ?>">

			<div class="panel-body">
			<?php echo $module->content; ?>
			</div>
			
			<?php if ((bool) $module->showtitle) :?>
			<div class="panel-footer"><span class="panel-title"><?php echo $module->title; ?></span></div>
			<?php endif; ?>

		</<?php echo $moduleTag; ?>>

	<?php endif;
}

function modChrome_Panel_Success_Heading_Top($module, &$params, &$attribs)
{
	$moduleTag      = $params->get('module_tag', 'div');
	$headerTag      = htmlspecialchars($params->get('header_tag', 'h3'));
	$bootstrapSize  = (int) $params->get('bootstrap_size', 0);
	$moduleClass    = $bootstrapSize != 0 ? ' col-md-' . $bootstrapSize : '';

	// Temporarily store header class in variable
	$headerClass	= $params->get('header_class');
	$headerClass	= !empty($headerClass) ? ' class="' . htmlspecialchars($headerClass) . '"' : '';

	if (!empty ($module->content)) : ?>
		<<?php echo $moduleTag; ?> class="moduletable panel panel-success <?php echo htmlspecialchars($params->get('moduleclass_sfx')) . $moduleClass; ?>">

		<?php if ((bool) $module->showtitle) :?>
			<div class="panel-heading"><span class="panel-title"><?php echo $module->title; ?></span></div>
		<?php endif; ?>
		
			<div class="panel-body">
			<?php echo $module->content; ?>
			</div>

		</<?php echo $moduleTag; ?>>

	<?php endif;
}

function modChrome_Panel_Success_Heading_Bottom($module, &$params, &$attribs)
{
	$moduleTag      = $params->get('module_tag', 'div');
	$headerTag      = htmlspecialchars($params->get('header_tag', 'h3'));
	$bootstrapSize  = (int) $params->get('bootstrap_size', 0);
	$moduleClass    = $bootstrapSize != 0 ? ' col-md-' . $bootstrapSize : '';

	// Temporarily store header class in variable
	$headerClass	= $params->get('header_class');
	$headerClass	= !empty($headerClass) ? ' class="' . htmlspecialchars($headerClass) . '"' : '';

	if (!empty ($module->content)) : ?>
		<<?php echo $moduleTag; ?> class="moduletable panel panel-success <?php echo htmlspecialchars($params->get('moduleclass_sfx')) . $moduleClass; ?>">

			<div class="panel-body">
			<?php echo $module->content; ?>
			</div>
			
			<?php if ((bool) $module->showtitle) :?>
			<div class="panel-footer"><span class="panel-title"><?php echo $module->title; ?></span></div>
			<?php endif; ?>

		</<?php echo $moduleTag; ?>>

	<?php endif;
}

function modChrome_Panel_Danger_Heading_Top($module, &$params, &$attribs)
{
	$moduleTag      = $params->get('module_tag', 'div');
	$headerTag      = htmlspecialchars($params->get('header_tag', 'h3'));
	$bootstrapSize  = (int) $params->get('bootstrap_size', 0);
	$moduleClass    = $bootstrapSize != 0 ? ' col-md-' . $bootstrapSize : '';

	// Temporarily store header class in variable
	$headerClass	= $params->get('header_class');
	$headerClass	= !empty($headerClass) ? ' class="' . htmlspecialchars($headerClass) . '"' : '';

	if (!empty ($module->content)) : ?>
		<<?php echo $moduleTag; ?> class="moduletable panel panel-danger <?php echo htmlspecialchars($params->get('moduleclass_sfx')) . $moduleClass; ?>">

		<?php if ((bool) $module->showtitle) :?>
			<div class="panel-heading"><span class="panel-title"><?php echo $module->title; ?></span></div>
		<?php endif; ?>
		
			<div class="panel-body">
			<?php echo $module->content; ?>
			</div>

		</<?php echo $moduleTag; ?>>

	<?php endif;
}

function modChrome_Panel_Danger_Heading_Bottom($module, &$params, &$attribs)
{
	$moduleTag      = $params->get('module_tag', 'div');
	$headerTag      = htmlspecialchars($params->get('header_tag', 'h3'));
	$bootstrapSize  = (int) $params->get('bootstrap_size', 0);
	$moduleClass    = $bootstrapSize != 0 ? ' col-md-' . $bootstrapSize : '';

	// Temporarily store header class in variable
	$headerClass	= $params->get('header_class');
	$headerClass	= !empty($headerClass) ? ' class="' . htmlspecialchars($headerClass) . '"' : '';

	if (!empty ($module->content)) : ?>
		<<?php echo $moduleTag; ?> class="moduletable panel panel-danger <?php echo htmlspecialchars($params->get('moduleclass_sfx')) . $moduleClass; ?>">

			<div class="panel-body">
			<?php echo $module->content; ?>
			</div>
			
			<?php if ((bool) $module->showtitle) :?>
			<div class="panel-footer"><span class="panel-title"><?php echo $module->title; ?></span></div>
			<?php endif; ?>

		</<?php echo $moduleTag; ?>>

	<?php endif;
}

function modChrome_Panel_Warning_Heading_Top($module, &$params, &$attribs)
{
	$moduleTag      = $params->get('module_tag', 'div');
	$headerTag      = htmlspecialchars($params->get('header_tag', 'h3'));
	$bootstrapSize  = (int) $params->get('bootstrap_size', 0);
	$moduleClass    = $bootstrapSize != 0 ? ' col-md-' . $bootstrapSize : '';

	// Temporarily store header class in variable
	$headerClass	= $params->get('header_class');
	$headerClass	= !empty($headerClass) ? ' class="' . htmlspecialchars($headerClass) . '"' : '';

	if (!empty ($module->content)) : ?>
		<<?php echo $moduleTag; ?> class="moduletable panel panel-warning <?php echo htmlspecialchars($params->get('moduleclass_sfx')) . $moduleClass; ?>">

		<?php if ((bool) $module->showtitle) :?>
			<div class="panel-heading"><span class="panel-title"><?php echo $module->title; ?></span></div>
		<?php endif; ?>
		
			<div class="panel-body">
			<?php echo $module->content; ?>
			</div>

		</<?php echo $moduleTag; ?>>

	<?php endif;
}

function modChrome_Panel_Warning_Heading_Bottom($module, &$params, &$attribs)
{
	$moduleTag      = $params->get('module_tag', 'div');
	$headerTag      = htmlspecialchars($params->get('header_tag', 'h3'));
	$bootstrapSize  = (int) $params->get('bootstrap_size', 0);
	$moduleClass    = $bootstrapSize != 0 ? ' col-md-' . $bootstrapSize : '';

	// Temporarily store header class in variable
	$headerClass	= $params->get('header_class');
	$headerClass	= !empty($headerClass) ? ' class="' . htmlspecialchars($headerClass) . '"' : '';

	if (!empty ($module->content)) : ?>
		<<?php echo $moduleTag; ?> class="moduletable panel panel-warning <?php echo htmlspecialchars($params->get('moduleclass_sfx')) . $moduleClass; ?>">

			<div class="panel-body">
			<?php echo $module->content; ?>
			</div>
			
			<?php if ((bool) $module->showtitle) :?>
			<div class="panel-footer"><span class="panel-title"><?php echo $module->title; ?></span></div>
			<?php endif; ?>

		</<?php echo $moduleTag; ?>>

	<?php endif;
}


function modChrome_container($module, &$params, &$attribs)
{
	if (!empty ($module->content)) : ?>
		<div class="container">
			<?php echo $module->content; ?>
		</div>
	<?php endif;
}

// REVEAL /////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function modChrome_reveal1($module, &$params, &$attribs)
{
	$moduleTag      = $params->get('module_tag', 'div');
	$headerTag      = htmlspecialchars($params->get('header_tag', 'h3'));
	$bootstrapSize  = (int) $params->get('bootstrap_size', 0);
	$moduleClass    = $bootstrapSize != 0 ? ' col-md-' . $bootstrapSize : '';

	// Temporarily store header class in variable
	$headerClass	= $params->get('header_class');
	$headerClass	= !empty($headerClass) ? ' class="' . htmlspecialchars($headerClass) . '"' : '';

	if (!empty ($module->content)) : ?>
		<div class="modal fade <?php echo htmlspecialchars($params->get('moduleclass_sfx')) . $moduleClass; ?>" id="reveal1" tabindex="-1" role="dialog" aria-labelledby="Reveal1" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <?php if ((bool) $module->showtitle) :?>
					<div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		        <<?php echo $headerTag . $headerClass . '><span>' . $module->title; ?></span></<?php echo $headerTag; ?>>
		      </div>
					<?php endif; ?>
		      <div class="modal-body">
		        <?php echo $module->content; ?>
		      </div>
		    </div>
		  </div>
		</div>
	<?php endif;
}

function modChrome_reveal2($module, &$params, &$attribs)
{
	$moduleTag      = $params->get('module_tag', 'div');
	$headerTag      = htmlspecialchars($params->get('header_tag', 'h3'));
	$bootstrapSize  = (int) $params->get('bootstrap_size', 0);
	$moduleClass    = $bootstrapSize != 0 ? ' col-md-' . $bootstrapSize : '';

	// Temporarily store header class in variable
	$headerClass	= $params->get('header_class');
	$headerClass	= !empty($headerClass) ? ' class="' . htmlspecialchars($headerClass) . '"' : '';

	if (!empty ($module->content)) : ?>
		<div class="modal fade <?php echo htmlspecialchars($params->get('moduleclass_sfx')) . $moduleClass; ?>" id="reveal2" tabindex="-1" role="dialog" aria-labelledby="Reveal2" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <?php if ((bool) $module->showtitle) :?>
					<div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		        <<?php echo $headerTag . $headerClass . '><span>' . $module->title; ?></span></<?php echo $headerTag; ?>>
		      </div>
					<?php endif; ?>
		      <div class="modal-body">
		        <?php echo $module->content; ?>
		      </div>
		    </div>
		  </div>
		</div>
	<?php endif;
}

function modChrome_reveal3($module, &$params, &$attribs)
{
	$moduleTag      = $params->get('module_tag', 'div');
	$headerTag      = htmlspecialchars($params->get('header_tag', 'h3'));
	$bootstrapSize  = (int) $params->get('bootstrap_size', 0);
	$moduleClass    = $bootstrapSize != 0 ? ' col-md-' . $bootstrapSize : '';

	// Temporarily store header class in variable
	$headerClass	= $params->get('header_class');
	$headerClass	= !empty($headerClass) ? ' class="' . htmlspecialchars($headerClass) . '"' : '';

	if (!empty ($module->content)) : ?>
		<div class="modal fade <?php echo htmlspecialchars($params->get('moduleclass_sfx')) . $moduleClass; ?>" id="reveal3" tabindex="-1" role="dialog" aria-labelledby="Reveal1" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <?php if ((bool) $module->showtitle) :?>
					<div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		        <<?php echo $headerTag . $headerClass . '><span>' . $module->title; ?></span></<?php echo $headerTag; ?>>
		      </div>
					<?php endif; ?>
		      <div class="modal-body">
		        <?php echo $module->content; ?>
		      </div>
		    </div>
		  </div>
		</div>
	<?php endif;
}

function modChrome_reveal4($module, &$params, &$attribs)
{
	$moduleTag      = $params->get('module_tag', 'div');
	$headerTag      = htmlspecialchars($params->get('header_tag', 'h3'));
	$bootstrapSize  = (int) $params->get('bootstrap_size', 0);
	$moduleClass    = $bootstrapSize != 0 ? ' col-md-' . $bootstrapSize : '';

	// Temporarily store header class in variable
	$headerClass	= $params->get('header_class');
	$headerClass	= !empty($headerClass) ? ' class="' . htmlspecialchars($headerClass) . '"' : '';

	if (!empty ($module->content)) : ?>
		<div class="modal fade <?php echo htmlspecialchars($params->get('moduleclass_sfx')) . $moduleClass; ?>" id="reveal4" tabindex="-1" role="dialog" aria-labelledby="Reveal1" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <?php if ((bool) $module->showtitle) :?>
					<div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		        <<?php echo $headerTag . $headerClass . '><span>' . $module->title; ?></span></<?php echo $headerTag; ?>>
		      </div>
					<?php endif; ?>
		      <div class="modal-body">
		        <?php echo $module->content; ?>
		      </div>
		    </div>
		  </div>
		</div>
	<?php endif;
}

function modChrome_reveal5($module, &$params, &$attribs)
{
	$moduleTag      = $params->get('module_tag', 'div');
	$headerTag      = htmlspecialchars($params->get('header_tag', 'h3'));
	$bootstrapSize  = (int) $params->get('bootstrap_size', 0);
	$moduleClass    = $bootstrapSize != 0 ? ' col-md-' . $bootstrapSize : '';

	// Temporarily store header class in variable
	$headerClass	= $params->get('header_class');
	$headerClass	= !empty($headerClass) ? ' class="' . htmlspecialchars($headerClass) . '"' : '';

	if (!empty ($module->content)) : ?>
		<div class="modal fade <?php echo htmlspecialchars($params->get('moduleclass_sfx')) . $moduleClass; ?>" id="reveal5" tabindex="-1" role="dialog" aria-labelledby="Reveal1" aria-hidden="true">
		  <div class="modal-dialog">
		    <div class="modal-content">
		      <?php if ((bool) $module->showtitle) :?>
					<div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
		        <<?php echo $headerTag . $headerClass . '><span>' . $module->title; ?></span></<?php echo $headerTag; ?>>
		      </div>
					<?php endif; ?>
		      <div class="modal-body">
		        <?php echo $module->content; ?>
		      </div>
		    </div>
		  </div>
		</div>
	<?php endif;
}






    							










?>
