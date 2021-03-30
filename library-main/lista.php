<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require 'sessao.php';

require 'dados.php';

chdir( __DIR__ );//ajustar o diretório(começa dentro do dados.php e termina aqui)
//sempre teste quando for fazer um require ou include para ver se está puxando msm;
// if($_SESSION['login'] = 'ronald@gmail.com' ){

//apagar
if( isset( $_GET['apagar'] )){
	if(!apagar_usuario( $_GET['apagar'] )){
		$erro = 'Não foi possível apagar o usuário!';
	}
}

if ( isset($_POST['gravar']) ) {

	require 'consistencia_cadastro.php';

	if ( count($erros) == 0 ) {

		if ( !editar_usuario( 	$_POST['ID'], $_POST['nome'], $_POST['CPF'], $_POST['email'], 
								$_POST['senha'], $_POST['endereco'], $_POST['telefone']) ) {
			
			$erros = ['Erro ao tentar editar o usuário!'];

		} else {

			$editado_ok = true;
		}
	}

    require './require/head_links.php';
    require './require/header.php';
    require 'editar.php';
    require './require/footer.php';

	exit();	
}

if ( isset($_GET['editar']) ) {

	$usuario = listarTudo($_GET['editar']);

	$nome = $usuario[0]['Nome'] ?? '';
    $CPF = $usuario[0]['CPF'] ?? '';
    $email = $usuario[0]['Email'] ?? '';
    $endereco = $usuario[0]['Endereco'] ?? '';
    $telefone = $usuario[0]['Telefone'] ?? '';    

    require './require/head_links.php';
    require './require/header.php';
    require 'editar.php';
    require './require/footer.php';

	exit();
}

$lista = listarTudo();
require 'lista_tpl.php';
//  }else{
//     require 'sobrenos_tpl';
// }

?>