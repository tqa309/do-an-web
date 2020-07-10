<?php
// include header.php file
include('../common/header.php');
?>
<section>
        <div class="container">
            <div class="row">
                <div class="input-group mb-3" style="margin: 20px 5px;">
                    <input type="text" class="form-control" placeholder="Từ khóa tìm kiếm" aria-label="Từ khóa tìm kiếm" aria-describedby="button-addon2" id="key">
                    <div class="input-group-append">
                        <button class="btn btn-outline-secondary" type="button" id="s-btn">
                    <i class="fa fa-search" aria-hidden="true"></i>  Tìm kiếm                  
                </button>
                    </div>
                </div>
            </div>
            <!-- <div class="row">
                <div id="filters" class="button-group text-right font-baloo font-size-16" style="margin-left:0px;">
                    <button class="btn is-checked" style="float:right;">Giá tăng dần</button>
                    <button class="btn" style="float:right;">Giá giảm dần</button>
                </div>
            </div> -->
            
            <div class="row" id="ProductList"style="min-height: 850px; margin: 20px auto;">
            </div>
            <div class="row" id="PageList">
            <ul class="pagination justify-content-end" id="Page" style="margin: 20px auto;"></ul>
            </div>
        </div>
</section>

        <script src="index.js"></script>
        <?php
// include footer.php file

// include ('_top-sale.php');
include('../common/footer.php');
?>