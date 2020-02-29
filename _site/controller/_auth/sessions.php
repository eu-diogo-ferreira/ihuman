<?php
	//COMEÇO DA DEFINIÇÃO DE TODOS OS PARÂMETROS DAS MINHAS SESSÕES
	session_name(md5('seg'.$_SERVER['REMOTE_ADDR'].$_SERVER['HTTP_USER_AGENT']));

	//MÉTODO DE INIT
    session_start();

    //MÉTODO DE AUTENTICAÇÃO --> CASO SEJA FALSA 
    if((!isset ($_SESSION['email']) == true) and (!isset ($_SESSION['paswd']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['pass']);
        unset($_SESSION['name']);
        unset($_SESSION['rank']);
        header('location:http://localhost/iHuman/index.php');
    }
?>