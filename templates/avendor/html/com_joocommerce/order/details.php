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
?>

<?php
$order = $this->order;
if (!$order) {
  return;
}

if(!function_exists('joo_decode')) {
  function joo_decode($string) {
    $string = preg_replace('/%u([0-9A-F]+)/', '&#x$1;', $string);
    return html_entity_decode($string, ENT_COMPAT, 'UTF-8');
  }
}

$order->products = json_decode(joo_decode($order->products));
$order->shipment = json_decode(joo_decode($order->shipment));

//todo: revisit sum, pick from order object
$orderTotalSum = 0;

foreach ($order->products as $product) {
  $orderTotalSum += $product->product->price * $product->quantity;
}
?>

<script>
ShoppingCart.currentPageIsOrder = true;
ShoppingCart.baseURL = '<?php echo $this->baseURL ?>';
ShoppingCart.baseOrderURL = '<?php echo $this->baseOrderURL ?>';
</script>

<?php if (!$order->paid) : ?>
  <script>
    setTimeout(function() {
      location.reload();
    }, 2000);
  </script>
<?php endif ?>

<div class="joocommerce-container">
  <?php if ($order->paid) : ?>
    <?php if ($order->id) : ?>
      <div>
        <h1><?php echo JText::_('COM_JOOCOMMERCE_ORDER_SUCCESSFUL_PAGE_TITLE') ?></h1>
              
        <div class="js__joocommerce-cart">
          <h3 class="js__joocommerce-cart__title" style="display: none"></h3>
          <table class="table js__joocommerce-cart__table">
            <thead></thead>
            <tbody></tbody>
          </table>
        </div>

        <p><?php echo JText::_('COM_JOOCOMMERCE_ORDER_SUCCESSFUL_CONFIRMATION_TEXT') ?></p>
      </div>

      <div class="well">
        <h3><?php echo JText::_('COM_JOOCOMMERCE_ITEMS_PURCHASED') ?></h3>
        <table class="table">
          <caption></caption>
          <thead>
            <tr>
              <th><?php echo JText::_('COM_JOOCOMMERCE_ITEM') ?></th>
              <th><?php echo JText::_('COM_JOOCOMMERCE_PRICE') ?></th>
              <th><?php echo JText::_('COM_JOOCOMMERCE_QUANTITY') ?></th>
              <th><?php echo JText::_('COM_JOOCOMMERCE_TOTAL') ?></th>
            </tr>
          </thead>
          <tbody>
						<?php $subtotal = 0; ?>
			  
            <?php foreach ($order->products as $product) : ?>
              <?php
              $db = JFactory::getDBO();
              $db->setQuery('SELECT * FROM #__joocommerce_products WHERE id = ' . $db->quote((int) $product->product->id));
              $productStoredOnDb = $db->loadObject();
              ?>

              <tr>
                <td>
                  <?php if ($productStoredOnDb->defaultPhoto) : ?>
                    <img src="media/com_joocommerce/attachments/<?php echo $productStoredOnDb->defaultPhoto ?>" class="img-polaroid" width="20px">
                  <?php endif ?>

                  <?php echo $productStoredOnDb->title ?>
                  <?php
                  if (isset($product->variations)) foreach ($product->variations as $key => $value) {
                    echo ' <strong>' . $key . '</strong>: ' . $value . ' ';
                  } ?>
                </td>
                <td>
                  <?php if ($this->settings->ui->currencySymbolPosition == 'before') : ?>
                    <?php echo $this->currencyCode; ?> <?php echo number_format($productStoredOnDb->price, 2) ?>
                  <?php else : ?>
                    <?php echo number_format($productStoredOnDb->price, 2) ?> <?php echo $this->currencyCode; ?>
                  <?php endif; ?>
                </td>
                <td><?php echo $product->quantity ?></td>
				
								<?php $product_total = $productStoredOnDb->price * $product->quantity; ?>
								<?php $subtotal += $product_total; ?>
				
                <td>
                  <?php if ($this->settings->ui->currencySymbolPosition == 'before') : ?>
                    <?php echo $this->currencyCode; ?> <?php echo number_format($product_total, 2) ?>
                  <?php else : ?>
                    <?php echo number_format($product_total, 2) ?> <?php echo $this->currencyCode; ?>
                  <?php endif; ?>
                </td>
                <td class="download-link-td">
                  <?php if ($productStoredOnDb->type === 'digital') : ?>
                    <?php if ($productStoredOnDb->downloadable_file) : ?>
                      <a class="download-link" href="<?php echo $productStoredOnDb->downloadable_file ?>" target="_blank">
                        <?php echo JText::_('COM_JOOCOMMERCE_DOWNLOAD') ?>
                      </a>
                    <?php elseif (isset($productStoredOnDb->hasFiles)) : ?>
                      <a class="download-link" href="<?php echo JURI::base() ?>index.php?option=com_joocommerce&view=order&id=<?php echo $order->id?>&token=<?php echo $order->token?>&layout=download&product=<?php echo $productStoredOnDb->id ?>" target="_blank">
                        <?php echo JText::_('COM_JOOCOMMERCE_DOWNLOAD') ?>
                      </a>
                    <?php endif ?>
                  <?php endif ?>
                </td>
              </tr>
            <?php endforeach; ?>
						
            <tr>
              <td></td>
              <td></td>
              <td>
                <?php echo JText::_('COM_JOOCOMMERCE_SUBTOTAL') ?>
              </td>
              <td>
								<?php $orderTotalSum = number_format($orderTotalSum, 2);?>
                <?php if ($this->settings->ui->currencySymbolPosition == 'before') : ?>
                  <?php echo $this->currencyCode; ?> <?php echo $orderTotalSum ?>
                <?php else : ?>
                  <?php echo $orderTotalSum ?> <?php echo $this->currencyCode; ?>
                <?php endif; ?>
              </td>
            </tr>

            <?php if ($order->total_paid - ($product_total + $order->shipment->cost) > 0) : ?>
              <tr>
                <td></td>
                <td></td>
                <td>
                  <?php if (@$this->settings->cart->addShippingAndTaxesCostToTotal) : ?>
                  	<?php echo JText::_('COM_JOOCOMMERCE_INCLUDING_TAXES') ?>
									<?php else : ?>
                  	<?php echo JText::_('COM_JOOCOMMERCE_TAXES') ?>
									<?php endif ?>
                </td>
                <td>

                  <?php if (@$this->settings->cart->addShippingAndTaxesCostToTotal) : ?>
	                  <?php
	                  $totalOrderPriceIncludingTaxes = $order->total_paid;
	                  if ($order->shipment->cost) {
	                    $totalOrderPriceIncludingTaxes -= $order->shipment->cost;
	                  }
										$totalOrderPriceIncludingTaxes = number_format($totalOrderPriceIncludingTaxes, 2);
										$amount = $totalOrderPriceIncludingTaxes;
	                  ?>
									<?php else : ?>
                  	<?php $amount = number_format($order->total_paid - ($order->shipment->cost + $subtotal), 2); ?>
									<?php endif ?>


                  <?php if ($this->settings->ui->currencySymbolPosition == 'before') : ?>
                    <?php echo $this->currencyCode; ?> <?php echo $amount ?>
                  <?php else : ?>
                    <?php echo $amount ?> <?php echo $this->currencyCode; ?>
                  <?php endif; ?>

                </td>
              </tr>
            <?php endif ?>
            <?php if ($order->shipment->cost) : ?>
              <tr>
                <td></td>
                <td></td>
                <td>
                  <?php if (@$this->settings->cart->addShippingAndTaxesCostToTotal) : ?>
                  	<?php echo JText::_('COM_JOOCOMMERCE_INCLUDING_SHIPMENT') ?>
									<?php else : ?>
                  	<?php echo JText::_('COM_JOOCOMMERCE_SHIPPING') ?>
									<?php endif ?>
                </td>
                <td>
                  <?php if (@$this->settings->cart->addShippingAndTaxesCostToTotal) : ?>
	                  <?php
	                  $totalOrderPriceIncludingShipment = $order->total_paid;
										$totalOrderPriceIncludingShipment = number_format($totalOrderPriceIncludingShipment, 2);
                  	$amount = $totalOrderPriceIncludingShipment; ?>
									<?php else : ?>
                  	<?php $amount = number_format($order->shipment->cost, 2); ?>
									<?php endif ?>

                  <?php if ($this->settings->ui->currencySymbolPosition == 'before') : ?>
                    <?php echo $this->currencyCode; ?> <?php echo $amount ?>
                  <?php else : ?>
                    <?php echo $amount ?> <?php echo $this->currencyCode; ?>
                  <?php endif; ?>

                </td>
              </tr>
            <?php endif ?>
						

            <tr>
              <td></td>
              <td></td>
              <td>
                <?php echo JText::_('COM_JOOCOMMERCE_TOTAL') ?>
              </td>
              <td>
								<?php $orderTotalSum = number_format($order->total_paid, 2);?>
                <?php if ($this->settings->ui->currencySymbolPosition == 'before') : ?>
                  <?php echo $this->currencyCode; ?> <?php echo $orderTotalSum ?>
                <?php else : ?>
                  <?php echo $orderTotalSum ?> <?php echo $this->currencyCode; ?>
                <?php endif; ?>
              </td>
            </tr>
						
          </tbody>
        </table>

        <br />
        <br />
      </div>
    <?php else : ?>
      <?php echo JText::_('COM_JOOCOMMERCE_ORDER_PAGE_WRONG_TOKEN_MESSAGE') ?>
    <?php endif ?>

  <?php else : ?>
    <div id="ember-shopping-cart"></div>
    <?php echo JText::_('COM_JOOCOMMERCE_ORDER_NOT_PAID_YET') ?>
  <?php endif ?>
</div>
