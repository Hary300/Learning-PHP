<?php

$warna = ['merah', 'biru', 'kuning', 'hijau', 'merah', 'hitam', 'biru', 'merah', 'biru', 'kuning', 'hijau', 'merah',];


foreach ($warna as $key => $value) {
  echo "Warna index ke-$key adalah $value </br>";

  if ($value === 'hitam') {
    echo "Warna hitam ditemukan di index ke-$key";
    break;
  }
}
