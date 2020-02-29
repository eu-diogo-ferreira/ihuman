<?php
include_once ('../connection.php');

$nome = filter_input(INPUT_POST, "txt_nome");
$class = filter_input(INPUT_POST, "class");
$tipo = filter_input(INPUT_POST, "txt_tipo");
$email = filter_input(INPUT_POST, "txt_email");
$tel = filter_input(INPUT_POST, "txt_tel");
$cpf = filter_input(INPUT_POST, "txt_cpf");
$idade = filter_input(INPUT_POST, "txt_idade");
$end = filter_input(INPUT_POST, "txt_end");
$uf = filter_input(INPUT_POST, "txt_uf");
$gostos = filter_input(INPUT_POST, "txt_gostos");
$tutor = filter_input(INPUT_POST, "txt_tutor");
$senha = md5(filter_input(INPUT_POST, "txt_senha"));
$foto = "http://localhost/iHuman/_site/media/images/unicorn.png";
//txt_foto = $foto

$sql = "INSERT INTO login (nome, class, tipo, email, telefone, cpf, deficiencia, idade, endereco, uf, gostos, foto, tutor, senha) VALUES ('$nome', '$class', ' ', '$email', '$tel', '$cpf', ' ', '$idade', '$end', '$uf', '$gostos', '$foto', '$tutor', '$senha')";
$res = mysqli_query($con, $sql);
$array = mysqli_affected_rows($con);

if($array != 0) {
	echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=http://localhost/iHuman/_site/model/form_login.php'>"
	. "<script type='text/javascript'>alert('Usuário cadastrado com sucesso, faça Login!');</script>";
}
else {
    echo "<script type='text/javascript'>alert('Ops, não foi possível cadastrar esse Usuário :( ');</script>";
}