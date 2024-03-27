<?php
echo "<hr>";

$baju = "M";
$baju = strtolower($baju);

switch ($baju) {
    case 'l':
        # code...
        echo "Large";

        
        break;
    case 'm':
            # code...
        echo "Mediom";

        break;
                    
    
    default:
        # code...
        echo "small";
        break;
}
echo "<hr>";

$nilai = 80;
switch($nilai){
    case $nilai <= 40:
        echo "$nilai : nilai kurang";
        break;

    case $nilai <= 70:
        echo "$nilai : nilai cukup";
        break;
        

    case $nilai <= 90:
        echo "$nilai : nilai baik";
        break;

    default:
    echo " null";
}

echo "<hr>";

$nila2 = 80;
switch($nilai){
    case $nila2 >= 0 && $nila2 < 35 :
        echo "$nilai2 : D";
        break;

    case $nila2 >= 35 && $nila2 < 50:
        echo "$nilai2 : C";
        break;

    case $nilai2 >= 50 && $nila2 < 80 :
        echo "$nilai2 : B";
        break;
    case $nilai2 >= 80 && $nila2 <= 100 :
        echo "$nilai2 : A";
        break;

    default:
    echo " null";
}






?>