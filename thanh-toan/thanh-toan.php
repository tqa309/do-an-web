
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
            <span class="badge badge-secondary badge-pill">2</span>
          </h4>
          <ul class="list-group mb-3">
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">iPhone 11 Pro Max 512GB</h6>
              </div>
              <span class="text-muted">39,990,000 đ</span>
            </li>
            <li class="list-group-item d-flex justify-content-between lh-condensed">
              <div>
                <h6 class="my-0">Samsung Galaxy Note 10</h6>
              </div>
              <span class="text-muted">15,990,000 đ</span>
            </li>
            <li class="list-group-item d-flex justify-content-between">
              <span>Tổng tiền (VNĐ)</span>
              <strong>55,980,000 đ</strong>
            </li>
          </ul>
        </div>
        <div class="col-md-7 order-md-1">
          <h4 class="mb-3">Thông tin thanh toán</h4>
          <form class="needs-validation" novalidate="">
            <div class="row">
              <div class="col-md-6 mb-3">
                <label for="lastName">Họ</label>
                <input type="text" class="form-control" id="lastName" name="lastName" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Họ là bắt buộc.
                </div>
              </div>
              <div class="col-md-6 mb-3">
                <label for="firstName">Tên</label>
                <input type="text" class="form-control" id="firstName" name="firstName" placeholder="" value="" required="">
                <div class="invalid-feedback">
                  Tên là bắt buộc.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="username">Tên đăng nhập</label>
              <div class="input-group">
                <div class="input-group-prepend">
                  <span class="input-group-text">@</span>
                </div>
                <input type="text" class="form-control" id="username" name="username" placeholder="" required="">
                <div class="invalid-feedback" style="width: 100%;">
                  Tên đăng nhập là bắt buộc.
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="email">Email <span class="text-muted">(Tùy chọn)</span></label>
              <input type="email" class="form-control" id="email" placeholder="nguyenvana@example.com">
              <div class="invalid-feedback">
                Vui lòng nhập địa chỉ Email hợp lệ.
              </div>
            </div>

            <div class="mb-3">
              <label for="address">Địa chỉ</label>
              <input type="text" class="form-control" id="address" placeholder="Số 3, Khu phố 6, Phường Linh Trung" required="">
              <div class="invalid-feedback">
                Vui lòng nhập địa chỉ.
              </div>
            </div>

            <div class="row">
              <div class="col-md-5 mb-3">
                <label for="city">Tỉnh / Thành phố</label>
                <select class="custom-select d-block w-100" id="tinh" required="" name="tinh">
                  <option value="">Chọn...</option>
                  <option value="59">Thành phố Hồ Chí Minh</option>
                  <option value="60">Đồng Nai</option>
                  <option value="61">Bình Dương</option>
                  <option value="62">Long An</option>
                </select>
                <div class="invalid-feedback">
                  Vui lòng chọn tỉnh, thành hợp lệ.
                </div>
              </div>
              <div class="col-md-4 mb-3">
                <label for="district">Quận / Huyện</label>
                <select class="custom-select d-block w-100" id="state" required="">
                  <option value="">Chọn...</option>
                  <option value="quan1">Quận 1</option>
                  <option value="quan2">Quận 2</option>
                  <option value="quan3">Quận 3</option>
                  <option value="quan4">Quận 4</option>
                  <option value="quan5">Quận 5</option>
                </select>
                <div class="invalid-feedback">
                  Vui lòng chọn quận, huyện hợp lệ.
                </div>
              </div>
              <div class="col-md-3 mb-3">
                <label for="zip">Mã Zip</label>
                <input type="text" class="form-control" id="zip" placeholder="" required="">
                <div class="invalid-feedback">
                  Mã Zip là bắt buộc.
                </div>
              </div>
            </div>
            <hr class="mb-4">

            <h4 class="mb-3">Hình thức thanh toán</h4>

            <div class="d-block my-3">
              <div class="custom-control custom-radio">
                <input id="credit" name="paymentMethod" type="radio" class="custom-control-input" checked="" required="">
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