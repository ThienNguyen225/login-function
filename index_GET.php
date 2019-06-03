<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thực hành chức năng đăng nhập</title>
</head>
<style>
    .login{
        height: 180px;
        width: 230px;
        padding: 10px;
        margin: 0;
        border: 1px #d3d3d3 solid;
    }
    .login input{
        padding: 5px;
        margin: 5px;
    }
</style>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] === "GET"){
    $username = $_GET["username"];
    $password = $_GET["password"];
    if ($username === "admin" && $password === "admin"){
        echo "<h2>Welcome <span style='color:red'>".$username."</span> to website</h2>";
    } else{
        echo "<h2>Welcome <span style='color:red'>Login Error</span> to website</h2>";

    }
}
?>
<form method="get">
    <div class="login">
        <h2>Login</h2>
        <input type="text" name="username" size="30" placeholder="username">
        <input type="password" name="password" size="30" placeholder="password">
        <input type="submit" value="Sign in">
    </div>
</form>
</body>
</html>
