<?php

$names = [];
$classes = [];

for ($i = 1; $i <= 10; $i++) {
    $names[] = "Nama ke-$i";
    $classes[] = "Kelas " . (11 - $i); // Membuat kelas dari 10 sampai 1
}

    echo "<table border='1' cellspacing='0' cellpadding='5'>";
    echo "<thead style='background-color: aqua;'><th>No</th><th>Name</th><th>Class</th></thead>";
    foreach($names as $key => $name){ // Looping data names dan classes
        echo "<tr";
        if ($i % 2 == 1) { // Jika nomor baris gancil, tambahkan background color
        echo " style='background-color: lightgray;'";
        }
        echo ">
                <td>$i</td>
                <td>$name</td>
                <td>{$classes[$key]}</td>
            </tr>";
        $i++;
    }
    echo "</table>";
?>