<?php

function segitiga($alas, $tinggi, $luas){

    echo "<b><h2>SEGITIGA<br></h2></b>";
    echo "alas segitiga : $alas<br>";
    echo "tinggi segitiga : $tinggi<br>";
    echo "hasil luas segitiga segitiga : $luas";

}
$a = 10;
$t = 20;
$luas = (($a*$t)/2);
segitiga($a,$t,$luas);

echo "<br>";
function lingkaran($jari=8)
{
    echo "<br>";
    echo "<b>LINGKARAN</b><br>";
    echo "jari jari lingkaran : $jari<br>";
    $luas = 3.14 * ($jari*$jari);
    $kel = 2 * (3.14*$jari);
    echo "luas lingkaran = $luas <br>";
    echo "keliling lingkaran = $kel<br>";   
}
$a = 10;
lingkaran($a);

?>