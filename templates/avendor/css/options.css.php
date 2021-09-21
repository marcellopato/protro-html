<?php
  header('Content-type: text/css');
  
  $c1 = '#000';
  $c2 = '#000';
  $c3 = '#000';
  $c4 = '#000';
  
  $c1 = $_GET['c1'];
  $c2 = $_GET['c2'];
  $c3 = $_GET['c3'];
  $c4 = $_GET['c4'];

	$rgb = hex2rgb($c1);
	function hex2rgb($hex) { $r = hexdec(substr($hex,0,2)); $g = hexdec(substr($hex,2,2)); $b = hexdec(substr($hex,4,2)); $rgb = array($r, $g, $b);	return implode(",", $rgb);}
 
?>

/* color */
a {color:#<?php echo $c1 ;?>;}
.main-wrapper-header .breadcrumbs-wrapper .breadcrumb > li + li:before {color:#<?php echo $c1 ;?>;}
.navbar-default .navbar-nav > .active > a {color:#<?php echo $c1 ;?>;}
.navbar-default .navbar-nav > .active > a:hover {color:#<?php echo $c1 ;?>;}
.navbar-default .navbar-nav > .active > a:focus {color:#<?php echo $c1 ;?>;}
.navbar-default .navbar-nav > li > a:hover {color:#<?php echo $c1 ;?>;}
.navbar-default .navbar-nav > li > a:focus {color:#<?php echo $c1 ;?>;}
.mega-menu-list > li > a:hover {color:#<?php echo $c1 ;?>;}
.mega-menu-list > li > a:focus {color:#<?php echo $c1 ;?>;}
.dropdown-menu > li > a:hover {color:#<?php echo $c1 ;?>;}
.dropdown-menu > li > a:focus {color:#<?php echo $c1 ;?>;}
.title-color {color:#<?php echo $c1 ;?>;}
.btn-primary.btn-alt {color:#<?php echo $c1 ;?>;}
.cl-effect-4 a:hover::before {color:#<?php echo $c1 ;?>;}
.cl-effect-4 a:focus::before {color:#<?php echo $c1 ;?>;}
.accordion .accordion-toggle {color:#<?php echo $c1 ;?>;}
.accordion .accordion-toggle.collapsed:hover {color:#<?php echo $c1 ;?>;}
.scrollup:hover {color:#<?php echo $c1 ;?>;}
.scrollup:focus {color:#<?php echo $c1 ;?>;}
.team-info .team-role {color:#<?php echo $c1 ;?>;}
.nav-tabs.tabs-alt > li.active > a {color:#<?php echo $c1 ;?>;}
.nav-tabs.tabs-alt > li.active > a:hover {color:#<?php echo $c1 ;?>;}
.nav-tabs.tabs-alt > li.active > a:focus {color:#<?php echo $c1 ;?>;}
.post-format {color:#<?php echo $c1 ;?>;}
.product-links ul li a:hover {color:#<?php echo $c1 ;?>;}
.shop-product .product-links ul li a:focus {color:#<?php echo $c1 ;?>;}
.nav-tabs > li > a:hover {color:#<?php echo $c1 ;?>;}
.footer-middle .footer-widget .tweet_list li .tweet_text a {color:#<?php echo $c1 ;?>;}


@media (min-width: 992px) {
  .navbar-nav > li > a:hover {color:#<?php echo $c1 ;?>;}
  .navbar-nav > li > a:focus {color:#<?php echo $c1 ;?>;}
}

/* background color */

.mega-menu-list > li.active > a {background-color:#<?php echo $c1 ;?>;}
.dropdown-menu > .active > a {background-color:#<?php echo $c1 ;?>;}
.dropdown-menu > .active > a:hover {background-color:#<?php echo $c1 ;?>;}
.dropdown-menu > .active > a:focus {background-color:#<?php echo $c1 ;?>;}
.fancy-title span:after {background-color:#<?php echo $c1 ;?>;}
.text-center.fancy-title span:after {background-color:#<?php echo $c1 ;?>;}
.text-right.fancy-title span:after {background-color:#<?php echo $c1 ;?>;}
.carousel .owl-controls .owl-buttons div {background-color:#<?php echo $c1 ;?>;}
.carousel .owl-controls .owl-page span {background-color:#<?php echo $c1 ;?>;}
.btn-primary {background-color:#<?php echo $c1 ;?>;}
.btn-primary.btn-alt:hover {background-color:#<?php echo $c1 ;?>;}
.btn-primary.btn-alt:focus {background-color:#<?php echo $c1 ;?>;}
.btn-primary.btn-alt:active {background-color:#<?php echo $c1 ;?>;}
.btn-primary.btn-alt.active {background-color:#<?php echo $c1 ;?>;}
.open .dropdown-toggle.btn-primary.btn-alt {background-color:#<?php echo $c1 ;?>;}
.progress-bar {background-color:#<?php echo $c1 ;?>;}
hr.hr-fancy:after {background-color:#<?php echo $c1 ;?>;}
.label-primary {background-color:#<?php echo $c1 ;?>;}
.nav-tabs > li.active > a {background-color:#<?php echo $c1 ;?>;}
.nav-tabs > li.active > a:hover {background-color:#<?php echo $c1 ;?>;}
.nav-tabs > li.active > a:focus {background-color:#<?php echo $c1 ;?>;}
.nav-pills > li.active > a {background-color:#<?php echo $c1 ;?>;}
.nav-pills > li.active > a:hover {background-color:#<?php echo $c1 ;?>;}
.nav-pills > li.active > a:focus {background-color:#<?php echo $c1 ;?>;}
.pricing-table .pricing-table-head .pricing-head-title {background-color:#<?php echo $c1 ;?>;}
.pagination > .active > a {background-color:#<?php echo $c1 ;?>;}
.pagination > .active > span {background-color:#<?php echo $c1 ;?>;}
.pagination > .active > a:hover {background-color:#<?php echo $c1 ;?>;}
.pagination > .active > span:hover {background-color:#<?php echo $c1 ;?>;}
.pagination > .active > a:focus {background-color:#<?php echo $c1 ;?>;}
.pagination > .active > span:focus {background-color:#<?php echo $c1 ;?>;}
.pagination > li > a:hover {background-color:#<?php echo $c1 ;?>;}
.pagination > li > span:hover {background-color:#<?php echo $c1 ;?>;}
.pagination > li > a:focus {background-color:#<?php echo $c1 ;?>;}
.pagination > li > span:focus {background-color:#<?php echo $c1 ;?>;}
.blog-post .blog-post-side .blog-post-date {background-color:#<?php echo $c1 ;?>;}
ul#filters li a.filter.selected {background-color:#<?php echo $c1 ;?>;}
.colio-theme-gfx .colio-close {background-color:#<?php echo $c1 ;?>;}
.colio-theme-gfx .colio-navigation a {background-color:#<?php echo $c1 ;?>;}
.nav-tabs.tabs-alt > li.active > a:after {background-color:#<?php echo $c1 ;?>;}
.accordion.accordion-alt .accordion-toggle {background-color:#<?php echo $c1 ;?>;}
.accordion.accordion-alt .accordion-toggle.collapsed:hover {background-color:#<?php echo $c1 ;?>;}
.overlay-bg {background-color:#<?php echo $c1 ;?>;}
.o-tooltip-inner {background-color:#<?php echo $c1 ;?>;}
.cl-effect-2 a::before {background-color:#<?php echo $c1 ;?>;}
.cl-effect-2 a::after {background-color:#<?php echo $c1 ;?>;}
.cl-effect-5 a::before {background-color:#<?php echo $c1 ;?>;}
.cl-effect-5 a::after {background-color:#<?php echo $c1 ;?>;}
.cl-effect-6 a::before {background-color:#<?php echo $c1 ;?>;}
.cl-effect-6 a::after {background-color:#<?php echo $c1 ;?>;}
.introjs-helperNumberLayer {background-color:#<?php echo $c1 ;?>;}

/* border color */

.nav .open > a {border-color:#<?php echo $c1 ;?>;}
.nav .open > a:hover {border-color:#<?php echo $c1 ;?>;}
.nav .open > a:focus {border-color:#<?php echo $c1 ;?>;}
.navbar-default .navbar-nav > .open > a {border-color:#<?php echo $c1 ;?>;}
.navbar-default .navbar-nav > .open > a:hover {border-color:#<?php echo $c1 ;?>;}
.navbar-default .navbar-nav > .open > a:focus {border-color:#<?php echo $c1 ;?>;}
.pagination > .active > a {border-color:#<?php echo $c1 ;?>;}
.pagination > .active > span {border-color:#<?php echo $c1 ;?>;}
.pagination > .active > a:hover {border-color:#<?php echo $c1 ;?>;}
.pagination > .active > span:hover {border-color:#<?php echo $c1 ;?>;}
.pagination > .active > a:focus {border-color:#<?php echo $c1 ;?>;}
.pagination > .active > span:focus {border-color:#<?php echo $c1 ;?>;}
.pagination > li > a:hover {border-color:#<?php echo $c1 ;?>;}
.pagination > li > span:hover {border-color:#<?php echo $c1 ;?>;}
.pagination > li > a:focus {border-color:#<?php echo $c1 ;?>;}
.pagination > li > span:focus {border-color:#<?php echo $c1 ;?>;}
ul#filters li a.filter.selected {border-color:#<?php echo $c1 ;?>;}
.btn-primary.btn-alt {border-color:#<?php echo $c1 ;?>;}
.btn-primary.btn-alt:hover {border-color:#<?php echo $c1 ;?>;}
.btn-primary.btn-alt:focus {border-color:#<?php echo $c1 ;?>;}
.btn-primary.btn-alt:active {border-color:#<?php echo $c1 ;?>;}
.btn-primary.btn-alt.active {border-color:#<?php echo $c1 ;?>;}
.open .dropdown-toggle.btn-primary.btn-alt {border-color:#<?php echo $c1 ;?>;}
.form-control:focus {border-color:#<?php echo $c1 ;?>;}
.nav-tabs.nav-justified > .active > a:focus {border-color:#<?php echo $c1 ;?>;}
.glyphs.css-mapping input:focus {border-color:#<?php echo $c1 ;?>;}
.glyphs.css-mapping input:hover {border-color:#<?php echo $c1 ;?>;}
.scrollup:hover {border-color:#<?php echo $c1 ;?>;}
.scrollup:focus {border-color:#<?php echo $c1 ;?>;}
a.thumbnail:hover, a.thumbnail:focus, a.thumbnail.active {border-color:#<?php echo $c1 ;?>;}

@media (min-width: 768px) {
  .nav-tabs.nav-justified > li > a {border-bottom-color: #<?php echo $c1 ;?>; }
  .nav-tabs.nav-justified > .active > a {border-bottom-color: #<?php echo $c1 ;?>;}
  .nav-tabs.nav-justified > .active > a:hover {border-bottom-color: #<?php echo $c1 ;?>;}
  .nav-tabs.nav-justified > .active > a:focus {border-bottom-color: #<?php echo $c1 ;?>;}
}

/* hover color */

a:hover {color: #<?php echo $c2 ;?>;}
a:focus {color: #<?php echo $c2 ;?>;}
.social-top a:hover {color: #<?php echo $c2 ;?>;}
.social-top a:focus {color: #<?php echo $c2 ;?>;}
.top-menu a:hover {color: #<?php echo $c2 ;?>;}
.top-menu a:focus {color: #<?php echo $c2 ;?>;}
.footer-bottom a:hover {color: #<?php echo $c2 ;?>;}
.post-meta-info a:hover {color: #<?php echo $c2 ;?>;}
.post-meta-info a:focus {color: #<?php echo $c2 ;?>;}

.btn-primary:hover {background-color: #<?php echo $c2 ;?>;}
.btn-primary:focus {background-color: #<?php echo $c2 ;?>;}
.btn-primary:active {background-color: #<?php echo $c2 ;?>;}
.btn-primary.active {background-color: #<?php echo $c2 ;?>;}
.open .dropdown-toggle.btn-primary {background-color: #<?php echo $c2 ;?>;}
.label-primary[href]:hover {background-color: #<?php echo $c2 ;?>;}
.label-primary[href]:focus {background-color: #<?php echo $c2 ;?>;}

/* specials */

.nav-tabs > li > a {border-bottom-color: #<?php echo $c1 ;?>;}
.nav-tabs > li.active > a {border-bottom-color: #<?php echo $c1 ;?>;}
.nav-tabs > li.active > a:hover {border-bottom-color: #<?php echo $c1 ;?>;}
.nav-tabs > li.active > a:focus {border-bottom-color: #<?php echo $c1 ;?>;}

.carousel .owl-controls .owl-page.active span {background-color: #<?php echo $c1 ;?> !important;}
.carousel .owl-controls.clickable .owl-page:hover span {background-color: #<?php echo $c1 ;?> !important;}

.o-tooltip.bc .o-tooltip-arrow {border-top-color:#<?php echo $c1 ;?>;}
.o-tooltip.mr .o-tooltip-arrow {border-left-color:#<?php echo $c1 ;?>;}
.o-tooltip.tc .o-tooltip-arrow {border-bottom-color:#<?php echo $c1 ;?>;}
.o-tooltip.ml .o-tooltip-arrow {border-right-color:#<?php echo $c1 ;?>;}
.o-tooltip.tl .o-tooltip-arrow {border-left-color:#<?php echo $c1 ;?>; }
.o-tooltip.bl .o-tooltip-arrow {border-left-color:#<?php echo $c1 ;?>; }
.o-tooltip.tr .o-tooltip-arrow {border-right-color:#<?php echo $c1 ;?>;}
.o-tooltip.br .o-tooltip-arrow {border-right-color:#<?php echo $c1 ;?>;}

.cl-effect-4 a:hover::before {text-shadow: 10px 0 #<?php echo $c1 ;?>, -10px 0 #<?php echo $c1 ;?>;}
.cl-effect-4 a:focus::before {text-shadow: 10px 0 #<?php echo $c1 ;?>, -10px 0 #<?php echo $c1 ;?>;}

.bg-color-default{ background-color:#<?php echo $c1 ;?> !important;}
.bg-color-primary{ background-color:#<?php echo $c1 ;?> !important;}
.bg-color-theme{ background-color:#<?php echo $c1 ;?> !important;}
.color-default{ color:#<?php echo $c1 ;?> !important;}
.color-primary{ color:#<?php echo $c1 ;?> !important;}
.color-theme{ color:#<?php echo $c1 ;?> !important;}

