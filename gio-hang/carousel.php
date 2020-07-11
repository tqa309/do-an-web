<?php
  $host = 'localhost';
  $dbname = 'tymobile';
  $user = 'root';
  $pass = '';

  $conn = new PDO("mysql:host=$host; dbname=$dbname", $user, $pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


  function print_item($type, $brand="") {
    try {
      $sql = "SELECT * FROM product p join item_type_detail t on p.item_id = t.item_id where id_type = :itemType";
      if ($brand != "") {
        $sql = "SELECT * FROM product p where item_brand = :itemBrand";
      }
      $stmt = $GLOBALS['conn']->prepare($sql);
      if ($brand != "") {
        $stmt->execute(array(
          ':itemBrand' => $brand
        ));
      } else {
        $stmt->execute(array(
          ':itemType' => $type
        ));
      }
      $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

      $userId = '-1';
      if (isset($_SESSION['userId'])) {
        $userId = $_SESSION['userId'];
      }

      foreach ($res as $row) {
        $price = number_format($row['item_price']);
        echo <<<EOF
        <div class="owl-item"><div class="item py-2">
            <div class="product font-rale">
                <a href="../chi-tiet-san-pham/?id=$row[item_id]"><img src="../$row[item_image]" alt="product$row[item_id]" class="img-fluid"></a>
                <div class="text-center">
                    <h6 style="margin-top: 15px">$row[item_name]</h6>
                    <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <div class="price py-2">
                        <span>$price đ</span>
                    </div>
                    <button type="submit" name="top_sale_submit" onclick="addToCartReload($userId, $row[item_id], 1)"class="btn btn-warning font-size-12">Thêm vào giỏ</button>
                </div>
            </div>
        </div></div>
        EOF;
      }
    } catch (PDOException $e) {
      print $e->getMessage();
    }
  }
