<?php
class Employee{
 public $code;
 public $full_name;
 public $birth_date;
 public $gender;
 function __construct($code, $full_name, $birth_date, $gender){
    $this->code = $code;
    $this->full_name  =$full_name;
    $this->birth_date = $birth_date;
    $this->gender = $gender;
 }
 public function display_info(){
    $string = "code: ".$this->code."\n"
    ."full_name: ".$this->full_name."\n"
    ."birth_date: ".$this->birth_date."\n"
    ."gender: ".$this->gender."\n";
    echo $string;
 }
}
class Worker extends Employee{
    public $skill;
    public $wage;
}
$data = new Employee("NT012", "Nguyễn Thị Tâm", "09-12-1999", "Nữ");
$data->display_info();

