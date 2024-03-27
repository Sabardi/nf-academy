<?php
$nama = "budi";
$matkul = "php";
$nilai = 70;


$ket = ($nilai >=60) ? "lulus" : "gagal";

if ($nilai >= 85 && $nilai <= 100 ) {
    # code...
    $grade = "A";
}elseif($nilai >= 75 && $nilai <= 85){

    $grade = "B";
}elseif($nilai >= 65 && $nilai <= 75){

    $grade = "C";
}

switch ($grade) {
    case 'A':
        # code...
        $predikat = "memuaskan";
        break;
        case 'A':
            # code...
            $predikat = "Baik";
            break;
        case 'B':
            # code...
            $predikat = "cukup";
            break;
        case 'C':
                # code...
                $predikat = "jelek";
                break;
        default:
            # code...
            $predikat = "";
            break;
}
?>



<table border="1">
    <tr>
        <td>
            <label for="">Nama</label>
        </td>
        <td><?= $nama ?></td>
    </tr>
    <tr>
        <td>
            <label for="">matkul</label>
        </td>
        <td><?= $matkul ?></td>
    </tr>
    <tr>
        <td>
            <label for="">Nilai</label>
        </td>
        <td><?= $nilai ?></td>
    </tr>
    <tr>
        <td>
            <label for="">keterangan</label>
        </td>
        <td><?= $ket ?></td>
    </tr>
    <tr>
        <td>
            <label for="">Grade</label>
        </td>
        <td><?= $grade ?></td>
    </tr>
</table>