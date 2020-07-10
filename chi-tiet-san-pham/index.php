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
parse_str($url_components['query'], $params);
$item_id = $params['id'];
?>
    <section id="product" class=" py-3">
        <div class="container">
            <div class="row">
                <div class="col-sm-6" id="SP_img">
                </div>
                <div class="col-sm-6 py-5" id="SP_P">

                </div>
                <div class="col-12" id="SP_D" style="margin:2.5rem 0rem">
                    <h6 class="font-baloo" style="text-shadow: black; font-size: 24px; font-style: initial ;">Giới thiệu</h6>
                    <hr>
                </div>
            </div>
        </div>
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
<script>
    window.onload = function() {
        const queryString = window.location.search;
        const urlParams = new URLSearchParams(queryString);
        const id = urlParams.get('id');
        // alert(id);
        $.ajax({
            type: "POST",
            url: "chitiet.php",
            dataType: "json",
            data: {
                id: id
            },
            success: function(response) {
                console.log(response);
                
                html = "";
                // html += "<p>Chưa có thông tin</>";
                html += `<img src="../${response.img}" alt="${response.Name}" class="img-fluid" style="position: relative;">`;

                $('#SP_img').html(html);
                html = "";
                html += `<h1 class="font-baloo">${response.Name} </h1>`;
                html += ` <small style="font-size:12px; font-style:italic"> by ${response.Brand}</small><hr class="m-0">`;
                html+=`<div class="row"style="margin-top:20px">`
                html += `<div class=" col-5 font-rale" style="font-size:14px;"> Giá gốc: </div>`;
                html += `<div class=" col-7 font-rale" style="font-size:14px;"> <strike> ${response.Price * 10} đ</strike> </div>`;
                html += `<div class=" col-5 font-rale" style="font-size:16px;margin-top:15px">Giá khuyến mãi: </div>`;
                html += `<div class=" col-7 font-rale"><span style="font-size:24px;"class="text-danger">${response.Price} đ</span> <br><small class="text-dark font-size-12">&nbsp;&nbsp;Bao gồm VAT 10%</small></div>`;
                html += `</div>`;
                html += `<div id="policy"><div class="d-flex"><div class="return text-center"style="margin-right: 3.5rem !important;">`;
                html += `<div class="font-size-20 my-2 color-second"><span class="fas fa-retweet border p-3 rounded-pill"></span></div>`;
                html += `<a href="#" class="font-rale font-size-16">10 ngày <br> đổi trả</a></div><div class="return text-center "style="margin-right: 3.5rem !important;"> <div class="font-size-20 my-2 color-second">`;
                html += `<span class="fas fa-truck  border p-3 rounded-pill"></span></div>`;
                html += `<a href="#" class="font-rale font-size-16">Giao hàng <br>tận nơi</a> </div>`;
                html += `<div class="return text-center" style="margin-right: 3.5rem !important;">`;
                html += `<div class="font-size-20 my-2 color-second"><span class="fas fa-check-double border p-3 rounded-pill"></span></div>`;
                html += `<a href="#" class="font-rale font-size-16">Bảo hành <br>1 năm</a></div></div></div><hr>`;
                html += `<?php
                        if (in_array($item_id, $Cart->getCartId($product->getData('cart')) ?? [])){
                            echo '<div class="col-12" style="margin:15px auto;"><button type="submit" disabled class="btn btn-success font-size-16 form-control">Đã thêm vào giỏ hàng</button></div>';
                            echo '<div class="col-12" style="margin:15px auto;"><a href="../gio-hang" name="product_submit" class="btn btn-danger form-control">Mua ngay</a> </div>';
                        }else{
                            echo '<div class="col-12" style="margin:15px auto;"><button type="submit" name="top_sale_submit" class="btn btn-warning font-size-16 form-control">Thêm vào giỏ hàng</button></div>';
                            echo '<div class="col-12" style="margin:15px auto;"><a href="../gio-hang" name="product_submit" class="btn btn-danger form-control">Mua ngay</a> </div>';
                        }
                        ?>`;
                // html += `<div class="col-12" style="margin:15px auto;"><button type="submit" name="product_submit" class="btn btn-warning form-control">Thêm vào giỏ hàng</button> </div>`;
                // html += `<div class="col-12" style="margin:15px auto;"><a href="../gio-hang" name="product_submit" class="btn btn-danger form-control">Mua ngay</a> </div>`;
                $('#SP_P').html(html);
                html = "";
                html += `<p>${response.Des}</p>`;
                $('#SP_D').append(html);
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

$(".button-group").on("click", "button", function(){
    var filterValue = $(this).attr('data-filter');
    $grid.isotope({ filter: filterValue});
})
});
</script>