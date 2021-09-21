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

  ShoppingCart.currentPageIsProducts = true;
  ShoppingCart.checkoutURL = '<?php echo $this->checkoutURL ?>';
  ShoppingCart.cartURL = '<?php echo $this->cartURL ?>';
  ShoppingCart.baseURL = '<?php echo $this->baseURL ?>';
  ShoppingCart.currentProducts = [];

  <?php foreach ($this->products as $product) : ?>
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

    ShoppingCart.currentProducts[<?php echo $product->id ?>] = {
      title: "<?php echo addslashes($product->title) ?>",
      price: '<?php echo $product->price ?>',
      defaultPhoto: '<?php echo $product->defaultPhoto ?>',
      quantity_available: '<?php echo $product->quantity_available ?>',
      type: '<?php echo $product->type ?>',
      hasFiles: '<?php echo $product->hasFiles ?>',
      id: '<?php echo $product->id ?>',
      size_weight: '<?php echo $product->size_weight ?>',
      url: "<?php echo JRoute::_('index.php?option=com_joocommerce&view=product&id=' . $product->id . '&Itemid=' . JoocommerceHelper::calculate_itemid($product->category)) ?>",
      variations: <?php if ($product->variations) : ?>JSON.parse('<?php echo $product->variations ?>'.replace(/\t/g, ''))<?php else : ?>null<?php endif ?>,

    };
  <?php endforeach; ?>

}());
</script>

<div class="joocommerce-container joocommerce__products-list-container <?php if (count($this->products) == 0) : ?>joocommerce__products-list-empty<?php endif ?>">
<!--
  <div class="js__joocommerce-cart">
    <h3 class="js__joocommerce-cart__title" style="display: none"></h3>
    <table class="table js__joocommerce-cart__table">
      <thead></thead>
      <tbody></tbody>
    </table>
  </div>
-->
  <div class="container-main">

    <?php
    if ($this->pageParams) {
      $menuItemParams = new JRegistry($this->pageParams->params);
      $menuItemParams = $menuItemParams->get('data');
    }
    ?>

    <?php if (@$menuItemParams && $menuItemParams->show_page_heading != 0 ) : ?>
      <h1>
        <?php echo $this->escape($menuItemParams->page_heading); ?>
      </h1>
    <?php endif; ?>

    <?php
      $number = 1;
      if ($this->settings->ui->productsListLayout === '1-column') { $number = 1; }
      elseif ($this->settings->ui->productsListLayout === '2-columns') { $number = 2; }
      elseif ($this->settings->ui->productsListLayout === '3-columns') { $number = 3; }
      elseif ($this->settings->ui->productsListLayout === '4-columns') { $number = 4; }
      elseif ($this->settings->ui->productsListLayout === '6-columns') { $number = 6; }

      $class = 'col-sm-'. 12 / $number.' rt-grid-'. 12 / $number;
    ?>

    <?php if (count($this->subcategories)) : ?>
      <div class="joocommerce__products-list-container__subcategories-list">
        <h4><?php echo JText::_('COM_JOOCOMMERCE_SUBCATEGORIES_HEADING') ?></h4>

        <?php $i = 0; ?>
        <?php foreach ($this->subcategories as $category) : ?>
          <?php $i++; ?>

          <?php if (($i - 1) % $number == 0) : ?>
            <div class="row">
          <?php endif; ?>
            <div class="item <?php echo $class ?>">
              <div class="media">

                  <span class="">
                    <?php if ($category->imageName) : ?>
                    
                      <div class="overlay-wrapper mb20">
                        <img class="img-zoom" src="media/com_joocommerce/attachments/<?php echo $category->imageName ?>" alt="">
                        <div class="overlay-wrapper-content">
                          <div class="overlay-details">
                            <a style="color:#ffffff;" href="<?php echo JRoute::_('index.php?option=com_joocommerce&view=products&category=' . $category->id . '&Itemid=' . JoocommerceHelper::calculate_itemid($category->id)) ?>"><span class="livicon" data-n="eye-open"  data-color="#ffffff" data-hovercolor="#ffffff" data-op="1" data-onparent="true"></span></a>                                 	
                          </div>
                          <div class="overlay-bg"></div>
                        </div>
                      </div>
                    <?php endif ?>
                  </span>

                <div class="media-body">
                  <a href="<?php echo JRoute::_('index.php?option=com_joocommerce&view=products&category=' . $category->id . '&Itemid=' . JoocommerceHelper::calculate_itemid($category->id)) ?>">
                    <h4 class="media-heading mb20">
                        <?php echo $category->title ?>
                    </h4>
                  </a>
                  <div class="media-description">
                    <?php echo $category->description ?>
                  </div>
                </div>
              </div>
              <div class="clearfix"></div>
            </div>

          <?php if (!($i % $number)) : ?>
            </div>
          <?php else : ?>
            <?php if ($i == count($this->subcategories)) : ?>
              </div>
            <?php endif ?>
          <?php endif; ?>

        <?php endforeach ?>
        <div class="clearfix"></div>
        <?php if ($this->products) : ?>
          <hr class="joocommerce__products-list-container__subcategories-separator" />
        <?php endif ?>
      </div>
    <?php endif; ?>

    <?php if (!$this->products && !$this->subcategories) : ?>
      <h4><?php echo JText::_('COM_JOOCOMMERCE_NO_PRODUCTS_FOUND') ?></h4>
    <?php endif ?>

    <?php $i = 0; ?>
    <?php foreach ($this->products as $product) : ?>
      <?php $i++; ?>

      <?php if (($i - 1) % $number == 0) : ?>
        <div class="row">
      <?php endif; ?>

        <div class="item <?php echo $class ?>">
          <div class="media <?php if ($product->featured) : ?>featured<?php endif ?> <?php if ($product->variations) : ?>has-variations<?php endif ?>" data-id="<?php echo $product->id ?>">
            
            <?php if ($product->defaultPhoto) : ?>
            <div class="overlay-wrapper mb20">
              <img class="img-zoom" src="media/com_joocommerce/attachments/<?php echo $product->defaultPhoto ?>" alt="">
              <div class="overlay-wrapper-content">
                <div class="overlay-details">
                  <a style="color:#ffffff;" href="<?php echo JRoute::_('index.php?option=com_joocommerce&view=product&id=' . $product->id . '&Itemid=' . JoocommerceHelper::calculate_itemid($product->category)) ?>"><span class="livicon" data-n="shopping-cart"  data-color="#ffffff" data-hovercolor="#ffffff" data-op="1" data-onparent="true"></span></a>                                 	
                </div>
                <div class="overlay-bg"></div>
              </div>
            </div>
            <?php endif ?>

              

            <div class="media-body mb20">
              <?php if ($this->settings->ui->productsListLayout === '1-column' && $this->settings->cart->addToCartInList && ($product->quantity_available == '' ||  $product->quantity_available > 0)) : ?>
                <button data-product_id="<?php echo $product->id ?>" class="btn btn-primary js-button__add-to-cart__in-list joocommerce__button__add-to-cart right"><?php echo JText::_('COM_JOOCOMMERCE_ADD_TO_CART') ?></button>
              <?php endif; ?>

              <?php $link = JRoute::_('index.php?option=com_joocommerce&view=product&id=' . $product->id . '&Itemid=' . JoocommerceHelper::calculate_itemid($product->category)) ?>
              <a href="<?php echo $link ?>">
                <h5 class="media-heading">
                  <?php echo $product->title ?>
                </h5>
                <?php if (!isset($this->settings->ui->hidePricesInProductsList) || $this->settings->ui->hidePricesInProductsList == 0) : ?>
                  <span class="joocommerce__price product-price">
                    <?php if ($this->settings->ui->currencySymbolPosition == 'before') : ?>
                      <span class="joocommerce__price-currency"><?php echo $this->currencyCode; ?></span> <span class="joocommerce__price-price"><?php echo $product->price ?></span>
                    <?php else : ?>
                      <span class="joocommerce__price-price"><?php echo $product->price ?></span> <span class="joocommerce__price-currency"><?php echo $this->currencyCode; ?></span>
                    <?php endif; ?>
                  </span>
                <?php endif ?>
              </a>
              <div class="media-description">
                <?php if ($pos = strpos($product->description, '---------(!-- read more --)---------')) : ?>
                  <?php echo substr($product->description, 0, $pos) ?>
                  <p><a class="joocommerce__read-more btn btn-xs btn-default" href="<?php echo $link ?>"><?php echo JText::_('COM_JOOCOMMERCE_READ_MORE') ?></a></p>
                <?php elseif ($pos = strpos($product->description, '<hr />')) : ?>
                  <?php echo substr($product->description, 0, $pos) ?>
                  <p><a class="joocommerce__read-more btn btn-xs btn-default" href="<?php echo $link ?>"><?php echo JText::_('COM_JOOCOMMERCE_READ_MORE') ?></a></p>
                <?php elseif ($pos = strpos($product->description, '<hr id="system-readmore" />')) : ?>
                  <?php echo substr($product->description, 0, $pos) ?>
                  <p><a class="joocommerce__read-more btn btn-xs btn-default" href="<?php echo $link ?>"><?php echo JText::_('COM_JOOCOMMERCE_READ_MORE') ?></a></p>
                <?php elseif ($pos = strpos($product->description, '<hr id="system-readmore">')) : ?>
                  <?php echo substr($product->description, 0, $pos) ?>
                  <p><a class="joocommerce__read-more btn btn-xs btn-default" href="<?php echo $link ?>"><?php echo JText::_('COM_JOOCOMMERCE_READ_MORE') ?></a></p>
                <?php else : ?>
                  <?php echo $product->description ?>
                <?php endif; ?>

                <?php if ($this->settings->ui->productsListLayout !== '1-column' && $this->settings->cart->addToCartInList) : ?>
                  <button data-product_id="<?php echo $product->id ?>" class="btn btn-primary js-button__add-to-cart__in-list joocommerce__button__add-to-cart"><?php echo JText::_('COM_JOOCOMMERCE_ADD_TO_CART') ?></button>
                <?php endif; ?>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>

      <?php if (!($i % $number)) : ?>
        </div>
      <?php else : ?>
        <?php if ($i == count($this->products)) : ?>
          </div>
        <?php endif ?>
      <?php endif; ?>

    <?php endforeach ?>

    <?php if ($this->pagination->get('pages.total') > 1) : ?>
      <div class="pagination">
        <p class="counter pull-right">
          <?php echo $this->pagination->getPagesCounter(); ?>
        </p>

        <?php echo $this->pagination->getPagesLinks(); ?>
      </div>
    <?php endif; ?>

  </div>
</div>
