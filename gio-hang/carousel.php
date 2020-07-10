<?php
  $host = 'localhost:3306';
  $dbname = 'shopee';
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

      foreach ($res as $row) {
        $price = number_format($row['item_price']);
        echo <<<EOF
        <div class="owl-item"><div class="item py-2">
            <div class="product font-rale">
                <a href="product.php?item_id=$row[item_id]"><img src="../$row[item_image]" alt="product$row[item_id]" class="img-fluid"></a>
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
                    <form method="post">
                        <input type="hidden" name="item_id" value="$row[item_id]">
                        <input type="hidden" name="user_id" value="1">
                        <button type="submit" name="top_sale_submit" class="btn btn-warning font-size-12">Add to Cart</button>
                    </form>
                </div>
            </div>
        </div></div>
        EOF;
      }
    } catch (PDOException $e) {
      print $e->getMessage();
    }
  }
