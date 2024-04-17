<?php

    $array = file_get_contents('./json/data_studikasus.json');
    $data = json_decode($array, true);

    foreach($data as $key => $value){
        echo "Nama : " . $value['nama'] . " - " . "Umur : " . $value['umur'] . " - " . "Kelas : " . $value['kelas'] . "<br>";
    }

?>