<?php
class Department {

    private $pdo;
    private $table = "departments";

    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function all(){
        return $this->pdo->query("SELECT * FROM $this->table ORDER BY id")->fetchAll();
    }

    public function find($id){
        $s = $this->pdo->prepare("SELECT * FROM $this->table WHERE id=?");
        $s->execute([$id]);
        return $s->fetch();
    }

    public function create($data){
        $s = $this->pdo->prepare("INSERT INTO $this->table (name, description) VALUES (?,?)");
        return $s->execute([$data['name'], $data['description']]);
    }

    public function update($id, $data){
        $s = $this->pdo->prepare("UPDATE $this->table SET name=?, description=? WHERE id=?");
        return $s->execute([$data['name'], $data['description'], $id]);
    }

    public function delete($id){
        $s = $this->pdo->prepare("DELETE FROM $this->table WHERE id=?");
        return $s->execute([$id]);
    }
}
