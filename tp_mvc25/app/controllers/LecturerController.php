<?php
class LecturerController {

    private $pdo;
    private $model;

    public function __construct($pdo){
        $this->pdo = $pdo;
        $this->model = new Lecturer($pdo);
    }

    private function view($file, $data = []){
        extract($data);
        require __DIR__ . "/../views/lecturer/$file.php";
    }

    public function index(){
        $lecturers = $this->model->all();
        $this->view('index', compact('lecturers'));
    }

    public function create(){
        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $this->model->create($_POST);
            header('Location: /tp_mvc25/public/?controller=lecturer&action=index');
            exit;
        }
        $this->view('create');
    }

    public function edit(){
        $id = $_GET['id'] ?? null;
        if (!$id) exit("Invalid ID");

        if ($_SERVER['REQUEST_METHOD'] == 'POST'){
            $this->model->update($id, $_POST);
            header('Location: /tp_mvc25/public/?controller=lecturer&action=index');
            exit;
        }

        $lecturer = $this->model->find($id);
        $this->view('edit', compact('lecturer'));
    }

    public function delete(){
        $id = $_GET['id'] ?? null;
        if (!$id) exit("Invalid ID");

        $this->model->delete($id);
        header('Location: /tp_mvc25/public/?controller=lecturer&action=index');
        exit;
    }
}
