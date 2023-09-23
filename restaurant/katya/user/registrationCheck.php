<?php
include ("../database/connect_db.php");
$name      = $_POST['name'];
$phone     = $_POST['phone'];
$password  = md5($_POST['password']);

if (!preg_match("/^[0-9]{10,10}+$/", $phone)) {
    echo "Введите телефон в формате 799999999";
    exit;
}
$user = "INSERT INTO user (name, phone, password, role) VALUES('$name','$phone', '$password', '0')";
$link->query($user);
header("Location: http://katya/user/authorization.php");
