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

<?php $product = $this->product ?>
<?php
$productDesc = $product->description;
if ($pos = strpos($productDesc, '---------(!-- read more --)---------')) {
  $productDesc = substr($productDesc, 0, $pos);
} elseif ($pos = strpos($productDesc, '<hr />')) {
  $productDesc = substr($productDesc, 0, $pos);
} elseif ($pos = strpos($productDesc, '<hr id="system-readmore" />')) {
  $productDesc = substr($productDesc, 0, $pos);
} elseif ($pos = strpos($productDesc, '<hr id="system-readmore">')) {
  $productDesc = substr($productDesc, 0, $pos);
}


$productDesc = trim(preg_replace('/\s+/', ' ', $productDesc));
?>

<script>
(function() {

  ShoppingCart.currentProduct = {
    title: "<?php echo addslashes($product->title) ?>",
    price: '<?php echo $product->price ?>',
    normal_price: '<?php echo $product->price ?>',
    defaultPhoto: '<?php echo $product->defaultPhoto ?>',
    quantity_available: '<?php echo $product->quantity_available ?>',
    type: '<?php echo $product->type ?>',
    hasFiles: '<?php echo $product->hasFiles ?>',
    id: '<?php echo $product->id ?>',
    size_weight: '<?php echo $product->size_weight ?>',
    url: "<?php echo JRoute::_('index.php?option=com_joocommerce&view=product&id=' . $product->id . '&Itemid=' . JoocommerceHelper::calculate_itemid($product->category)) ?>",
    variations: <?php if ($product->variations) : ?>JSON.parse('<?php echo $product->variations ?>'.replace(/\t/g, ''))<?php else : ?>null<?php endif ?>,
    openOption: <?php if ($product->openOption) : ?>JSON.parse('<?php echo $product->openOption ?>')<?php else : ?>null<?php endif ?>
  };

  ShoppingCart.currentPageIsProduct = true;
  ShoppingCart.checkoutURL = '<?php echo $this->checkoutURL ?>';
  ShoppingCart.cartURL = '<?php echo $this->cartURL ?>';
  ShoppingCart.baseURL = '<?php echo $this->baseURL ?>';

  setTimeout(function() {
    ShoppingCart.currentProduct = ShoppingCart.currentProduct;
  }, 1000);

}());
</script>

<div class="joocommerce-container joocommerce__product-container">

  <!--
  <div class="js__joocommerce-cart">
    <h3 class="js__joocommerce-cart__title" style="display: none"></h3>
    <table class="table js__joocommerce-cart__table">
      <thead></thead>
      <tbody></tbody>
    </table>
  </div>
  -->

  <?php if ($product->status) : ?>
    

    <div class="row">
      <div class="col-sm-6">

        <?php if ($product->defaultPhoto) : ?>
          <img src="media/com_joocommerce/attachments/<?php echo $product->defaultPhoto ?>" class="img-polaroid joocommerce__default-image thumbnail"
            <?php if ($this->settings->general->mainPictureSize) echo 'width="'.$this->settings->general->mainPictureSize.'px"'?>>
        <?php else : ?>
          <?php if (count($this->photos) === 1) : ?>
            <img src="media/com_joocommerce/attachments/<?php echo $this->photos[0]->name ?>" class="img-polaroid joocommerce__default-image thumbnail"
              <?php if ($this->settings->general->mainPictureSize) echo 'width="'.$this->settings->general->mainPictureSize.'px"'?>>
            <?php endif ?>
        <?php endif ?>

        <?php if (count($this->photos) > 1) : ?>
          <div class="row mt30">
          <?php $i = 0; ?>
          <?php foreach ($this->photos as $photo) : ?>
            <div class="col-sm-4">
            <?php if (!isset($photo->isDefault)) : ?>
              <img src="media/com_joocommerce/attachments/<?php echo $photo->name ?>" data-filename="<?php echo $photo->name ?>" class="img-polaroid joocommerce__product-image thumbnail <?php if ($i++ % 2) : ?>right<?php endif ?>"
                <?php if ($this->settings->general->smallerPicturesSize) echo 'width="'.$this->settings->general->smallerPicturesSize.'px"'?>>
            <?php endif ?>
            </div>
          <?php endforeach ?>
          </div>
        <?php endif ?>
      </div>

      <div class="col-sm-6 joocommerce-product-details">
        <h1 class="joocommerce__product-title fancy-title h3"><span><?php echo $product->title ?></span></h1>
        <h4>
          <strong class="joocommerce__product-price">
            <?php if ($this->settings->ui->currencySymbolPosition == 'before') : ?>
              <?php echo JText::_('COM_JOOCOMMERCE_PRICE') ?>: <?php echo $this->currencyCode; ?> <span class="js-product-price"><?php echo $product->price ?></span>
            <?php else : ?>
              <?php echo JText::_('COM_JOOCOMMERCE_PRICE') ?>: <span class="js-product-price"><?php echo $product->price ?></span> <?php echo $this->currencyCode; ?>
            <?php endif; ?>

          </strong>
          <br>
          <small class="joocommerce__taxes-inclusion">
            <?php if ($this->settings->general->productTaxes == 'included') : ?>
              <?php echo JText::_('COM_JOOCOMMERCE_INCLUDING_TAXES') ?>
            <?php else : ?>
              <?php echo JText::_('COM_JOOCOMMERCE_EXCLUDING_TAXES') ?>
            <?php endif ?>
          </small><br><br>
        </h4>

        <?php if (!isset($this->settings->cart->enableCatalogMode) || $this->settings->cart->enableCatalogMode == 0) : ?>
          <?php if ($product->quantity_available == '' ||  $product->quantity_available > 0) : ?>
            <button class="btn btn-primary js-button__add-to-cart joocommerce__button__add-to-cart"><i class="fa fa-plus-circle iconleft"></i><?php echo JText::_('COM_JOOCOMMERCE_ADD_TO_CART') ?></button>
            
            <hr />
            
            <?php if ($product->type == 'digital' && $this->settings->cart->limitDigitalProductsToSingleQuantity) : ?>
              <input type="hidden" id="quantity" value="1" />
            <?php else : ?>
              <?php if ($this->settings->cart->showQuantityChooserInProductPage &&
                        $this->settings->cart->maximumQuantityValue > 1) : ?>
                <div class="quantity-container">
                  <div class="quantity">
                    <h4><?php echo JText::_('COM_JOOCOMMERCE_QUANTITY') ?> <span class="items-left"><?php if ($product->quantity_available && !@$variations->manageStock) echo '(' . JText::sprintf('COM_JOOCOMMERCE_ITEMS_LEFT', @$product->quantity_available) . ')' ?></span>:</h4>
                    <select id="quantity" class="input-mini css-button__cart_quantity joocommerce__select__quantity form-control mb30">
                      <option selected="selected">1</option>
                      <?php $variations = json_decode($product->variations); ?>
                      <?php if ($variations->manageStock) : ?>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                      <?php else : ?>
                        <?php if ($product->quantity_available == '' || $product->quantity_available > 1) : ?><option>2</option><?php endif ?>
                        <?php if ($product->quantity_available == '' || ($this->settings->cart->maximumQuantityValue > 2 && $product->quantity_available > 2)) : ?><option>3</option><?php endif ?>
                        <?php if ($product->quantity_available == '' || ($this->settings->cart->maximumQuantityValue > 3 && $product->quantity_available > 3)) : ?><option>4</option><?php endif ?>
                        <?php if ($product->quantity_available == '' || ($this->settings->cart->maximumQuantityValue > 4 && $product->quantity_available > 4)) : ?><option>5</option><?php endif ?>
                        <?php if ($product->quantity_available == '' || ($this->settings->cart->maximumQuantityValue > 5 && $product->quantity_available > 5)) : ?><option>6</option><?php endif ?>
                        <?php if ($product->quantity_available == '' || ($this->settings->cart->maximumQuantityValue > 6 && $product->quantity_available > 6)) : ?><option>7</option><?php endif ?>
                        <?php if ($product->quantity_available == '' || ($this->settings->cart->maximumQuantityValue > 7 && $product->quantity_available > 7)) : ?><option>8</option><?php endif ?>
                        <?php if ($product->quantity_available == '' || ($this->settings->cart->maximumQuantityValue > 8 && $product->quantity_available > 8)) : ?><option>9</option><?php endif ?>
                        <?php if ($product->quantity_available == '' || ($this->settings->cart->maximumQuantityValue > 9 && $product->quantity_available > 9)) : ?><option>10</option><?php endif ?>
                      <?php endif ?>
                    </select>
                    <?php $variations = json_decode($product->variations); ?>
                    
                  </div>
                </div>
              <?php else : ?>
                <input type="hidden" id="quantity" value="1" />
              <?php endif ?>
            <?php endif ?>


          <?php else : ?>
            <p class="out-of-stock"><?php echo JText::_('COM_JOOCOMMERCE_OUT_OF_STOCK') ?></p>
          <?php endif ?>

          <div class="variations-container">
            <div class="variations">
              <?php if (@json_decode($product->variations)->enabled == 'true') : ?>
                <?php $variations = @json_decode($product->variations)->variations; ?>
                <?php if ($variations) foreach ($variations as $variation) : ?>
                  <?php $values = explode(',', $variation->values); ?>
                  
                  <div class="variation">
                    <h4><?php echo $variation->name ?>:</h4>
                    <select class="input-medium variation form-control mb30" id="variation-<?php echo $variation->name?>">
                      <option value=""><?php echo JText::_('COM_JOOCOMMERCE_CHOOSE_AN_OPTION') ?></option>
                      <?php foreach($values as $value) : ?>
                        <option value="<?php echo $value ?>"><?php echo $value ?></option>
                      <?php endforeach ?>
                    </select>
                  </div>
                <?php endforeach ?>
              <?php endif ?>
            </div>
          </div>

          <?php if ($product->openOption) : ?>
            <?php $openOption = @json_decode($product->openOption); ?>
            <?php if (isset($openOption->enabled) && $openOption->enabled == 'true') : ?>
              <div class="open-option">
                <h4 class="joocommerce__openOption-title"><?php echo @$openOption->text ?></h4>
                <textarea class="joocommerce__openOption-textarea form-control" id="js-joocommerce__openOption-textarea"></textarea>
              </div>
            <?php endif ?>
          <?php endif ?>

        <?php endif ?>

        <div class="product-description clearfix">
          <p><?php echo str_replace("---------(!-- read more --)---------", "", $product->description); ?></p>
        </div>
      </div>
    </div>
  <?php endif ?>
</div>


<br><br><br>
