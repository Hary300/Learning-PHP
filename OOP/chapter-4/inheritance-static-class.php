<?php
class Student
{
  public static $grade = ['SD', 'SMP', 'SMA'];
  private static $totalStudents = 0;

  public static function motto()
  {
    return 'Learn PHP OOP';
  }

  public static function addStudent()
  {
    return self::$totalStudents++;
  }

  public static function countStudents()
  {
    return self::$totalStudents;
  }
}


echo Student::$grade[2] . '<br/>';
echo Student::motto() . '<br/>';
echo Student::countStudents() . '<br/>';
Student::addStudent();
echo Student::countStudents() . '<br/>';

class PartTimeStudent extends Student {}


echo PartTimeStudent::$grade[1] . '<br/>';
PartTimeStudent::$grade[] = 'Alumni';
echo implode(', ', PartTimeStudent::$grade) . '<br/>';
echo implode(', ', Student::$grade) . '<br/>';
