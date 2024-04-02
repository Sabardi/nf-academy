<?php

$str = 'Belajar php di kampus merdekan';
echo $str;
echo "<br/>";

$str = strtoupper($str);
echo $str;

echo "<br/>";
$str = strtolower($str);
echo $str;

echo "<br/>";
$str = ucfirst($str);
echo $str;

echo "<br/>";
$str = ucwords($str);
echo $str;

echo "<br/>";

$arrayBuah = 
[
"pepaya", "mangga", "pisang", "jambu", " apel"
];

sort($arrayBuah);
foreach ($arrayBuah as $buah){
    echo $buah."<br/>";
}

echo "<br/>";
arsort($arrayBuah);
foreach ($arrayBuah as $buah){
    echo $buah."<br/>";
}

echo "<hr>";
echo "<h1>Fungsi void</h1>";
echo "<hr>";

// fungsi tanpa parameter / arguments
function salam(){
    echo "selamat pagi gaest";
}
salam("");

// fungsi menggunakan parameter dan argumen 

function sapa($kawan) {
    echo "selamat pagi $kawan";
}
echo "<br>";
// atau memasukan variabel yang sudah ada
$nam = "rosin";
sapa("ibrahim");

echo "<br>";

sapa($nam);

//membuat parameter bersama argument nya
function kawan($kawan = "sanardi") {
    echo "selamat pagi $kawan";
}

echo "<br>";

kawan();
// bisa di isi kembali fungsi nya kawan("nama nya);

?>