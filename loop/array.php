<?php
$a = array('ahmad',19,true,3.19);

echo "array menggunakan echo<br>";
echo $a[0];
echo $a[3];


echo "<br>";
echo "array menggunakan looping for<br>";
for ($i=0; $i < count($a); $i++) { 
    echo "array - " . $a[$i] . "<br>";
}
echo "<br>";
foreach ($a as $data => $value) {
    echo "array - " .$data.$value.  "<br>";
}
?>