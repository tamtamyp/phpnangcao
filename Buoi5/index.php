<?php
include("connect.php");
$sql = "SELECT * FROM employee";
$result = $conn->query($sql);
?>
Employee
<div id="addUser"><button id="addUser"><a href="add.php">Thêm mới</a></button></div>
<table border="1" cellspacing="0">
    <tr>
        <th>Code</th>
        <th>FullName</th>
        <th>BirthDate</th>
        <th>Gender</th>
        <th>Sửa</th>
        <th>Xoá</th>
    </tr>
    <?php
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
            <td><button onclick="edit(<?php echo $m['code'] ?>)"><a href="edit.php?code=<?php echo $m["code"]; ?>&name=<?php echo $m["fullname"]; ?>&birthdate=<?php echo $m["birthdate"]; ?>&gender=<?php echo $m["gender"]; ?>">Sửa</a></button></td>
            <td><button onclick="deleted(<?php echo $m['code']; ?>)"><a href="delete.php?code=<?php echo $m["code"]; ?>">Xoá</a></button></td>
        </tr>
    <?php
    }
    ?>
</table>

<?php
$conn->close();
?>