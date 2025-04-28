<?php
include('user.php');

include('connect.php');
if (isset($_REQUEST['code'])) {
    $code = $_REQUEST['code'];
    $sql = "DELETE from employee where code='" . $code . "'";
    var_dump($sql);
    $conn->query($sql);
    $conn->close();
}
header('Location: index.php');
exit;
