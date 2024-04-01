<?php
include_once "webMenu.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web demo</title>
</head>
<body>
    <h1 align="center">Web Demo</h1>

    <div style="text-align: center; background-color: khaki; color: blue;" >
        <!-- Home | Produk | Galery | Gesbuk -->
        <!-- memanggil menu di php -->

        <?php
        foreach ($menuAtas as $key => $value) {
            echo "<a href='$value.php'>$key</a> ";
        }
        ?>
    </div>