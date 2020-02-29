<?php
include_once('../connection.php');

$id = $_GET['id'];

$sql = "DELETE FROM login WHERE id = '$id'";
$res = mysqli_query($con, $sql);

if (mysqli_affected_rows($con) != 0){
	 echo "<META HTTP-EQUIV=REFRESH CONTENT = "
    . "'0;URL=http://localhost/iHuman/_site/model/rem_user.php'>"
    . "<script type='text/javascript'>"
    . "alert('Usuário excluido com sucesso!');</script>";
}
else {
	 echo "<META HTTP-EQUIV=REFRESH CONTENT = "
    . "'0;URL=http://localhost/iHuman/_site/model/rem_user.php'>"
    . "<script type='text/javascript'>"
    . "alert('Erro ao excluir o usuário.');</script>";
}
?>