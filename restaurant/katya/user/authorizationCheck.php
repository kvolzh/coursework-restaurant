<?php
    include ("../database/connect_db.php");
    $name = $_POST['name'];
    $pass = md5($_POST['password']);
    $user = "SELECT * FROM user WHERE name='$name' and password='$pass'";
    $mysql = mysqli_query($link, $user);
    $needUser = mysqli_fetch_all($mysql);
    if (!$needUser) {
        exit ("Неверный логин или пароль");
    }
    $id = $needUser[0][0];
    $role = $needUser[0][4];
    if ($role == 1) {
        header("Location: http://katya/admin/admin.php");
    } else {
        header("Location: http://katya/user/user.php?id=$id");
    }
    ?>