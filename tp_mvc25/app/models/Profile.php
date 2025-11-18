<?php
class Profile {

    private $pdo;
    private $table = "profiles";

    public function __construct($pdo){
        $this->pdo = $pdo;
    }

    public function all(){
        $sql = "SELECT p.*, l.name AS lecturer_name
                FROM profiles p
                JOIN lecturers l ON l.id = p.lecturer_id";
        return $this->pdo->query($sql)->fetchAll();
    }

    public function find($id){
        $s = $this->pdo->prepare("SELECT * FROM $this->table WHERE id=?");
        $s->execute([$id]);
        return $s->fetch();
    }

    public function create($data){
        $s = $this->pdo->prepare("INSERT INTO $this->table (lecturer_id, address, birthdate, bio)
                                  VALUES (?,?,?,?)");
        return $s->execute([
            $data['lecturer_id'],
            $data['address'],
            $data['birthdate'],
            $data['bio']
        ]);
    }

    public function update($id, $data){
        $s = $this->pdo->prepare("UPDATE $this->table 
                                  SET lecturer_id=?, address=?, birthdate=?, bio=?
                                  WHERE id=?");
        return $s->execute([
            $data['lecturer_id'],
            $data['address'],
            $data['birthdate'],
            $data['bio'],
            $id
        ]);
    }

    public function delete($id){
        $s = $this->pdo->prepare("DELETE FROM $this->table WHERE id=?");
        return $s->execute([$id]);
    }
}
