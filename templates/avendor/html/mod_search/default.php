<?php
/**
 * @package     Joomla.Site
 * @subpackage  mod_search
 *
 * @copyright   Copyright (C) 2005 - 2014 Open Source Matters, Inc. All rights reserved.
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
?>




<form action="<?php echo JRoute::_('index.php');?>" method="post" class="form-inline">
  <div class="form-group">
    <div class="input-group">
      <span class="input-group-btn">
        <button type="button" class="btn btn-primary" onclick="this.form.searchword.focus();"><span class="fa fa-search"></span></button>
      </span>
      <input name="searchword" id="mod-search-searchword" class="form-control" type="text" placeholder="<?php echo $text; ?>" />
      <input type="hidden" name="task" value="search" />
      <input type="hidden" name="option" value="com_search" />
      <input type="hidden" name="Itemid" value="<?php echo $mitemid; ?>" />
    </div>
  </div>
</form>