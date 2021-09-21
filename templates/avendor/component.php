<?php
/**
 * @package     Joomla.Site
 * @subpackage  Template.system
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;


$app = JFactory::getApplication();
$doc = JFactory::getDocument(); 
$params = $app->getParams();

$active = $app->getMenu()->getActive();
$pageclass = $params->get('pageclass_sfx');
$tpath = $this->baseurl.'/templates/'.$this->template;

$c1 = $this->params->get('c1');
$c2 = $this->params->get('c2');
$c3 = $this->params->get('c3');
$c4 = $this->params->get('c4');
$bgimage = $this->params->get('bgimage');

$addcss = $this->params->get('addcss');
$addcode = $this->params->get('addcode');
$boxed = $this->params->get('boxed');

$color_scheme = $this->params->get('color_scheme');

?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<meta charset="<?php echo $this->_charset ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="<?php echo $tpath; ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $tpath; ?>/css/avendor-<?php echo $color_scheme; ?>.css">
	<link rel="stylesheet" href="<?php echo $tpath; ?>/css/joomla.css">
	<link rel="stylesheet" href="<?php echo $tpath; ?>/css/options.css.php?c1=<?php echo str_replace('#','', $c1) ; ?>&amp;c2=<?php echo str_replace('#','', $c2) ; ?>&amp;c3=<?php echo str_replace('#','', $c3) ; ?>&amp;c4=<?php echo str_replace('#','', $c4) ; ?>&amp;bg=<?php echo $bgimage; ?>" />
	<link rel="stylesheet" href="<?php echo $tpath; ?>/css/avendor-font-styles.css">
	<link rel="stylesheet" href="<?php echo $tpath; ?>/css/animate.css">

	<style type="text/css">
		h1, h2, h3, h4, h5, h6 {<?php if ( $headline_font == 'headline_googlefont') { echo $headline_googlecss ; } else { echo 'font-family:'.$headline_font.' !important;'; } ?>}
		body, p, .QAmt, .navbar-default .navbar-nav > li > a {<?php if($body_font == 'body_googlefont'): echo $body_googlecss; elseif($body_font == 'headline_googlefont'): echo $headline_googlecss; else: echo 'font-family:'.$body_font.' !important;'; endif; ?> }

		<?php if ( $addcss != '' ) echo $addcss ;?>
	</style>
	<?php if ( $headline_font == 'headline_googlefont' ) echo $headline_googlecode."\n" ;?>
	<?php if ( $body_font == 'body_googlefont' ) echo $body_googlecode."\n" ;?>
	<script src="<?php echo $tpath; ?>/js/jquery-1.11.1.min.js" type="text/javascript"></script>
	<jdoc:include type="head" />
	<link rel="stylesheet" href="<?php echo $tpath; ?>/css/overrider.css">
	<link rel="stylesheet" href="<?php echo $tpath; ?>/css/custom.css">
	
  <!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
	<![endif]-->
  
  <?php if ( $fav144 != '' ) echo '<link rel="apple-touch-icon-precomposed" sizes="144x144" href="'.$fav144.'">'.chr(13) ;?>
  <?php if ( $fav114 != '' ) echo '<link rel="apple-touch-icon-precomposed" sizes="114x114" href="'.$fav114.'">'.chr(13) ;?>
  <?php if ( $fav72 != '' ) echo '<link rel="apple-touch-icon-precomposed" sizes="72x72" href="'.$fav72.'">'.chr(13) ;?>
  <?php if ( $fav57 != '' ) echo '<link rel="apple-touch-icon-precomposed" href="'.$fav57.'">'.chr(13) ;?>
</head>
<body class="contentpane">
	<div class="page-wrapper">
	  <div class="container">
	    <jdoc:include type="message" />
      <jdoc:include type="component" />
	  </div>
	</div>
	
	
	<script src="<?php echo $tpath; ?>/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo $tpath; ?>/js/jquery.countdown.js" type="text/javascript"></script>
	<script src="<?php echo $tpath; ?>/js/jquery.queryloader2.min.js" type="text/javascript"></script>
	<script src="<?php echo $tpath; ?>/js/SmoothScroll.js" type="text/javascript"></script>
	<script src="<?php echo $tpath; ?>/js/jquery.stickOnScroll.js" type="text/javascript"></script>
	<script src="<?php echo $tpath; ?>/js/jquery.easing.min.js" type="text/javascript"></script>
	<script src="<?php echo $tpath; ?>/js/livicons-1.4.min.js" type="text/javascript"></script>
	<script src="<?php echo $tpath; ?>/js/raphael-min.js" type="text/javascript"></script>
	<script src="<?php echo $tpath; ?>/js/jquery.stellar.min.js" type="text/javascript"></script>
	<script src="<?php echo $tpath; ?>/js/owl.carousel.js" type="text/javascript"></script>
	<script src="<?php echo $tpath; ?>/js/jquery.countTo.js" type="text/javascript"></script>
	<script src="<?php echo $tpath; ?>/js/jquery.magnific-popup.min.js" type="text/javascript"></script>	
	<script src="<?php echo $tpath; ?>/js/jQuery.Opie.Tooltip.min.js" type="text/javascript"></script>
	<script src="<?php echo $tpath; ?>/js/jquery.waypoints.min.js" type="text/javascript"></script>
	<script src="<?php echo $tpath; ?>/js/jquery.easypiechart.min.js" type="text/javascript"></script>
	<script src="<?php echo $tpath; ?>/js/application.js"></script>
	
</body>
</html>
