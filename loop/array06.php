<?php
$arrnilai = array ("ani" => 80, "otim" => 90, "sri" => 75, "budi" => 85);
echo "<b>array sebelum penggurutan</b>";
echo "<pre>";
print_r($arrnilai);
echo "</pre>";

sort($arrnilai);
reset($arrnilai);
echo "<b>array setelah pengurutan dengan sort()</b>";
echo "<pre>";
print_r($arrnilai);
echo "</pre>";

rsort($arrnilai);
reset($arrnilai);
echo "<b>array setelah pengurutan dengan rsort ()</b>";
echo "<pre>";
print_r($arrnilai);
echo "</pre>";
?>