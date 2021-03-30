<?php

$nome = $_POST['nome'] ?? null;
$CPF = $_POST['CPF'] ?? null;
$email = $_POST['email'] ?? null;
$senha = $_POST['senha'] ?? null;
$conf_senha = $_POST['conf_senha'] ?? null;
$endereco = $_POST['endereco'] ?? null;
$telefone = $_POST['telefone'] ?? null;

$senha = trim($senha);
$email = strtolower( $email );//trata o e-mail - fica tudo minúsculo

$erros = [];

// //Verifica se nome tem dois ou mais caracteres 
// if ( strlen($nome) < 2 ) {

// 	$erros[] = 'O nome tem que ter ao menos dois caracteres';

// }

// if ( !filter_input(INPUT_POST,'CPF', FILTER_VALIDATE_INT) ) {

// 	$erros[] = 'CPF zerado ou coloque apenas números!';
// }

// //Verifica se o e-mail é válido
// if ( !filter_var( $email, FILTER_VALIDATE_EMAIL) ) {

// 	$erros[] = 'E-mail inválido';

// //faz o desvio do momento do cadastro e da edição com: && !isset($_POST['gravar'])
// } 

//Verifica se a senha tem no mínimo 8 caracteres
// if ( strlen($senha) < 8 ) {

// 	$erros[] = 'A senha tem que ter ao menos oito caracteres';

// //Verifica se a confirmação da senha bate
// } elseif ( $senha != $conf_senha ) {

// 	$erros[] = 'A confirmação da senha não é válida';
// }

// if ( !filter_input(INPUT_POST,'telefone', FILTER_VALIDATE_INT) ) {

// 	$erros[] = 'Coloque apenas números no Telefone!';
// }
