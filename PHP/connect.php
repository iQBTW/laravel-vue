<?php

    $conn = mysqli_connect("localhost","root","","perpustakaan");

    if(!$conn) {
        die("Connection Failed: ". mysqli_connect_error());
    }

    $query1 = "SELECT * FROM pengarang";
    $query2 = "SELECT * FROM katalog";
    $result1 = $conn->query( $query1 );
    $result2 = $conn->query( $query2 );

    if($result1->num_rows > 0) {
        while($row1 = $result1->fetch_assoc()) {
            echo "ID Pengarang: ".$row1["id_pengarang"]." Nama Pengarang: ".$row1["nama_pengarang"]."<br/>";
        }
    } else {
        echo "0 Results";
    }

    if($result2->num_rows > 0) {
        while($row2 = $result2->fetch_assoc()) {
            echo "ID Katalog: ".$row2["id_katalog"]." Nama Katalog: ".$row2["nama"]."<br/>";
        }
    } else {
        echo "0 Results";
    }
    mysqli_close($conn)

?>