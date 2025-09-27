<?php

    // OPERATOR MATEMATIKA 
    $a = 10;
    $b = 3;

    $c = $a + $b; 
    echo "Hasil $a + $b = $c", "<br>";

    $c = $a - $b; 
    echo "Hasil $a - $b = $c", "<br>";

    $c = $a * $b; 
    echo "Hasil $a * $b = $c", "<br>";

    $c = $a / $b; 
    echo "Hasil $a / $b = $c", "<br>";
    echo "Hasil Atas $a / $b = ", ceil($c), "<br>";
    echo "Hasil Terdekat $a / $b = ", round($c), "<br>";
    echo "Hasil Bawah $a / $b = ", floor($c), "<br>";

    $c = $a % $b; 
    echo "Hasil $a % $b = $c", "<br><br>";

    // Operator Logika
    $c = $a > $b; 
    echo "$a > $b = $c", "<br>";

    $c = $a < $b; 
    echo "$a < $b = $c", "<br>";

    $c = $a == $b; 
    echo "$a == $b = $c", "<br>";

    $c = $a != $b; 
    echo "$a != $b = $c", "<br><br>";

    // Increment 
    $a++; 
    echo "Nilai a sekarang = $a", "<br>";

    // Operator String
    $kota = "Surabaya";
    $daerah = "Barat";

    $hasil = $kota . " " . $daerah; 
    $hasil .= ", Indonesia";
    echo $hasil;


?> 