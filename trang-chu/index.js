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

  $(".button-group").on("click", "button", function(){
      var filterValue = $(this).attr('data-filter');
      $grid.isotope({ filter: filterValue});
  })
});