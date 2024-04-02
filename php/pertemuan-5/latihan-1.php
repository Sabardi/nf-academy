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

echo "<br/>";



?>