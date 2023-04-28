<?php

$serverName="localhost";
$dBUsername="root";
$dBPassword="";
$dBName="foodfestival";

$conn = mysqli_connect($serverName, $dBUsername, $dBPassword, $dBName );

if(!$conn){
    die("Eroare de conexiune!:"  . mysqli_connect_error());
}




