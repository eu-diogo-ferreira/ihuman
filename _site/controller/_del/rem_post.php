<?php
include_once('../connection.php');

$idBlog = $_GET['id'];

$sql = "DELETE FROM blog WHERE idBlog = '$idBlog'";
$res = mysqli_query($con, $sql);

if (mysqli_affected_rows($con) != 0){
	 echo "<META HTTP-EQUIV=REFRESH CONTENT = "
    . "'0;URL=http://localhost/iHuman/_site/model/rem_post.php'>"
    . "<script type='text/javascript'>"
    . "alert('Post excluido com sucesso!');</script>";
}
else {
	 echo "<META HTTP-EQUIV=REFRESH CONTENT = "
    . "'0;URL=http://localhost/iHuman/_site/model/rem_post.php'>"
    . "<script type='text/javascript'>"
    . "alert('Erro ao excluir Post.');</script>";
}
?>