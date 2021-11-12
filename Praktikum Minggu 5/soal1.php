<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="get">
        Bilangan 1: 10<br>
        Bilangan 2: 5<br>
    </form>
    <?php
    $bil1 = 10;
    $bil2 = 5;
    ?>
    <br>
    Berikut Merupakan hasil dari setiap operasi
    <br><br>
    PENJUMLAHAN<br>
    Operator:+<br>
    Hasil: &nbsp 
    <?php
    $hasil = $bil1 + $bil2;
    echo $hasil;
    ?><br>  
    <br>
    PENGURANGAN<br>
    Operator:-<br>
    Hasil: &nbsp 
    <?php 
        $hasil = $bil1 - $bil2;
        echo $hasil;
    ?><br>
    <br>
    PERKALIAN<br>
    Operator:*<br>
    Hasil: &nbsp 
    <?php 
        $hasil = $bil1 * $bil2;
        echo $hasil;
    ?><br>
    <br>
    PEMBAGIAN<br>
    Operator:/<br>
    Hasil: &nbsp 
    <?php 
        $hasil = $bil1 / $bil2;
        echo $hasil;
    ?><br>
    <br>
    MODULUS<br>
    Operator:%<br>
    Hasil: &nbsp 
    <?php 
        $hasil = $bil1 % $bil2;
        echo $hasil;
    ?><br>
    <br>
</body>
</html>