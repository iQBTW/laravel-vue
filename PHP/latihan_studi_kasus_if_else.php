<?php

    $nama = "Rizqy Arniza";
    $jenis_kelamin = "Pria";
    $tahun_lahir = 2000;
    $umur = date('Y') - $tahun_lahir;

    if($jenis_kelamin == "Pria") {
        echo "Selamat pagi, tuan $nama <br>";
        echo "Umur anda sekarang $umur";
    } else {
        echo "Selamat pagi, nyonya $nama <br>";
        echo "Umur anda sekarang $umur";
    }

?>