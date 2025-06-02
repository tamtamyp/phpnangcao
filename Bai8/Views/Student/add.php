<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhập thông tin sinh viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class="text-center text-uppercase text-success my-3">Nhập thông tin sinh viên</h3>
        <form method="post">
            <input type="text" name="iD" class="form-control mb-2" placeholder="Mã">
            <input type="text" name="fullName" class="form-control mb-2" placeholder="Họ tên">
            <input type="date" name="birthDate" class="form-control mb-3" placeholder="Ngày sinh">
            <input type="text" name="gender" class="form-control mb-2" placeholder="Giới tính">
            <button type="submit" class="btn btn-primary">Lưu</button>
            <a href="/bai8/student" class="btn btn-primary">Quay lại</a> 
        </form>        
    </div> 
</body>
</html>