<?php
$array = array('saya <br>',10);

$aso = [
    [
        'volvo' => '<li>volvo',
        '22' => '<li>22',
        '23' => '<li>18',
    ],

    [
        'volvo' => '<li>bmw',
        '22' => '<li>15',
        '23' => '<li>13',
    ],
    [
        'volvo' => '<li>saab',
        '22' => '<li>5',
        '23' => '<li>2',
    ],
    [
        'volvo' => '<li>Land Rover',
        '22' => '<li>17',
        '23' => '<li>15',
    ],


    ];

    foreach ($aso as $value) {
        echo "<p>"; 
        echo "<strong>Data mobil "."<br></strong>";
        echo $value["volvo"] . "<br>";
        echo $value["22"] . "<br>";
        echo $value["23"] . "<br>";

    }
    echo '<hr>';
   
    
    ?>