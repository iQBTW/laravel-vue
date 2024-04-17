<?php

    function LuasPersegi($sisi1, $sisi2) {
        $hasil = $sisi1 * $sisi2;
        echo "Luas Persegi = $hasil <br>";
    }

    function KelilingPersegi ($sisi) {
        $hasil = $sisi * 4;
        echo "Keliling Persegi = $hasil <br>";
    }

    function LuasPersegiPanjang($panjang, $lebar) {
        $hasil = $panjang * $lebar;
        echo "Luas Persegi Panjang = $hasil <br>";
    }

    function KelilingPersegiPanjang($panjang, $lebar) {
        $hasil = 2 * ($panjang + $lebar) ;
        echo "Keliling Persegi Panjang = $hasil <br>";
    }

    function LuasSegitiga($alas, $tinggi) {
        $hasil = 0.5 * $alas * $tinggi;
        echo "Luas Segitiga = $hasil <br>";
    }

    function KelilingSegitiga($sisi1, $sisi2, $sisi3) {
        $hasil = $sisi1 * $sisi2 * $sisi3;
        echo "Keliling Segitiga = $hasil <br>";
    }

    function LuasLingkaran($r) {
        $hasil = 3.14 * ($r * 2);
        echo "Luas Lingkaran = $hasil <br>";
    }

    function KelilingLingkaran($r) {
        $hasil = (3.14 * 2) * ($r * 2);
        echo "Keliling Lingkaran = $hasil <br>";
    }

    function LuasBelahKetupat($d1, $d2) {
        $hasil = $d1 * $d2 / 2;
        echo "Luas Belah Ketupat = $hasil <br>";
    }

    function KelilingBelahKetupat($sisi1, $sisi2, $sisi3, $sisi4) {
        $hasil = $sisi1 + $sisi2 + $sisi3 + $sisi4;
        echo "Keliling Belah Ketupat = $hasil <br>"; 
    }



    LuasPersegi(5, 10);
    KelilingPersegi(10);
    LuasPersegiPanjang(10, 5);
    KelilingPersegiPanjang(2, 3);
    LuasSegitiga(9, 2);
    KelilingSegitiga(5, 10, 2);
    LuasLingkaran(2);
    KelilingLingkaran(5);
    KelilingBelahKetupat(2, 3, 5, 8);
?>