<?php $server = "http://" . $_SERVER['SERVER_NAME'] . "/do-an-web/admin";
require "$path/common/functions.php";
session_start();
$username = $_SESSION['username'];
$usertype=isset($_SESSION["userType"])?$_SESSION["userType"]:"";
$link="http://" . $_SERVER['SERVER_NAME']."/do-an-web";
if ($usertype!=1) {

   header("Location:$link/404.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>SB Admin 2 - Tables</title>

    <!-- Custom fonts for this template -->
    <link href="<?php echo $server ?>/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet" />
    <!-- plugin vanillatoasts -->
    <link rel="stylesheet" href="<?php echo $server ?>/vendor/vanillatoasts/vanillatoasts.css">
    <!-- Custom styles for this template -->
    <link href="<?php echo $server ?>/css/sb-admin-2.min.css" rel="stylesheet" />
    <!-- Custom styles for this page -->
    <link href="<?php echo $server ?>/vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" />

</head>

<body id="page-top">
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="<?php echo $server ?>/">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Quản Lý Shop</div>
            </a>


            <!-- Divider -->
            <hr class="sidebar-divider" />

            <!-- Heading -->
            <div class="sidebar-heading">
                Quản lý
            </div>

            <!-- Nav Item - ManageProduct-->
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo $server ?>/quan-ly-san-pham/">
                    <i class="fas fa-fw fa-tasks"></i>
                    <span>Quản lý sản phẩm</span>
                </a>
            </li>

            <!-- Nav Item - Pages AddProduct -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="<?php echo $server ?>/them-san-pham/">
                    <i class="fas fa-fw fa-plus"></i>
                    <span>Thêm sản phẩm mới</span>
                </a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider" />

            <!-- Heading -->
            <div class="sidebar-heading">
                phần của phát
            </div>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $server ?>/quan-ly-hoa-don/">
                    <i class="fas fa-fw fa-money-bill"></i>
                    <span>Hóa đơn</span></a>
            </li>

            <!-- Nav Item - Tables -->
            <li class="nav-item">
                <a class="nav-link" href="<?php echo $server ?>/bao-cao-doanh-thu/">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Báo cáo doanh thu</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block" />

            <li class="nav-item">
                <a class="nav-link" href="../../">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Trang chủ</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>

        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">





                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-lg-inline text-gray-600 small"><?php echo $username ?></span>
                                <!-- <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60"> -->
                            </a>
                            
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <!--  <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a> -->
                      
                                <a class="dropdown-item" href="../../dang-xuat">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Đăng xuất
                                </a>
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo $link ?>" >
                                <span class="mr-2 d-lg-inline text-gray-600 small">Trang chủ</span>
                            </a>
                    </li>
                    </ul>


                </nav>
                <!-- end-of-header.php -->