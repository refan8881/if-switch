<?php
//sekarang tanggal 13 april 2006 09:43:49
$arrday = array("minggu", "senin", "selasa", "rabu", "kamis", "jumat", "sabtu");
$day = date ("w"); // 0 - 6 of day

echo "hari ini hari : <b>". $arrday[$day]. "</b>";
?> 