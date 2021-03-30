<?php

session_start();

require 'dados.php';

if (isset($_SESSION['login'])) { //Caso o usuario ja esteja logado no sistema
    
    require './require/head_links.php';
	require './require/header.php';
	require 'home.php';
	require './require/footer.php';

} elseif ( isset($_POST['entrar']) ) { // Caso o usuario preencheu o form de login

    $login = filter_var($_POST['login'],FILTER_SANITIZE_EMAIL);
    $senha = $_POST['senha'];

    //Verificar se existe o usuario e pegar o hash de senha
    $r = $db->query("SELECT Senha FROM usuario WHERE Email = '$login'");
	$reg = $r->fetch(PDO::FETCH_ASSOC);
	$hash = $reg['Senha'];

if ( password_verify($senha, $hash) ){

    $_SESSION['login'] = $login;

    require './require/head_links.php';
	require './require/header.php';
	require 'home.php';
	require './require/footer.php';

	}else{
		$msg = 'Credenciais inválidas, tente novamente!';
    	include 'login.php';
    }	

}else{// Caso o usuario tenha acabado de chegar no sistema
    	include 'login.php';
}

