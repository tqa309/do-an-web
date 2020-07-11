<?php
  include('./cart_items.php'); 
  include('./carousel.php');
  include('../common/header.php');
?>
<main id="main-site">
        <section id="cart" class="py-3">
            <div class="container-fluid w-75">
                <h5 class="font-baloo font-size-20">Giỏ Hàng</h5>
                <div class="row">
                    <?php print_item_userId() ?>
                </div>
            </div>
        </section>
    <section id="new-phone">
        <div class="container py-5">
            <h4 class="font-rubik font-size-20">Sản Phẩm Mới</h4>
            <hr>
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
<?php
  include('../common/footer.php');
?>