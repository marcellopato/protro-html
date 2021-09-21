<?php

/*
# -------------------------------------------------------------------------
# Custom Field FAQ for Joomla Backend
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

class JFormFieldWsFaq extends JFormField
{
	protected $type = 'WsFaq';
	

	
	protected function getLabel() 
	{
	   return '';
  }
  
	protected function getInput()
	{
    $html = array();
           
    $question01 = $this->element['question01'];
		$question01 = $this->translateLabel ? JText::_($question01) : $question01;     
    $answer01 = $this->element['answer01']; 
		$answer01 = $this->translateLabel ? JText::_($answer01) : $answer01;
		
		$question02 = $this->element['question02'];
		$question02 = $this->translateLabel ? JText::_($question02) : $question02;     
    $answer02 = $this->element['answer02']; 
		$answer02 = $this->translateLabel ? JText::_($answer02) : $answer02;
		
		$question03 = $this->element['question03'];
		$question03 = $this->translateLabel ? JText::_($question03) : $question03;     
    $answer03 = $this->element['answer03']; 
		$answer03 = $this->translateLabel ? JText::_($answer03) : $answer03;
		
		$question04 = $this->element['question04'];
		$question04 = $this->translateLabel ? JText::_($question04) : $question04;     
    $answer04 = $this->element['answer04']; 
		$answer04 = $this->translateLabel ? JText::_($answer04) : $answer04;
		
		$question05 = $this->element['question05'];
		$question05 = $this->translateLabel ? JText::_($question05) : $question05;     
    $answer05 = $this->element['answer05']; 
		$answer05 = $this->translateLabel ? JText::_($answer05) : $answer05;
		
		$question06 = $this->element['question06'];
		$question06 = $this->translateLabel ? JText::_($question06) : $question06;     
    $answer06 = $this->element['answer06']; 
		$answer06 = $this->translateLabel ? JText::_($answer06) : $answer06;
		
		$question07 = $this->element['question07'];
		$question07 = $this->translateLabel ? JText::_($question07) : $question07;     
    $answer07 = $this->element['answer07']; 
		$answer07 = $this->translateLabel ? JText::_($answer07) : $answer07;
		
		$question08 = $this->element['question08'];
		$question08 = $this->translateLabel ? JText::_($question08) : $question08;     
    $answer08 = $this->element['answer08']; 
		$answer08 = $this->translateLabel ? JText::_($answer08) : $answer08;
		
		$question09 = $this->element['question09'];
		$question09 = $this->translateLabel ? JText::_($question09) : $question09;     
    $answer09 = $this->element['answer09']; 
		$answer09 = $this->translateLabel ? JText::_($answer09) : $answer09;
		
		$question10 = $this->element['question10'];
		$question10 = $this->translateLabel ? JText::_($question10) : $question10;     
    $answer10 = $this->element['answer10']; 
		$answer10 = $this->translateLabel ? JText::_($answer10) : $answer10;

?>

<?php if ( $question01 != '' ) $faq01 = '<li class=""><div class="toggle-title"><a href="#"><span class="fa"></span>'.$question01.'</a></div><div class="toggle-content" style="display:none;"><div class="toggle-content-inner">'.$answer01.'</div></div></li> ' ;?>
<?php if ( $question02 != '' ) $faq02 = '<li class=""><div class="toggle-title"><a href="#"><span class="fa"></span>'.$question02.'</a></div><div class="toggle-content" style="display:none;"><div class="toggle-content-inner">'.$answer02.'</div></div></li> ' ;?>
<?php if ( $question03 != '' ) $faq03 = '<li class=""><div class="toggle-title"><a href="#"><span class="fa"></span>'.$question03.'</a></div><div class="toggle-content" style="display:none;"><div class="toggle-content-inner">'.$answer03.'</div></div></li> ' ;?>
<?php if ( $question04 != '' ) $faq04 = '<li class=""><div class="toggle-title"><a href="#"><span class="fa"></span>'.$question04.'</a></div><div class="toggle-content" style="display:none;"><div class="toggle-content-inner">'.$answer04.'</div></div></li> ' ;?>
<?php if ( $question05 != '' ) $faq05 = '<li class=""><div class="toggle-title"><a href="#"><span class="fa"></span>'.$question05.'</a></div><div class="toggle-content" style="display:none;"><div class="toggle-content-inner">'.$answer05.'</div></div></li> ' ;?>
<?php if ( $question06 != '' ) $faq06 = '<li class=""><div class="toggle-title"><a href="#"><span class="fa"></span>'.$question06.'</a></div><div class="toggle-content" style="display:none;"><div class="toggle-content-inner">'.$answer06.'</div></div></li> ' ;?>
<?php if ( $question07 != '' ) $faq07 = '<li class=""><div class="toggle-title"><a href="#"><span class="fa"></span>'.$question07.'</a></div><div class="toggle-content" style="display:none;"><div class="toggle-content-inner">'.$answer07.'</div></div></li> ' ;?>
<?php if ( $question08 != '' ) $faq08 = '<li class=""><div class="toggle-title"><a href="#"><span class="fa"></span>'.$question08.'</a></div><div class="toggle-content" style="display:none;"><div class="toggle-content-inner">'.$answer08.'</div></div></li> ' ;?>
<?php if ( $question09 != '' ) $faq09 = '<li class=""><div class="toggle-title"><a href="#"><span class="fa"></span>'.$question09.'</a></div><div class="toggle-content" style="display:none;"><div class="toggle-content-inner">'.$answer09.'</div></div></li> ' ;?>
<?php if ( $question10 != '' ) $faq10 = '<li class=""><div class="toggle-title"><a href="#"><span class="fa"></span>'.$question10.'</a></div><div class="toggle-content" style="display:none;"><div class="toggle-content-inner">'.$answer10.'</div></div></li> ' ;?>

<?php 
		
    $html[] = '<ul class="toggles ws-toggle">'.$faq01.$faq02.$faq03.$faq04.$faq05.$faq06.$faq07.$faq08.$faq09.$faq10.'</ul>';
    



    return implode('',$html);

	}
}


