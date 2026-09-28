<?php

$warna = ['merah', 'biru', 'kuning', 'hijau', 'merah', 'biru', 'merah', 'biru', 'kuning', 'hijau', 'merah',];
$jumlah = 0;
$i = 0;

// while ($i < count($warna)) {
//   if ($warna[$i] === 'merah') {
//     $jumlah++;
//   };
//   $i++;
// };


do {
  if ($warna[$i] === 'merah') {
    $jumlah++;
  };
  $i++;
} while ($i < count($warna));


echo "Jumlah warna merah adalah {$jumlah}";
