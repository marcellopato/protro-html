<?php

/*
# -------------------------------------------------------------------------
# Custom Field Info for Joomla Backend
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

class JFormFieldInfo extends JFormField {
	protected $type = 'Info';
	
	protected function getLabel() 
	{
	   return '';
  }
	
	
	protected function getInput() {
		return '

<div class="ws-headline" style="margin-bottom:30px;">Captions in Revolution Slider</div>

<div class="ws-text">
	<p>Captions are Containers which can be customized via CSS, classes for the start animation and some data options.</p>
	<p>The CSS for the caption added in the settings.css file because it depends strongly on the responsive Sizing.</p>
	<p>There are 4 Steps of Responsive Contents which are written later below under the Responsive Dependencies Caption.</p>
</div>

<div class="ws-line" style="margin-bottom:30px;"></div>

<div class="ws-text" style="margin-bottom:30px;">
	<p><b>The options are in detail:</b></p>

	<ul>
		<li>color <strong>class</strong> example big_white, big_color, big_black, medium_grey, small_text, medium_text, large_text, black</li>
		<li>
			animation <strong>class</strong><br>
			Options:<br>
			sft - Short from Top<br>
			sfb - Short from Bottom<br>
			sfr - Short from Right<br>
			sfl - Short from Left<br>
			lft - Long from Top<br>
			lfb - Long from Bottom<br>
			lfr - Long from Right<br>
			lfl - Long from Left<br>
			fade - fading<br>
			randomrotate- Fade in, Rotate from a Random position and Degree<br>
		</li>
			
		<li><strong>data-x</strong>The horizontal position in the standard (via startwidth option defined) screen size (other screen sizes will be calculated)</li>
		<li><strong>data-y</strong>The vertical position in the standard (via startheight option defined) screen size (other screen sizes will be calculated)</li>
		<li><strong>data-speed</strong> Duration of the animation in milliseconds</li>
		<li><strong>data-start after</strong> How many milliseconds should this caption start to show</li>
		<li><strong>data-easing </strong>special easing effect of the animation<br>
			Options:<br>
			easeOutBack<br>
			easeInQuad<br>
			easeOutQuad<br>
			easeInOutQuad<br>
			easeInCubic<br>
			easeOutCubic<br>
			easeInOutCubic<br>
			easeInQuart<br>
			easeOutQuart<br>
			easeInOutQuart<br>
			easeInQuint<br>
			easeOutQuint<br>
			easeInOutQuint<br>
			easeInSine<br>
			easeOutSine<br>
			easeInOutSine<br>
			easeInExpo<br>
			easeOutExpo<br>
			easeInOutExpo<br>
			easeInCirc<br>
			easeOutCirc<br>
			easeInOutCirc<br>
			easeInElastic<br>
			easeOutElastic<br>
			easeInOutElastic<br>
			easeInBack<br>
			easeOutBack<br>
			easeInOutBack<br>
			easeInBounce<br>
			easeOutBounce<br>
			easeInOutBounce
		</li>
	</ul>
</div>

<div class="ws-line" style="margin-bottom:30px;"></div>

<div class="ws-headline" style="margin-bottom:30px;">Videos in Revolution Slider</div>

<div class="ws-text" style="margin-bottom:30px;">
	<p>In order to embed videos in the slider you can embed videos via iframe of your favorite video site that allows this kind of embedding. An example with Vimeo:</p>
<pre>
&lt;div class=&quot;caption lfb boxshadow&quot; data-x=&quot;70&quot; data-y=&quot;120&quot; data-speed=&quot;900&quot; data-start=&quot;500&quot; data-easing=&quot;easeOutBack&quot;&gt;
	&lt;iframe src=&quot;http://player.vimeo.com/video/29298709?title=0&amp;amp;byline=0&amp;amp;portrait=0&quot; width=&quot;460&quot; height=&quot;259&quot;&gt;&lt;/iframe&gt;
&lt;/div&gt;
</pre>
</div>

<div class="ws-line" style="margin-bottom:30px;"></div>

<div class="ws-headline" style="margin-bottom:30px;">Full Screen Videos in Revolution Slider</div>

<div class="ws-text" style="margin-bottom:30px;">
	<p>In order to play FullWidth Videos, use the class "fade fullscreenvideo" in the caption where you embeded the iFrame. Use data-x="0" and data-y="0" and data-speed="500" and data-start="10" for best effect. The Width and height of the iFrame should be 100% !</p>
	<p>In case you wish to use autoplay, just use the data-autplay="true" parameter in the div where you embeded the iFrame.</p>
<pre>
&lt;div class=&quot;caption fade fullscreenvideo&quot; data-x=&quot;0&quot; data-y=&quot;0&quot; data-speed=&quot;500&quot; data-start=&quot;10&quot; data-easing=&quot;easeOutBack&quot;&gt;
	&lt;iframe src=&quot;http://player.vimeo.com/video/29298709?title=0&amp;amp;byline=0&amp;amp;portrait=0&quot; width=&quot;100%&quot; height=&quot;100%&quot;&gt;&lt;/iframe&gt;
&lt;/div&gt;
</pre>
</div>

<div class="ws-line" style="margin-bottom:30px;"></div>

	
';
	
		}
}
