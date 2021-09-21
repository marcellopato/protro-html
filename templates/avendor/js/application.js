/* -------------------------------------------------------------------------------- /
	
	Avendor jQuery
	Created by 4grafx
	v1.0 - 20.02.2014
	All rights reserved.

	+----------------------------------------------------+
		TABLE OF CONTENTS
	+----------------------------------------------------+
	
	[1]		Page Preloader
	[2]		Initialize Boostrap
	[3]		Main Menu
	[4]		Smooth Scroll to Section
	[5]		Sticky Nav Bar
	[6]		Panel Slide
	[7]		Revolution Slider
	[8]		Revolution Shop Slider
	[9]		Portfolio
	[10]	OWL Carousel
	[11]	Parallax
	[12]	Lightbox
	[13]	Tooltips
	[14]	Animation on Scroll
	[15]	Google Maps
	[16]	Counters
	[17]	Pie Chart
	[18]	Twitter
	[19]	Back to top
	[20]	Under Construction Counter
	[21]	Animate Demo - remove on production websites
	
/ -------------------------------------------------------------------------------- */

var gfx=jQuery;
gfx.noConflict();


/* ---------------------------------------------------
	Small hacks for Bootstrap 2 -> 3
-------------------------------------------------- */
   
  jQuery('.row-fluid').addClass('row');
  jQuery('.hero-unit').addClass('jumbotron');
  jQuery('.btn').addClass('btn-default');
  jQuery('.btn-mini').addClass('btn-xs');
  jQuery('.btn-small').addClass('btn-sm');
  jQuery('.btn-large').addClass('btn-lg');
  jQuery('.alert-error').addClass('alert-danger');
  jQuery('.input-block-level').addClass('form-control');
  jQuery('.checkbox.inline').addClass('checkbox-inline');
  jQuery('.radio.inline').addClass('radio-inline');
  jQuery('.input-prepend').addClass('input-group');
  jQuery('.input-append').addClass('input-group');
  jQuery('ul.unstyled').addClass('list-unstyled');
  jQuery('ul.inline').addClass('list-inline');
  jQuery('muted').addClass('text-muted');
  jQuery('table.category').addClass('table');
  jQuery('.button').addClass('btn');
  
  jQuery('.span1').addClass('col-md-1 col-sm-1');
  jQuery('.span2').addClass('col-md-2 col-sm-2');
  jQuery('.span3').addClass('col-md-3 col-sm-3');
  jQuery('.span4').addClass('col-md-4 col-sm-4');
  jQuery('.span5').addClass('col-md-5 col-sm-5');
  jQuery('.span6').addClass('col-md-6 col-sm-6');
  jQuery('.span7').addClass('col-md-7 col-sm-7');
  jQuery('.span8').addClass('col-md-8 col-sm-8');
  jQuery('.span9').addClass('col-md-9 col-sm-9');
  jQuery('.span10').addClass('col-md-10 col-sm-10');
  jQuery('.span11').addClass('col-md-11 col-sm-11');
  jQuery('.span12').addClass('col-md-12 col-sm-12');
  
  jQuery('input[type=text],input[type=url],input[type=tel],input[type=number],input[type=color],input[type=email],input[type=password], textarea').addClass('form-control');
  
  jQuery('#k2Container .catItemCommentsLink').css('display','none');
  jQuery('#k2Container .catItemReadMore a').addClass('btn btn-primary');
  jQuery('#k2Container table.admintable').addClass('table');
  jQuery('#k2Container .catItemReadMore a').each(function() {
		jQuery(this).append('<i class="fa fa-margin-left fa-arrow-circle-right"></i>');
	});





  
  jQuery('p.readmore a span').remove();
  jQuery('p.readmore a').addClass('btn-readmore btn-primary');
  jQuery('.icon-cog').removeClass('icon-cog').addClass('fa fa-cog');
  jQuery('.icon-calendar').removeClass('icon-calendar').addClass('fa fa-calendar');
  jQuery('.icon-edit').removeClass('icon-edit').addClass('fa fa-edit');
  jQuery('.icon-search').removeClass('icon-search').addClass('icon gfx-search');
  jQuery('form.well').removeClass('well');
  
  jQuery('ul.nav.nav-tabs.nav-stacked').removeClass('nav nav-tabs nav-stacked').addClass('nav nav-tabs tabs-alt');
  

  

  
  

/* ---------------------------------------------------
	THIS CAN BE REMOVED, FOR DEMO ONLY
-------------------------------------------------- */

jQuery('body.active-about-us-alt h4.team-name').addClass('color-white');
jQuery('body.active-about-us-alt .team-member img').addClass('img-transparency');





/* ---------------------------------------------------
	Initialize Boostrap
-------------------------------------------------- */

!function (gfx) {

  gfx(function(){
    // Bootstrap Tooltip
    gfx("[data-toggle=tooltip-boot]").tooltip()

    // Bootstrap Popover
    gfx("[data-toggle=popover]")
      .popover()
		}
	)
}(window.jQuery)

/* ---------------------------------------------------
	Main Menu
-------------------------------------------------- */


gfx('.navbar .dropdown').hover(function() {
gfx(this).addClass('open').find('.dropdown-menu').first().stop(true, true).slideDown(300);
    }, function() {
gfx(this).removeClass('open').find('.dropdown-menu').first().stop(true, true).hide(300);
    });

gfx('.navbar .dropdown > a').click(function(){
location.href = this.href;
});


gfx(document).on('click', '.gfx-nav .dropdown-menu', function(e) {
  e.stopPropagation()
})


/* ---------------------------------------------------
	Smooth Scroll to Section
-------------------------------------------------- */

    gfx(function() {
        gfx('a.smooth-scroll[href*=#]:not([href=#])').click(function() {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {

                var target = gfx(this.hash);
                target = target.length ? target : gfx('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    gfx('html,body').animate({
                        scrollTop: target.offset().top
                    }, 2000, 'easeInOutExpo');
                    return false;
                }
            }
        });
    });


/* ---------------------------------------------------
	Sticky Bar
-------------------------------------------------- */

            gfx(function() {

                gfx(".header-main").stickOnScroll({
                    topOffset: 0,
                    setParentOnStick:   true
                });
				
				 var shrinkHeader = 600;
  					gfx(window).scroll(function() {
    				var scroll = getCurrentScroll();
      					if ( scroll >= shrinkHeader ) {
           					gfx('.header-main').addClass('shrink');
        					}
       					else {
            				gfx('.header-main').removeClass('shrink');
        					 }
						});
				function getCurrentScroll() {
				return window.pageYOffset || document.documentElement.scrollTop;
				}
                
            });


/* ---------------------------------------------------
	Panel Slide
-------------------------------------------------- */


gfx(document).ready(function(){

	gfx(".slide-panel-btn").click(function(){
		gfx("#slide-panel").slideToggle(250);
		gfx(this).toggleClass("active"); return false;
	});
	
	 
});

/* ---------------------------------------------------
	Parallax
-------------------------------------------------- */


		gfx(function(){
			gfx.stellar({
				horizontalScrolling: false,
				verticalOffset: 0,
			});
		});

/* ---------------------------------------------------
	Tooltips
-------------------------------------------------- */

        gfx(document).ready(function() {
            gfx(".ToolTip, .hasTooltip").OpieTooltip({     

            });
        }); 

/* ---------------------------------------------------
	Animation on Scroll
-------------------------------------------------- */	
		
gfx('.animation').waypoint(function(direction) {
  gfx(this).addClass('animation-active');
}, { 	offset: '100%',
triggerOnce: true });


/* ---------------------------------------------------
	Team Members
-------------------------------------------------- */
gfx(".team-wrapper").on("click", function() {
    gfx(this).toggleClass('cardtoggle').siblings().removeClass('cardtoggle');
});

/* ---------------------------------------------------
	Counters
-------------------------------------------------- */

gfx('.counter-up').waypoint(function(direction) {
  gfx(this).addClass('timer');
  gfx('.timer').countTo()
}, { 	offset: '100%',
triggerOnce: true });

gfx('.timer').countTo()


/* ---------------------------------------------------
	Pie Chart
-------------------------------------------------- */

gfx(document).ready(function() 
	
	{ jQuery(".chart").waypoint(function(direction) { 
	
  gfx('.progress-pie .chart').each(function () {
	var carousel = gfx(this).closest('.progress-pie');

    gfx(this).easyPieChart({
		barColor: gfx(this).data('bar-color'),
		trackColor: gfx(this).data('track-color'),
		scaleColor: gfx(this).data('scale-color'),
		lineWidth: gfx(this).data('line-width'),
		lineCap: "butt",
		scaleLength: 6,
		size:180,
		rotate: 0,
		animate:2000,
        
    })
  });	
	}, { offset: '100%',
triggerOnce: true }); });


/* ---------------------------------------------------
	OWL Carousel
-------------------------------------------------- */

  gfx('.carousel-box .carousel').each(function () {
	var carousel = gfx(this).closest('.carousel-box');

		gfx(this).owlCarousel({
			//direction		 :'rtl', //use if your site is RTL
	  		autoPlay	 	 : gfx(this).data('carousel-autoplay'),
	  		items		 	 : gfx(this).data('carousel-items'),
			navigation		 : gfx(this).data('carousel-nav'),
			pagination		 : gfx(this).data('carousel-pagination'),
			singleItem		 : gfx(this).data('carousel-single'),
			transitionStyle	 : gfx(this).data('carousel-transition'),
			slideSpeed	     : gfx(this).data('carousel-speed'),
			navigationText : ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
			lazyLoad : true,
	  		autoHeight : true,
		})
  });


/* Sync Carousel */

    gfx(document).ready(function() {
     
    var sync1 = gfx("#full-sync");
    var sync2 = gfx("#thumb-sync");
     
    sync1.owlCarousel({
    singleItem : true,
    slideSpeed : 1000,
    navigation: false,
    pagination:false,
	transitionStyle : "fade",
    afterAction : syncPosition,
    responsiveRefreshRate : 200,
    });
     
    sync2.owlCarousel({
    items : 3,
	itemsDesktop : [1199,3],
	itemsDesktopSmall : [979,3],
	itemsTablet : [768,3],
	itemsMobile : [479,2],
    pagination:false,
    responsiveRefreshRate : 100,
    afterInit : function(el){
    el.find(".owl-item").eq(0).addClass("synced");
    }
    });
     
    function syncPosition(el){
    var current = this.currentItem;
    gfx("#thumb-sync")
    .find(".owl-item")
    .removeClass("synced")
    .eq(current)
    .addClass("synced")
    if(gfx("#thumb-sync").data("owlCarousel") !== undefined){
    center(current)
    }
    }
     
    gfx("#thumb-sync").on("click", ".owl-item", function(e){
    e.preventDefault();
    var number = gfx(this).data("owlItem");
    sync1.trigger("owl.goTo",number);
    });
     
    function center(number){
    var sync2visible = sync2.data("owlCarousel").owl.visibleItems;
    var num = number;
    var found = false;
    for(var i in sync2visible){
    if(num === sync2visible[i]){
    var found = true;
    }
    }
     
    if(found===false){
    if(num>sync2visible[sync2visible.length-1]){
    sync2.trigger("owl.goTo", num - sync2visible.length+2)
    }else{
    if(num - 1 === -1){
    num = 0;
    }
    sync2.trigger("owl.goTo", num);
    }
    } else if(num === sync2visible[sync2visible.length-1]){
    sync2.trigger("owl.goTo", sync2visible[1])
    } else if(num === sync2visible[0]){
    sync2.trigger("owl.goTo", num-1)
    }
    }
     
    });









/* ---------------------------------------------------
	Lightbox
-------------------------------------------------- */


if (gfx().magnificPopup) {
	gfx('[data-lightbox=image], .lightbox').each(function(index, element) {
		gfx(this).magnificPopup({
			type:'image',
			mainClass: 'mfp-fade',
			fixedContentPos: false,
           	fixedBgPos: true,
           	overflowY: 'auto',
			removalDelay: 300,
			closeOnContentClick: true,
			
		});		
	});
	
	gfx('[data-lightbox=video], [data-lightbox=map], [data-lightbox=iframe], .lightbox-video, .lightbox-map, .lightbox-iframe').each(function(index, element) {
		gfx(this).magnificPopup({
			mainClass: 'mfp-fade',
			removalDelay: 300,
			fixedContentPos: false,
           	fixedBgPos: true,
           	overflowY: 'auto',
		  	type: 'iframe',
		  	fixedContentPos: false
		});
	});
	
	gfx('[data-lightbox=gallery], .lightbox-gallery').each(function(index, element) {
		gfx(this).magnificPopup({
			mainClass: 'mfp-fade',
			removalDelay: 300,
			fixedContentPos: false,
           	fixedBgPos: true,
           	overflowY: 'auto',
		  	type: 'image',
		  	delegate: 'a',
			gallery: {
				enabled: true
			}
		});
	});
	
	
};



/* ---------------------------------------------------
	Video BG
-------------------------------------------------- */



/* Shop Input */
gfx('.qup').on('click',function(){
    gfx('.input-quantity').val(parseInt(gfx('.input-quantity').val())+1);
});

gfx('.qdown').on('click',function(){
    gfx('.input-quantity').val(parseInt(gfx('.input-quantity').val())-1);
}); 


/* ---------------------------------------------------
	Back to Top
-------------------------------------------------- */

gfx(document).ready(function(){
 
	gfx(window).scroll(function(){
	    if (gfx(this).scrollTop() > 100) {
	        gfx('.scrollup').fadeIn();
	    } else {
	        gfx('.scrollup').fadeOut();
	    }
	});	

});




