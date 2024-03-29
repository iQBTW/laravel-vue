<?php 

    $nama = "Rizqy";
    $tb = 1.72; // tinggi dalam meter
    $bb = 52;

    $BMI = $bb / ($tb * $tb);

    if($BMI < 18.5) {
        echo "Halo, nama saya : $nama. <br>Nilai BMI anda : $BMI, anda termasuk Underweight";
    } else if($BMI >= 18.5 && $BMI <= 24.9) {
        echo "Halo, nama saya : $nama. <br>Nilai BMI anda : $BMI, anda termasuk Normal Weight";
    } else if($BMI >= 25 && $BMI <= 29.9) {
        echo "Halo, nama saya : $nama. <br>Nilai BMI anda : $BMI, anda termasuk Overweight";
    } else if($BMI >= 30) {
        echo "Halo, nama saya : $nama. <br>Nilai BMI anda : $BMI, anda termasuk Obesity";
    }

?>