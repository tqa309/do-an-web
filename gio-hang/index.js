$(document).ready(function() {
    
  let $qty_up = $(".qty .qty-up");
  let $qty_down = $(".qty .qty-down");
  let $deal_price = $("#deal-price");
  
  $qty_up.click(function(e){

      let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
      let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

      $.ajax({url: "template/ajax.php", type : 'post', data : { itemid : $(this).data("id")}, success: function(result){
              let obj = JSON.parse(result);
              let item_price = obj[0]['item_price'];

              if($input.val() >= 1 && $input.val() <= 9){
                  $input.val(function(i, oldval){
                      return ++oldval;
                  });

                  $price.text(parseInt(item_price * $input.val()).toFixed(2));

                  let subtotal = parseInt($deal_price.text()) + parseInt(item_price);
                  $deal_price.text(subtotal.toFixed(2));
              }

          }});
  });

  
  $qty_down.click(function(e){

      let $input = $(`.qty_input[data-id='${$(this).data("id")}']`);
      let $price = $(`.product_price[data-id='${$(this).data("id")}']`);

      $.ajax({url: "template/ajax.php", type : 'post', data : { itemid : $(this).data("id")}, success: function(result){
              let obj = JSON.parse(result);
              let item_price = obj[0]['item_price'];

              if($input.val() > 1 && $input.val() <= 10){
                  $input.val(function(i, oldval){
                      return --oldval;
                  });

                  $price.text(parseInt(item_price * $input.val()).toFixed(2));

                  let subtotal = parseInt($deal_price.text()) - parseInt(item_price);
                  $deal_price.text(subtotal.toFixed(2));
              }

          }});
  });

  $(".owl-carousel").owlCarousel({
    loop: false,
    dots: false,
    responsive : {
        0: {
            items: 1,
            nav: false
        },
        600: {
            items: 3,
            nav: true
        },
        1000 : {
            items: 5,
            nav: true
        }
    }
  });
})