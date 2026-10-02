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

class Customer extends User
{
  public $city;
  public $country;

  function location()
  {
    return $this->city . ', ' . $this->country;
  }
}

$c = new Customer;
$c->first_name = 'Hary';
$c->last_name = 'Putra';
$c->city = 'Yogya';
$c->country = 'Indonesia';


echo $c->location() . '<br/>';
echo $c->fullName() . '<br/>';
