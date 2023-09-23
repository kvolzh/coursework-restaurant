<?php
require_once 'connect_db.php';

function users($link) {
	$sql = "SELECT * FROM user";
	$result = mysqli_query($link, $sql);
	$data = mysqli_fetch_all($result);
	return $data;
}

function reservation($link) {
	$sql = "SELECT * FROM reservation";
	$result = mysqli_query($link, $sql);
	$data = mysqli_fetch_all($result);
	return $data;
}

function user($link, $user_id) {
	$sql = "SELECT * FROM user WHERE id = '$user_id'";
	$result = mysqli_query($link, $sql);
	$data = mysqli_fetch_all($result);
	return $data;
}

function reserve($link, $user_id) {
	$sql = "SELECT * FROM reservation WHERE user_id = '$user_id'";
	$result = mysqli_query($link, $sql);
	$data = mysqli_fetch_all($result);
	return $data;
}

function reservePay($link, $user_id) {
	$sql = "SELECT * FROM reservation WHERE user_id = '$user_id' AND reserve = 1";
	$result = mysqli_query($link, $sql);
	$data = mysqli_fetch_all($result);
	return $data;
}

function reserveRestPay($link, $rest_id) {
	$sql = "SELECT * FROM reservation WHERE rest = '$rest_id' AND reserve = 1";
	$result = mysqli_query($link, $sql);
	$data = mysqli_fetch_all($result);
	return $data;
}