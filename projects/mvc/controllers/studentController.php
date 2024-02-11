<?php

require_once '../app/Controller.php';
require_once '../models/Student.php';

class studentController extends Controller {

    private PDO $pdo;
    private Student $student;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;dbname=php_course', 'root', '123');
        $this->student = new Student($this->pdo);
    }

    public function selectAll() {
        $students = $this->student->selectAll();
        $this->view('student', $students);
    }

    // Todo: This function is always returning the record with id = 1, update it to work correctly
    public function selectById() {
        $student = $this->student->selectById(1);
        $students = [$student];
        $this->view('student', $students);
    }

    // Todo: This function is creating a student manually, update it to create it through a form
    public function insert() {
        $students = $this->student->insert([
            'id' => 6,
            'name' => 'Test 2',
            'surname' => 'Example Lastname',
            'age' => 25,
            'phone' => '6623468132',
            'email' => 'test@gmail.com',
        ]);
        $this->view('student', $students);
    }
}