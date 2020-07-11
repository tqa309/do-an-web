<?php
  include('../common/header.php');
  include('../common/database_mysqli.php');
  
  $query = "select * FROM user WHERE user_id = ?";
  $memberResult = $conn->prepare($query);
  $memberResult->bind_param('d', $_SESSION['userId']);
  $memberResult->execute();
  $result = $memberResult->get_result();
  $row = $result->fetch_assoc();
  $conn->close();

  echo <<<EOF
    <main id="main-site">
      <div class="container-fluid mb-5">
        <h1 class="h3 mb-2 text-gray-800 text-center">Thông tin tài khoản</h1>
        <form id="userInfo" role="form" accept-charset="utf-8">
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
            <button type="submit" id="submit" class="btn btn-primary mt-2">Cập nhật thông tin</button>
        </form>
      </div>
    </main>
  EOF;

  include('../common/footer.php');
?>