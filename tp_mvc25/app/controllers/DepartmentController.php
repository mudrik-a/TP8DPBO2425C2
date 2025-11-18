<?php
class DepartmentController {

    private $model;

    public function __construct($pdo){
        $this->model = new Department($pdo);
    }

    private function view($file, $data=[]){
        extract($data);
        require __DIR__ . "/../views/department/$file.php";
    }

    public function index(){
        $departments = $this->model->all();
        $this->view("index", compact("departments"));
    }

    public function create(){
        if ($_SERVER["REQUEST_METHOD"] === "POST"){
            $this->model->create($_POST);
            header("Location: /tp_mvc25/public/?controller=department&action=index");
            exit;
        }
        $this->view("create");
    }

    public function edit(){
        $id = $_GET["id"];
        if ($_SERVER["REQUEST_METHOD"] === "POST"){
            $this->model->update($id, $_POST);
            header("Location: /tp_mvc25/public/?controller=department&action=index");
            exit;
        }
        $department = $this->model->find($id);
        $this->view("edit", compact("department"));
    }

    public function delete(){
        $id = $_GET["id"];
        $this->model->delete($id);
        header("Location: /tp_mvc25/public/?controller=department&action=index");
        exit;
    }
}
