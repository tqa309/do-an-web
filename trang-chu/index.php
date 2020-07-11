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
<section id="new-phone">
    <div class="container py-5">
        <h4 class="font-rubik font-size-20">Sản Phẩm Mới</h4>
        <hr>
        <!-- owl carousel -->
        <div class="owl-carousel owl-theme owl-loaded owl-drag"> 
          <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-552px, 0px, 0px); transition: all 0s ease 0s; width: 2141px;">
              <?php
                print_item('T2');
              ?>
          </div>
    </div>
  </div>
    </div>
</section>
<section id="new-phone">
    <div class="container py-5">
        <h4 class="font-rubik font-size-20">Samsung</h4>
        <hr>
        <!-- owl carousel -->
        <div class="owl-carousel owl-theme owl-loaded owl-drag"> 
          <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-552px, 0px, 0px); transition: all 0s ease 0s; width: 2141px;">
              <?php
                print_item('T2', 'Samsung');
              ?>
          </div>
    </div>
  </div>
    </div>
</section>
<section id="new-phone">
    <div class="container py-5">
        <h4 class="font-rubik font-size-20">Apple</h4>
        <hr>
        <!-- owl carousel -->
        <div class="owl-carousel owl-theme owl-loaded owl-drag"> 
          <div class="owl-stage-outer"><div class="owl-stage" style="transform: translate3d(-552px, 0px, 0px); transition: all 0s ease 0s; width: 2141px;">
              <?php
                print_item('T2', 'Apple');
              ?>
          </div>
    </div>
  </div>
    </div>
</section>
<br>
</main>
<?php
  include('../common/footer.php');
?>
