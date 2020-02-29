<?php 
$host = "localhost";
$user = "root";
$paswd = "";
$db = "ihuman";

$con = mysqli_connect($host, $user, $paswd, $db);
if(!$con) {
	die("conexão falhou." . mysqli_connect_error());
}
?>