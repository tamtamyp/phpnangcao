<?php
include('user.php');
include('connect.php');
$code = $_POST['code'];
$fullname = $_POST['name'];
$birthdate = $_POST['birthdate'];
$gender = $_POST['gender'];
$sql = "INSERT INTO employee (code, fullname, birthdate, gender ) VALUES ('" . $code . "','" . $fullname . "','" . $birthdate . "','" . $gender . "'" . ")";
var_dump($sql);
$conn->query($sql);
$conn->close();
header('Location: index.php');
exit;
