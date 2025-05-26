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
        <div id="addUser"><a class="btn btn-primary" href="/Bai7/Student/add" role="button">Thêm mới</a></div>

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
                if (!empty($model)) {
                    foreach ($model as $m) {
                        // echo '<tr>';
                        // echo '<td>'.$m["Code"].'</td>';
                        // echo '<td>'.$m["FullName"].'</td>';
                        // echo '<td>'.$m["BirthDate"].'</td>';
                        // echo '<td>'.$m["Gender"].'</td>';
                        // echo '</tr>';
                ?>
                        <tr>
                            <td><?php echo $m["Code"]; ?></td>
                            <td><?php echo $m["FullName"]; ?></td>
                            <td><?php echo $m["BirthDate"]; ?></td>
                            <td><?php echo $m["Gender"]; ?></td>
                            <td><a class="btn btn-danger" href="edit.php?Code=<?php echo $m["Code"]; ?>&name=<?php echo $m["FullName"]; ?>&BirthDate=<?php echo $m["BirthDate"]; ?>&Gender=<?php echo $m["Gender"]; ?>" role="button">Sửa</a></td>
                            <td>
                                <!-- <a class="btn btn-primary" href="delete.php?Code=<?php echo $m["Code"]; ?>" role="button">Xóa</a> -->
                                <a class="btn btn-primary" href="/Bai7/Student/delete/<?php echo $m['Code']; ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa?');">Xóa</a>


                            </td>

                        </tr>
                <?php
                    }
                }
                ?>
            </tbody>
        </table>
    </div>
</body>

</html>