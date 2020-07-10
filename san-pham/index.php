<?php
include('../trang-chu/carousel.php');
// include header.php file
include('../common/header.php');
?>
<section>
        <div class="container">
            <div class="row">
                <div class="input-group mb-3" style="margin: 20px 5px;">
                    <input type="text" class="form-control" placeholder="Từ khóa tìm kiếm" aria-label="Từ khóa tìm kiếm" aria-describedby="button-addon2" id="key">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="submit" id="s-btn">
                    <i class="fa fa-search" aria-hidden="true"></i>  Tìm kiếm                  
                </button>
                    </div>
                </div>
            </div>
            <!-- <div class="row">
                <div id="filters" class="button-group text-right font-baloo font-size-16" style="margin-left:0px;">
                    <button class="btn is-checked">Giá tăng dần</button>
                    <button class="btn">Giá giảm dần</button>                
                </div>
                <div class="col" style="float:right"><span>Sắp xếp: </span>
                <select name="gia" id="gia" onchange="SX()">
        <option value="">Mặc định</option>
        <option value="1">Giá tăng dần</option>
        <option value="2">Giá giảm dần</option>
    </select></div>
                
            </div> -->
            
            <div class="row" id="ProductList"style="min-height: 850px; margin: 20px auto;">
            </div>
            <div class="row" id="PageList">
            <ul class="pagination justify-content-end" id="Page" style="margin: 20px auto;"></ul>
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

        <script src="index.js"></script>
        <?php
// include footer.php file

// include ('_top-sale.php');
include('../common/footer.php');
?>