<?php
require 'koneksi.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        
        if ( $row['role'] == 1 ) {
            $_SESSION['login'] = true;
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['role'] = "1";
            header('Location: admin.php');
            exit();
        } elseif ( $row['role'] == 0 ) {
            $_SESSION['login'] = true;
            session_start();
            $_SESSION['username'] =$username;
            $_SESSION['role'] = "0";
            header('Location: awal.php');
            exit();
        }
    }

    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
</head>

<body>
    <div class="container">
        <h1>Login</h1>
        <?php
        if (isset($error)) {
            echo "<p style='color: red;'> Username/Password Salah! </p>";
        } else {
            echo "<p style='color: red; display:none;'> Username/Password Salah! </p>";
        }
        ?>
        <form action="" method="post">
            <label for="">Username</label>
            <input type="text" name="username" placeholder="Username" required=""> <br>
            <label for="">Password</label>
            <input type="password" name="password" placeholder="Password" required=""> <br>
            <button type="submit" name="login">Login</button>
        </form>
        <p class="account">Don't have an Account? <a href="regis.php"> Register Now!</a></p>
    </div>
</body>

</html>