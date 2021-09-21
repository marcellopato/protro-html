<?php

/*
# -------------------------------------------------------------------------
# Custom Field About for Joomla Backend
# -------------------------------------------------------------------------
# author     WS-Theme.com
# copyright  Copyright (C) 2013 WS-Theme.com. All Rights Reserved.
# @license - http://www.gnu.org/licenses/gpl-3.0.html GNU/GPL
# Websites:  http://www.ws-theme.com
# -------------------------------------------------------------------------
*/

// no direct access
defined('JPATH_BASE') or die;

jimport('joomla.form.formfield');

class JFormFieldAbout extends JFormField {
	protected $type = 'About';

	protected function getLabel() 
	{
	   return '';
  }

	protected function getInput() {
		return '

<div class="ws-headline" style="margin-bottom:30px;">How to add Captions</div>

<div class="ws-text" style="margin-bottom:30px;">
	<p>On the first view it looks complicated, but no worry, it is really easy. Every Caption Element is made with a simple Div class and some custom Attributes, you can simply copy and paste the below Div class in the Caption Area.</p>
	<code>&lt;div class="caption lfr medium_grey"  data-x="510" data-y="210" data-speed="300" data-start="2000"&gt;Caption Text or Image here&lt;/div&gt;</code>
	<p><a href="'. JURI::root().'/modules/mod_wsrevolution/admin/captions.png" class="modal btn btn-danger" title="See how Captions work">IMPORTANT: CLICK HERE TO SEE HOW IT WORKS</a></p>
	<p>If you have massive problems with Captions or no time to do this, there is an Component with a nice Drag & Drop Backend for this available (not from us, so no support Questions please) - <a href="http://www.unitecms.net/joomla-extensions/unite-revolution-slider-responsive" target="_blank" rel="nofollow">Look the Unite Revolution Slider</a></p>
</div>


<div class="ws-line" style="margin-bottom:30px;"></div>

<div class="ws-headline" style="margin-bottom:30px;">Examples like in the Demo</div>

<div class="ws-text" style="margin-bottom:30px;">

<h4>Slide 1</h4>
<code>&lt;div class=&quot;caption lfb&quot; data-x=&quot;0&quot; data-y=&quot;0&quot; data-speed=&quot;700&quot; data-start=&quot;800&quot; data-easing=&quot;easeOutExpo&quot;&gt;&lt;img src=&quot;images/slides/sliderrevolution/slide_image1.png&quot;  alt=&quot;&quot;&gt;&lt;/div&gt;<br />

&lt;div class=&quot;caption lfr&quot; data-x=&quot;300&quot; data-y=&quot;40&quot; data-speed=&quot;700&quot; data-start=&quot;800&quot; data-easing=&quot;easeOutExpo&quot;&gt;&lt;img src=&quot;images/slides/sliderrevolution/slide_image-ipad.png&quot; alt=&quot;&quot;&gt;&lt;/div&gt;<br />

&lt;div class=&quot;caption lfr&quot; data-x=&quot;210&quot; data-y=&quot;20&quot; data-speed=&quot;700&quot; data-start=&quot;1000&quot; data-easing=&quot;easeOutExpo&quot;&gt;&lt;img src=&quot;images/slides/sliderrevolution/slide_image-iphone.png&quot; alt=&quot;&quot;&gt;&lt;/div&gt;<br />

&lt;div class=&quot;caption lfl big_white&quot;  data-x=&quot;20&quot; data-y=&quot;60&quot; data-speed=&quot;300&quot; data-start=&quot;1200&quot; data-easing=&quot;easeOutExpo&quot;&gt;Fluid &amp;amp; Responsive Design&lt;/div&gt;<br />

&lt;div class=&quot;caption lfl big_color&quot;  data-x=&quot;20&quot; data-y=&quot;110&quot; data-speed=&quot;300&quot; data-start=&quot;1300&quot; data-easing=&quot;easeOutExpo&quot;&gt;HTML5 &amp;amp; CSS3&lt;/div&gt;<br />

&lt;div class=&quot;caption lfr small_text&quot;  data-x=&quot;40&quot; data-y=&quot;170&quot; data-speed=&quot;300&quot; data-start=&quot;1500&quot; data-easing=&quot;easeOutExpo&quot;&gt;&lt;span class=&quot;fa fa-check&quot;&gt;&lt;/span&gt; Responsive &amp;amp; Mobile Optimized&lt;/div&gt;<br />

&lt;div class=&quot;caption lfr small_text&quot;  data-x=&quot;40&quot; data-y=&quot;200&quot; data-speed=&quot;300&quot; data-start=&quot;1700&quot; data-easing=&quot;easeOutExpo&quot;&gt;&lt;span class=&quot;fa fa-check&quot;&gt;&lt;/span&gt; Easy Customization&lt;/div&gt;<br />

&lt;div class=&quot;caption lfr small_text&quot;  data-x=&quot;40&quot; data-y=&quot;230&quot; data-speed=&quot;300&quot; data-start=&quot;1900&quot; data-easing=&quot;easeOutExpo&quot;&gt;&lt;span class=&quot;fa fa-check&quot;&gt;&lt;/span&gt; Unique Mobile Menu&lt;/div&gt;<br />

&lt;div class=&quot;caption lfr small_text&quot;  data-x=&quot;40&quot; data-y=&quot;260&quot; data-speed=&quot;300&quot; data-start=&quot;2100&quot; data-easing=&quot;easeOutExpo&quot;&gt;&lt;span class=&quot;fa fa-check&quot;&gt;&lt;/span&gt; Functional Twitter Widget&lt;/div&gt;<br />

&lt;div class=&quot;caption lfr small_text&quot;  data-x=&quot;40&quot; data-y=&quot;290&quot; data-speed=&quot;300&quot; data-start=&quot;2300&quot; data-easing=&quot;easeOutExpo&quot;&gt;&lt;span class=&quot;fa fa-check&quot;&gt;&lt;/span&gt; Working Contact Form&lt;/div&gt;<br />

&lt;div class=&quot;caption lfb&quot;  data-x=&quot;20&quot; data-y=&quot;320&quot; data-speed=&quot;300&quot; data-start=&quot;2700&quot; data-easing=&quot;easeOutExpo&quot;&gt;&lt;a href=&quot;#&quot; class=&quot;button radius&quot;&gt;Order Today&lt;/a&gt;&lt;/div&gt;</code>



<h4>Slide 2</h4>
<code>&lt;div class=&quot;caption lfb&quot; data-x=&quot;0&quot; data-y=&quot;120&quot; data-speed=&quot;300&quot; data-start=&quot;900&quot; data-easing=&quot;easeOutSine&quot;&gt;&lt;img src=&quot;images/slides/sliderrevolution/color-variation-1.png&quot; alt=&quot;&quot; /&gt;&lt;/div&gt;<br />

&lt;div class=&quot;caption lfb&quot; data-x=&quot;30&quot; data-y=&quot;110&quot; data-speed=&quot;300&quot; data-start=&quot;1100&quot; data-easing=&quot;easeOutSine&quot;&gt;&lt;img src=&quot;images/slides/sliderrevolution/color-variation-2.png&quot; alt=&quot;&quot; /&gt;&lt;/div&gt;<br />

&lt;div class=&quot;caption lfb&quot; data-x=&quot;60&quot; data-y=&quot;100&quot; data-speed=&quot;300&quot; data-start=&quot;1300&quot; data-easing=&quot;easeOutSine&quot;&gt;&lt;img src=&quot;images/slides/sliderrevolution/color-variation-3.png&quot; alt=&quot;&quot; /&gt;&lt;/div&gt;<br />

&lt;div class=&quot;caption lfb&quot; data-x=&quot;90&quot; data-y=&quot;90&quot; data-speed=&quot;300&quot; data-start=&quot;1500&quot; data-easing=&quot;easeOutSine&quot;&gt;&lt;img src=&quot;images/slides/sliderrevolution/color-variation-4.png&quot; alt=&quot;&quot; /&gt;&lt;/div&gt;<br />

&lt;div class=&quot;caption lfb&quot; data-x=&quot;120&quot; data-y=&quot;80&quot; data-speed=&quot;300&quot; data-start=&quot;1700&quot; data-easing=&quot;easeOutSine&quot;&gt;&lt;img src=&quot;images/slides/sliderrevolution/color-variation-5.png&quot; alt=&quot;&quot; /&gt;&lt;/div&gt;<br />

&lt;div class=&quot;caption lfb&quot; data-x=&quot;150&quot; data-y=&quot;70&quot; data-speed=&quot;300&quot; data-start=&quot;1900&quot; data-easing=&quot;easeOutSine&quot;&gt;&lt;img src=&quot;images/slides/sliderrevolution/color-variation-6.png&quot; alt=&quot;&quot; /&gt;&lt;/div&gt;<br />

&lt;div class=&quot;caption lfb&quot; data-x=&quot;180&quot; data-y=&quot;60&quot; data-speed=&quot;300&quot; data-start=&quot;2100&quot; data-easing=&quot;easeOutSine&quot;&gt;&lt;img src=&quot;images/slides/sliderrevolution/color-variation-7.png&quot; alt=&quot;&quot; /&gt;&lt;/div&gt;<br />

&lt;div class=&quot;caption lfb&quot; data-x=&quot;210&quot; data-y=&quot;50&quot; data-speed=&quot;300&quot; data-start=&quot;2300&quot; data-easing=&quot;easeOutSine&quot;&gt;&lt;img src=&quot;images/slides/sliderrevolution/color-variation-8.png&quot; alt=&quot;&quot; /&gt;&lt;/div&gt;<br />
                                
&lt;div class=&quot;caption lft big_white&quot; data-x=&quot;520&quot; data-y=&quot;140&quot; data-speed=&quot;300&quot; data-start=&quot;1200&quot; data-easing=&quot;easeOutExpo&quot;&gt;River S Premium Theme&lt;/div&gt;<br />

&lt;div class=&quot;caption lft big_color&quot; data-x=&quot;520&quot; data-y=&quot;190&quot; data-speed=&quot;300&quot; data-start=&quot;1300&quot; data-easing=&quot;easeOutExpo&quot;&gt;Options for everyone&lt;/div&gt;<br />

&lt;div class=&quot;caption lfr small_text&quot; data-x=&quot;530&quot; data-y=&quot;250&quot; data-speed=&quot;300&quot; data-start=&quot;1500&quot; data-easing=&quot;easeOutExpo&quot;&gt;Designed with a clean and minimalistic style&lt;br /&gt;this template is very flexible, responsive&lt;br /&gt;and loaded with amazing options&lt;br /&gt;for easy customisation.&lt;/div&gt;</code>



<h4>Slide 3</h4>
<code>&lt;div class=&quot;caption lfr video-frame&quot; data-x=&quot;340&quot; data-y=&quot;60&quot; data-speed=&quot;900&quot; data-start=&quot;1300&quot; data-easing=&quot;easeOutExpo&quot;&gt;<br />                          
&lt;iframe style=&quot;display:block;border:0;&quot; src=&quot;http://player.vimeo.com/video/1084537?badge=0&quot; width=&quot;550&quot; height=&quot;309&quot;&gt;&lt;/iframe&gt;<br />
&lt;/div&gt;<br />

&lt;div class=&quot;caption lfl big_color&quot; data-x=&quot;0&quot; data-y=&quot;110&quot; data-speed=&quot;300&quot; data-start=&quot;1300&quot; data-easing=&quot;easeOutExpo&quot;&gt;Promo Video&lt;/div&gt;<br />

&lt;div class=&quot;caption lfl big_white&quot; data-x=&quot;0&quot; data-y=&quot;160&quot; data-speed=&quot;300&quot; data-start=&quot;1500&quot; data-easing=&quot;easeOutExpo&quot;&gt;Embeded Video Slider&lt;/div&gt;<br />

&lt;div class=&quot;caption lfl small_text&quot; data-x=&quot;10&quot; data-y=&quot;220&quot; data-speed=&quot;300&quot; data-start=&quot;1700&quot; data-easing=&quot;easeOutExpo&quot;&gt;Embed your promo videos in the slider&lt;br /&gt;to reach your customers&lt;br /&gt;faster and more direct.&lt;/div&gt;</code>



<h4>Slide 4</h4>
<code>&lt;div class=&quot;caption lft&quot; data-x=&quot;100&quot; data-y=&quot;40&quot; data-speed=&quot;700&quot; data-start=&quot;800&quot; data-easing=&quot;easeOutExpo&quot;&gt;&lt;img src=&quot;images/slides/sliderrevolution/slide_image2.png&quot; alt=&quot;&quot; &gt;&lt;/div&gt;<br />

&lt;div class=&quot;caption lfb&quot; data-x=&quot;330&quot; data-y=&quot;215&quot; data-speed=&quot;900&quot; data-start=&quot;700&quot; data-easing=&quot;easeOutExpo&quot;&gt;&lt;img src=&quot;images/slides/sliderrevolution/hand.png&quot; alt=&quot;&quot;&gt;&lt;/div&gt;<br />

&lt;div class=&quot;caption sft big_color&quot;  data-x=&quot;460&quot; data-y=&quot;120&quot; data-speed=&quot;900&quot; data-start=&quot;1200&quot; data-easing=&quot;easeOutBack&quot;&gt;Easy and Fast Customization&lt;/div&gt;<br />

&lt;div class=&quot;caption sft medium_text black&quot;  data-x=&quot;544&quot; data-y=&quot;170&quot; data-speed=&quot;900&quot; data-start=&quot;1300&quot; data-easing=&quot;easeOutBack&quot;&gt;Buy RiverS on ThemeForest!&lt;/div&gt;</code>



<h4>Slide 5</h4>
<code>&lt;div class=&quot;caption lfb&quot; data-x=&quot;-10&quot; data-y=&quot;0&quot; data-speed=&quot;700&quot; data-start=&quot;800&quot; data-easing=&quot;easeOutExpo&quot;&gt;&lt;img src=&quot;images/slides/sliderrevolution/slide_image3.png&quot; alt=&quot;&quot;&gt;&lt;/div&gt;<br />

&lt;div class=&quot;caption lft big_white&quot;  data-x=&quot;510&quot; data-y=&quot;120&quot; data-speed=&quot;900&quot; data-start=&quot;1200&quot; data-easing=&quot;easeOutBack&quot;&gt;Modern Premium Theme&lt;/div&gt;<br />

&lt;div class=&quot;caption lfb&quot; data-x=&quot;510&quot; data-y=&quot;220&quot; data-speed=&quot;900&quot; data-start=&quot;1700&quot; data-easing=&quot;easeOutBack&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;span class=&quot;fa fa-cloud fa-4x&quot;&gt;&lt;/span&gt;&lt;/a&gt;&lt;/div&gt;<br />

&lt;div class=&quot;caption lfb&quot; data-x=&quot;600&quot; data-y=&quot;220&quot; data-speed=&quot;900&quot; data-start=&quot;2000&quot; data-easing=&quot;easeOutBack&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;span class=&quot;fa fa-download fa-4x&quot;&gt;&lt;/span&gt;&lt;/a&gt;&lt;/div&gt;<br />

&lt;div class=&quot;caption lfb&quot; data-x=&quot;690&quot; data-y=&quot;220&quot; data-speed=&quot;900&quot; data-start=&quot;2300&quot; data-easing=&quot;easeOutBack&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;span class=&quot;fa fa-dashboard fa-4x&quot;&gt;&lt;/span&gt;&lt;/a&gt;&lt;/div&gt;<br />

&lt;div class=&quot;caption lfb&quot; data-x=&quot;780&quot; data-y=&quot;220&quot; data-speed=&quot;900&quot; data-start=&quot;2600&quot; data-easing=&quot;easeOutBack&quot;&gt;&lt;a href=&quot;#&quot;&gt;&lt;span class=&quot;fa fa-gift fa-4x&quot;&gt;&lt;/span&gt;&lt;/a&gt;&lt;/div&gt;<br />

&lt;div class=&quot;caption lfr medium_grey&quot;  data-x=&quot;510&quot; data-y=&quot;300&quot; data-speed=&quot;300&quot; data-start=&quot;2900&quot; data-easing=&quot;easeOutExpo&quot;&gt;Wanna learn more?&lt;/div&gt;<br />

&lt;div class=&quot;caption lfr medium_text&quot;  data-x=&quot;695&quot; data-y=&quot;310&quot; data-speed=&quot;300&quot; data-start=&quot;3200&quot; data-easing=&quot;easeOutExpo&quot;&gt;&lt;a href=&quot;#&quot;&gt;Get in Touch&lt;/a&gt;&lt;/div&gt;</code>


</div>

<div class="ws-line" style="margin-bottom:30px;"></div>

';
	}
}
