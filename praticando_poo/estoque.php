<?php
require('classes/Usuario.class.php');
require('classes/Fabricante.class.php');
require('classes/Estoque.class.php');
require('classes/Movimentacao.class.php');

Class Main{
    private $objUsuario;
    private $objFabricante;
    private $objEstoque;
    private $objMovimentacao;

    public function __construct(){
        echo "\n\n--- COMEÇO DO PROGRAMA ---\n\n";

        $objUsuario = new Usuario;
        $objFabricante = new Fabricante;
        $objEstoque = new Estoque;
        $ObjMovimentacao = new Movimentacao;

        $this->verificaSeExisteArg(1);
		$this->executaOperacao( $_SERVER['argv'][1]);
    }

    private function excutaOperacao(string $operacao){
        switch ($operacao){
            //pega o segundo argumento passado pelo usuário via
			//linha de comando (o primeiro argumento é 
			//o próprio arquivo)
        case 'gravaUsuario':
            $this->gravaUsuario();
            break;

        case 'editaUsuario':
            $this->editaUsuario();
            break;
        case 'listaUsuario':
            $this->listaUsuario();
            break;	
        case 'apagaUsuario': 
            $this->apagaUsuario();
            break;	
        default:
            echo "\nERRO: Nao existe a funcionalidade {$_SERVER['argv'][1]}\n";
        }

    }

    private function apagaUsuario(){
        $dados = $this->tratarDados();
        $this->objUsuario->setDados($dados);
            if($this->objUsuario->delete()){
                echo "\nUsuário apagado com sucesso!\n";
            } else{
            echo "\nErro ao tentar apagar o usuário, você enviou o ID?\n";
            }
    }

    private function listaUsuario(){
        $lista = $this->objUsuario->getAll();
        
        foreach($lista as $usuario){
        	echo "{$usuario['id']}\t{$usuario['cpf']}\t{$usuario['nome']}\n";
        } 
    }

    public function editaUsuario($objUsuario){
        $dados = $this->tratarDados();
        
        $objUsuario->setDados($dados);
        
        if($objUsuario->gravarDados()){
            echo "\nUsuário editado com sucesso!\n";
        }
    }

    public function gravaUsuario($objUsuario){
        $dados = $this->tratarDados();
        $objUsuario->setDados($dados);
                
        if($objUsuario->gravarDados()){
            echo "\nUsuário gravado com sucesso!\n";
        }
                
    }

    private function verificaSeExisteArg(int $numArg){
        if(!isset($_SERVER['argv'][$numArg])){
            if($numArg == 1){
                $msg = "para utilizar o programa digite: php estoque.php [operação]";
            } else{
                $msg = "para utilizar o programa digite: php estoque.php [operação] [dado=valor,dado2=valor2,...,dadoN=valorN]";
            }
        echo "\n\nErro: $msg\n\n";
        exit();
        }
    }

    public function tratarDados(){               
        $args = explode( ',', $_SERVER['argv'][2]); //dados passados pelo usuário na linha de 	comando
                        
        foreach ($args as $valor){   			
            $arg = explode('=', $valor);
                        
            $dados[$arg[0]] = $arg[1];
        }

        return $dados;
    }

    public function __destruct(){
        sleep(1);
                                
        echo "\n\n--- FIM DO PROGRAMA ---\n\n";
    }
}
new Main;