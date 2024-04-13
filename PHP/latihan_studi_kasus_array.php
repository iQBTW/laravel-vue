<?php

    $array = array(
        array(
            'nama' => 'Pelita',
            'umur' => 20,
            'kelas' => 'Laravel'
        ),
        array(
            'nama' => 'Najmina',
            'umur' => 21,
            'kelas' => 'Vue JS'
        ),
        array(
            'nama' => 'Anita',
            'umur' => 22,
            'kelas' => 'Design'
        ),
        array(
            'nama' => 'Bayu',
            'umur' => 23,
            'kelas' => 'Digital Marketing'
        )
    );

    foreach ($array as $key => $value) {
        echo "Nama : " . $value['nama'] . " - " . "Umur : ".$value['umur'] . " - " . "Kelas : " . $value['kelas'] . "<br>";
    }

?>