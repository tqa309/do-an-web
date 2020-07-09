<?php
  include('carousel.php');
  include('../common/header.php');
?>


<!-- !start #header -->

<!-- start #main-site -->
<main id="main-site">
<!-- Owl-carousel -->
<section id="banner-area">
    <div class="owl-carousel owl-theme owl-loaded owl-drag">
        
        
        
    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1126px;"><div class="owl-item active" style="width: 375.2px;"><div class="item">
            <img src="../assets/Banner1.png" alt="Banner1">
        </div></div><div class="owl-item" style="width: 375.2px;"><div class="item">
            <img src="../assets/Banner2.png" alt="Banner2">
        </div></div><div class="owl-item" style="width: 375.2px;"><div class="item">
            <img src="../assets/Banner1.png" alt="Banner3">
        </div></div></div></div><div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div></div>
</section>
<!-- !Owl-carousel -->
<!-- Top Sale -->
<section id="top-sale">
    <div class="container py-5">
        <h4 class="font-rubik font-size-20">Top Sale</h4>
        <hr>
        <!-- owl carousel -->
        <div class="owl-carousel owl-theme owl-loaded owl-drag"> 
          <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-552px, 0px, 0px); transition: all 0s ease 0s; width: 2141px;">
              <?php
                print_item(5, 'product');
              ?>
          </div>
    </div>
  </div>
    </div>
</section>
<!-- !Top Sale --><!-- Special Price -->
<section id="special-price">
    <div class="container">
        <h4 class="font-rubik font-size-20">Special Price</h4>
        <div id="filters" class="button-group text-right font-baloo font-size-16">
            <button class="btn is-checked" data-filter="*">All Brand</button>
            <button class="btn" data-filter=".123">123</button><button class="btn" data-filter=".Apple">Apple</button><button class="btn" data-filter=".Redmi">Redmi</button><button class="btn" data-filter=".Samsung">Samsung</button><button class="btn" data-filter=".ngon">ngon</button>        </div>

        <div class="grid" style="position: relative; height: 4906.87px;">
                        <div class="grid-item border Redmi" style="position: absolute; left: 0px; top: 0px;">
                <div class="item py-2" style="width: 200px;">
                    <div class="product font-rale">
                        <a href="product.php?item_id=3"><img src="../assets/products/3.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Redmi Note 6</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$122.00</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="3">
                                <input type="hidden" name="user_id" value="1">
                                <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button></form>
                        </div>
                    </div>
                </div>
            </div>
                        <div class="grid-item border Redmi" style="position: absolute; left: 0px; top: 350.4px;">
                <div class="item py-2" style="width: 200px;">
                    <div class="product font-rale">
                        <a href="product.php?item_id=7"><img src="../assets/products/8.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Redmi Note 9</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$122.00</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="7">
                                <input type="hidden" name="user_id" value="1">
                                <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>                            </form>
                        </div>
                    </div>
                </div>
            </div>
                        <div class="grid-item border Redmi" style="position: absolute; left: 0px; top: 700.8px;">
                <div class="item py-2" style="width: 200px;">
                    <div class="product font-rale">
                        <a href="product.php?item_id=6"><img src="../assets/products/6.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Redmi Note 8</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$122.00</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="6">
                                <input type="hidden" name="user_id" value="1">
                                <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>                            </form>
                        </div>
                    </div>
                </div>
            </div>
                        <div class="grid-item border Samsung" style="position: absolute; left: 0px; top: 1051.2px;">
                <div class="item py-2" style="width: 200px;">
                    <div class="product font-rale">
                        <a href="product.php?item_id=9"><img src="../assets/products/11.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Samsung Galaxy S6</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$152.00</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="9">
                                <input type="hidden" name="user_id" value="1">
                                <button type="submit" disabled="" class="btn btn-success font-size-12">In the Cart</button>                            </form>
                        </div>
                    </div>
                </div>
            </div>
                        <div class="grid-item border Apple" style="position: absolute; left: 0px; top: 1401.6px;">
                <div class="item py-2" style="width: 200px;">
                    <div class="product font-rale">
                        <a href="product.php?item_id=13"><img src="../assets/products/15.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Apple iPhone 7</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$152.00</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="13">
                                <input type="hidden" name="user_id" value="1">
                                <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>                            </form>
                        </div>
                    </div>
                </div>
            </div>
                        <div class="grid-item border Redmi" style="position: absolute; left: 0px; top: 1752px;">
                <div class="item py-2" style="width: 200px;">
                    <div class="product font-rale">
                        <a href="product.php?item_id=8"><img src="../assets/products/10.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Redmi Note</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$122.00</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="8">
                                <input type="hidden" name="user_id" value="1">
                                <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>                            </form>
                        </div>
                    </div>
                </div>
            </div>
                        <div class="grid-item border Samsung" style="position: absolute; left: 0px; top: 2102.4px;">
                <div class="item py-2" style="width: 200px;">
                    <div class="product font-rale">
                        <a href="product.php?item_id=1"><img src="../assets/products/1.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Samsung Galaxy 10</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$152.00</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="1">
                                <input type="hidden" name="user_id" value="1">
                                <button type="submit" disabled="" class="btn btn-success font-size-12">In the Cart</button>                            </form>
                        </div>
                    </div>
                </div>
            </div>
                        <div class="grid-item border Redmi" style="position: absolute; left: 0px; top: 2452.8px;">
                <div class="item py-2" style="width: 200px;">
                    <div class="product font-rale">
                        <a href="product.php?item_id=5"><img src="../assets/products/5.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Redmi Note 4</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$122.00</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="5">
                                <input type="hidden" name="user_id" value="1">
                                <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>                            </form>
                        </div>
                    </div>
                </div>
            </div>
                        <div class="grid-item border Redmi" style="position: absolute; left: 0px; top: 2803.2px;">
                <div class="item py-2" style="width: 200px;">
                    <div class="product font-rale">
                        <a href="product.php?item_id=2"><img src="../assets/products/2.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Redmi Note 7</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$122.00</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="2">
                                <input type="hidden" name="user_id" value="1">
                                <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>                            </form>
                        </div>
                    </div>
                </div>
            </div>
                        <div class="grid-item border Apple" style="position: absolute; left: 0px; top: 3153.6px;">
                <div class="item py-2" style="width: 200px;">
                    <div class="product font-rale">
                        <a href="product.php?item_id=12"><img src="../assets/products/14.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Apple iPhone 6</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$152.00</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="12">
                                <input type="hidden" name="user_id" value="1">
                                <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>                            </form>
                        </div>
                    </div>
                </div>
            </div>
                        <div class="grid-item border ngon" style="position: absolute; left: 0px; top: 3504px;">
                <div class="item py-2" style="width: 200px;">
                    <div class="product font-rale">
                        <a href="product.php?item_id=40"><img src="../assets/products/105705847_271862984041079_5754881365820370185_n.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>hmmm</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$99999999.99</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="40">
                                <input type="hidden" name="user_id" value="1">
                                <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>                            </form>
                        </div>
                    </div>
                </div>
            </div>
                        <div class="grid-item border Samsung" style="position: absolute; left: 0px; top: 3679.84px;">
                <div class="item py-2" style="width: 200px;">
                    <div class="product font-rale">
                        <a href="product.php?item_id=10"><img src="../assets/products/12.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Samsung Galaxy S7</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$152.00</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="10">
                                <input type="hidden" name="user_id" value="1">
                                <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>                            </form>
                        </div>
                    </div>
                </div>
            </div>
                        <div class="grid-item border Redmi" style="position: absolute; left: 0px; top: 4030.24px;">
                <div class="item py-2" style="width: 200px;">
                    <div class="product font-rale">
                        <a href="product.php?item_id=4"><img src="../assets/products/4.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Redmi Note 5</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$122.00</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="4">
                                <input type="hidden" name="user_id" value="1">
                                <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>                            </form>
                        </div>
                    </div>
                </div>
            </div>
                        <div class="grid-item border 123" style="position: absolute; left: 0px; top: 4380.64px;">
                <div class="item py-2" style="width: 200px;">
                    <div class="product font-rale">
                        <a href="product.php?item_id=41"><img src="../assets/products/1463478.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>123</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$123.00</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="41">
                                <input type="hidden" name="user_id" value="1">
                                <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>                            </form>
                        </div>
                    </div>
                </div>
            </div>
                        <div class="grid-item border Apple" style="position: absolute; left: 0px; top: 4556.47px;">
                <div class="item py-2" style="width: 200px;">
                    <div class="product font-rale">
                        <a href="product.php?item_id=11"><img src="../assets/products/13.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Apple iPhone 5</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$152.00</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="11">
                                <input type="hidden" name="user_id" value="1">
                                <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>                            </form>
                        </div>
                    </div>
                </div>
            </div>
                    </div>
    </div>
</section>
<!-- !Special Price -->
<!-- Banner Ads  -->
<section id="banner_adds">
    <div class="container py-5 text-center">
        <img src="../assets/banner1-cr-500x150.jpg" alt="banner1" class="img-fluid">
        <img src="../assets/banner2-cr-500x150.jpg" alt="banner1" class="img-fluid">
    </div>
</section>
<!-- !Banner Ads  -->
<!-- New Phones -->
<section id="new-phones">
    <div class="container">
        <h4 class="font-rubik font-size-20">New Phones</h4>
        <hr>

        <!-- owl carousel -->
        <div class="owl-carousel owl-theme owl-loaded owl-drag">
                    <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-552px, 0px, 0px); transition: all 0s ease 0s; width: 2141px;"><div class="owl-item cloned" style="width: 69.04px;"><div class="item py-2 bg-light">
                    <div class="product font-rale">
                        <a href="product.php?item_id=5"><img src="../assets/products/5.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Redmi Note 4</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$122.00</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="5">
                                <input type="hidden" name="user_id" value="1">
                                <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>                            </form>
                        </div>
                    </div>
                </div></div><div class="owl-item cloned" style="width: 69.04px;"><div class="item py-2 bg-light">
                    <div class="product font-rale">
                        <a href="product.php?item_id=2"><img src="../assets/products/2.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Redmi Note 7</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$122.00</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="2">
                                <input type="hidden" name="user_id" value="1">
                                <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>                            </form>
                        </div>
                    </div>
                </div></div><div class="owl-item cloned" style="width: 69.04px;"><div class="item py-2 bg-light">
                    <div class="product font-rale">
                        <a href="product.php?item_id=13"><img src="../assets/products/15.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Apple iPhone 7</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$152.00</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="13">
                                <input type="hidden" name="user_id" value="1">
                                <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>                            </form>
                        </div>
                    </div>
                </div></div><div class="owl-item cloned" style="width: 69.04px;"><div class="item py-2 bg-light">
                    <div class="product font-rale">
                        <a href="product.php?item_id=4"><img src="../assets/products/4.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Redmi Note 5</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$122.00</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="4">
                                <input type="hidden" name="user_id" value="1">
                                <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>                            </form>
                        </div>
                    </div>
                </div></div><div class="owl-item cloned" style="width: 69.04px;"><div class="item py-2 bg-light">
                    <div class="product font-rale">
                        <a href="product.php?item_id=41"><img src="../assets/products/1463478.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>123</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$123.00</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="41">
                                <input type="hidden" name="user_id" value="1">
                                <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>                            </form>
                        </div>
                    </div>
                </div></div><div class="owl-item cloned" style="width: 69.04px;"><div class="item py-2 bg-light">
                    <div class="product font-rale">
                        <a href="product.php?item_id=3"><img src="../assets/products/3.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Redmi Note 6</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$122.00</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="3">
                                <input type="hidden" name="user_id" value="1">
                                <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>                            </form>
                        </div>
                    </div>
                </div></div><div class="owl-item cloned" style="width: 69.04px;"><div class="item py-2 bg-light">
                    <div class="product font-rale">
                        <a href="product.php?item_id=9"><img src="../assets/products/11.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Samsung Galaxy S6</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$152.00</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="9">
                                <input type="hidden" name="user_id" value="1">
                                <button type="submit" disabled="" class="btn btn-success font-size-12">In the Cart</button>                            </form>
                        </div>
                    </div>
                </div></div><div class="owl-item cloned" style="width: 69.04px;"><div class="item py-2 bg-light">
                    <div class="product font-rale">
                        <a href="product.php?item_id=7"><img src="../assets/products/8.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Redmi Note 9</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$122.00</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="7">
                                <input type="hidden" name="user_id" value="1">
                                <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>                            </form>
                        </div>
                    </div>
                </div></div><div class="owl-item active" style="width: 69.04px;"><div class="item py-2 bg-light">
                    <div class="product font-rale">
                        <a href="product.php?item_id=12"><img src="../assets/products/14.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Apple iPhone 6</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$152.00</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="12">
                                <input type="hidden" name="user_id" value="1">
                                <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>                            </form>
                        </div>
                    </div>
                </div></div><div class="owl-item active" style="width: 69.04px;"><div class="item py-2 bg-light">
                    <div class="product font-rale">
                        <a href="product.php?item_id=10"><img src="../assets/products/12.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Samsung Galaxy S7</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$152.00</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="10">
                                <input type="hidden" name="user_id" value="1">
                                <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>                            </form>
                        </div>
                    </div>
                </div></div><div class="owl-item active" style="width: 69.04px;"><div class="item py-2 bg-light">
                    <div class="product font-rale">
                        <a href="product.php?item_id=6"><img src="../assets/products/6.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Redmi Note 8</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$122.00</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="6">
                                <input type="hidden" name="user_id" value="1">
                                <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>                            </form>
                        </div>
                    </div>
                </div></div><div class="owl-item active" style="width: 69.04px;"><div class="item py-2 bg-light">
                    <div class="product font-rale">
                        <a href="product.php?item_id=40"><img src="../assets/products/105705847_271862984041079_5754881365820370185_n.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>hmmm</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$99999999.99</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="40">
                                <input type="hidden" name="user_id" value="1">
                                <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>                            </form>
                        </div>
                    </div>
                </div></div><div class="owl-item active" style="width: 69.04px;"><div class="item py-2 bg-light">
                    <div class="product font-rale">
                        <a href="product.php?item_id=8"><img src="../assets/products/10.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Redmi Note</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$122.00</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="8">
                                <input type="hidden" name="user_id" value="1">
                                <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>                            </form>
                        </div>
                    </div>
                </div></div><div class="owl-item" style="width: 69.04px;"><div class="item py-2 bg-light">
                    <div class="product font-rale">
                        <a href="product.php?item_id=1"><img src="../assets/products/1.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Samsung Galaxy 10</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$152.00</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="1">
                                <input type="hidden" name="user_id" value="1">
                                <button type="submit" disabled="" class="btn btn-success font-size-12">In the Cart</button>                            </form>
                        </div>
                    </div>
                </div></div><div class="owl-item" style="width: 69.04px;"><div class="item py-2 bg-light">
                    <div class="product font-rale">
                        <a href="product.php?item_id=11"><img src="../assets/products/13.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Apple iPhone 5</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$152.00</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="11">
                                <input type="hidden" name="user_id" value="1">
                                <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>                            </form>
                        </div>
                    </div>
                </div></div><div class="owl-item" style="width: 69.04px;"><div class="item py-2 bg-light">
                    <div class="product font-rale">
                        <a href="product.php?item_id=5"><img src="../assets/products/5.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Redmi Note 4</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$122.00</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="5">
                                <input type="hidden" name="user_id" value="1">
                                <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>                            </form>
                        </div>
                    </div>
                </div></div><div class="owl-item" style="width: 69.04px;"><div class="item py-2 bg-light">
                    <div class="product font-rale">
                        <a href="product.php?item_id=2"><img src="../assets/products/2.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Redmi Note 7</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$122.00</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="2">
                                <input type="hidden" name="user_id" value="1">
                                <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>                            </form>
                        </div>
                    </div>
                </div></div><div class="owl-item" style="width: 69.04px;"><div class="item py-2 bg-light">
                    <div class="product font-rale">
                        <a href="product.php?item_id=13"><img src="../assets/products/15.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Apple iPhone 7</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$152.00</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="13">
                                <input type="hidden" name="user_id" value="1">
                                <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>                            </form>
                        </div>
                    </div>
                </div></div><div class="owl-item" style="width: 69.04px;"><div class="item py-2 bg-light">
                    <div class="product font-rale">
                        <a href="product.php?item_id=4"><img src="../assets/products/4.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Redmi Note 5</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$122.00</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="4">
                                <input type="hidden" name="user_id" value="1">
                                <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>                            </form>
                        </div>
                    </div>
                </div></div><div class="owl-item" style="width: 69.04px;"><div class="item py-2 bg-light">
                    <div class="product font-rale">
                        <a href="product.php?item_id=41"><img src="../assets/products/1463478.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>123</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$123.00</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="41">
                                <input type="hidden" name="user_id" value="1">
                                <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>                            </form>
                        </div>
                    </div>
                </div></div><div class="owl-item" style="width: 69.04px;"><div class="item py-2 bg-light">
                    <div class="product font-rale">
                        <a href="product.php?item_id=3"><img src="../assets/products/3.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Redmi Note 6</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$122.00</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="3">
                                <input type="hidden" name="user_id" value="1">
                                <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>                            </form>
                        </div>
                    </div>
                </div></div><div class="owl-item" style="width: 69.04px;"><div class="item py-2 bg-light">
                    <div class="product font-rale">
                        <a href="product.php?item_id=9"><img src="../assets/products/11.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Samsung Galaxy S6</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$152.00</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="9">
                                <input type="hidden" name="user_id" value="1">
                                <button type="submit" disabled="" class="btn btn-success font-size-12">In the Cart</button>                            </form>
                        </div>
                    </div>
                </div></div><div class="owl-item" style="width: 69.04px;"><div class="item py-2 bg-light">
                    <div class="product font-rale">
                        <a href="product.php?item_id=7"><img src="../assets/products/8.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Redmi Note 9</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$122.00</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="7">
                                <input type="hidden" name="user_id" value="1">
                                <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>                            </form>
                        </div>
                    </div>
                </div></div><div class="owl-item cloned" style="width: 69.04px;"><div class="item py-2 bg-light">
                    <div class="product font-rale">
                        <a href="product.php?item_id=12"><img src="../assets/products/14.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Apple iPhone 6</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$152.00</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="12">
                                <input type="hidden" name="user_id" value="1">
                                <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>                            </form>
                        </div>
                    </div>
                </div></div><div class="owl-item cloned" style="width: 69.04px;"><div class="item py-2 bg-light">
                    <div class="product font-rale">
                        <a href="product.php?item_id=10"><img src="../assets/products/12.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Samsung Galaxy S7</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$152.00</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="10">
                                <input type="hidden" name="user_id" value="1">
                                <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>                            </form>
                        </div>
                    </div>
                </div></div><div class="owl-item cloned" style="width: 69.04px;"><div class="item py-2 bg-light">
                    <div class="product font-rale">
                        <a href="product.php?item_id=6"><img src="../assets/products/6.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Redmi Note 8</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$122.00</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="6">
                                <input type="hidden" name="user_id" value="1">
                                <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>                            </form>
                        </div>
                    </div>
                </div></div><div class="owl-item cloned" style="width: 69.04px;"><div class="item py-2 bg-light">
                    <div class="product font-rale">
                        <a href="product.php?item_id=40"><img src="../assets/products/105705847_271862984041079_5754881365820370185_n.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>hmmm</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$99999999.99</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="40">
                                <input type="hidden" name="user_id" value="1">
                                <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>                            </form>
                        </div>
                    </div>
                </div></div><div class="owl-item cloned" style="width: 69.04px;"><div class="item py-2 bg-light">
                    <div class="product font-rale">
                        <a href="product.php?item_id=8"><img src="../assets/products/10.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Redmi Note</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$122.00</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="8">
                                <input type="hidden" name="user_id" value="1">
                                <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>                            </form>
                        </div>
                    </div>
                </div></div><div class="owl-item cloned" style="width: 69.04px;"><div class="item py-2 bg-light">
                    <div class="product font-rale">
                        <a href="product.php?item_id=1"><img src="../assets/products/1.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Samsung Galaxy 10</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$152.00</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="1">
                                <input type="hidden" name="user_id" value="1">
                                <button type="submit" disabled="" class="btn btn-success font-size-12">In the Cart</button>                            </form>
                        </div>
                    </div>
                </div></div><div class="owl-item cloned" style="width: 69.04px;"><div class="item py-2 bg-light">
                    <div class="product font-rale">
                        <a href="product.php?item_id=11"><img src="../assets/products/13.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Apple iPhone 5</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$152.00</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="11">
                                <input type="hidden" name="user_id" value="1">
                                <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>                            </form>
                        </div>
                    </div>
                </div></div><div class="owl-item cloned" style="width: 69.04px;"><div class="item py-2 bg-light">
                    <div class="product font-rale">
                        <a href="product.php?item_id=5"><img src="../assets/products/5.png" alt="product1" class="img-fluid"></a>
                        <div class="text-center">
                            <h6>Redmi Note 4</h6>
                            <div class="rating text-warning font-size-12">
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="fas fa-star"></i></span>
                                <span><i class="far fa-star"></i></span>
                            </div>
                            <div class="price py-2">
                                <span>$122.00</span>
                            </div>
                            <form method="post">
                                <input type="hidden" name="item_id" value="5">
                                <input type="hidden" name="user_id" value="1">
                                <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>                            </form>
                        </div>
                    </div>

    </div>
</section>
<!-- !New Phones -->
<br>
</main>
<!-- !start #main-site -->
<?php
  include('../common/footer.php');
?>
