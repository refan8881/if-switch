<?php

$gol =0;

if ($gol >= 10) {
    echo "mendali emas, dengan total cetak gol : " .$gol;
}elseif ($gol >= 7) {
    echo "mendali perak dengan total cetak gol : " .$gol;
}elseif ($gol >= 4) {
    echo "mendali perunggu dengan total cetak gol : " .$gol;
}elseif ($gol < 4) {
    echo "mendali emas ngambang dengan total cetak gol : " .$gol;
}
switch ($gol) {
    case '20':
    echo "<p>mendapatkan 100 juta dengan gol : ".$gol;
        break;
        case '9':
        echo "<p>mendapatkan 1080 juta dengan gol : ".$gol;
            break;
            case '5':
    echo "<p>mendapatkan 50 juta dengan gol : ".$gol;
        break;
        case '0':
    echo "<p>dapat emas haneut dengan gol  : ".$gol;
        break;
        
    default:
        echo "<p>tidak dapat bonus";
        break;
}

?>