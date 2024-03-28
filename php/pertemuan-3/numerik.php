<?php
$arrayBuah = ['mangga', 'pepaya', 'pisangga', 'banana'];

// mencetak indeks ke  berapa
echo $arrayBuah[2];
// menampilkan jumlah array nya
$jumlah = count($arrayBuah);
echo $jumlah;
echo "<hr>";

foreach ($arrayBuah as $data) {
    echo "$data[2]";
}

// array asosiatif

$hewan = [10=>'Babi', 20=>'bebek','angsa', 30=>'kucing','simpanse', 40=>'kelinci'];
echo $hewan[10];
echo $hewan[20];

echo "<hr>";
echo "<array asosiatif>";
echo "<hr>";

foreach($hewan as $data => $nama) {
    echo "$data => $nama <br>";
}

echo "<hr>";
echo "array multidimensi / array dalam array";
echo "<hr>";
echo "<br>";
$daftarNama = [
    ["Nama"=>"budi", "Alamat"=>"Depok", "Telpn"=>98, "status"=> "duda"],
    ["Nama"=>"anduk", "Alamat"=>"pringgarat", "Telpn"=>99, "status"=> "bercerai"],
    ["Nama"=>"ilham", "Alamat"=>"bagu", "Telpn"=>92, "status"=> "menikah"]
];

foreach($daftarNama as $i) {
    echo "$i[Alamat]<br>";
}
echo "<hr>"; 


?>
