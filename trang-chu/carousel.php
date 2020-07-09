<?php
  $host = 'localhost:3306';
  $dbname = 'shopee';
  $user = 'root';
  $pass = '';

  $conn = new PDO("mysql:host=$host; dbname=$dbname", $user, $pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


  function print_item($active, $table) {
    try {
      $sql = "SELECT * FROM $table";
      $stmt = $GLOBALS['conn']->prepare($sql);
      $stmt->execute();
      $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

      foreach ($res as $row) {
        echo <<<EOF
        <div class="owl-item" style="width: 222px;"><div class="item py-2">
            <div class="product font-rale">
                <a href="product.php?item_id=$row[item_id]"><img src=".$row[item_image]" alt="product$row[item_id]" class="img-fluid"></a>
                <div class="text-center">
                    <h6>$row[item_name]</h6>
                    <div class="rating text-warning font-size-12">
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="fas fa-star"></i></span>
                        <span><i class="far fa-star"></i></span>
                    </div>
                    <div class="price py-2">
                        <span>$$row[item_price]</span>
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
