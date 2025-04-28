<?php
include('user.php');
session_start();

if (isset($_REQUEST['code'])) {
    foreach ($_SESSION['user'] as $index => $item) {
        if (is_object($item) && $item->code == $_REQUEST['code']) {
            unset($_SESSION['user'][$index]); // Xoá phần tử khỏi mảng
            $deleted = true;
            break;
        }
    }
}
header('Location: session.php');
exit;
