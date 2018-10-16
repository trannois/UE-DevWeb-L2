<?php
if (file_exists("chrono"))
    exit();

$hdl = fopen("chrono","w");
fwrite($hdl, mktime());
fclose($hdl);