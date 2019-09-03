<?php
$asu =["barang","harga",];
$aso = [

    [
        'barang' => 'buku tulis',
        'harga' => '400',
        'berat' => '100 gram',
    ]
];
    

   
    foreach ($aso as $value) {
        echo "barang : ".$value['barang'] . "<br>";
        echo "harga : ".$value['harga'] . "<br>";
        echo "berat : " .$value['berat'] ."<br>";

    }
   
    ?>