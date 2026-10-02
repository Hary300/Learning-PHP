<?php

class User
{
  public $first_name;
  public $last_name;
  public $userName;

  protected $regId = 1001;
  private $level = 'User';

  public function fullName()
  {
    return $this->first_name . ' ' . $this->last_name;
  }

  protected function sayProtect()
  {
    return 'Hello, protected';
  }

  private function sayPrivate()
  {
    return 'Hello, private';
  }

  public function sayMe()
  {
    return $this->sayPrivate();
  }
}

class Customer extends User
{
  public function sayParent()
  {
    return $this->sayProtect();
  }
}

$u = new User;
$u->first_name = 'User';
$u->last_name = 'Class';

// echo $u->regId . '<br/>';
// echo $u->level . '<br/>';

echo $u->fullName() . '<br/>';
// echo $u->sayProtect() . '<br/>';
// echo $u->sayPrivate() . '<br/>';
echo $u->sayMe() . '<br/>';

$c = new Customer;
$c->first_name = 'Customer';
$c->last_name = 'Hary';


echo $c->fullName() . '<br/>';
echo $c->sayParent() . '<br/>';


class Tabungan
{
  private $saldo = 0;

  public function lihatSaldo()
  {
    return "Saldo: {$this->saldo} <br/>";
  }


  public function tarikTabungan($jumlah)
  {

    if ($this->saldo === 0) {
      return "Saldo masih 0 <br/>";
    }

    if ($this->saldo - $jumlah < 0) {
      return "Saldo tidak mencukupi <br/>";
    }

    $this->saldo = $this->saldo - $jumlah;
    return 'Penarikan berhasil <br/>';
  }

  public function tambahTabungan($jumlah)
  {
    $this->saldo = $this->saldo + $jumlah;
    return 'Tabungan berhasil ditambah <br/>';
  }
}

$tabungan1 = new Tabungan;

echo $tabungan1->lihatSaldo();
echo $tabungan1->tarikTabungan(300);
echo $tabungan1->tambahTabungan(150);
echo $tabungan1->tarikTabungan(300);
echo $tabungan1->tarikTabungan(50);
echo $tabungan1->lihatSaldo();
echo $tabungan1->tambahTabungan(150);
echo $tabungan1->lihatSaldo();
