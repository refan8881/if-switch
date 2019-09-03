<?php
$aso = [


['judul' => '<h1> JUDUL :belajar php & mysql untuk pemula',

'penulis' => '<h4>PENULISAN :admin smk',
],
['judul' => '<h1>JUDUL :belajar php & mysql untuk pemula',

'penulis' => '<h4>PENULIS :admini smk',
],
['judul' => '<h1>JUDUL :belajar php & mysql untuk pemula',

'penulis' => '<h4>PENULIS :adminn smk',
],




];

foreach ($aso as $tugas) {
    echo $tugas['judul']. "<br>";
    
    echo $tugas['penulis']. "<br>";
    echo '<hr>';
}