<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>

<body>
    <div class="form">
        <form action="update.php" method="POST">
            <input type="text" name="code" placeholder="code" value="<?php echo ($_REQUEST['code']); ?>">
            <input type="text" name="name" placeholder="name" value="<?php echo ($_REQUEST['name']); ?>">
            <input type="text" name="birthdate" placeholder="birthdate" value="<?php echo ($_REQUEST['birthdate']); ?>">
            <input type="text" name="gender" placeholder="gender" value="<?php echo ($_REQUEST['gender']); ?>">
            <button type="submit" id="add">Lưu</button>
        </form>
    </div>
</body>

</html>