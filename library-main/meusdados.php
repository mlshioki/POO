<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// require 'sessao.php';

require 'dados.php';

chdir( __DIR__ );//ajustar o diretório(começa dentro do dados.php e termina aqui)
//sempre teste quando for fazer um require ou include para ver se está puxando msm;
// if($_SESSION['login'] = 'ronald@gmail.com' ){

if ( isset($_POST['atualizar']) ) {

	require 'consistencia_cadastro.php';

	if ( count($erros) == 0 ) {

		if ( !edita_meu_usuario($_POST['ID'], $_POST['nome'], $_POST['CPF'], 
								$_POST['dataNasc'], $_POST['sexo'], $_POST['email'], 
								$_POST['senha'], $_POST['endereco'], $_POST['telefone']) ) {
			
			$erros = ['Erro ao tentar editar o usuário!'];

		} else {
			$editado_ok = true;
		}
	}

    require './require/head_links.php';
    require './require/header.php';
    require 'minha-conta_tpl.php';
    require './require/footer.php';

	exit();	
}

if ( isset($_GET['editar']) ) {

	$usuario = lista_meus_dados($_GET['editar']);

	$nome = $usuario[0]['Nome'] ?? '';
    $CPF = $usuario[0]['CPF'] ?? '';
    $dataNasc = $usuario[0]['DataNascimento'] ?? '';
    $sexo = $usuario[0]['Sexo'] ?? '';
    $email = $usuario[0]['Email'] ?? '';
    $endereco = $usuario[0]['Endereco'] ?? '';
    $telefone = $usuario[0]['Telefone'] ?? '';

    require './require/head_links.php';
    require './require/header.php';
    require 'minha-conta_tpl.php';
    require './require/footer.php';

	exit();
}

$lista = lista_meus_dados();
require 'minha-conta_tpl.php';
//  }else{
//     require 'sobrenos_tpl';
// }
?>