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

$offline_countdown = $this->params->get('offline_countdown');
$offline_countdown_value = $this->params->get('offline_countdown_value');
$offline_bgimage = $this->params->get('offline_bgimage');

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

<body class="<?php echo $bgimage ; ?> <?php echo (($menu->getActive() == $menu->getDefault()) ? ('front') : ('page')).' active-'.$active->alias.' '.$pageclass; ?>">

	<div class="page-wrapper <?php if ( $boxed == 'boxed' ) echo 'boxed' ;?>" id="page-top">

		<div class="header-wrapper">
      <div class="header-main">
        <div class="container">                
					<div class="main-navigation">
            <div class="row">
              <div class="col-md-12 columns">
                <nav class="navbar nav-centered navbar-default gfx-mega nav-left" role="navigation">									
								  <div class="navbar-header">
										<a class="navbar-toggle" data-toggle="collapse" data-target="#gfx-collapse"></a>
                    <div class="logo">
                      <a href="index.html">
                        <?php if ($app->getCfg('offline_image') && file_exists($app->getCfg('offline_image'))) : ?>
                        <img src="<?php echo $app->getCfg('offline_image'); ?>" alt="<?php echo htmlspecialchars($app->getCfg('sitename')); ?>" />
                        <?php else : ?>
                        <?php echo htmlspecialchars($app->getCfg('sitename')); ?>
                        <?php endif; ?>
                      </a>
                    </div>
                  </div>
                </nav>
              </div>
            </div>              
          </div>
        </div>
      </div>   
    </div>
    
    
    
      
		<div class="main-wrapper">
      <div class="parallax" data-stellar-background-ratio="0.4" style="background-image:url(<?php echo $offline_bgimage;?>);">
				<div class="bg-overlay bg-overlay-dark"></div>
        <div class="white-space space-big"></div>
        <div class="container">
          <div class="row">
             <div class="col-md-8 col-md-offset-2">
               <h1 class="fancy-title text-center color-white">
                <span>
               
               <?php if ($app->getCfg('display_offline_message', 1) == 1 && str_replace(' ', '', $app->getCfg('offline_message')) != '') : ?>
								<?php echo $app->getCfg('offline_message'); ?>
							<?php elseif ($app->getCfg('display_offline_message', 1) == 2 && str_replace(' ', '', JText::_('JOFFLINE_MESSAGE')) != '') : ?>
								<?php echo JText::_('JOFFLINE_MESSAGE'); ?>
							<?php endif; ?>
               
                </span>
               </h1>
               <p class="lead text-center color-white">We will be back in:</p>
             <div class="white-space space-small"></div>
          </div>
          <div class="col-md-12">
				  <!-- Counter -->
             <div class="row">
               <div class="countdown styled"></div>
            </div>
             <!-- / Counter -->
          </div>
          <div class="col-md-4 col-md-offset-4">
            <div class="white-space space-xsmall"></div>
              <h3 class="text-center color-white"><?php echo JText::_('JLOGIN') ?></h3>
              <div class="white-space space-xsmall"></div>
                  
              <jdoc:include type="message" />
								<form action="<?php echo JRoute::_('index.php', true); ?>" method="post" id="form-login">
									<fieldset class="input" style="margin-bottom:-10px !important;">
										<input name="username" id="username" type="text" class="form-control mb25" alt="<?php echo JText::_('JGLOBAL_USERNAME') ?>" placeholder="<?php echo JText::_('JGLOBAL_USERNAME') ?>" />
										<input type="password" name="password" class="form-control mb25" alt="<?php echo JText::_('JGLOBAL_PASSWORD') ?>" id="passwd" placeholder="<?php echo JText::_('JGLOBAL_PASSWORD') ?>" />
										
										<?php if (count($twofactormethods) > 1) : ?>
											<input type="text" name="secretkey" class="form-control mb25" alt="<?php echo JText::_('JGLOBAL_SECRETKEY') ?>" id="secretkey" placeholder="<?php echo JText::_('JGLOBAL_SECRETKEY') ?>" />
										<?php endif; ?>

										<p id="submit-buton" class="text-center">
											<input type="submit" name="Submit" class="btn btn-primary login" value="<?php echo JText::_('JLOGIN') ?>" />
										</p>
										
										<?php if (JPluginHelper::isEnabled('system', 'remember')) : ?>
										<p id="form-login-remember" class="text-center">
											<label for="remember"><?php echo JText::_('JGLOBAL_REMEMBER_ME') ?></label>
											<input type="checkbox" name="remember" class="inputbox" value="yes" alt="<?php echo JText::_('JGLOBAL_REMEMBER_ME') ?>" id="remember" />
										</p>
										<?php endif; ?>
										<input type="hidden" name="option" value="com_users" />
										<input type="hidden" name="task" value="user.login" />
										<input type="hidden" name="return" value="<?php echo base64_encode(JUri::base()) ?>" />
										<?php echo JHtml::_('form.token'); ?>
									</fieldset>
								</form>		
                
            </div>
          </div>                
        </div>
        <div class="white-space space-big"></div>
      </div>
    </div>
  
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

	

	<script type="text/javascript">
	
	<?php if ( $offline_countdown == '1' ) : ?>
  jQuery(function() {
    var endDate = "<?php echo $offline_countdown_value;?>";

    jQuery('.countdown.styled').countdown({
      date: endDate,
      render: function(data) {
        jQuery(this.el).html("<div class='col-md-3 col-sm-6'><div class='counter-block'>" + this.leadingZeros(data.days, 3) + " <span>days</span></div></div><div class='col-md-3 col-sm-6'><div class='counter-block'>" + this.leadingZeros(data.hours, 2) + " <span>hrs</span></div></div><div class='col-md-3 col-sm-6'><div class='counter-block'>" + this.leadingZeros(data.min, 2) + " <span>min</span></div></div><div class='col-md-3 col-sm-6'><div class='counter-block'>" + this.leadingZeros(data.sec, 2) + " <span>sec</span></div></div>");
        }
      });
    });
    <?php endif; ?>
	
	</script>

	
</body>
</html>

