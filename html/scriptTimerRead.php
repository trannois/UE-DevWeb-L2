<?php
session_start();

if(isset($_SESSION['startChrono'])) {
    $val = ["duree" => (time() - $_SESSION['startChrono'])];
} else {
    $val = ["duree" => -1];
}

echo json_encode($val);