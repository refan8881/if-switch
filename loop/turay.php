<?php
$daks = [
    ['nama:' => 'ujang','kelas:' => 'XI RPL 2','alamat' => 'cangkuang'],
    ['nama:' => 'mahmud','kelas:' => 'XI RPL 2','alamat:' => 'buah batu'],
    ['nama:' => 'ucok','kelas:' => 'XI RPL 3','alamat:' => 'cahem'],
];
echo "<pre>";
print_r($daks);
echo "</pre>";

$mode = end($daks[1]);
echo $mode."<br>"; //$mode = 'foot';
$mode = prev($daks[0]);
echo $mode."<br>"; //$mode = 'bike';
$mode = key($daks[1]);
echo $mode."<br>"; //$mode = 'bike';
$mode = reset($daks[1]);
echo $mode."<br>"; //$mode = 'foot';
$mode = next($daks[1]);
echo $mode."<br>"; //$mode = 'plane';
$mode = current($daks[1]);
echo $mode."<br>"; //$mode = 'plane';


?>