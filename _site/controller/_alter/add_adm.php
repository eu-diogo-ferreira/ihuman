<?php
include_once('../connection.php');

$id = $_GET['id'];

$sql = "UPDATE login SET class = 1 WHERE id = '$id'";
$res = mysqli_query($con, $sql);

if (mysqli_affected_rows($con) != 0){
	 echo "<META HTTP-EQUIV=REFRESH CONTENT = "
    . "'0;URL=http://localhost/iHuman/_site/model/add_adm.php'>"
    . "<script type='text/javascript'>"
    . "alert('ADM cadastrado!');</script>";
}
else {
	 echo "<META HTTP-EQUIV=REFRESH CONTENT = "
    . "'0;URL=http://localhost/iHuman/_site/model/add_adm.php'>"
    . "<script type='text/javascript'>"
    . "alert('Erro ao cadastrar ADM.');</script>";
}
?>