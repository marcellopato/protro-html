<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
?>

<script>
ShoppingCart.checkoutURL = '<?php echo $checkoutURL ?>';
ShoppingCart.cartURL = '<?php echo $cartURL ?>';
ShoppingCart.baseURL = '<?php echo $baseURL ?>';
</script>

<div class="joocommerce__module-cart module<?php echo $params->get( 'moduleclass_sfx' ) ?>">
  <?php if (JFactory::getApplication()->input->get('option') !== 'com_joocommerce') : ?>
    <div id="ember-shopping-cart" style="display: none"></div>
  <?php endif ?>

  <table class="table js__joocommerce-cart-module table table-hover">
    <thead></thead>
    <tbody></tbody>
    <tfoot></tfoot>
  </table>

  

  <p id="js__joocommerce-minimum-to-place-an-order" class="hidden"></p>

  <button id="js__joocommerce-checkout-cart-link" class="btn btn-success btn-xs hidden"></button>
  
  <a id="js__joocommerce-edit-cart-link" class="pull-right"></a>
</div>
