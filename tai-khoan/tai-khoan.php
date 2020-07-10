<?php
  include('../common/header.php');

  $host = 'localhost:3306';
  $dbname = 'shopee';
  $user = 'root';
  $pass = '';

  $conn = new PDO("mysql:host=$host; dbname=$dbname", $user, $pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
  $query = "select * FROM user WHERE user_id = :userId";
  $memberResult = $conn->prepare($query);
  $memberResult->execute(array(
    ':userId' => $_SESSION["userId"]
  ));
  $row = $memberResult->fetch(PDO::FETCH_ASSOC);

  echo <<<EOF
    <main id="main-site">
      <div class="container-fluid mb-5">
        <h1 class="h3 mb-2 text-gray-800 text-center">Thông tin tài khoản</h1>
        <form action="" method="POST" role="form" accept-charset="utf-8">
          <div class="container">
            <div class="form-group">
                <label for="username">Tên đăng nhập</label>
                <input readonly type="text" class="form-control" id="username" name="username" value="$row[username]">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input readonly type="text" class="form-control" id="email" name="email" value="$row[email]">
            </div>
            <div class=" form-group">
              <label for="last_name">Họ</label>
              <input type="text" class="form-control" id="last_name" name="last_name" value="$row[last_name]">
            </div>
            <div class=" form-group">
              <label for="first_name">Tên</label>
              <input type="text" class="form-control" id="first_name" name="first_name" value="$row[first_name]">
            </div>
            <div class=" form-group">
              <label for="address">Địa chỉ</label>
              <input class="form-control" id="address" name="address" value="$row[address]">
            </div>
            <button type="button" id="submit" class="btn btn-primary mt-2">Cập nhật thông tin</button>
        </form>
      </div>
    </main>
  EOF;

  include('../common/footer.php');
?>