<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <?php
        include("connect.php");
        $sql = "SELECT * FROM employee";
        $result = $conn->query($sql);
        ?>
        Employee
        <div id="addUser"><a class="btn btn-primary" href="add.php" role="button">Thêm mới</a></div>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">Code</th>
                    <th scope="col">FullName</th>
                    <th scope="col">BirthDate</th>
                    <th scope="col">Gender</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xoá</th>
                </tr>
            </thead>
            <tbody>

                <?php
                if (!empty($result)) {
                    foreach ($result as $m) {
                        // echo '<tr>';
                        // echo '<td>'.$m["code"].'</td>';
                        // echo '<td>'.$m["fullname"].'</td>';
                        // echo '<td>'.$m["birthdate"].'</td>';
                        // echo '<td>'.$m["gender"].'</td>';
                        // echo '</tr>';
                ?>
                        <tr>
                            <td><?php echo $m["code"]; ?></td>
                            <td><?php echo $m["fullname"]; ?></td>
                            <td><?php echo $m["birthdate"]; ?></td>
                            <td><?php echo $m["gender"]; ?></td>
                            <td><a class="btn btn-danger" href="edit.php?code=<?php echo $m["code"]; ?>&name=<?php echo $m["fullname"]; ?>&birthdate=<?php echo $m["birthdate"]; ?>&gender=<?php echo $m["gender"]; ?>" role="button">Sửa</a></td>
                            <td><a class="btn btn-primary" href="delete.php?code=<?php echo $m["code"]; ?>" role="button">Xóa</a></td>

                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>

        <?php
        $conn->close();
        ?>
    </div>
</body>

</html>