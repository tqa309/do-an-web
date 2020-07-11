<?php
include('../trang-chu/carousel.php');
// include header.php file
include('../common/header.php');
?>
<?php
require ('../san-pham/DBController.php');
// DBController object
$db = new DBController();

// Product object
$product = new Product($db);
$product_shuffle = $product->getData();

// Cart object
$Cart = new Cart($db );
// shuffle($product_shuffle);

// // request method post
// if($_SERVER['REQUEST_METHOD'] == "POST"){
//     if (isset($_POST['product_submit'])){
//         // call method addToCart
//         $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
//     }
    
// }


// get id from url
$url="";
if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
$url = "https"; 
else
$url = "http"; 

// Here append the common URL characters. 
$url .= "://"; 

// // Append the host(domain name, ip) to the URL. 
$url .= $_SERVER['HTTP_HOST']; 

// // Append the requested resource location to the URL
$url .= $_SERVER['REQUEST_URI'];
//echo $url;
$url_components = parse_url($url);
if (isset($url_components['query'])) {
    parse_str($url_components['query'], $params);
}
if (isset($params['id'])) {
    $item_id = $params['id'];
}
?>
    <section id="product" class=" py-5">
    </section>
    <section id="top-sale">
    <div class="container py-5">
        <h4 class="font-rubik font-size-20">Khuyến Mãi Hot</h4>
        <hr>
        <div class="owl-carousel owl-theme owl-loaded owl-drag"> 
          <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-552px, 0px, 0px); transition: all 0s ease 0s; width: 2141px;">
              <?php
                print_item('T1');
              ?>
          </div>
    </div>
  </div>
    </div>
</section>
    <?php
    // include footer.php file
    // include ('_top-sale.php');
    include('../common/footer.php');
    ?>
<script src="index.js"></script>
<script>
    window.onload = function() {
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        const id = urlParams.get('id');
        // alert(id);
        $.ajax({
            type: "POST",
            url: "chitiet.php",
            data: {
                id: id
            },
            success: function(response) {
                $('#product').html(response);
            }
        });

    }
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
</script>