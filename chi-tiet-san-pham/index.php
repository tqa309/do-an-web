<?php
// include header.php file
include('../common/header.php');
?>
<?php

// shuffle($product_shuffle);

// // request method post
// if($_SERVER['REQUEST_METHOD'] == "POST"){
//     if (isset($_POST['product_submit'])){
//         // call method addToCart
//         $Cart->addToCart($_POST['user_id'], $_POST['item_id']);
//     }
    
// }


//get id from url
// $url="";
// if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') 
// $url = "https"; 
// else
// $url = "http"; 

// // Here append the common URL characters. 
// $url .= "://"; 

// // Append the host(domain name, ip) to the URL. 
// $url .= $_SERVER['HTTP_HOST']; 

// // Append the requested resource location to the URL 
// $url .= $_SERVER['REQUEST_URI'];
// //echo $url;
// $url_components = parse_url($url);
// parse_str($url_components['query'], $params);
// $item_id = $params['id'];
?>
    <section id="product" class=" py-5">
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
                let price = Number(response.Price).toLocaleString('de-DE', {
                style: 'currency',
                currency: 'VND',
            });
                html = "";
                // html += "<p>Chưa có thông tin</>";
                html += `<img src="../${response.img}" alt="${response.Name}" class="img-fluid" style="position: relative;">`;

                $('#SP_img').html(html);
                html = "";
                html += `<h1 class="font-baloo">${response.Name} </h1>`;
                html += ` <small style="font-size:14px; font-style:italic"> by ${response.Brand}</small><hr class="m-0">`;
                html+=`<div class="row"style="margin-top:20px">`
                html += `<div class="col-6 col-lg-5 font-rale" style="font-size:16px;"> Giá gốc: </div>`;
                html += `<div class="col-6 col-lg-7 font-rale" style="font-size:16px;"> <strike> ${response.Price * 10}</strike> </div>`;
                html += `<div class="col-6 col-lg-5 font-rale" style="font-size:18px;margin-top:15px">Giá khuyến mãi: </div>`;
                html += `<div class="col-6 col-lg-7 font-rale"><span style="font-size:26px;"class="text-danger">${price}</span> <br><small class="text-dark font-size-12">&nbsp;&nbsp;Bao gồm VAT 10%</small></div>`;
                html += `</div>`;    
                // html += `<table class="my-3"> <tbody><tr class="font-rale"style="font-size:18px;"><td>Giá gốc:</td><td><strike>$ ${response.Price * 100} </strike></td></tr>`;
                // html += `<tr class="font-rale"style="font-size:18px;"><td>Giá khuyến mãi:</td><td style="font-size:26px;"class="text-danger">$<span>${response.Price}</span><small class="text-dark font-size-12">&nbsp;&nbsp;Bao gồm VAT 10%</small></td></tr>`;
                // html += `</tbody> </table>`;
                html += `<div id="policy"><div class="d-flex"><div class="return text-center"style="margin-right: 3.5rem !important;">`;
                html += `<div class="font-size-20 my-2 color-second"><span class="fas fa-retweet border p-3 rounded-pill"></span></div>`;
                html += `<a href="#" class="font-rale font-size-16">10 ngày <br> đổi trả</a></div><div class="return text-center "style="margin-right: 3.5rem !important;"> <div class="font-size-20 my-2 color-second">`;
                html += `<span class="fas fa-truck  border p-3 rounded-pill"></span></div>`;
                html += `<a href="#" class="font-rale font-size-16">Giao hàng <br>tận nơi</a> </div>`;
                html += `<div class="return text-center" style="margin-right: 3.5rem !important;">`;
                html += `<div class="font-size-20 my-2 color-second"><span class="fas fa-check-double border p-3 rounded-pill"></span></div>`;
                html += `<a href="#" class="font-rale font-size-16">Bảo hành <br>1 năm</a></div></div></div>`;
                html += `<hr>`;
                html += `<div class="col-12" style="margin:15px auto;"><button type="submit" name="product_submit" class="btn btn-warning form-control">Thêm vào giỏ hàng</button> </div>`;
                html += `<div class="col-12" style="margin:15px auto;"><a href="../gio-hang" name="product_submit" class="btn btn-danger form-control">Mua ngay</a> </div>`;
                $('#SP_P').html(html);
                html = "";
                html += `<p>${response.Des}</p>`;
                $('#SP_D').append(html);
            }
        });
    }
</script>