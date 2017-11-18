<?php
require_once 'userFunctions.php';
if(isset($_POST["search-email"])) {
    $value = trim($_POST["search-email"]);
    $Records = new Records();
    echo $Records->searchDate($value);
}