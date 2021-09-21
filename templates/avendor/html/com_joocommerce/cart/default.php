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
(function() {
  jQuery(document).ready(function() {
    ShoppingCart.currentPageIsCart = true;
    ShoppingCart.checkoutURL = '<?php echo $this->checkoutURL ?>';
    ShoppingCart.cartURL = '<?php echo $this->cartURL ?>';
    ShoppingCart.baseURL = '<?php echo $this->baseURL ?>';
  });
}());
</script>

<div class="js__joocommerce-cart">
  <h3 class="js__joocommerce-cart__title" style="display: none"></h3>
  <table class="table js__joocommerce-cart__table table table-hover">
    <thead></thead>
    <tbody></tbody>
  </table>
</div>
