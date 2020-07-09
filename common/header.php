<?php
    function Login() {
        session_start();
        if (!empty($_SESSION["userId"])) {
            require_once 'session.php';
            $memberResult = getMemberById($_SESSION["userId"]);
            if(!empty($memberResult["last_name"])) {
                $displayName = ucwords($memberResult["last_name"]);
            } else {
                $displayName = $memberResult["username"];
            }

            echo <<<EOF
                <span class="px-3 border-right border-left"><i class="fa fa-user" aria-hidden="true"></i> $displayName | <a href="../dang-xuat" class="text-dark">Đăng xuất</a><span>
            EOF;
          }
          else {
              echo '<a href="../dang-nhap" class="px-3 border-right border-left text-dark">Đăng nhập</a>';
          }
    }

?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Shopee</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous">

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous">

    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">

</head>
<body data-gr-c-s-loaded="true">

<!-- start #header -->
<header id="header">
    
    <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
        <p class="font-rale font-size-12 text-black-50 m-0">Khu phố 6 - Phường Linh Trung - Quận Thủ Đức - TPHCM. Tel: (028). 38.973.921</p>
        <div class="font-rale font-size-14">
            <?php Login();?>
            <a href="#" class="px-3 border-right text-dark">Danh sách yêu thích (0)</a>
        </div>
    </div>

    <!-- Primary Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
        <a class="navbar-brand" href="#">Tý Mobile</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav m-auto font-rubik">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Tất cả sản phẩm</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Khuyến mãi</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Hàng mới</i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Điện thoại</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Phụ kiện</i></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Khác</a>
                </li>
            </ul>
            <form action="#" class="font-size-14 font-rale">
                <a href="cart.php" class="py-2 rounded-pill color-primary-bg">
                    <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                    <span class="px-3 py-2 rounded-pill text-dark bg-light">2</span>
                </a>
            </form>
        </div>
    </nav>
    <!-- !Primary Navigation -->

</header>