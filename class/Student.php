<?php

class Student
{
    private $name;
    private $surname;
    private $birthdate;
    private $email;
    private $departmentId;

    public function __construct($name, $surname, $birthdate, $email, $departmentId)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->birthdate = $birthdate;
        $this->email = $email;
        $this->departmentId = $departmentId;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    public function getBirthdate()
    {
        return $this->birthdate;
    }

    public function setBirthdate($birthdate)
    {
        $this->birthdate = $birthdate;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getDepartmentId()
    {
        return $this->departmentId;
    }

    public function setDepartmentId($departmentId)
    {
        $this->departmentId = $departmentId;
    }
}
