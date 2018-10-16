<?php
if (file_exists("chrono")) {
    $hdl = fopen("chrono", "r");
    $startTimeDuChrono = fread($hdl,filesize("chrono"));
    fclose($hdl);
    $diff = mktime() - $startTimeDuChrono;
    echo $diff;
}
