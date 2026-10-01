<?php

class Student
{
  public $name;
  public $country = "None";

  public function sayHello()
  {
    return "Hello World";
  }
}

$student1 = new Student;

$student1->name = 'Hakim';

echo $student1->name . '<br/>';

echo $student1->sayHello() . '<br/>';

$class_methods = get_class_methods('Student');
echo "Method milik Student: ";
echo '<pre>';
print_r($class_methods);
echo '<pre/>';

if (method_exists('Student', 'sayHello')) {
  echo "Method sayHello tersedia";
} else {
  echo "Method sayHello tidak tersedia";
}
