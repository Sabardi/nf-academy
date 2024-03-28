<?php
$a1 = ["Nama mahasiswa"=>"Budi", "nim"=>692820, "nilai"=>40];
$a2 = ["Nama mahasiswa"=>"Ani", "nim"=>692821, "nilai"=>60];
$a3 = ["Nama mahasiswa"=>"Citra", "nim"=>692822, "nilai"=>75];
$a4 = ["Nama mahasiswa"=>"Dika", "nim"=>692823, "nilai"=>55];
$a5 = ["Nama mahasiswa"=>"Eka", "nim"=>692824, "nilai"=>80];
$a6 = ["Nama mahasiswa"=>"Fani", "nim"=>692825, "nilai"=>65];
$a7 = ["Nama mahasiswa"=>"Gita", "nim"=>692826, "nilai"=>85];
$a8 = ["Nama mahasiswa"=>"Hadi", "nim"=>692827, "nilai"=>70];
$a9 = ["Nama mahasiswa"=>"Indra", "nim"=>692828, "nilai"=>90];
$a10 = ["Nama mahasiswa"=>"Joko", "nim"=>692829, "nilai"=>95];
$a11 = ["Nama mahasiswa"=>"Kartika", "nim"=>692830, "nilai"=>88];
$a12 = ["Nama mahasiswa"=>"Lina", "nim"=>692831, "nilai"=>78];
$a13 = ["Nama mahasiswa"=>"Mira", "nim"=>692832, "nilai"=>83];
$a14 = ["Nama mahasiswa"=>"Nita", "nim"=>692833, "nilai"=>92];
$a15 = ["Nama mahasiswa"=>"Oscar", "nim"=>692834, "nilai"=>87];
$a16 = ["Nama mahasiswa"=>"Putri", "nim"=>692835, "nilai"=>75];
$a17 = ["Nama mahasiswa"=>"Rudi", "nim"=>692836, "nilai"=>68];
$a18 = ["Nama mahasiswa"=>"Sinta", "nim"=>692837, "nilai"=>79];
$a19 = ["Nama mahasiswa"=>"Tono", "nim"=>692838, "nilai"=>82];
$a20 = ["Nama mahasiswa"=>"Vina", "nim"=>692839, "nilai"=>93];
$a21 = ["Nama mahasiswa"=>"Wati", "nim"=>692840, "nilai"=>85];
$a22 = ["Nama mahasiswa"=>"Yanti", "nim"=>692841, "nilai"=>89];
$a23 = ["Nama mahasiswa"=>"Zain", "nim"=>692842, "nilai"=>72];
$a24 = ["Nama mahasiswa"=>"Ari", "nim"=>692843, "nilai"=>63];
$a25 = ["Nama mahasiswa"=>"Bambang", "nim"=>692844, "nilai"=>77];
$a26 = ["Nama mahasiswa"=>"Cahya", "nim"=>692845, "nilai"=>81];
$a27 = ["Nama mahasiswa"=>"Dewi", "nim"=>692846, "nilai"=>73];
$a28 = ["Nama mahasiswa"=>"Eko", "nim"=>692847, "nilai"=>67];
$a29 = ["Nama mahasiswa"=>"Fajar", "nim"=>692848, "nilai"=>86];
$a30 = ["Nama mahasiswa"=>"Gatot", "nim"=>692849, "nilai"=>94];
$a31 = ["Nama mahasiswa"=>"Hana", "nim"=>692850, "nilai"=>76];
$a32 = ["Nama mahasiswa"=>"Irfan", "nim"=>692851, "nilai"=>84];
$a33 = ["Nama mahasiswa"=>"Juli", "nim"=>692852, "nilai"=>91];
$a34 = ["Nama mahasiswa"=>"Krisna", "nim"=>692853, "nilai"=>74];
$a35 = ["Nama mahasiswa"=>"Laras", "nim"=>692854, "nilai"=>66];
$a36 = ["Nama mahasiswa"=>"Maulana", "nim"=>692855, "nilai"=>57];
$a37 = ["Nama mahasiswa"=>"Nur", "nim"=>692856, "nilai"=>71];
$a38 = ["Nama mahasiswa"=>"Olive", "nim"=>692857, "nilai"=>79];
$a39 = ["Nama mahasiswa"=>"Panji", "nim"=>692858, "nilai"=>88];
$a40 = ["Nama mahasiswa"=>"Qori", "nim"=>692859, "nilai"=>90];
$a41 = ["Nama mahasiswa"=>"Ratna", "nim"=>692860, "nilai"=>82];
$a42 = ["Nama mahasiswa"=>"Sari", "nim"=>692861, "nilai"=>69];
$a43 = ["Nama mahasiswa"=>"Tari", "nim"=>692862, "nilai"=>64];
$a44 = ["Nama mahasiswa"=>"Udin", "nim"=>692863, "nilai"=>83];
$a45 = ["Nama mahasiswa"=>"Vita", "nim"=>692864, "nilai"=>87];
$a46 = ["Nama mahasiswa"=>"Wulan", "nim"=>692865, "nilai"=>78];
$a47 = ["Nama mahasiswa"=>"Xena", "nim"=>692866, "nilai"=>96];
$a48 = ["Nama mahasiswa"=>"Yudi", "nim"=>692867, "nilai"=>72];
$a49 = ["Nama mahasiswa"=>"Zara", "nim"=>692868, "nilai"=>81];
$a50 = ["Nama mahasiswa"=>"Agus", "nim"=>692869, "nilai"=>75];
$a51 = ["Nama mahasiswa"=>"ibrahim", "nim"=>690, "nilai"=>30];

// Masukkan variabel-variabel tersebut ke dalam array
$datasiswa = [$a1, $a2, $a3, $a4, $a5, $a6, $a7, $a8, $a9, $a10, 
                   $a11, $a12, $a13, $a14, $a15, $a16, $a17, $a18, $a19, $a20, 
                   $a21, $a22, $a23, $a24, $a25, $a26, $a27, $a28, $a29, $a30, 
                   $a31, $a32, $a33, $a34, $a35, $a36, $a37, $a38, $a39, $a40, 
                   $a41, $a42, $a43, $a44, $a45, $a46, $a47, $a48, $a49, $a50,
                   $a51
                ];

// Mencetak array $datasiswa

$header = ['No','Nama Mahasiswa', 'Nim', 'Nilai', 'keterangan', 'Grade', 'Predikat'];

// menghitung agregat
$nilai = array_column($datasiswa, "nilai");
$nilaiTertinggi = max($nilai,);
$nilaiTerendah = min($nilai);

$jumlahNilai = array_sum($nilai);
$jumlahSiswa = count($datasiswa);
$nilaiRataRata = $jumlahNilai / $jumlahSiswa;
$totalNilai = $jumlahNilai;

$keterangan = [
    "Nilai Tertinggi"=> $nilaiTertinggi,
    "Nilai Terendah"=> $nilaiTerendah,
    "Nilai Rata Rata"=> $nilaiRataRata,
    "Jumlah Siswa"=> $jumlahSiswa,
    "Jumlah Nilai"=> $totalNilai
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- link table  -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <?php foreach($header as $thead){ ?>
                <th scope="col"><?= $thead ?></th>
                <?php } ?>
            </thead>
            <tbody>
        
            <?php
                $no =1;
                foreach($datasiswa as $data){ 
                    $cekLulus = ($data['nilai'] >=65) ? 'Lulus' : 'Tidak Lulus';
                    
                    if($data['nilai'] >85  && $data['nilai'] <=100 ){
                        $grade = "A";
                    }else if($data['nilai'] >75  && $data['nilai'] <=85 ){
                        $grade = "B";
                    }else if($data['nilai'] >65  && $data['nilai'] <=75 ){
                        $grade = "C";
                    }else if($data['nilai'] >30  && $data['nilai'] <=65 ){
                        $grade = "D";
                    }else{
                        $grade = "E";
                    }
        
                    switch($grade){
                        case "A":
                            $predikat = "Memuaskan";
                            break;
                        case "B":
                            $predikat = "Bagus";
                            break;
                        case "C":
                            $predikat = "Cukup";
                            break;
                        case "D":
                            $predikat = "Kurang";
                            break;
                        case "E":
                            $predikat = "Buruk";
                            break;
                        default:
                            $predikat = "";
                            break;
                    }
                    ?>
        
                <tr>
                <td><?= $no++ ?></td>
                <td><?= $data["Nama mahasiswa"] ?></td>
                <td><?= $data["nim"] ?></td>
                <td><?= $data["nilai"] ?></td>
                <td><?= $cekLulus ?></td>
                <td><?= $grade ?></td>
                <td><?= $predikat ?></td>
                </tr>
                <?php } ?>
            </tbody>
        
            <tfoot class="striped">
                <?php foreach ($keterangan as $ket => $hasil) { ?>
                <tr>
                    <th colspan="4" ><?= $ket ?></th>
                    <th colspan="5" ><?= $hasil ?></th>
                </tr>
                <?php } ?>
            </tfoot>
        </table>
    </div>

    <footer class="footer">
        <div class="container text-center bg-primary">
            <span class="text-muted">Copyright &copy Sabardi baharudin</span>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>