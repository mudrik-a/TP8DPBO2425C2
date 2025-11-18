<?php
class ProfileController {

    private $model;
    private $lecturerModel;

    public function __construct($pdo){
        $this->model = new Profile($pdo);
        $this->lecturerModel = new Lecturer($pdo);
    }

    private function view($file, $data=[]){
        extract($data);
        require __DIR__ . "/../views/profile/$file.php";
    }

    public function index(){
        $profiles = $this->model->all();
        $this->view("index", compact("profiles"));
    }

    public function create(){
        $lecturers = $this->lecturerModel->all();

        if ($_SERVER["REQUEST_METHOD"] === "POST"){
            $this->model->create($_POST);
            header("Location: /tp_mvc25/public/?controller=profile&action=index");
            exit;
        }

        $this->view("create", compact("lecturers"));
    }

    public function edit(){
        $id = $_GET["id"];
        $lecturers = $this->lecturerModel->all();
        $profile = $this->model->find($id);

        if ($_SERVER["REQUEST_METHOD"] === "POST"){
            $this->model->update($id, $_POST);
            header("Location: /tp_mvc25/public/?controller=profile&action=index");
            exit;
        }

        $this->view("edit", compact("profile", "lecturers"));
    }

    public function delete(){
        $id = $_GET["id"];
        $this->model->delete($id);
        header("Location: /tp_mvc25/public/?controller=profile&action=index");
        exit;
    }
}

