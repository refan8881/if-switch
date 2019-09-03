<?php
$arrnilai = array ("ajeng" => 90, "mamat" => 70, "ucup" => 87, "ang" => 95, "syahrul" => 75);
foreach ($arrnilai as $nama => $nilai) {
    echo "<pre>";
    if ($nilai > 85) {
        echo "<h4>Nama : $nama , Nilai : $nilai GRADE A <br><hr>";
    }
    elseif ($nilai > 75) {
        echo "Nama : $nama , Nilai : $nilai GRADE B <br>";
    }
    elseif ($nilai > 65) {
        echo "Nama : $nama , Nilai : $nilai GRADE C <br><hr>";
    }
}

?>