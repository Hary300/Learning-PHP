<?php

$warna = ['merah', 'biru', 'kuning', 'hijau', 'merah', 'hitam', 'biru', 'merah', 'biru', 'kuning', 'hijau', 'merah',];


foreach ($warna as $key => $value) {

  if ($value === 'hitam') {
    continue;
  }

  echo "Warna index ke-$key adalah $value </br>";
}
