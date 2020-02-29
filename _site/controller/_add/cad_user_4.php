<?php
include_once ('../connection.php');

$nome = filter_input(INPUT_POST, "txt_nome");
$class = filter_input(INPUT_POST, "class");
$email = filter_input(INPUT_POST, "txt_email");
$tel = filter_input(INPUT_POST, "txt_tel");
$cpf = filter_input(INPUT_POST, "txt_cpf");
$end = filter_input(INPUT_POST, "txt_end");
$uf = filter_input(INPUT_POST, "txt_uf");
$senha = md5(filter_input(INPUT_POST, "txt_senha"));
//$foto = "http://localhost/iHuman/_site/media/images/profiles/fho.png";
//txt_foto = $foto

if(isset($_FILES['txt_imagem'])){
    $ext = strtolower(substr($_FILES['txt_imagem']['name'],-4)); //Pegando extensão do arquivo
    $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
    $dir = '../../media/images/profiles/'; //Diretório para uploads
 
    move_uploaded_file($_FILES['txt_imagem']['tmp_name'], $dir.$new_name); //Fazer upload do arquivo
    
    $servidor = 'http://localhost/iHuman/_site/media/images/profiles/';

    $img = $servidor.$new_name;
}

$sql = "INSERT INTO login (id, nome, class, tipo, email, telefone, cpf, deficiencia, idade, endereco, uf, gostos, foto, tutor, senha) VALUES (0, '$nome', '$class', ' ', '$email', '$tel', '$cpf', ' ', ' ', '$end', '$uf', ' ', '$img', ' ', '$senha');";
$res = mysqli_query($con, $sql);
$array = mysqli_affected_rows($con);

if($array != 0) {
	/*echo "<META HTTP-EQUIV=REFRESH CONTENT='0;URL=http://localhost/iHuman/_site/model/form_login.php'>"
	. "<script type='text/javascript'>alert('Usuário cadastrado com sucesso, faça Login!');</script>";*/

	echo $img . '<br>';
	echo $nome . '<br>';
	echo $senha . '<br>';
	echo $tel . '<br>';
	echo $uf . '<br>';
	echo $class . '<br>';
	echo $cpf . '<br>';
	echo $email . '<br>';
	echo $end . '<br>';
}
else {
    echo "<script type='text/javascript'>alert('Ops, não foi possível cadastrar esse Usuário :( ');</script>";
}