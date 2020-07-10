<?php
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
                        <form class="" method="get">
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
        <script>
            $(document).ready(function() {
                $('#orderby').change(function() {
                    var formData = $(this).serialize();
                    formData += '&page=0&key=' + $('#key').text();
                    console.log(formData);
                    $.ajax({
                        type: 'post',
                        data: formData,
                        url: 'ProductList.php',
                        dataType: 'json',
                        success: function(response) {
                            var html = "";
                            if (response.length == 0) {
                                html += `<span style = "margin: auto;">Không có Sản phẩm phù hợp</span>`;
                            } else {
                                for (value of response) {
                                    let price = Number(value.Price).toLocaleString('de-DE', {
                                        style: 'currency',
                                        currency: 'VND',
                                    });
                                    html += `<div class="col-lg-3 col-md-4 col-sm-6" >`;
                                    html += '<div class = "item py-2" style = "margin: auto; max-width: 250px;margin-bottom:20px;margin-top:0px; ">';
                                    html += '<div class = "product font-rale ">';
                                    html += `<a href="../chi-tiet-san-pham/?id=${value.ID}"><img src="../${value.img} " alt="${value.Name}" class="img-fluid " onMouseOver="this.style='transform:scale(1.15,1.15)'" onMouseOut="this.style='transform:scale(1,1)'"></a>`;
                                    html += `<div class="text-center " > <h6 style="margin-top: 25px;">${value.Name}</h6>`;
                                    html += `<div class="price py-2 "><span style="font-size:20px;color:red;">${price}</span></div><button name="top_sale_submit" class="btn btn-warning font-size-12" type="submit">Add to Cart</button></div> </div> </div></div>`;
                                }
                            }
                            $('#ProductList').html(html);
                        }
                    })
                });
            })
        </script>
        <?php
// include footer.php file

// include ('_top-sale.php');
include('../common/footer.php');
?>