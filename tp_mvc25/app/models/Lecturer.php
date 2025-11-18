<?php
class Lecturer {

    private $pdo;
    private $table = 'lecturers';

    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function all(){
        return $this->pdo->query("SELECT * FROM $this->table ORDER BY id ASC")->fetchAll();
    }

    public function find($id){
        $s = $this->pdo->prepare("SELECT * FROM $this->table WHERE id=?");
        $s->execute([$id]);
        return $s->fetch();
    }

    public function create($data){
        $sql = "INSERT INTO $this->table (name, nidn, phone, join_date) VALUES (?,?,?,?)";
        $s = $this->pdo->prepare($sql);
        return $s->execute([
            $data['name'],
            $data['nidn'],
            $data['phone'],
            $data['join_date']
        ]);
    }

    public function update($id, $data){
        $sql = "UPDATE $this->table SET name=?, nidn=?, phone=?, join_date=? WHERE id=?";
        $s = $this->pdo->prepare($sql);
        return $s->execute([
            $data['name'],
            $data['nidn'],
            $data['phone'],
            $data['join_date'],
            $id
        ]);
    }

    public function delete($id){
        $s = $this->pdo->prepare("DELETE FROM $this->table WHERE id=?");
        return $s->execute([$id]);
    }
}
