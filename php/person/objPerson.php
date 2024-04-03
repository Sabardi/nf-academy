<?php

// memanggil subclass nya
require_once 'dosen.php';
require_once 'mahasiswa.php';

$d1 = new Dosen('Budi','L','111','S.Kom, M.Kom');
$d2 = new Dosen('Siti','P','112','S.T, M.T');
$m1 = new Mahasiswa('Deden', 'L', 3, 'TI');
$m2 = new Mahasiswa('Mimin', 'P', 5, 'SI');
$dta = [$d1, $d2, $m1, $m2];

echo"<b>Data cipitan kampus</b>";
echo "<p>";
    foreach ($dta as $value) {
        # code...
        echo $value->cetak();
    }
"</p>";

// print data 

?>