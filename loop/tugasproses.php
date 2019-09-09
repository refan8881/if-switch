<?php
if (isset($_POST['Pilih'])) {
    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $alamat = $_POST['alamat'];
    $jenkel = $_POST['jalu || bikang'];
    $agama = $_POST['agama'];
    $sekolah = $_POST['sekolah'];
    $ortu = $_POST['ortu'];
    $mapel01 = $_POST['mapel01 || mapel02 || mapel03'];
    $ijazah = $_POST['ijazah'];
    $email = $_POST['email'];

    echo "Nama :".$nama. "<br>";
    echo "NIS :".$nis. "<br>";
    echo "Alamat :".$alamat. "<br>";
    if (isset($_POST['jalu'])) {
        echo "Jenis Kelamin ". $_POST['jalu'] . "<br>";
    }
    if (isset($_POST['bikang'])) {
        echo "Jenis Kelamin ". $_POST['bikang'] . "<br>";
    }
    echo "Agama : " . $agama ."<br>";
    echo "Asal Sekolah : ".$sekolah. "<br>";
    echo "Nama Orang Tua : ".$ortu. "<br>";
    if (isset($_POST['mapel01'])) {
        echo "Pelajaran Yang Di Sukai  : ". $_POST['mapel01'] . "<br>";
    }
    if (isset($_POST['mapel02'])) {
        echo ",  :". $_POST['mapel02']  ;
    }
    if (isset($_POST['mapel03'])) {
        echo ", : ". $_POST['mapel03'] . "<br>" ;
    }
     echo "Total Nilai Ijazah :".$ijazah. "<br>";
      echo "Email :".$email. "<br>";
}
if ($ijazah >= 23) {
    echo "Status : LULUS";
}elseif ($ijazah < 23) {
    echo "Status : Tidak Lulus";
}
?>