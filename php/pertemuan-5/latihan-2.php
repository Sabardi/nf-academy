<head>
    <title>Kalkulator</title>
</head>

<body>
    <form action="" method="GET">
        <table align="center" cellpadding="10" cellspacing="0" width="100%">
            <tbody>
                <tr bgcolor="red">
                    <td>
                        <input type="text" name="a1" id="">
                    </td>
                </tr>
                <tr bgcolor="red">
                    <td>
                        <input type="text" name="a2" id="">
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr bgcolor="red">
                    <th>
                        <button type="submit" name="proses" value="tambah">+</button>
                        <button type="submit" name="proses" value="kurang">-</button>
                        <button type="submit" name="proses" value="bagi">/</button>
                        <button type="submit" name="proses" value="kali">*</button>
                        <button type="submit" name="proses" value="pangkat">*</button>
                    </th>
                </tr>
            </tfoot>
        </table>
    </form>
</body>

<?php
    function hitung($a1, $a2, $tombol){
        if($tombol == "tambah"){
            $hasil = $a1 + $a2;
            return $hasil;
        }else if($tombol == 'kurang'){
            $hasil = $a1 - $a2;
            return $hasil;
        }else if($tombol == 'bagi'){
            $hasil = $a1 / $a2;
            return $hasil;
        }else if($tombol == 'kali'){
            $hasil = $a1 * $a2;
            return $hasil;
        }else if($tombol == 'pangkat'){
            $hasil = $a1 ** $a2;
            return $hasil;
        }
    }

    // tangkap data
    $a1 = $_GET["a1"];
    $a2 = $_GET["a2"];
    $tombol = $_GET['proses'];

    $hasil = hitung($a1, $a2, $tombol);

    // cetak dari pemanggilan 
    if(isset($tombol)){
        echo "hasil bilangan $a1 $tombol $a2 adalah $hasil";
    }
?>