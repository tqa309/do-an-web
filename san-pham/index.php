<?php
include('../trang-chu/carousel.php');
// include header.php file
include('../common/header.php');
?>
<style>
    select {
        padding: 5px;
        border-radius: 5px;
    }
    .filter-el {
        margin: 10px 10px;
    }
</style>
<main>
<section>
        <div class="container">
            <div>
                <div class="row mt-5">
                    <div class="row col-lg-3 col-md-4 col-sm-6 filter-el">
                        <div class="">
                            <nav class="">Tìm thấy <?php include('count.php')?> kết quả<?php if (isset($_GET['key']) && $_GET['key'] != "") echo ' cho "<span id="key">' . $_GET['key']. '</span>"'?></nav>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-4 col-sm-6">
                        <form id="filter" method="get">
                            <div class="form-group row filter-el">
                                <label class="mr-2">Sắp xếp theo: </label>
                                <select id="orderby" name="orderby">
                                    <option value="price">Giá thấp đến cao</option>
                                    <option value="price-desc">Giá cao xuống thấp</option>
                                    <option value="date">Mới nhất</option>
                                </select>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            
            <div class="row" id="ProductList"style="min-height: 850px; margin: 20px auto;">

            </div>
            <div class="row" id="PageList">
            <ul class="pagination justify-content-end" id="Page" style="margin: 20px auto;"></ul>
            </div>
        </div>
</section>

<script src="index.js"></script>
</main>
        
        <?php
// include footer.php file

// include ('_top-sale.php');
include('../common/footer.php');
?>