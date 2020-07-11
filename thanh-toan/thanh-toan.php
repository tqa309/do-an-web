
<?php
  include('../common/header.php');
  include('../common/database_mysqli.php');
?>

<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Checkout example for Bootstrap</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/checkout/">

    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/form-validation.css" rel="stylesheet">

  <body class="bg-light" data-gr-c-s-loaded="true">

    <div class="container py-3">

      <div class="row">
        <div class="col-md-5 order-md-2 mb-4">
          <h4 class="d-flex justify-content-between align-items-center mb-3">
            <span class="text-muted">Giỏ hàng của bạn</span>
    
            <?php
              $sql = "SELECT * FROM cart c join product p on c.item_id = p.item_id WHERE user_id = ?";
              $stmt = $conn->prepare($sql);
              $stmt->bind_param('d', $_SESSION['userId']);
              $stmt->execute();
              $res = $stmt->get_result();
              echo <<<EOF
                <span class="badge badge-secondary badge-pill">$res->num_rows</span>
              </h4>
              <ul class="list-group mb-3">
              EOF;
              $sum = 0;
              while ($row = $res->fetch_assoc()) {
                $sum += intval($row['item_price'] * $row['quantity']);
                $row['item_price'] = number_format(intval($row['item_price']) * intval($row['quantity']));
                echo <<<EOF
                  <li class="list-group-item d-flex justify-content-between lh-condensed">
                    <div>
                      <img width="60" src="../$row[item_image]">
                      <h6 class="my-0">$row[item_name] <small>(x$row[quantity])</small></h6>
                    </div>
                    <span class="text-muted">$row[item_price]đ</span>
                  </li>
                EOF;
              }
              $a = array();
              $a['sum'] = ($sum >= 10000000) ? $sum : $sum + 100000;
              $a['sum_num'] = number_format($a['sum']);
              if ($sum >= 10000000) {
                echo '<li class="list-group-item d-flex justify-content-between">
                  <h6 class="font-size-12 font-rale text-success py-3"><i class="fas fa-check"></i>Đơn hàng trên 10 triệu được MIỄN PHÍ vận chuyển.</h6>
                </li>';
              } else {
                echo '<li class="list-group-item d-flex justify-content-between">
                  <span>Phí vận chuyển</span>
                  <span class="text-muted">100,000đ</span>
                </li>';
              }
              echo <<<EOF
                <li class="list-group-item d-flex justify-content-between">
                  <strong>Tổng tiền (VNĐ)</strong>
                  <strong class="text-danger">$a[sum_num]đ</strong>
                </li>
              EOF;
            ?>
            
          </ul>
        </div>
        <div class="col-md-7 order-md-1">
          <h4 class="mb-3">Thông tin thanh toán</h4>
          <form action="lap-hoa-don.php" method="POST" class="needs-validation" novalidate="">
            <?php
              $sql = "SELECT * FROM user WHERE user_id = ?";
              $stmt = $conn->prepare($sql);
              $stmt->bind_param('d', $_SESSION['userId']);
              $stmt->execute();
              $res = $stmt->get_result();
              $row = $res->fetch_assoc();
              echo <<<EOF
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="lastName">Họ *</label>
                    <input type="hidden" value="$a[sum]" name="total">
                    <input type="text" class="form-control" id="lastName" name="lastName" placeholder="" value="$row[last_name]" required="">
                    <div class="invalid-feedback">
                      Họ là bắt buộc.
                    </div>
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="firstName">Tên *</label>
                    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="" value="$row[first_name]" required="">
                    <div class="invalid-feedback">
                      Tên là bắt buộc.
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="phone">Số điện thoại *</label>
                  <div class="input-group">
                    <input type="number" class="form-control" id="phone" name="phone" placeholder="0987654321" required="">
                    <div class="invalid-feedback" style="width: 100%;">
                      Số điện thoại là bắt buộc.
                    </div>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="email">Email *</label>
                  <input type="email" class="form-control" value="$row[email]" name="email" id="email" placeholder="nguyenvana@example.com" required="">
                  <div class="invalid-feedback">
                    Vui lòng nhập địa chỉ Email hợp lệ.
                  </div>
                </div>
                <div class="mb-3">
                  <label for="address">Địa chỉ *</label>
                  <input type="text" class="form-control" value="$row[address]" id="address" name="address" placeholder="Số 3, Khu phố 6, Phường Linh Trung" required="">
                  <div class="invalid-feedback">
                    Vui lòng nhập địa chỉ.
                  </div>
                </div>
              EOF;
            ?>

            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="city">Tỉnh / Thành phố *</label>
                <select class="custom-select d-block w-100" id="city" required="" name="city">
                  <option value="">Chọn...</option>
                  <option value="Hồ Chí Minh">Thành phố Hồ Chí Minh</option>
                  <option value="Đồng Nai">Đồng Nai</option>
                  <option value="Phú Yên">Phú Yên</option>
                  <option value="Bình Dương">Bình Dương</option>
                  <option value="Long An">Long An</option>
                </select>
                <div class="invalid-feedback">
                  Vui lòng chọn tỉnh, thành hợp lệ.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="district">Quận / Huyện *</label>
                <select class="custom-select d-block w-100" id="district" name="district" required="">
                  <option value="">Chọn...</option>
                  <option value="Quận 1">Quận 1</option>
                  <option value="Quận 2">Quận 2</option>
                  <option value="Quận 3">Quận 3</option>
                  <option value="Thị xã Dĩ An">Thị xã Dĩ An</option>
                  <option value="Long Thành">Long Thành</option>
                  <option value="Tuy Hòa">Tuy Hòa</option>
                  <option value="Bến Lức">Bến Lức</option>
                  <option value="Tân Trụ">Tân Trụ</option>
                </select>
                <div class="invalid-feedback">
                  Vui lòng chọn quận, huyện hợp lệ.
                </div>
              </div>
            </div>
            <hr class="mb-4">

            <h4 class="mb-3">Hình thức thanh toán</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked required="">
                <label class="custom-control-label" for="credit">Thanh toán tiền mặt khi nhận hàng</label>
              </div>
            </div>
            
            <hr class="mb-4">
            <button class="btn btn-primary btn-lg btn-block" type="submit">Xác nhận đặt hàng</button>
          </form>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/jquery-3.2.1.slim.min.js.download" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="assets/popper.min.js.download"></script>
    <script src="assets/bootstrap.min.js.download"></script>
    <script src="assets/holder.min.js.download"></script>
    <script>
      
      // Example starter JavaScript for disabling form submissions if there are invalid fields
      (function() {

        window.addEventListener('load', function() {
          // Fetch all the forms we want to apply custom Bootstrap validation styles to
          var forms = document.getElementsByClassName('needs-validation');

          // Loop over them and prevent submission
          var validation = Array.prototype.filter.call(forms, function(form) {
            form.addEventListener('submit', function(event) {
              if (form.checkValidity() === false) {
                event.preventDefault();
                event.stopPropagation();
              }
              form.classList.add('was-validated');
            }, false);
          });
        }, false);
      })();
    </script>
  
<?php
  include('../common/footer.php');
?>