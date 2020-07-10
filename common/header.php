<?php
    function Login() {
        session_start();
        if (!empty($_SESSION["userId"])) {
            require_once 'session.php';
            $memberResult = getMemberById($_SESSION["userId"]);
            if(!empty($memberResult["last_name"])) {
                $displayName = utf8_decode($memberResult["last_name"]);
            } else {
                $displayName = $memberResult["username"];
            }

            echo <<<EOF
                <span class="px-2 border-right border-right"><i class="fa fa-user" aria-hidden="true"></i> $displayName </span> <span class="px-2 border-right "> <a href="../admin" class="text-dark">Quản lý</a></span> <span class="px-2 border-right "> <a href="../dang-xuat" class="text-dark">Đăng xuất</a></span>
            EOF;
          }
          else {
              echo '<a href="../dang-nhap" class="px-3 border-right border-left text-dark">Đăng nhập</a><a href="../dang-ky" class="px-3 border-right border-left text-dark">Đăng ký</a><span>';
          }
    }
    ?>


<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tý Mobile - Nơi mua bán điện thoại uy tín TP.HCM</title>

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <!-- Owl-carousel CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha256-UhQQ4fxEeABh4JrcmAJ1+16id/1dnlOEVCFOxDef9Lw=" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha256-kksNxjDRxd/5+jGurZUJd1sdR2v+ClrCl3svESBaJqw=" crossorigin="anonymous">

    <!-- font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous">

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- Custom CSS file -->
    <link rel="stylesheet" href="style.css">

</head>
<body data-gr-c-s-loaded="true">

<!-- start #header -->
<header id="header">
    
    <div class="strip d-flex justify-content-between px-4 py-1 bg-light">
        <p class="font-rale font-size-12 text-black-50 m-0">
        <span class="d-none d-md-block ">Khu phố 6 - Phường Linh Trung - Quận Thủ Đức - TPHCM. Tel: (028). 38.973.921</span>
        </p>
        <div class="font-rale font-size-14">
            <?php Login();?>
        </div>
    </div>

    <!-- Primary Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark color-second-bg">
        <a class="navbar-brand" href="../trang-chu">Tý Mobile</a>
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
            <form action="../gio-hang" class="font-size-14 font-rale">
                <a href="../gio-hang" class="py-2 rounded-pill color-primary-bg">
                    <span class="font-size-16 px-2 text-white"><i class="fas fa-shopping-cart"></i></span>
                    <span class="px-3 py-2 rounded-pill text-dark bg-light">2</span>
                </a>
            </form>
        </div>
    </nav>
    <!-- !Primary Navigation -->

</header>