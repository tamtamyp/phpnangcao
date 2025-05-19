<?php
include("../Bai7/Core/Database.php");
class Student extends Database
{
    private $iD;
    private $fullName;
    private $birthDate;
    private $gender;
    function setId($iD){
        $this->iD = $iD;
    }
    function setFullName($fullName){
        $this->fullName = $fullName;
    }
    function setBirthDate($birthDate){
        $this->birthDate = $birthDate;
    }
    function setGender($gender){
        $this->gender = $gender;
    }
    function getAll()
    {
        $sql = "SELECT * FROM student";
        return $this->conn->query($sql);
    }
}
