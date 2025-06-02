<?php
    require_once("../Bai8/Core/Database.php");

    class Student extends Database {
        private $iD;
        private $fullName;
        private $birthDate;
        private $gender;

        function setID($iD) {
            $this->iD = $iD;
        }
        function setFullName($fullName) {
            $this->fullName = $fullName;
        }
        function setBirthDate($birthDate) {
            $this->birthDate = $birthDate;
        }
        function setGender($gender) {
            $this->gender = $gender;
        }
        function getAll() {
            $sql = "SELECT * FROM Student";
            return $this->conn->query($sql);    
        }    
        function insert() {
            $sql = "INSERT INTO Student(ID, FullName, BirthDate, Gender) VALUES('{$this->iD}', '{$this->fullName}', '{$this->birthDate}', '{$this->gender}')";
            return $this->conn->query($sql);
        }
    }
?>