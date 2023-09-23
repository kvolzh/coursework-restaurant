<?php
include ("../../database/connect_db.php");
$phone = $_POST['phone'];
$user_id = $_GET['id'];
if (!$phone) {
    echo "Введите новый телефон!";
}
if (!preg_match("/^[0-9]{10,10}+$/", $phone)) {
    echo "Введите телефон в формате 799999999";
exit;
}
$id = $_GET['id'];
$new_sql = "UPDATE user SET phone='$phone' WHERE id='$id'";
$link->query($new_sql);
header("Location: http://katya/user/cabinet.php?id=$user_id");
?>