<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="form container">
        <h5>Sửa</h5>

        <form action="update.php" method="POST">
            <div class="form-group">
                <label for="exampleInputEmail1">Code</label> 
                <input type="text"  class="form-control" name="code" value="<?php echo ($_REQUEST['code']); ?>" placeholder="code">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">name</label>
                <input type="text"  class="form-control" name="name" value="<?php echo ($_REQUEST['name']); ?>" placeholder="name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">birthdate</label>
                <input type="text"  class="form-control" name="birthdate" value="<?php echo ($_REQUEST['birthdate']); ?>" placeholder="birthdate">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">gender</label>
                <input type="text"  class="form-control" name="gender" value="<?php echo ($_REQUEST['gender']); ?>" placeholder="gender">
            </div>
            <button type="submit" class="btn btn-primary">Lưu</button>
            <a class="btn btn-primary" href="index.php" role="button">Quay lại</a>
        </form>
    </div>
</body>

</html>