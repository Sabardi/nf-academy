<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>FORM LOGIN</h1>

    <form action="latihan-4.php" method="POST">
        <div>
            <label for="">Nama</label>
            <input type="text" name="Nama" id="">
        </div>
        <div>
            <label for="">Password</label>
            <input type="password" name="password" id="">
        </div>
        <div>
            <label for="">email</label>
            <input type="email" name="email" id="">
        </div>
        <div>
            <label for="">Tanggal Lahir</label>
            <input type="date" name="date" id="">
        </div>

        <div>
            <label for="">Jenis kelamin</label>
            <input type="radio" name="jk" id="" value="Laki-laki">Laki-laki
            <input type="radio" name="jk" id="" value="Prempuan" >prempuan
        </div>

        <div>
            <input type="submit" name="submit" id="">
        </div>
    </form>
</body>
</html>

<?php
echo "<hr>";
echo "nama :" .$_POST["Nama"]. "<br>";
echo "pass :" .$_POST["password"]. "<br>";
echo "email :" .$_POST["email"]. "<br>";
echo "Tanggal Lahir :" .$_POST["date"]. "<br>";
echo "Jenis kelamiin :" .$_POST["jk"]. "<br>";
?>