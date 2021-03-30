<?php

require 'dados.php';

if(isset($_POST['cadastrar'])){
	
	// require 'consistencia_cadastro.php';
	
	$id = gravar_usuario( 	$_POST['nome'], $_POST['CPF'], $_POST['dataNasc'], $_POST['sexo'], 
							$_POST['email'], $_POST['senha'], $_POST['endereco'], $_POST['telefone'] );

	if( $id ) {//se for false, null, 0, vazio, ele não entra no else;
	session_start();
	$_SESSION['id'] = $id;
	
	$_SESSION['login'] = $_POST['email'];
	


	header('Location: ./sobrenos_tpl.php'); //o header('Location: n/x') redireciona para algum diretório, arquivo. aqui está voltando duas pastas sem arquivo definido, ou seja, o index.
	
	}else{

		$erros = ['Não foi possível criar o usuário!'];

	}
	
}else{

    $erros = [];   

}

include 'cadastro-usuario_tpl.php';
