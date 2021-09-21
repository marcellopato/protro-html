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

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

$paymentMethods = $this->settings->payment->methods;
$paymentMethodPayPal = null;
$paymentMethodOffline = null;
$paymentMethodStripe = null;
$paymentMethodsEnabled = 0;
$atLeastTwoPaymentMethods = false;

foreach ($paymentMethods as $paymentMethod) {
  if (isset($paymentMethod->isPayPal) && $paymentMethod->enabled) {
    $paymentMethodPayPal = $paymentMethod;
    $paymentMethodsEnabled++;
  }
  if (isset($paymentMethod->isOffline) && $paymentMethod->enabled) {
    $paymentMethodOffline = $paymentMethod;
    $paymentMethodsEnabled++;
  }
  if (isset($paymentMethod->isStripe) && $paymentMethod->enabled) {
    $paymentMethodStripe = $paymentMethod;
    $paymentMethodsEnabled++;
  }
}

if ($paymentMethodsEnabled > 1) {
  $atLeastTwoPaymentMethods = true;
}
?>

<script>
jQuery(function() {
  ShoppingCart.currentPageIsCheckout = true;
  ShoppingCart.baseOrderURL = '<?php echo $this->baseOrderURL ?>';
  ShoppingCart.baseURL = '<?php echo $this->baseURL ?>';

  jQuery('.js-checkout__block').hide();

  var interval = setInterval(function() {
    if (ShoppingCart.settings != null) {
      clearInterval(interval);

      if (ShoppingCart.items) {
        ShoppingCart.setupCheckout();
        ShoppingCart.populateShippingOptions();

        <?php if (JFactory::getUser()->get('id')) : ?>
          ShoppingCart.prefillValuesIfShouldDoIt();
        <?php endif ?>

        <?php if ($paymentMethodStripe) : ?>
          ShoppingCart.configureStripe();
        <?php endif ?>
      }
    }
  }, 50);


  <?php

  $offlineOrderSuccessfulPageURL = 'index.php?option=com_joocommerce&view=order&layout=offline';
  if ($this->itemid) $offlineOrderSuccessfulPageURL .= '&Itemid=' . $this->itemid;

  $orderSuccessfulPageURL = 'index.php?option=com_joocommerce&view=order&layout=success';
  if ($this->itemid) $orderSuccessfulPageURL .= '&Itemid=' . $this->itemid;

  $orderCancelledPageURL = 'index.php?option=com_joocommerce&view=order&layout=cancelled';
  if ($this->itemid) $orderCancelledPageURL .= '&Itemid=' . $this->itemid;

  $ipnURL = 'index.php?option=com_joocommerce&view=order&layout=ipn';
  ?>

  <?php
  if (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off' || $_SERVER['SERVER_PORT'] == 443) {
    $protocol = "https://";
  } else {
    $protocol = "http://";
  }
  ?>

  ShoppingCart.offlineOrderSuccessfulPageURL = '<?php echo $protocol . $_SERVER["HTTP_HOST"] . JRoute::_($offlineOrderSuccessfulPageURL) ?>';
  ShoppingCart.orderSuccessfulPageURL = '<?php echo $protocol . $_SERVER["HTTP_HOST"] . JRoute::_($orderSuccessfulPageURL) ?>';
  ShoppingCart.orderCancelledPageURL = '<?php echo $protocol . $_SERVER["HTTP_HOST"] . JRoute::_($orderCancelledPageURL) ?>';
  ShoppingCart.ipnURL = '<?php echo $protocol . $_SERVER["HTTP_HOST"] . JRoute::_($ipnURL) ?>';
  ShoppingCart.baseURL = '<?php echo $this->baseURL ?>';
});
</script>

<?php if ($paymentMethodStripe) : ?>
  <script src="https://checkout.stripe.com/checkout.js"></script>
<?php endif ?>

<?php
if(!function_exists('joo_decode')) {
  function joo_decode($string) {
    $string = preg_replace('/%u([0-9A-F]+)/', '&#x$1;', $string);
    return html_entity_decode($string, ENT_COMPAT, 'UTF-8');
  }
}
?>

<div class="joocommerce-container">
  <h1 class="h2 mt0"><?php echo JText::_('COM_JOOCOMMERCE_CHECKOUT_PAGE_TITLE') ?></h1>

  <div class="js__joocommerce-cart">
    <h3 class="js__joocommerce-cart__title h5" style="display: none"></h3>
    <table class="table js__joocommerce-cart__table table table-hover">
      <thead></thead>
      <tbody></tbody>
    </table>
  </div>

  <div class="no-padding">
    <div class="js-checkout__block">

      <div class="row">
        <div class="col-sm-6">
           <legend><?php echo JText::_('COM_JOOCOMMERCE_CHECKOUT_HEADLINE_YOUR_PERSONAL_DETAILS') ?></legend>
           <div class="control-group control-group__billing__firstname">
              <label class="control-label"><?php echo JText::_('COM_JOOCOMMERCE_CHECKOUT_FIRST_NAME') ?> *</label>
              <div class="controls docs-input-sizes">
                 <input type="text" class="js-billing__firstname">
              </div>
           </div>
           <div class="control-group control-group__billing__lastname">
              <label class="control-label"><?php echo JText::_('COM_JOOCOMMERCE_CHECKOUT_LAST_NAME') ?> *</label>
              <div class="controls docs-input-sizes">
                 <input type="text" class="js-billing__lastname">
              </div>
           </div>
           <div class="control-group control-group__billing__email">
              <label class="control-label"><?php echo JText::_('COM_JOOCOMMERCE_CHECKOUT_EMAIL') ?> *</label>
              <div class="controls docs-input-sizes">
                 <input type="text" class="js-billing__email">
              </div>
           </div>
           <div class="control-group control-group__billing__telephone">
              <label class="control-label"><?php echo JText::_('COM_JOOCOMMERCE_CHECKOUT_PHONE') ?> *</label>
              <div class="controls docs-input-sizes">
                 <input type="text" class="js-billing__telephone">
              </div>
           </div>

           <?php if (@$this->settings->general->additionalCheckoutFields) : ?>

            <?php if (isset($this->settings->general->additionalCheckoutField1)) : ?>

             <div class="control-group control-group__billing__additionalfield1">
                <label class="control-label"><?php echo $this->settings->general->additionalCheckoutField1 ?> *</label>
                <div class="controls docs-input-sizes">
                   <input type="text" class="js-billing__additionalCheckoutField1">
                </div>
             </div>

            <?php endif ?>

            <?php if (isset($this->settings->general->additionalCheckoutField2)) : ?>

             <div class="control-group control-group__billing__additionalfield2">
                <label class="control-label"><?php echo $this->settings->general->additionalCheckoutField2 ?> *</label>
                <div class="controls docs-input-sizes">
                   <input type="text" class="js-billing__additionalCheckoutField2">
                </div>
             </div>

            <?php endif ?>

           <?php endif ?>


        </div>
        <div class="col-sm-6">
           <legend><?php echo JText::_('COM_JOOCOMMERCE_CHECKOUT_HEADLINE_YOUR_ADDRESS') ?></legend>
           <div class="control-group control-group__billing__address1">
              <label class="control-label"><?php echo JText::_('COM_JOOCOMMERCE_CHECKOUT_ADDRESS_1') ?> *</label>
              <div class="controls docs-input-sizes">
                 <input type="text" class="js-billing__address1">
              </div>
           </div>
           <div class="control-group control-group__billing__address2">
              <label class="control-label"><?php echo JText::_('COM_JOOCOMMERCE_CHECKOUT_ADDRESS_2') ?></label>
              <div class="controls docs-input-sizes">
                 <input type="text" class="js-billing__address2">
              </div>
           </div>
           <div class="control-group control-group__billing__city">
              <label class="control-label"><?php echo JText::_('COM_JOOCOMMERCE_CHECKOUT_CITY') ?> *</label>
              <div class="controls docs-input-sizes">
                 <input type="text" class="js-billing__city">
              </div>
           </div>
           <div class="control-group control-group__billing__zip">
              <label class="control-label"><?php echo JText::_('COM_JOOCOMMERCE_CHECKOUT_ZIP') ?> *</label>
              <div class="controls docs-input-sizes">
                 <input type="text" class="js-billing__zip">
              </div>
           </div>
           <div class="control-group control-group__billing__country">
              <label class="control-label"><?php echo JText::_('COM_JOOCOMMERCE_CHECKOUT_COUNTRY') ?> *</label>
              <div class="controls docs-input-sizes">
                 <select class="js-billing__country form-control" id="js-billing__country"></select>
              </div>
           </div>

           <div class="control-group hidden" id="js-billing__state__control">
              <label class="control-label"><?php echo JText::_('COM_JOOCOMMERCE_CHECKOUT_STATE') ?> *</label>
              <div class="controls docs-input-sizes">
                 <select class="js-billing__state form-control" id="js-billing__state"></select>
              </div>
           </div>

           <div class="control-group hidden" id="js-billing__province__control">
              <label class="control-label"><?php echo JText::_('COM_JOOCOMMERCE_CHECKOUT_PROVINCE') ?></label>
              <div class="controls docs-input-sizes">
                <input type="text" class="js-billing__province">
              </div>
           </div>
        </div>
      </div>

      <br><br>

      <div class="row">
        <div class="col-sm-6" id="checkout-choose-shipping-block">
          <legend><?php echo JText::_('COM_JOOCOMMERCE_CHECKOUT_SHIPMENT_METHOD') ?></legend>
          <div class="control-group">
            <p><?php echo JText::_('COM_JOOCOMMERCE_CHECKOUT_CHOOSE_SHIPMENT_METHOD_DESC') ?></p>
            <div>
              <select class="js-shipment__method" id="js-shipment__method"></select>
            </div>
          </div>
        </div>

        <div class="col-sm-6" id="checkout-choose-payment-block">
          <legend>
            <?php echo JText::_('COM_JOOCOMMERCE_CHECKOUT_PAYMENT_METHOD') ?>
          </legend>
          <div class="control-group">
            <?php if ($paymentMethodPayPal) : ?>
              <p id="paypal-payment">
                <?php if ($atLeastTwoPaymentMethods) : ?>
                  <input class="payment-method" name="payment-method" id="payment-method-paypal" type="radio" checked="checked">
                <?php endif ?>
                <?php echo JText::_('COM_JOOCOMMERCE_PAYPAL') ?> <img src="https://www.paypal.com/en_US/i/logo/PayPal_mark_37x23.gif" class="logo-paypal" alt="PayPal Express Logo">
              </p>
            <?php endif ?>

            <?php if ($paymentMethodStripe) : ?>
              <p id="stripe-payment">
                <?php if ($atLeastTwoPaymentMethods) : ?>
                  <input class="payment-method" name="payment-method" id="payment-method-stripe" type="radio" checked="checked">
                <?php endif ?>
                <?php echo JText::_('COM_JOOCOMMERCE_CREDITCARD') ?> <img src="media/com_joocommerce/img/stripe.png" class="logo-stripe" alt="Stripe Logo">
              </p>
            <?php endif ?>

            <?php if ($paymentMethodOffline) : ?>
              <p id="offline-payments">
                <?php if ($atLeastTwoPaymentMethods) : ?>
                  <input class="payment-method" name="payment-method" id="payment-method-offline" type="radio">
                <?php endif ?>
                <?php if ($paymentMethodOffline->title) echo joo_decode(urldecode($paymentMethodOffline->title)); else echo 'Offline' ?>

                <?php if ($paymentMethodOffline->textToShow) : ?>
                  <div id="payment-method-offline-message"
                    <?php if ($paymentMethodPayPal || $paymentMethodStripe) : ?>style="display: none"<?php endif ?>
                  >
                    <?php echo nl2br(joo_decode(urldecode($paymentMethodOffline->textToShow))) ?>
                  </div>
                <?php endif ?>

                <?php if (isset($paymentMethodOffline->askUserInfo) && $paymentMethodOffline->askUserInfo) : ?>
                  <div id="payment-method-offline-textarea-div">
                    <textarea id="payment-method-offline-textarea" <?php if ($paymentMethodPayPal || $paymentMethodStripe) : ?>style="display: none"<?php endif ?>></textarea>
                  </div>
                <?php endif ?>
              </p>
            <?php endif ?>
          </div>
        </div>

        <div class="span12 css-accept-terms-and-conditions">
          <?php if ($this->settings->general->agreeToTerms) : ?>
            <input type="checkbox" id="js-accepted-terms"> <?php echo JText::_('COM_JOOCOMMERCE_AGREE') ?> <a target="_blank" href="<?php echo JRoute::_('index.php?option=com_content&view=article&id=' . $this->settings->general->termsArticleId) ?>"><?php echo JText::_('COM_JOOCOMMERCE_TERMS_AND_CONDITIONS') ?></a>
          <?php endif ?>
        </div>
      </div>

      <button class="btn btn-success btn-lg mt30 center js-checkout__button__proceed-to-payment"><?php echo JText::_('COM_JOOCOMMERCE_CHECKOUT_BUTTON_PAY') ?><i class="fa fa-arrow-circle-right iconright"></i></button>

      <?php if (isset($paymentMethodPayPal->useSandbox) && $paymentMethodPayPal->useSandbox) : ?>
        <?php if (isset($paymentMethodPayPal->openInNewWindow) && $paymentMethodPayPal->openInNewWindow) : ?>
          <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" target="_blank" id="paypal-form"></form>
        <?php else : ?>
          <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post" id="paypal-form"></form>
        <?php endif ?>
      <?php else : ?>
        <?php if (isset($paymentMethodPayPal->openInNewWindow) && $paymentMethodPayPal->openInNewWindow) : ?>
          <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_blank" id="paypal-form"></form>
        <?php else : ?>
          <form action="https://www.paypal.com/cgi-bin/webscr" method="post" id="paypal-form"></form>
        <?php endif ?>
      <?php endif ?>

    </div>
  </div>
</div>

