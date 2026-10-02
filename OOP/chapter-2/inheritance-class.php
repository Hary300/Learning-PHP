<?php

class User
{
  public $first_name;
  public $last_name;
  public $userName;

  function fullName()
  {
    return $this->first_name . ' ' . $this->last_name;
  }
}

class Customer extends User {}

$c = new Customer;
$c->first_name = 'Hary';
$c->last_name = 'Putra';

echo $c->fullName() . '<br/>';

if (is_subclass_of($c, 'User')) {
  echo "Instace Customer merupakan subclass Class User <br/>";
} else {
  echo "Instace Customer bukan merupakan subclass Class User <br/>";
}

$parent = implode(', ', class_parents($c));
echo "Class Customer memiliki Class Parent bernama {$parent}";
