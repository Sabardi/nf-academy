<?php
require_once "kambing.php";
require_once "kucing.php";
require_once "anjing.php";



// ciptakan objek

$shaun = new kambing();
$tom = new Kucing();
$scobidu = new Anjing();

$suaraHewan = [$shaun, $tom, $scobidu];

// mencetak data nya
foreach ($suaraHewan as $hewan) {
    echo $hewan->bersuara();
}
?>