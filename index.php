<?php
class Student
{
    public $name;
    function students($text)
    {
        echo $this->name = $text;
    }
}

class Teacher extends Student
{
    function teachers()
    {
        $this->name;
    }
}

$show_name = new Teacher();
$show_name->students("h");

