(function() {

  var cartContent = null;

  var interval = setInterval(function() {
    if (typeof ShoppingCart !== 'undefined') {
      if (ShoppingCart.settings) {
        if (ShoppingCart.items) {
          setTimeout(function() {
            fillCart();
          }, 300);
        }
      }
    }
  }, 200);

  var fillCart = function() {
    var $proceedToCheckoutCartLink = jQuery('#js__joocommerce-checkout-cart-link');
    var $editCartLink = jQuery('#js__joocommerce-edit-cart-link');
    var $cartModule = jQuery('.js__joocommerce-cart-module');
    var $minimumToPlaceAnOrder = jQuery('#js__joocommerce-minimum-to-place-an-order');

    var thead = $cartModule.find('thead');
    var tbody = $cartModule.find('tbody');
    var tfoot = $cartModule.find('tfoot');

    thead.html('');
    tbody.html('');
    tfoot.html('');

    if (ShoppingCart.items.length === 0) {
      tbody.html(ShoppingCart.translations.COM_JOOCOMMERCE_NO_ITEMS_IN_CART);
      $editCartLink.html('');
      $proceedToCheckoutCartLink.addClass('hidden');

      return;
    }

    thead.html('<tr><th>' + ShoppingCart.translations.COM_JOOCOMMERCE_ITEM + '</th><th>' + ShoppingCart.translations.COM_JOOCOMMERCE_QUANTITY_SHORT + '</th><th>' + ShoppingCart.translations.COM_JOOCOMMERCE_PRICE +'</th></tr>');

    var currencySymbol = ShoppingCart.getCurrentCurrencySymbol();

    ShoppingCart.items.forEach(function(item) {
      var row = '<tr><td>' + item.product.title;

      if (item.variations) {
        row += '<span class="variations">';
      }

      for (var variation in item.variations) {
        if (item.variations.hasOwnProperty(variation)) {
          row += item.variations[variation] + ' ';
        }
      }

      if (item.variations) {
        row += '</span>';
      }

      row += '</td><td>' + item.quantity + '</td>';

      if (ShoppingCart.settings.ui.currencySymbolPosition === 'after') {
        row += '<td>' + parseFloat(item.product.price).toFixed(2) + '<span class="currency">' + currencySymbol + '</span>' + '</td></tr>';
      } else {
        row += '<td>' + '<span class="currency">' + currencySymbol + '</span>' + parseFloat(item.product.price).toFixed(2) + '</td></tr>';
      }

      tbody.html(tbody.html() + row);
    });

    var total = 0, i = 0;
    var item;
    var cart = ShoppingCart.items;
    while (i < cart.length) {
      item = cart[i];
      total += item.product.price * item.quantity;
      i++;
    }

    total = parseFloat(total).toFixed(2);

    if (ShoppingCart.settings.ui.currencySymbolPosition === 'after') {
      tfoot.html('<tr><td>' + ShoppingCart.translations.COM_JOOCOMMERCE_TOTAL + ':</td><td></td><td>' + total + currencySymbol + '</td></tr>');
    } else {
      tfoot.html('<tr><td>' + ShoppingCart.translations.COM_JOOCOMMERCE_TOTAL + ':</td><td></td><td>' + currencySymbol + total + '</td></tr>');
    }

    $editCartLink.html(ShoppingCart.translations.COM_JOOCOMMERCE_EDIT_CART);
    $editCartLink.attr('href', ShoppingCart.cartURL);

    if (ShoppingCart._orderAmountIsGreaterThenMinimum()) {
      $minimumToPlaceAnOrder.addClass('hidden');
      $proceedToCheckoutCartLink.removeClass('hidden');
      $proceedToCheckoutCartLink.html(ShoppingCart.translations.COM_JOOCOMMERCE_CHECKOUT);

      $proceedToCheckoutCartLink.click(function() {
        window.location.href = ShoppingCart.checkoutURL;
      });

    } else {
      $proceedToCheckoutCartLink.addClass('hidden');

      $minimumToPlaceAnOrder.removeClass('hidden');
      var text = ShoppingCart.translations.COM_JOOCOMMERCE_MINIMUM_TO_PLACE_AN_ORDER;

      if (ShoppingCart.settings.ui.currencySymbolPosition === 'before') {
        text += currencySymbol + ' ' + ShoppingCart.settings.cart.minimumSumToPlaceOrder;
      } else {
        text += ShoppingCart.settings.cart.minimumSumToPlaceOrder + ' ' + currencySymbol;
      }

      $minimumToPlaceAnOrder.html(text);
    }

  }

}());




