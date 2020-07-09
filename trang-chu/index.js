$(document).ready(function(){

  $("#banner-area .owl-carousel").owlCarousel({
      dots: true,
      items: 1
  });

  $("#top-sale .owl-carousel").owlCarousel({
      loop: true,
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

  var $grid = $(".grid").isotope({
      itemSelector : '.grid-item',
      layoutMode : 'fitRows'
  });

  $(".button-group").on("click", "button", function(){
      var filterValue = $(this).attr('data-filter');
      $grid.isotope({ filter: filterValue});
  })

  $("#new-phones .owl-carousel").owlCarousel({
      loop: true,
      nav: false,
      dots: false,
      responsive : {
          0: {
              items: 1
          },
          600: {
              items: 3,
              dots: true
          },
          1000 : {
              items: 5
          }
      }
  });

  $("#blogs .owl-carousel").owlCarousel({
      loop: true,
      nav: false,
      dots: true,
      responsive : {
          0: {
              items: 1
          },
          600: {
              items: 3
          }
      }
  })

});