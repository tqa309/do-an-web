<?php
  require_once '../common/database_pdo.php';

  function print_item_userId() {
    try {
      $i = 0;
      $sum = 0;
      if (isset($_SESSION['userId'])) {
        $sql = "SELECT * FROM cart c join product p on c.item_id = p.item_id where user_id = :userId";
        $stmt = $GLOBALS['conn']->prepare($sql);
        if (isset($_SESSION['userId'])) {
          $userId = $_SESSION['userId'];
        } else {
          $userId = '-1';
        }
        $stmt->execute(array(
          ':userId' => $userId
        ));
        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo '<div class="col-xl-9 ">';
        foreach ($res as $row) {
          $i += intval($row['quantity']);
          $sum += intval($row['item_price']) * intval($row['quantity']);
          $price = number_format($row['item_price']);
          $ratings = rand(10,250);
          echo <<<EOF
            <div class="row border-top py-3 mt-3">
              <div class="col-xl-2 col-md-3">
              <a href="../chi-tiet-san-pham/?id=$row[item_id]"><img src="../$row[item_image]" style="height: 120px;" alt="cart1" class="img-fluid"></a>
              </div>
              <div class="col-xl-8 col-md-9">
                  <h5 class="font-baloo font-size-20">$row[item_name]</h5>
                  <div class="d-flex">
                      <div class="rating text-warning font-size-12">
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="far fa-star"></i></span>
                        </div>
                        <a href="#" class="px-2 font-rale font-size-14">$ratings đánh giá</a>
                  </div>
                      <div class="qty d-flex pt-2">
                          <div class="d-flex font-rale w-25">
                              <button class="qty-up border bg-light" onclick="addToCartReload($userId, $row[item_id], 1)" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                              <input style="min-width: 30px" type="text" data-id="pro1" class="qty_input border px-2 w-100 bg-light" disabled value="$row[quantity]" placeholder="1">
                              <button data-id="pro1" onclick="addToCartReload($userId, $row[item_id], -1)" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                          </div>
                          <button onclick="addToCartReload($userId, $row[item_id], -$row[quantity])" class="btn font-baloo text-danger px-3 ml-3">Xóa</button>
                      </div>
              </div>
              <div class="col-xl-2 col-md text-right">
                  <div class="font-size-20 text-danger font-baloo">
                      <span class="product_price">$price đ</span>
                  </div>
              </div>
            </div>
          EOF;
        }
      } elseif (isset($_COOKIE['user'])) {
        $cart = unserialize($_COOKIE['user']);
        $itemArray = array_column($cart, 'itemId');
        $quantityArray = array_column($cart, 'quantity');
        $res = array();
        for ($j = 0; $j < count($itemArray); $j++) {
          $sql = "SELECT item_id, item_price, item_name, item_image FROM product WHERE item_id = :itemId";
          $stmt = $GLOBALS['conn']->prepare($sql);
          $stmt->execute(array(
            ':itemId' => $itemArray[$j]
          ));
          $res_item = $stmt->fetch(PDO::FETCH_ASSOC);
          $res_item['quantity'] = $quantityArray[$j];
          $res[] = $res_item;
          
        }
        
        echo '<div class="col-xl-9 ">';
        foreach ($res as $row) {
          $userId = '-1';
          $i += intval($row['quantity']);
          $sum += intval($row['item_price']) * intval($row['quantity']);
          $price = number_format($row['item_price']);
          $ratings = rand(10,250);
          echo <<<EOF
            <div class="row border-top py-3 mt-3">
              <div class="col-xl-2 col-md-3">
              <a href="../chi-tiet-san-pham/?id=$row[item_id]"><img src="../$row[item_image]" style="height: 120px;" alt="cart1" class="img-fluid"></a>
              </div>
              <div class="col-xl-8 col-md-9">
                  <h5 class="font-baloo font-size-20">$row[item_name]</h5>
                  <div class="d-flex">
                      <div class="rating text-warning font-size-12">
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="fas fa-star"></i></span>
                          <span><i class="far fa-star"></i></span>
                        </div>
                        <a href="#" class="px-2 font-rale font-size-14">$ratings đánh giá</a>
                  </div>
                      <div class="qty d-flex pt-2">
                          <div class="d-flex font-rale w-25">
                              <button class="qty-up border bg-light" onclick="addToCartReload($userId, $row[item_id], 1)" data-id="pro1"><i class="fas fa-angle-up"></i></button>
                              <input style="min-width: 30px" type="text" data-id="pro1" class="qty_input border px-2 w-100 bg-light" disabled value="$row[quantity]" placeholder="1">
                              <button data-id="pro1" onclick="addToCartReload($userId, $row[item_id], -1)" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>
                          </div>
                          <button onclick="addToCartReload($userId, $row[item_id], -$row[quantity])" class="btn font-baloo text-danger px-3 ml-3">Xóa</button>
                      </div>
              </div>
              <div class="col-xl-2 col-md text-right">
                  <div class="font-size-20 text-danger font-baloo">
                      <span class="product_price">$price đ</span>
                  </div>
              </div>
            </div>
          EOF;
        }
      } else {
        echo '<div class="col-xl-9 ">';
      }
      
      if ($i == 0) {
        echo <<<EOF
          <div class="col-sm-12 text-center py-2">
            <img class="img-fluid" style="height: 200px;" alt="Empty Cart" src="../assets/empty_cart.png">
            <p class="font-baloo font-size-16 text-black-50">Bạn chưa có sản phẩm</p>
          </div>
        </div>
          <div class="col-xl-3">
            <div class="sub-total border text-center mt-2">
                <div class="py-4">
                    <h5 class="font-baloo font-size-20">Tổng đơn hàng ($i sản phẩm):&nbsp; <span class="text-danger"><span class="text-danger" id="deal-price">$sum đ</span> </span> </h5>
                    <a href="../trang-chu" role="button" type="submit" class="btn btn-warning mt-3">Tiếp tục mua hàng</a>
                </div>
            </div>
          </div>
        EOF;
      }
      else {
        $money = number_format($sum);
        echo <<<EOF
        </div>
          <div class="col-xl-3">
            <div class="sub-total border text-center mt-2">
        EOF;
        if ($sum >= 10000000) {
          echo '<h6 class="border-bottom font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i> Đơn hàng của bạn được MIỄN PHÍ vận chuyển.</h6>';
        } else {
          echo '<h6 class="border-bottom font-size-12 font-rale text-warning py-3"><i class="far fa-bell"></i> Đơn hàng trên 10,000,000đ sẽ được miễn phí vận chuyển.</h6>';
        }
        echo <<<EOF
                <div class="py-4">
                    <h5 class="font-baloo font-size-20">Tổng đơn hàng ($i sản phẩm):&nbsp; <span class="text-danger"><span class="text-danger" id="deal-price">$money đ</span> </span> </h5>
                    <a href="../thanh-toan" role="button" type="submit" class="btn btn-success text-white mt-3">Tiến hành đặt hàng</a>
                </div>
            </div>
          </div>
        EOF;
      }
    } catch (PDOException $e) {
      print $e->getMessage();
    }
  }