<?php
/**
 *    _
 *   (_)
 *    _  ___   ___   ___ ___  _ __ ___  _ __ ___   ___ _ __ ___ ___
 *   | |/ _ \ / _ \ / __/ _ \| '_ ` _ \| '_ ` _ \ / _ \ '__/ __/ _ \
 *   | | (_) | (_) | (_| (_) | | | | | | | | | | |  __/ | | (_|  __/
 *   | |\___/ \___/ \___\___/|_| |_| |_|_| |_| |_|\___|_|  \___\___|
 *  _/ |
 * |__/
 *
 *
 * @package   com_joocommerce
 * @copyright Copyright (C) 2013 joocommerce. All rights reserved.
 * @license   GNU GPLv3 <http://www.gnu.org/licenses/gpl.html>
 * @link      http://www.joocommerce.com
 */

defined('_JEXEC') or die('Restricted access');
?>

<script>
ShoppingCart.currentPageIsOrderCancelled = true;
</script>

<div class="joocommerce-container">
  <h2><?php echo JText::_('COM_JOOCOMMERCE_ORDER_CANCELLED') ?></h2>
  <p><?php echo JText::_('COM_JOOCOMMERCE_YOU_CANCELLED_THE_ORDER') ?></p>
  
  <div class="js__joocommerce-cart">
    <h3 class="js__joocommerce-cart__title" style="display: none"></h3>
    <table class="table js__joocommerce-cart__table">
      <thead></thead>
      <tbody></tbody>
    </table>
  </div>

</div>
