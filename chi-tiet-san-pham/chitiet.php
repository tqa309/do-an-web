<?php 
    include('../common/database_mysqli.php');
    if (isset($_POST['id'])) {
        $itemId = mysqli_real_escape_string($conn, $_POST['id']);
        $sql = "SELECT * FROM PRODUCT WHERE item_id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param('d', $itemId);
        $stmt->execute();
        $res = $stmt->get_result();
        $row = $res->fetch_assoc();

        $userId = '-1';
        if (isset($_SESSION['userId'])) {
            $userId = $_SESSION['userId'];
        }

        $row['item_price'] = number_format($row['item_price']);

        echo <<<EOF
            <div class="container">
                <div class="row">
                    <div class=" col-lg-6" id="SP_img"><img class="img-fluid" style="transform: scale(1);" onmouseover="this.style='transform:scale(0.95,0.95)'" onmouseout="this.style='transform:scale(1,1)'" alt="$row[item_name]" src="../$row[item_image]"></div>
                    <div class=" col-lg-6 py-5" id="SP_P">
                        <h1 class="font-baloo">Samsung Galaxy Fold </h1>
                        <small style="font-size:12px; font-style:italic"> by Samsung</small>
                        <hr class="m-0">
                        <div class="row" style="margin-top:20px">
                            <div class="col-6 col-lg-5 font-rale" style="font-size:16px;"> Giá gốc: </div>
                            <div class="col-6 col-lg-7 font-rale" style="font-size:16px;"> <strike>$row[item_price]&nbsp;₫</strike> </div>
                            <div class="col-6 col-lg-5 font-rale" style="font-size:18px;margin-top:15px">Giá khuyến mãi: </div>
                            <div class="col-6 col-lg-7 font-rale"><span class="text-danger" style="font-size:26px;">$row[item_price]&nbsp;₫</span> <br><small class="text-dark font-size-12">&nbsp;&nbsp;Bao gồm VAT 10%</small></div>
                        </div>
                        <div id="policy">
                            <div class="d-flex">
                                <div class="return text-center" style="margin-right: 3.5rem !important;">
                                    <div class="font-size-20 my-2 color-second"><span class="fas fa-retweet border p-3 rounded-pill"></span></div>
                                    <a class="font-rale font-size-16" href="#">10 ngày <br> đổi trả</a>
                                </div>
                                <div class="return text-center " style="margin-right: 3.5rem !important;">
                                    <div class="font-size-20 my-2 color-second"><span class="fas fa-truck  border p-3 rounded-pill"></span></div>
                                    <a class="font-rale font-size-16" href="#">Giao hàng <br>tận nơi</a> 
                                </div>
                                <div class="return text-center" style="margin-right: 3.5rem !important;">
                                    <div class="font-size-20 my-2 color-second"><span class="fas fa-check-double border p-3 rounded-pill"></span></div>
                                    <a class="font-rale font-size-16" href="#">Bảo hành <br>1 năm</a>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="col-12" style="margin:15px auto;"><button onclick="addToCart($userId, $row[item_id], 1)" class="btn btn-warning font-size-16 form-control">Thêm vào giỏ hàng</button></div>
                        <div class="col-12" style="margin:15px auto;"><a onclick="addToCart($userId, $row[item_id], 1)" name="product_submit" class="btn btn-danger form-control" href="../gio-hang">Mua ngay</a> </div>
                    </div>
                    <div class="col-12" id="SP_D" style="margin:2.5rem 0rem">
                        <h6 class="font-baloo" style="text-shadow: black; font-size: 24px; font-style: initial ;">Mô tả</h6>
                        <hr>
                        <p>$row[item_decription]</p>
                    </div>
                </div>
            </div>
        EOF;
    }
    