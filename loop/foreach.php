<?php
$array = array('saya <br>',10);
$aso = [
    [
        'nama' => 'agung wahyudi',
        'kelas' => 'rpl 2',
    ],

    [
        'nama' => 'agung refan',
        'kelas' => 'rpl 233',
    ],


    ];

    foreach ($aso as $value) {
        echo $value["nama"] . "<br>";
        echo $value["kelas"] . "<br>";

    }
    echo '<hr>';
    $countaso = count($aso);
    for ($i=0; $i < $countaso; $i++) { 
        echo $aso["nama"] . "<br>";
        echo $aso["kelas"] . "<br>";
    }
    ?>