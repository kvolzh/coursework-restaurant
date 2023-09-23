<?php
include ("../../database/connect_db.php");
$password = $_POST['password'];
$user_id = $_GET['id'];
if (!$password) {
    echo "Введите новый Пароль!";
}
$pass = md5($password);
$id = $_GET['id'];
$new_sql = "UPDATE user SET password='$pass' WHERE id='$id'";
$link->query($new_sql);
header("Location: http://katya/user/cabinet.php?id=$user_id");
?>