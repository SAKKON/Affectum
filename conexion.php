<?php



$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "loginreg";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$conn){
    die("No hay conexion con base de datos: ".$conexion->connect_error);
}

?>