<?php
class StudentController extends Controller
{
    function index()
    {
        //print("Đây là thông tin sinh viên");
        $model = $this->model("Student");
        $this->view("Student/index", $model->getAll());
    }
    function add()
    {
        $model = $this->model("Student");
        $this->view("Student/add", $model->getAll());
    }
    function save()
    {
        // Lấy dữ liệu từ form
        $code = $_POST['code'];
        $fullname = $_POST['name'];
        $birthdate = $_POST['birthdate'];
        $gender = $_POST['gender'];

        // Gọi model
        $model = $this->model("Student");

        $model->setId($code);
        $model->setFullName($fullname);
        $model->setBirthDate($birthdate);
        $model->setGender($gender);
        $success = $model->insert();

        if ($success) {
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit;
        } else {
            $this->view("Student/index", [
                "error" => "Không thể lưu sinh viên. Vui lòng thử lại.",
                "students" => $model->getAll()
            ]);
        }
    }

    function edit($id)
    {
        print("Sửa mã sinh viên {$id}");
    }
    function delete($code)
    {
        $model = $this->model("Student");
        
        $model->setId($code);
        $success = $model->delete($code);

        if ($success) {
            header("Location: /Bai7/Student"); // Quay về danh sách sinh viên
            exit;
        } else {
            echo "Không thể xóa sinh viên có mã {$code}";
        }
    }
}
