<?php
defined('_JEXEC') or die;

$app = JFactory::getApplication();
$doc = JFactory::getDocument(); 
$params = $app->getParams();
$headdata = $doc->getHeadData();
$menu = $app->getMenu();
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


// Favicons
$fav144 = $this->params->get('fav144');
$fav114 = $this->params->get('fav114');
$fav72 = $this->params->get('fav72');
$fav57 = $this->params->get('fav57');

$logo_img = $this->params->get('logo_img');
$logo_alt = $this->params->get('logo_alt');
$logo_title = $this->params->get('logo_title');
$logo_mt = $this->params->get('logo_mt');
$logo_mb = $this->params->get('logo_mb');

$menustyle = $this->params->get('menustyle');
$menustyle_center = $this->params->get('menustyle_center');

$copyright = $this->params->get('copyright');
$copyright_year = $this->params->get('copyright_year');

$headline_font = $this->params->get('headline_font');
$headline_googlecode = $this->params->get('headline_googlecode');
$headline_googlecss = $this->params->get('headline_googlecss');

$body_font = $this->params->get('body_font');
$body_googlecode = $this->params->get('body_googlecode');
$body_googlecss = $this->params->get('body_googlecss');

$preloader_bgcolor = $this->params->get('preloader_bgcolor');
$preloader_color = $this->params->get('preloader_color');
$preloader_percent = $this->params->get('preloader_percent');
$preloader_height = $this->params->get('preloader_height');

$this->setGenerator(null);

//unset($this->_scripts[JURI::root(true).'/media/jui/js/bootstrap.min.js']);


?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
	<meta charset="<?php echo $this->_charset ?>" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="<?php echo $tpath; ?>/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo $tpath; ?>/css/avendor-<?php echo $color_scheme; ?>.css">
	<link rel="stylesheet" href="<?php echo $tpath; ?>/css/joomla.css">
	<link rel="stylesheet" href="<?php echo $tpath; ?>/css/avendor-font-styles.css">
	<link rel="stylesheet" href="<?php echo $tpath; ?>/css/animate.css">

	<?php if ( $headline_font == 'headline_googlefont' ) echo $headline_googlecode."\n" ;?>
	<?php if ( $body_font == 'body_googlefont' ) echo $body_googlecode."\n" ;?>
	<script src="<?php echo $tpath; ?>/js/jquery-1.11.1.min.js" type="text/javascript"></script>
	<jdoc:include type="head" />
	<link rel="stylesheet" href="<?php echo $tpath; ?>/css/options.css.php?c1=<?php echo str_replace('#','', $c1) ; ?>&amp;c2=<?php echo str_replace('#','', $c2) ; ?>&amp;c3=<?php echo str_replace('#','', $c3) ; ?>&amp;c4=<?php echo str_replace('#','', $c4) ; ?>&amp;bg=<?php echo $bgimage; ?>" />
	<link rel="stylesheet" href="<?php echo $tpath; ?>/css/overrider.css">
	<link rel="stylesheet" href="<?php echo $tpath; ?>/css/custom.css">
	
	<style type="text/css">
		h1, h2, h3, h4, h5, h6 {<?php if ( $headline_font == 'headline_googlefont') { echo $headline_googlecss ; } else { echo 'font-family:'.$headline_font.' !important;'; } ?>}
		body, p, .QAmt, .navbar-default .navbar-nav > li > a, #kuena, #kuena *, #Kunena td, #Kunena table, #Kunena th, #Kunena div, #Kunena p, #Kunena span {<?php if($body_font == 'body_googlefont'): echo $body_googlecss; elseif($body_font == 'headline_googlefont'): echo $headline_googlecss; else: echo 'font-family:'.$body_font.' !important;'; endif; ?> }

		<?php if ( $addcss != '' ) echo $addcss ;?>
	</style>
	
  <!--[if lt IE 9]>
		<script src="js/html5shiv.js"></script>
	<![endif]-->
  
  <?php if ( $fav144 != '' ) echo '<link rel="apple-touch-icon-precomposed" sizes="144x144" href="'.$fav144.'">'.chr(13) ;?>
  <?php if ( $fav114 != '' ) echo '<link rel="apple-touch-icon-precomposed" sizes="114x114" href="'.$fav114.'">'.chr(13) ;?>
  <?php if ( $fav72 != '' ) echo '<link rel="apple-touch-icon-precomposed" sizes="72x72" href="'.$fav72.'">'.chr(13) ;?>
  <?php if ( $fav57 != '' ) echo '<link rel="apple-touch-icon-precomposed" href="'.$fav57.'">'.chr(13) ;?>

</head>

<body class="<?php echo $bgimage ; ?> <?php echo (($menu->getActive() == $menu->getDefault()) ? ('front') : ('page')).' active-'.$active->alias.' '.$pageclass; ?> color-scheme-<?php echo $color_scheme; ?>" data-target=".navbar" data-offset="62" data-spy="scroll">
  
  <?php if($this->countModules('preloader')) : ?>
	<div id="preloader"></div>
	<?php endif; ?>  
	
	<div class="page-wrapper <?php if ( $boxed == 'boxed' ) echo 'boxed' ;?>" id="page-top">
		
		<!-- START HEADER -->
		<div class="header-wrapper">
			
			<?php if ($this->countModules( 'toolbar-left and toolbar-right' )) : ?>
			<div class="header-top">
				<div class="container">
					<div class="row">
						<div class="col-md-6 col-sm-6">
							<div class="header-top-left">
								<jdoc:include type="modules" name="toolbar-left" style="none" />
							</div>
						</div>
						<div class="col-md-6 col-sm-6 columns">
							<div class="header-top-right">
								<ul class="top-menu">
									<jdoc:include type="modules" name="toolbar-right" style="avendor_li" />
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div> 
			<?php endif; ?>  
			
			<?php if($this->countModules('menu')) : ?>
			<div class="header-main">
				<div class="container">
					<div class="main-navigation">
						<div class="row">
							<div class="col-md-12 columns">
								<jdoc:include type="modules" name="menu" style="none" />
							</div>
						</div>              
					</div>
				</div>
			</div>
			<?php endif ; ?>
			
		</div>
		<!-- END HEADER -->
				
		<?php if (!$this->countModules( 'slideshow' ) and !$this->countModules( 'sitetitle' ) and !$this->countModules( 'breadcrumbs' )) : ?>	
		<div class="main-wrapper-header dark-header bg-color-dark">
			<div class="container">
				<div class="row">            	
					<div class="col-sm-12">                
						<div class="page-title">
							<h2><?php echo $pageName = $active->title; ?></h2>                    
						</div>                
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
		
		<?php if (!$this->countModules( 'slideshow' ) and !$this->countModules( 'sitetitle' ) and $this->countModules( 'breadcrumbs' )) : ?>	
		<div class="main-wrapper-header dark-header bg-color-dark">
			<div class="container">
				<div class="row">            	
					<div class="col-sm-6">                
						<div class="page-title">
							<h2><?php echo $pageName = $active->title; ?></h2>                    
						</div>                
					</div>
					<div class="col-sm-6">
						<jdoc:include type="modules" name="breadcrumbs" style="none" />			
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>
		
		<?php if ($this->countModules( 'slideshow' ) and !$this->countModules( 'sitetitle' )) : ?>	
		<div class="slider-wrapper">			
			<jdoc:include type="modules" name="slideshow" style="none" />	
		</div>
		<?php endif; ?>
		
		<?php if (!$this->countModules( 'slideshow' ) and $this->countModules( 'sitetitle' )) : ?>	
		<div class="slider-wrapper">			
			<jdoc:include type="modules" name="sitetitle" style="none" />	
		</div>
		<?php endif; ?>
		
		<?php if ($this->countModules( 'slideshow' ) and $this->countModules( 'sitetitle' )) : ?>	
		<div class="slider-wrapper">			
			<jdoc:include type="modules" name="slideshow" style="none" />	
		</div>
		<?php endif; ?>
			
		<!-- Sidebar Left -->
		
		<?php if ($this->countModules( 'sidebar-left' ) and !$this->countModules( 'sidebar-right' )) : ?>
		<div class="main-wrapper">
			<div class="container content-with-sidebar">
				<div class="row">			
					<div class="col-md-3 col-sm-4 sidebar sidebar-left">
						<div class="white-space space-medium"></div>
							<div class="sidebar-content">
								<jdoc:include type="modules" name="sidebar-left" style="avendor_sidebar" />
							</div>
						<div class="white-space space-medium"></div>
					</div>				
					<div class="col-md-9 col-sm-8">						
						<div class="white-space space-medium"></div>
						<?php if ($this->countModules( 'content-top' )) : ?>
						<div class="innertop">
							<jdoc:include type="modules" name="content-top" style="avendor" />
						</div>
						<?php endif; ?>					
						<jdoc:include type="message" />
						<jdoc:include type="component" />			
						<?php if ($this->countModules( 'content-bottom' )) : ?>
						<div class="innerbottom">
							<jdoc:include type="modules" name="content-bottom" style="avendor" />
						</div>	
						<?php endif; ?>	
						<div class="white-space space-medium"></div>		
					</div>				
				</div>
			</div>
		</div>
		<?php endif; ?>
			
		<!-- Sidebar Left and Right -->
		
		<?php if ($this->countModules( 'sidebar-left' ) and $this->countModules( 'sidebar-right' )) : ?>
		<div class="main-wrapper">
			<div class="container content-with-sidebar">
				<div class="row">			
					<div class="col-md-3 col-sm-4 sidebar sidebar-left">
						<div class="white-space space-medium"></div>
							<div class="sidebar-content">
								<jdoc:include type="modules" name="sidebar-left" style="avendor_sidebar" />
							</div>
						<div class="white-space space-medium"></div>
					</div>				
					<div class="col-md-6 col-sm-4">							
						<div class="white-space space-medium"></div>
						<?php if ($this->countModules( 'content-top' )) : ?>
						<div class="innertop">
							<jdoc:include type="modules" name="content-top" style="avendor" />
						</div>
						<?php endif; ?>				
						<jdoc:include type="message" />
						<jdoc:include type="component" />					
						<?php if ($this->countModules( 'content-bottom' )) : ?>
						<div class="innerbottom">
							<jdoc:include type="modules" name="content-bottom" style="avendor" />
						</div>	
						<?php endif; ?>
						<div class="white-space space-medium"></div>
					</div>	
					<div class="col-md-3 col-sm-4 sidebar sidebar-right">
						<div class="white-space space-medium"></div>
							<div class="sidebar-content">
								<jdoc:include type="modules" name="sidebar-right" style="avendor_sidebar" />
							</div>
						<div class="white-space space-medium"></div>
					</div>	
				</div>
			</div>
		</div>
		<?php endif; ?>		
		
		<!-- Sidebar Right -->
		
		<?php if (!$this->countModules( 'sidebar-left' ) and $this->countModules( 'sidebar-right' )) : ?>
		<div class="main-wrapper">
			<div class="container content-with-sidebar">
				<div class="row">					
					<div class="col-md-9 col-sm-8">
						<div class="white-space space-medium"></div>
						<?php if ($this->countModules( 'content-top' )) : ?>
						<div class="innertop">
							<jdoc:include type="modules" name="content-top" style="avendor" />
						</div>
						<?php endif; ?>	
						<jdoc:include type="message" />
						<jdoc:include type="component" />
						<?php if ($this->countModules( 'content-bottom' )) : ?>
						<div class="innerbottom">
							<jdoc:include type="modules" name="content-bottom" style="avendor" />
						</div>
						<?php endif; ?>
						<div class="white-space space-medium"></div>
					</div>
					<div class="col-md-3 col-sm-4 sidebar sidebar-right">
						<div class="white-space space-medium"></div>
							<div class="sidebar-content">
								<jdoc:include type="modules" name="sidebar-right" style="avendor_sidebar" />
							</div>
						<div class="white-space space-medium"></div>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>	
		
		<!-- No Sidebar -->
		
		<?php if (!$this->countModules( 'sidebar-left' ) and !$this->countModules( 'sidebar-right' )) : ?>
		<div class="main-wrapper">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="white-space space-medium"></div>
						<?php if ($this->countModules( 'content-top' )) : ?>
						<div class="innertop">
							<jdoc:include type="modules" name="content-top" style="avendor" />
						</div>
						<?php endif; ?>
						<jdoc:include type="message" />
						<jdoc:include type="component" />
						<?php if ($this->countModules( 'content-bottom' )) : ?>
						<div class="innerbottom">
							<jdoc:include type="modules" name="content-bottom" style="avendor" />
						</div>
						<?php endif; ?>
						<div class="white-space space-medium"></div>
					</div>
				</div>
			</div>
		</div>
		<?php endif; ?>	
    
    <!-- Footer -->
    
		<div class="footer-wrapper">
			
			<?php if ($this->countModules( 'footer-map' )) : ?>
			<div class="footer-top">            
				<jdoc:include type="modules" name="footer-map" style="avendor" />
			</div>
			<?php endif; ?>

			<div class="footer-bottom">
				<div class="container">
					<div class="row">
						
						<?php if ($this->countModules( 'footer-menu' )) : ?>
						<div class="col-md-12 col-sm-12 columns">
							<div class="menu-footer">
								<jdoc:include type="modules" name="footer-menu" style="avendor" />
							</div>
						</div>
						<?php endif; ?>
						
						<?php if ( $copyright != '' ) : ?>
						<div class="col-md-12 col-sm-12 columns">
							<div class="copyright">		
								<p><?php if ( $copyright_year == '1' ) : ?>&copy; <?php $timestamp = time(); $datum = date("Y", $timestamp); echo $datum; ?><?php endif; ?> <?php echo $copyright ; ?></p>
							</div>
						</div>
						<?php endif; ?>
						
						<?php if ($this->countModules( 'footer-social' )) : ?>
						<div class="col-md-12 col-sm-12 columns">
							<div class="social-footer">
								<jdoc:include type="modules" name="footer-social" style="avendor" />
							</div>
						</div>
						<?php endif; ?>
						
					</div>
				</div>
			</div>
		</div>
		
	</div>	

	<a href="#page-top" class="scrollup smooth-scroll" ><span class="fa fa-angle-up"></span></a>
 
	<!-- Style Switcher -->
	<?php if($this->countModules('switcher')) : ?>
		<jdoc:include type="modules" name="switcher" style="none" />
	<?php endif; ?>
	
	
	<!-- Reveal Modules -->
	
	<?php if($this->countModules('reveal1')) : ?>
	<jdoc:include type="modules" name="reveal1" style="reveal1" />
	<?php endif; ?>
	
	<?php if($this->countModules('reveal2')) : ?>
	<jdoc:include type="modules" name="reveal2" style="reveal2" />
	<?php endif; ?>
	
	<?php if($this->countModules('reveal3')) : ?>
	<jdoc:include type="modules" name="reveal3" style="reveal3" />
	<?php endif; ?>
	
	<?php if($this->countModules('reveal4')) : ?>
	<jdoc:include type="modules" name="reveal4" style="reveal4" />
	<?php endif; ?>
	
	<?php if($this->countModules('reveal5')) : ?>
	<jdoc:include type="modules" name="reveal5" style="reveal5" />
	<?php endif; ?>
	
	<?php if($this->countModules('reveal6')) : ?>
	<jdoc:include type="modules" name="reveal6" style="reveal6" />
	<?php endif; ?>
	
	<?php if($this->countModules('reveal7')) : ?>
	<jdoc:include type="modules" name="reveal7" style="reveal7" />
	<?php endif; ?>
	
	<?php if($this->countModules('reveal8')) : ?>
	<jdoc:include type="modules" name="reveal8" style="reveal8" />
	<?php endif; ?>
	
	<?php if($this->countModules('reveal9')) : ?>
	<jdoc:include type="modules" name="reveal9" style="reveal9" />
	<?php endif; ?>
	
	<?php if($this->countModules('reveal10')) : ?>
	<jdoc:include type="modules" name="reveal10" style="reveal10" />
	<?php endif; ?>
	
	
	<?php if ( $addcode != '' ) echo $addcode ;?>

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

	
	<?php if($this->countModules('preloader')) : ?>
	<script type="text/javascript">
	jQuery("body").queryLoader2({
		barColor: "<?php if ( $preloader_bgcolor == '') { echo $c1; } else { echo $preloader_bgcolor; } ?>",
		backgroundColor: "<?php echo $preloader_color; ?>",
		percentage: <?php if ( $preloader_percent == '1') { echo 'true'; } else { echo 'false'; } ?>,
		barHeight: <?php echo $preloader_height; ?>,
		completeAnimation: "grow",
		minimumTime: 100,
		onLoadComplete: hidePreLoader
	});
	function hidePreLoader() {
		jQuery("#preloader").hide();
	}
	</script>
	<?php endif; ?>
	
</body>
</html>
