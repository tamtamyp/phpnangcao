<?php
include('user.php');
$code = $_POST['code'];
$name = $_POST['name'];
$email = $_POST['email'];
$pass = $_POST['password'];
session_start();

if (isset($_SESSION['user'])) {
    if (isset($_REQUEST['code'])) {
        foreach ($_SESSION['user'] as $item) {
            if (is_object($item) && $item->code == $_REQUEST['code']) {
                // Tìm thấy đối tượng và sửa thông tin
                $item->email = $email;
                $item->full_name = $name;
                $item->email = $email;
                $item->password = $pass;
                break; // Dừng lại sau khi đã sửa xong
            }
        }
    } else {
        $_SESSION["user"][] = new User($code, $name, $email, $pass);
    }
} else {
    $_SESSION["user"][] = new User($code, $name, $email, $pass);
}
header('Location: session.php');
exit;
