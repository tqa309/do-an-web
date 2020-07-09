<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            width: max-content;
            margin-top: 50px
        }

        form label {
            display: inline-block;
            margin-right: 5px;
            min-width: 130px;
            text-align: right;
            vertical-align: top;
        }

        form>div {
            display: flex;
            flex-wrap: wrap;
            margin: 10px;
        }

        input[type="submit"] {
            margin-left: 150px;
        }
    </style>
</head>

<body>
    <form action="./login.php" method="POST">
        <div>
            <label for="username">User Name:</label>
            <input type="text" name="username" required>
        </div>

        <div>
            <label for="password">Password</label>
            <input type="password" name="password" required>
        </div>

        <input type="submit" name="login" value="login">

    </form>

    <?php
    $SERVER = "localhost";
    $USERNAME = "root";
    $PASSWORD = "Tuananh19022k";
    $DTB = "shopee";
    $connect = mysqli_connect($SERVER, $USERNAME, $PASSWORD, $DTB);
    if (!$connect) {
        die("Can't connect to server" . mysqli_connect_error());
        exit();
    }

    //! LOGIN 

    if (isset($_POST['login'])) {
        $username = mysqli_real_escape_string($connect, $_POST['username']);
        $password = mysqli_real_escape_string($connect, $_POST['password']);

        $sql="SELECT * FROM user WHERE username='$username'";
        $result=mysqli_query($connect,$sql);
        $user=mysqli_fetch_assoc($result);
        if(password_verify($password,$user['password'])){


            header("location:http://localhost/do-an-web/admin");
           session_start();
           $_SESSION['user_id'] = $user['user_id'];
           $_SESSION['username']=$user['username'];
           $_SESSION['user_type'] = $user['user_type'];
            $_SESSION['login_time']=time();
            
        }
        else{
            echo "username or password is incorrect";
        }

    }

    ?>

</body>

</html>