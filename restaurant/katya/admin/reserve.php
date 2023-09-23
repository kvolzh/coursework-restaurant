<?php
//0 - подтверждено 1 - отклонено
include ("../database/databaseInfo.php");
$reserve = $_GET['reserve'];
$reserve_id = $_GET['reserve_id'];
$reserve_sql = "UPDATE reservation SET reserve='$reserve' WHERE id='$reserve_id'";
$link->query($reserve_sql);
header("Location: http://katya/admin/admin.php");