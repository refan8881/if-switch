<?php
function cetak_ganjil ($awal, $akhir){
    for ($i=$awal; $i <$akhir ; $i++) { 
        if ($i%2 == 1) {
        echo "<h3><lo>$i<br><hr>";
        }
    }
}
//pemanggilan fungsi
$a = 10;
$b = 70;
echo "<b>bilangan ganjil dari $a sampai $b : </b><br>";

cetak_ganjil($a, $b);
?>