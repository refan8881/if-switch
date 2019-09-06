<?php
if (isset($_POST['input'])) {
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$hobi = $_POST['hobi'];
echo "Nama Anda : <b>$nama</b>";
echo "<br>";
echo " kelas : <b>$kelas</b>";
echo "<br>";
echo "hobi : <b>$hobi</b>";
}
?>