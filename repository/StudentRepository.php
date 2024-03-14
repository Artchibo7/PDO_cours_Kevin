<?php

require_once __DIR__ . '/../class/Db.php';
require_once __DIR__ . '/../class/Student.php';

class StudentRepository extends Db {
    public function getAll() {
        $data = $this->getDb()->query("SELECT * FROM student");

        $students = [];

        foreach ($data as $student) {
            $newStudent = new Student(
                $student['id'],
                $student['name'],
                $student['surname'],
                $student['birthdate'],
                $student['email'],
                $student['department_id'],
            );

            $students[] = $newStudent;
        }

        return $students;
    }

    public function create($newStudent) {
        $request = "INSERT INTO student (id, name, surname, birthdate, email, department_id) VALUES (?, ?, ?, ?, ?, ?)";
        $query = $this->getDb()->prepare($request);

        $query->execute([
            $newStudent->getId(),
            $newStudent->getName(),
            $newStudent->getSurname(),
            $newStudent->getBirthdate(),
            $newStudent->getEmail(),
            $newStudent->getDepartmentId(),
        ]);
    }
}
