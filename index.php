<?php
include('oop.php');
include('Shape.php');
include('user.php');
$viettel = new Viettel("Viettel");
$vina = new Vinaphone("Vinaphone");
$mobi = new MobiFone("MobiFone");
$mobileNetwork = [$viettel, $vina, $mobi];
foreach ($mobileNetwork as $mb) {
    echo $mb->slogan() . '<br>';
}


$rectangle = new Rectangle(5, 6);
$circle = new Circle(4);
$arr = [$rectangle, $circle];
foreach ($arr as $a) {
    echo 'chu vi: ' . $a->Perimter() . '<br>';
    echo 'dien tich: ' . $a->Area() . '<br>';
}
$managers[] = new Manager("BN001", "Nguyễn Thị Tâm", "tamtam1k99@gmail.com", "Tam@1234", "01/04/2025");
$managers[] = new Manager("BN002", "Nguyễn Thị Tâm", "tamtam1k99@gmail.com", "Tam@1234", "01/04/2025");
$employee[] = new Employee("BN003", "Nguyễn Thị Tâm", "tamtam1k99@gmail.com", "Tam@1234", "01/04/2025");
$employee[] = new Employee("BN004", "Nguyễn Thị Tâm", "tamtam1k99@gmail.com", "Tam@1234", "01/04/2025");
?>
manager
<table border="1" cellspacing="0">
    <tr>
        <th>Code</th>
        <th>full_name</th>
        <th>email</th>
        <th>passwork</th>
        <th>exp_in_year</th>
    </tr>
        <?php
        foreach($managers as $m){
            echo '<tr>';
            echo '<td>'.$m->code.'</td>';
            echo '<td>'.$m->full_name.'</td>';
            echo '<td>'.$m->email.'</td>';
            echo '<td>'.$m->password.'</td>';
            echo '<td>'.$m->exp_in_year.'</td>';
            echo '</tr>';
        }
        ?>
</table>
Employee
<table border="1" cellspacing="0">
    <tr>
        <th>Code</th>
        <th>full_name</th>
        <th>email</th>
        <th>passwork</th>
        <th>pro_skill</th>
    </tr>
        <?php
        foreach($employee as $m){
            echo '<tr>';
            echo '<td>'.$m->code.'</td>';
            echo '<td>'.$m->full_name.'</td>';
            echo '<td>'.$m->email.'</td>';
            echo '<td>'.$m->password.'</td>';
            echo '<td>'.$m->pro_skill.'</td>';
            echo '</tr>';
        }
        ?>
</table>