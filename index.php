<?php
include "./school.php";
include "./libery.php";

require "./vendor/autoload.php";

use App\Main;
use School\School as school;
use Library\Library as library;

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

// $show_name = new Teacher();
// $show_name->students("h");

#############################interface#############################


interface it_manager {
    function at_name();
    function tt_name();
}

class my_ implements it_manager {
    function at_name() {
        echo "at_name";
    }
    function tt_name() {
        echo "\ntt_name";
        
    }
}

// $my = new my_();
// $my->at_name();
// $my->tt_name();

$school = new school();
$school->user();
$library = new library();
$library->user();

$main = new Main;
$main->disp();
