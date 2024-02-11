<?php

class Model {

    private $pdo = '';
    protected $table = '';

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll() {
        $stm = $this->pdo->query("SELECT * FROM $this->table");
        $result = $stm->fetchAll(PDO::FETCH_OBJ);
        return $result;
    }

    public function selectById(int $id) {
        $stm = $this->pdo->prepare("SELECT * FROM $this->table WHERE id = ?");
        $stm->bindValue(1, $id);
        $stm->execute();
        $result = $stm->fetch(PDO::FETCH_OBJ);
        return $result;
    }

    public function insert(array $data = []) {
        $array_keys = implode(',', array_keys($data));
        $question_marks = implode(',', array_fill(0, count($data), '?'));
        $stm = $this->pdo->prepare("INSERT INTO $this->table ($array_keys) VALUES ($question_marks)");
        $i = 1;
        foreach ($data as $key => $value) {
            $stm->bindValue($i, $value);
            $i++;
        }
        $rows_affected = $stm->execute();
        echo "$rows_affected row affected";
        return $this->selectAll();
    }

    public function update(int $id, array $data = []) {
    }

    public function delete(int $id) {
    }
}