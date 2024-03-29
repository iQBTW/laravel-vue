<?php

    // Volume bangun ruang kubus
    echo "<h2>Volume bangun ruang kubus</h2>";
    $sisi = 4;
    echo "Sisi = $sisi";
    $volume = $sisi * $sisi * $sisi;
    echo "<br>Volume kubus = $volume";
    echo "<br>";

    // Volume bangun ruang balok
    echo "<h2>Volume bangun ruang balok</h2>";
    $panjang = 5;
    $lebar = 2;
    $tinggiBalok = 3;
    echo "Panjang = $panjang";
    echo "<br>Lebar = $lebar";
    echo "<br>Tinggi = $tinggiBalok";
    $volume = $panjang * $lebar * $tinggiBalok;
    echo "<br>Volume balok = $volume";
    echo "<br>";

    // Volume prisma segitiga
    echo "<h2>Volume bangun prisma segitiga</h2>";
    $tinggiPrisma = 5;
    $alas = 3;
    $volume = $alas * $tinggiPrisma / 2;
    echo "Tinggi = $tinggiPrisma";
    echo "<br>Alas = $alas";
    echo "<br>Volume prisma segitiga = $volume";
    echo "<br>";
    
?>