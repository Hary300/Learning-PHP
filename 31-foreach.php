<?php
$warna = ['merah', 'biru', 'kuning', 'hijau', 'merah', 'biru', 'merah', 'biru', 'kuning', 'hijau', 'merah',];

// foreach ($warna as $key => $value) {
//   echo "Warna pada index ke-$key adalah $value </br>";
// }

$jumlah_merah = 0;
foreach ($warna as $key => $value) {
  if ($value === 'merah') {
    $jumlah_merah++;
  };
}

echo "Jumlah warna merah adalah $jumlah_merah";
