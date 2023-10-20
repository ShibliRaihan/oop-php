<?php 
class Student {
    public $name;
    function __construct($text)
    {
        $this->name = $text ;
        echo $this->name;
    }
}

$stu = new Student ("Jon");
