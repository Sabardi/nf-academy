<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar siswa</title>
</head>
<body>
    <table border="1" cellspacing="1" cellpadding="1" align="center">
        <thead>
            <tr bgcolor="red">
                <th>No</th>
                <th>Nama</th>
                <th>Alamat</th>
            </tr>
        </thead>
        <tbody>
            <?php
                for($no = 1; $no <= 100; $no++){
                    $Warna = ($no % 2 == 0) ? 'red' : 'blue';

                    echo "<tr bgcolor='$Warna'>";
                    echo "<td>$no</td>";
                    echo "<td>nama siswa $no</td>";
                    echo "<td> jln badarudin $no</td>";
                    echo "</tr>";
                }
                ?>
        </tbody>

    </table>
</body>
</html>

<?php


?>