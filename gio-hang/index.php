<?php
  include('./carousel.php');
  include('../common/header.php');
?>

    <!-- start #main-site -->
        <main id="main-site">

            <!-- Shopping cart section  -->
                <section id="cart" class="py-3">
                    <div class="container-fluid w-75">
                        <h5 class="font-baloo font-size-20">Shopping Cart</h5>

                        <!--  shopping cart items   -->
                            <div class="row">
                                <div class="col-sm-9">
                                    <!-- cart item -->
                                        <div class="row border-top py-3 mt-3">
                                            <div class="col-sm-2">
                                                <img src="../assets/products/samsung-galaxy-fold-black-600x600.jpg" style="height: 120px;" alt="cart1" class="img-fluid">
                                            </div>
                                            <div class="col-sm-8">
                                                <h5 class="font-baloo font-size-20">Samsung Galaxy Fold</h5>
                                                <small>by Samsung</small>
                                                <!-- product rating -->
                                                <div class="d-flex">
                                                    <div class="rating text-warning font-size-12">
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="fas fa-star"></i></span>
                                                        <span><i class="far fa-star"></i></span>
                                                      </div>
                                                      <a href="#" class="px-2 font-rale font-size-14">15 đánh giá</a>
                                                </div>
                                                <!--  !product rating-->

                                                <!-- product qty -->
                                                    <div class="qty d-flex pt-2">
                                                        <div class="d-flex font-rale w-25">
                                                            <button class="qty-up border bg-light" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                                                            <input type="text" data-id="pro1" class="qty_input border px-2 w-100 bg-light" disabled value="1" placeholder="1">
                                                            <button data-id="pro1" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                                                        </div>
                                                        <button type="submit" class="btn font-baloo text-danger px-3 border-right">Xóa</button>
                                                        <button type="submit" class="btn font-baloo text-danger">Để mua sau</button>
                                                    </div>
                                                <!-- !product qty -->

                                            </div>

                                            <div class="col-sm-2 text-right">
                                                <div class="font-size-20 text-danger font-baloo">
                                                    <span class="product_price">50,000,000đ</span>
                                                </div>
                                            </div>
                                        </div>
                                    <!-- !cart item -->
                                </div>
                                <!-- subtotal section-->
                                <div class="col-sm-3">
                                    <div class="sub-total border text-center mt-2">
                                        <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i> Đơn hàng của bạn được MIỄN PHÍ vận chuyển.</h6>
                                        <div class="border-top py-4">
                                            <h5 class="font-baloo font-size-20">Tổng đơn hàng (1 sản phẩm):&nbsp; <span class="text-danger"><span class="text-danger" id="deal-price">50,000,000đ</span> </span> </h5>
                                            <button type="submit" class="btn btn-warning mt-3">Tiến hành đặt hàng</button>
                                        </div>
                                    </div>
                                </div>
                                <!-- !subtotal section-->
                            </div>
                        <!--  !shopping cart items   -->
                    </div>
                </section>
            <!-- !Shopping cart section  -->
            <section id="new-phone">
              <div class="container py-5">
                <h4 class="font-rubik font-size-20">Sản Phẩm Mới</h4>
                <hr>
                <!-- owl carousel -->
                <div class="owl-carousel owl-theme owl-loaded owl-drag"> 
                  <div class="owl-stage-outer">
                    <div class="owl-stage" style="transform: translate3d(-552px, 0px, 0px); transition: all 0s ease 0s; width: 2141px;">
                      <?php
                        print_item('T2');
                      ?>
                    </div>
                  </div>
                </div>
              </div>
          </section>
        </main>
    <!-- !start #main-site -->
<?php
  include('../common/footer.php');
?>