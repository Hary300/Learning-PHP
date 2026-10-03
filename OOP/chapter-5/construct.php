<?php

class Student
{
  public static $instanceCount = 0;

  public function __construct()
  {
    self::$instanceCount++;
  }
}


class Elementary extends Student
{
  public $totalStudents = 3;
}

class Junior extends Student
{
  public $totalStudents = 2;
}

class Senior extends Student
{
  public $totalStudents = 4;
}


$student1 = new Elementary;
$student2 = new Junior;
$student3 = new Senior;

echo $student1->totalStudents . '<br/>';
echo $student2->totalStudents . '<br/>';
echo $student3->totalStudents . '<br/>';

echo Student::$instanceCount . '<br/>';
