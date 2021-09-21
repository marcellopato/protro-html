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
ShoppingCart.currentPageIsProducts = true;
ShoppingCart.checkoutURL = '<?php echo $this->checkoutURL ?>';
ShoppingCart.cartURL = '<?php echo $this->cartURL ?>';
ShoppingCart.baseURL = '<?php echo $this->baseURL ?>';
</script>

<div class="joocommerce-container joocommerce__categories-list-container">

  <div class="js__joocommerce-cart">
    <h3 class="js__joocommerce-cart__title" style="display: none"></h3>
    <table class="table js__joocommerce-cart__table">
      <thead></thead>
      <tbody></tbody>
    </table>
  </div>

  <?php
    $number = 1;
    if ($this->settings->ui->categoriesListLayout === '1-column') { $number = 1; }
    elseif ($this->settings->ui->categoriesListLayout === '2-columns') { $number = 2; }
    elseif ($this->settings->ui->categoriesListLayout === '3-columns') { $number = 3; }
    elseif ($this->settings->ui->categoriesListLayout === '4-columns') { $number = 4; }
    elseif ($this->settings->ui->categoriesListLayout === '6-columns') { $number = 6; }

    $class = 'col-sm-'. 12 / $number.' rt-grid-'. 12 / $number;
  ?>

  <?php $i = 0; ?>
  <?php foreach ($this->categories as $category) : ?>
    <?php $i++; ?>

    <?php if (($i - 1) % $number == 0) : ?>
      <div class="row">
    <?php endif; ?>

      <div class="item <?php echo $class ?>">
        <div class="media well">
          <a href="<?php echo JRoute::_('index.php?option=com_joocommerce&view=products&category=' . $category->id . '&Itemid=' . JoocommerceHelper::calculate_itemid($category->id)) ?>">
            <span class="pull-left">
              <?php if ($category->imageName) : ?>
                <img class="media-object img-polaroid" src="media/com_joocommerce/attachments/<?php echo $category->imageName ?>">
              <?php endif ?>
            </span>
          </a>
          <div class="media-body">
            <a href="<?php echo JRoute::_('index.php?option=com_joocommerce&view=products&category=' . $category->id . '&Itemid=' . JoocommerceHelper::calculate_itemid($category->id)) ?>">
              <h4 class="media-heading">
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
      <?php if ($i == count($this->categories)) : ?>
        </div>
      <?php endif ?>
    <?php endif; ?>

  <?php endforeach ?>
</div>
