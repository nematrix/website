$('document').ready(function() {
  /*  click view the shop products and service */

  /* product PopUp */
$('.product_Modal').hide();
$('button').click(function() {
      $('.product_Modal').show();
    });

    //close the productcart
    $('.product_cart_log_close').on('click', closeProductCart)
    function closeProductCart() {
      $('.product_Modal').hide()
    }

      //product review
    $('.fa-cart-plus').on('click', showOrderproduct)
    function showOrderproduct() {
      $(this).css('background','dimgrey');
      $(this).css('width','100%');
      $(this).css('height','30Vh');
    }
    $('.fa-eye').on('click',hideOrderProduct);
    function hideOrderProduct() {

    }
    //product ready done
    $('.fa-check-circle').on('click', FollowingShop)
    function FollowingShop() {
      var Follow = $(this).css('color','green');
      if(Follow){
        $(this).click(function() {
           $(this).hide()
        })
      }
    }
    //ads settings
    $('.fa-cog').on('click', showAdsToolBox)
    function showAdsToolBox() {
      $('.ads_settings').show();
    }
    //close ads_setting
    $('.ads_set_close').on('click', closeAdsToolBox);
      function closeAdsToolBox() {
        console.log("am clicked dan you ")
      }
      //media text_area
    //product ready done
});
