<?php
    class StudentController extends Controller {
        function index() {
            $model = $this->model("Student");
            $this->view("Index", $model->getAll());
        }
        function add() {
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $student = $this->model("Student");
                $student->setID($_POST['iD']);
                $student->setFullName($_POST['fullName']);
                $student->setBirthDate($_POST['birthDate']);
                $student->setGender($_POST['gender']);
                $student->insert();
                //$this->view("Index", $patient->getAll());
            }
            $this->view("Add", null);        
        }
        function edit($id) {
            print("Sửa mã sinh viên {$id}");
        }
    }    
?>