<?php
include('user.php');
include('connect.php');
$code = $_POST['code'];
$fullname = $_POST['name'];
$birthdate = $_POST['birthdate'];
$gender = $_POST['gender'];
$sql = "UPDATE employee SET code= '" . $code . "', fullname='" . $fullname . "',birthdate='" . $birthdate . "',gender='" . $gender . "'"." where code='". $code."'";
$conn->query($sql);
$conn->close();
header('Location: index.php');
exit;
