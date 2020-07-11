$(document).ready(function(){
  $("#banner-area .owl-carousel").owlCarousel({
      dots: true,
      items: 1
  });

  $(".owl-carousel").owlCarousel({
      loop: false,
      dots: false,
      responsive : {
          0: {
              items: 2,
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
});

function addToCart(userId, itemId, quantity) {
    if (userId != null) {
        $.ajax({
        type: 'post',
        url: '../gio-hang/xu-ly-hang.php',
        data: {
            userId: userId,
            itemId: itemId,
            quantity: quantity
        },
        success: function(data) {
            $('#totalItems').html(data);
            console.log(data);
            $(function(){
                alert("Sản phẩm đã được thêm vào giỏ");
            });
        }
        });
    }
}

