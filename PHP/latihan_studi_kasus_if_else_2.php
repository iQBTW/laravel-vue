<?php

    $menu = 1;
    $bil1 = 30;
    $bil2 = 20;

    if($menu == 1) {
        echo $bil1 + $bil2;
    } else if($menu == 2) {
        echo $bil1 - $bil2;
    } else if($menu == 3) {
        echo $bil1 * $bil2;
    } else {
        echo $bil1 / $bil2;
    }

?>