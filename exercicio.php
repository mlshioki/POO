<?php

Class Usuario{
	private $pdo;
	public $msgErro = "";

	public function conectar($nome, $host, $usuario, $senha){
		global $pdo;
		try{
			$pdo = new PDO("mysql:dbname=".$nome,$usuario,$senha);
		} catch (PDOException $e){
			$msgErro = $e->getMessage();
		}
	}

	public function cadastrar($nome, $telefone, $email, $senha){
		global $pdo;
		$sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e");
		$sql->bindValue(":e",$email);
		$sql->execute();
		if($sql->rowCount() > 0){
			return false; 
		}
		else{
			$sql = $pdo->prepare("INSERT INTO usuarios (nome, telefone, email, senha) VALUES (:n, :t, :e, :s)");
			$sql->bindValue(":n",$nome);
			$sql->bindValue(":t",$telefone);
			$sql->bindValue(":e",$email);
			$sql->bindValue(":s",md5($senha));
			$sql->execute();
			return true;
		}
	}


	public function logar($email, $senha){
		global $pdo;
		$sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e AND senha = :s");
		$sql->bindValue(":e",$email);
		$sql->bindValue(":s",md5($senha));
		$sql->execute();

		if($sql->rowCount() > 0){
			$dado = $sql->fetch();
			session_start();
			$_SESSION['id_usuario'] = $dado['id_usuario'];
			return true;
		}
		else{
			return false;
		}
	}
}


//Versão sem ferir o princípio de responsabilidade única
class Usuario{
	public $pdo;
	public $msgErro = "";
    private $email;
    private $senha;

    public function logar($email, $senha){
		global $pdo;
		$sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e AND senha = :s");
		$sql->bindValue(":e",$email);
		$sql->bindValue(":s",md5($senha));
		$sql->execute();
		if($sql->rowCount() > 0){
			$dado = $sql->fetch();
			session_start();
			$_SESSION['id_usuario'] = $dado['id_usuario'];
			return true; 
		}
		else{
			return false;
		}
	}
}

class Usuario extends connectarBanco{
    
    public function conectar($nome, $host, $usuario, $senha){
		try{
			$pdo = new PDO("mysql:dbname=".$nome,$usuario,$senha);
		} catch(PDOException $e){
			$msgErro = $e->getMessage();
		}
	}
}

class Usuario extends fazerCadastro{

    public function cadastrar($nome, $telefone, $email, $senha){
		global $pdo;
		$sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e");
		$sql->bindValue(":e",$email);
		$sql->execute();
		if($sql->rowCount() > 0){
			return false;
		}
		else{
			$sql = $pdo->prepare("INSERT INTO usuarios (nome, telefone, email, senha) VALUES (:n, :t, :e, :s)");
			$sql->bindValue(":n",$nome);
			$sql->bindValue(":t",$telefone);
			$sql->bindValue(":e",$email);
			$sql->bindValue(":s",md5($senha));
			$sql->execute();
			return true;
		}
	}
}