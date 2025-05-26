<?php
include("../Bai7/Core/Database.php");
class Student extends Database
{
    private $Code;
    private $fullName;
    private $birthDate;
    private $gender;
    function setId($Code)
    {
        $this->Code = $Code;
    }
    function setFullName($fullName)
    {
        $this->fullName = $fullName;
    }
    function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
    }
    function setGender($gender)
    {
        $this->gender = $gender;
    }
    function getAll()
    {
        $sql = "SELECT * FROM student";
        return $this->conn->query($sql);
    }
    function insert()
    {
        $sql = "INSERT INTO student (Code, FullName, BirthDate, Gender ) VALUES ('" . $this->Code . "','" . $this->fullName . "','" . $this->birthDate . "','" . $this->gender . "'" . ")";
        return $this->conn->query($sql);
    }
    function delete($code)
    {
        $sql = "DELETE FROM student WHERE Code = ?";
        return $this->conn->query($sql);
    }
}
