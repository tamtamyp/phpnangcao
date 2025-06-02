<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center text-uppercase text-success my-3">Danh sách sinh viên</h3>
        <a href="/bai8/student/add/" class="btn btn-primary">Thêm mới</a>
        <a href="AddInpatient.php" target="_blank" class="btn btn-primary">Tìm kiếm</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Mã</th>
                    <th>Họ tên</th>
                    <th>Ngày sinh</th>
                    <th>Giới tính</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
            </thead>    
            <tbody>
                <?php
                    if ($model->num_rows > 0) {
                        while ($row = $model->fetch_assoc()) {
                ?>
                        <tr>
                            <td><?= $row["ID"]; ?></td>
                            <td><?= $row["FullName"]; ?></td>
                            <td><?= $row["BirthDate"]; ?></td>
                            <td><?= $row["Gender"]; ?></td>
                            <td><a href="<?= 'MVC/Edit/' . $row["ID"]; ?>" /*target="_blank"*/ class="btn btn-success">Sửa</a>
                            <td><a href="<?= '/mvc/patient/Delete/' . $row["ID"]; ?>" class="btn btn-danger">Xóa</a>
                        </tr> 
                    <?php                       
                        }
                    ?>
                <?php
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>