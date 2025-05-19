<?php
    class StudentController extends Controller {
        function getAll() {
            //print("Đây là thông tin sinh viên");
            $model = $this->model("Student");
            $this->view("Student/StudentInfo", $model->getAll());
        }
        function add() {
            print("Đây là phương thức Thêm");
        }
        function edit($id) {
            print("Sửa mã sinh viên {$id}");
        }
    }    
?>