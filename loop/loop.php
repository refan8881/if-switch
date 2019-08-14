<?php
$loop =10;
$num =1;
for ($i=0; $i <= $loop; $i++) { 
    
if ($i == 1) {
    echo "<p>aku data ke-  ".$num++." dan mendapat mendali emas";
}
if ($i == 2) {
    echo "<p>aku data ke-  ".$num++." dan mendapat mendali perak";
}
if ($i == 3) {
    echo "<p>aku data ke-  ".$num++." dan mendapat mendali perunggu";
}
if ($i >= 4 && $i <= 6) {
    echo "<p>aku data ke-  ".$num++." dan mendapat tas laptop";
}
if ($i >= 7 && $i <= 9 ) {
    echo "<p>aku data ke-  ".$num++." dan mendapat tas laptop";
}
if ($i >= 10) {
    echo "<p>aku data ke-  ".$num++." dan mendapat tas laptop";
}


    
}