<?php
if (isset($_POST['Input'])) {
    $nama1 = $_POST['nama1'];
    $nama2 = $_POST['nama2'];
    $nama3 = $_POST['nama3'];


    echo "<b>Rapot Ku <br></b>";
    echo "Nama :".$nama1. "<br>";
    echo "mapel1 :".$nama2. "<br>";
    echo "mapel2 :".$nama3. "<br>";


    $a =($nama2+$nama3)/2;
    echo "rata-rata = ".$a."<br>";

}
if ($a > 75) {
    echo "Status : LULUS";
}elseif ($a < 75) {
    echo "Status : TIDAK LULUS";
}
?>