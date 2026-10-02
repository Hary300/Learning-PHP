<?php

class Student
{
  public $first_name;
  public $last_name;
  public $country = "None";

  public function sayHello()
  {
    return "Hello World";
  }

  function fullname()
  {
    return $this->first_name . ' ' . $this->last_name;
  }
}


$student1 = new Student;

$student1->first_name = 'Hary';
$student1->last_name = 'Putra';
echo $student1->fullname() . '<br/>';
