<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="title">Danh sách người quản lý</div>
    <div id="addUser"><button id="addUser"><a href="/addSession.php">Thêm mới</a></button></div>
    <table border="1" cellspacing='0'>
        <tr>
            <th>Mã</th>
            <th>Họ tên</th>
            <th>Email</th>
            <th>Mật khẩu</th>
            <th>Sửa</th>
            <th>Xoá</th>
        </tr>
        <?php
        include('user.php');
        session_start();
        if (isset($_SESSION['user'])) {
        $sessions = $_SESSION['user'];
            foreach ($_SESSION['user'] as $s) {
        ?>
                <tr>
                    <td><?php echo $s->code; ?></td>
                    <td><?php echo $s->full_name; ?></td>
                    <td><?php echo $s->email; ?></td>
                    <td><?php echo $s->password; ?></td>
                    <td><button onclick="edit(<?php echo $s->code; ?>)"><a href="/addSession.php?code=<?php echo $s->code;?>&name=<?php echo $s->full_name;?>&email=<?php echo $s->email;?>&password=<?php echo $s->password;?>">Sửa</a></button></td>
                    <td><button onclick="deleted(<?php echo $s->code; ?>)"><a href="/deleteSession.php?code=<?php echo $s->code;?>">Xoá</a></button></td>
                </tr>
        <?php
            }
        }
        ?>

    </table>
</body>

</html>