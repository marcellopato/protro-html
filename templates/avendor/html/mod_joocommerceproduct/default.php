<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
?>

<div class="joocommerce__module-product module<?php echo $params->get( 'moduleclass_sfx' ) ?>">
    <span class="">
      <?php if ($product->defaultPhoto) : ?>
        <a class="thumbnail" href="<?php echo JRoute::_('index.php?option=com_joocommerce&view=product&id=' . $product->id . '&Itemid=' . $itemid) ?>">
          <img class="media-object img-polaroid" src="media/com_joocommerce/attachments/<?php echo $product->defaultPhoto ?>">
        </a>
      <?php endif ?>
    </span>
    <div class="media-body mt20">
      <a href="<?php echo JRoute::_('index.php?option=com_joocommerce&view=product&id=' . $product->id . '&Itemid=' . $itemid) ?>">
        <h4 class="media-heading">
          <?php if ($settings->ui->currencySymbolPosition == 'before') : ?>
            <?php echo $product->title ?>
          <?php else : ?>
            <?php echo $product->title ?>
          <?php endif; ?>
        </h4>
      </a>
      <div class="media-description">
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

        <?php echo $productDesc ?>
      </div>
    </div>
</div>
