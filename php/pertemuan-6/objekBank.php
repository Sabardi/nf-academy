<?php
require_once "Bank.php";
$n1 = new Bank('001', 'unira',9000);
$n2 = new Bank('002', 'unira',9000);
$n3 = new Bank('003', 'unira',9000);
$n4 = new Bank('004', 'unira',9000);

// panggil function menabung
$n1->menabung(3000000);
// function menarik
$n2->menarik(300000);

//  function mencetak

// mencetak di luar kelas
echo '<h3 align="center">'.Bank::NamaBank.'</h3>';
$n1->cetak();
$n2->cetak();
$n3->cetak();
$n4->cetak();
echo '<h3>'.Bank::$jumlah.'</h3>';


?>