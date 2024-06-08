<?php
// User.php
class Student
{
    private $matricula;
    private $id_teacher;
    private $id_course;
    private $curp;
    private $password_student;

    public function __construct($matricula, $id_teacher, $id_course, $curp, $password_student)
    {
        $this->matricula = $matricula;
        $this->id_teacher = $id_teacher;
        $this->id_course = $id_course;
        $this->curp = $curp;
        $this->password_student = $password_student;
    }


    public function getMatricula()
    {
        return $this->matricula;
    }

    public function getPassword()
    {
        return $this->password_student;
    }

    public function getCurp()
    {
        return $this->curp;
    }
}
