<?php
    include ("../../database/connect_db.php");
    $name = $_POST['name'];
    $user_id = $_GET['id'];
    if (!$name) {
        echo "Введите новое имя!";
    }
    $id = $_GET['id'];
    $new_sql = "UPDATE user SET name='$name' WHERE id='$id'";
    $link->query($new_sql);
    header("Location: http://katya/user/cabinet.php?id=$user_id");
    ?>