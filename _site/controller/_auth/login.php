<?php
include ('../connection.php');
session_name(md5('seg'.$_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']));
session_start();

$email = filter_input(INPUT_POST, "txt_email");
$paswd = md5(filter_input(INPUT_POST, "txt_senha"));
$class = filter_input(INPUT_POST, "class");

$sql = "SELECT id, nome, class, email, senha, foto FROM login WHERE email = '$email' AND senha = '$paswd';";
$res = mysqli_query($con, $sql);
$array = mysqli_num_rows($res);

if($array != 0) {
	do{
		$nome = $array['nome'];
        $classi = $array['class'];
        $perfil = $array['foto'];
	} while($array = mysqli_fetch_assoc($res));

    $_SESSION['class'] = $classi;
    $_SESSION['nome'] = $nome;
	$_SESSION['email'] = true;
    $_SESSION['paswd'] = true;
    $_SESSION['profile'] = $perfil;

    if ($classi == 1){
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/iHuman/_site/view/admin.php'><script type='text/javascript'>alert('Adm logado!');</script>";
    }
    else{
        echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/iHuman/_site/home.php'><script type='text/javascript'>alert('Usuário logado!');</script>";
    }
}
else {
    unset($_SESSION['class']);
    unset($_SESSION['nome']);
	unset($_SESSION['email']);
   	unset($_SESSION['paswd']);
   	
   	
	echo "<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=http://localhost/iHuman/_site/model/form_login.php'><script type='text/javascript'>alert('Usuário ou senha incorretos, tente novamente!');</script>";
}
?>