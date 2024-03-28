<?php

$a1 = ["kode"=>"1111", "buah"=>"apel", "harga"=>40000, "jumlah"=>10];
$b1 = ["kode"=>"1222", "buah"=>"mangga", "harga"=>50000, "jumlah"=> 12];
$c1 = ["kode"=>"133", "buah"=>"pisang", "harga"=>60000, "jumlah"=> 20];

$arrayBuah = [$a1, $b1, $c1];

// deklarasi nama nama buah pada tabel header menggunkan looping array 
$arrayJudul = ['No', 'kode', 'Buah', 'Harga', 'Jumlah', 'harga kotor', 'diskon', 'harga bayaran'];

// echo "<table border='1' cellspacing='1' cellpadding='1' align='center'>";

// fungsi array agregat 
$jumlahHarga = array_column($arrayBuah,"harga");

$hargaTotal = array_sum($jumlahHarga);
$hargaTertinggi = max($jumlahHarga);
$hargaTerendah = min($jumlahHarga);
$jumlahTransaksi = count($arrayBuah);
$hargaRataRata = $hargaTotal / $jumlahTransaksi;
$kterangan = [
    "harga total" => $hargaTotal,
    "harga tertinggi" => $hargaTertinggi,
    "harga terendah" => $hargaTerendah,
    "jumlah transaksi" => $jumlahTransaksi,
    "harga rata rata" => $hargaRataRata
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tetser array</title>
</head>
<body>
    <h3 align="center">Daftar buah buahan</h3>
    <table border="1" cellpadding="10" cellspacing="2" width="100%">
        <thead>
            <?php
            foreach ($arrayJudul as $data) {?>
                <th><?= $data ?></th>
             <?php
            }
             ?>
        </thead>
        <tbody>
            <?php
            $no = 1;
             foreach($arrayBuah as $buah){
                $hargaKotor = $buah["harga"] * $buah["jumlah"];
                $diskon = ($buah["buah"] == "mangga" && $buah["jumlah"] >= 5) ? 0.2 : 0.1;
                $hargaDiskon = $diskon * $hargaKotor;
                $hagraBayar = $hargaKotor - $hargaDiskon;
                ?>
        
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $buah['kode'] ?></td>
                <td><?= $buah['buah'] ?></td>
                <td><?= $buah['harga'] ?></td>
                <td><?= $buah['jumlah'] ?></td>
                <td><?= $hargaKotor ?></td>
                <td><?= $hargaDiskon ?></td>
                <td><?= $hagraBayar ?></td>
            </tr>
            <?php } ?>
        </tbody>
        <tfoot>
            <?php
                foreach($kterangan as $ket => $hasil){ ?>
                <tr>
                    <th><?= $ket ?></th>
                    <th><?= $hasil ?></th>
                </tr>
                <?php } ?>
        </tfoot>
    </table>

</body>
</html>