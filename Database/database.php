<?php

$locatie = "localhost";
$director = "root";
$password = "";

$nume_baza = "login";

$DBconnect = mysqli_connect($locatie, $director, $password, $nume_baza);

if (!$DBconnect) {
    echo "Connection Failed";
}

 ?>
