<?php

class Frete{
    private $empresa;

    public function __construct(string $empresa){
        $this->empresa = $empresa;
    }

    public function calcular(){
        if ($this-> 'correios'){
            $logistica =  new Correios;
        } elseif ($this->empresa == 'TotalExpress'){
            //logica
        } elseif ($this->empresa == 'DHL'){
             //logica
        } else{
            return false;
        }
    }
}

Interface EmpresaDeLogistica{
    public function setPeso(){}
    public function setDestino(){}
    public function setOrigem(){}
    public function setTamanho(){}
}

class Correios implements EmpresaDeLogistica(){
    //logica
}

class TotalExpress implements EmpresaDeLogistica(){
    //logica
}

class DHL implements EmpresaDeLogistica(){
    //logica
}

class Frete{
    private $empresa;

    public function __construct(EmpresaDeLogistica $empresa){
        $this->empresa = $empresa;
    }
    public function calcular(){
        //logica com os metodos definidos na interface
    }
}

// exemplo02 de OCP (open close principate)

class Negativacao{

    private $devedor;

    public function __construct(Devedor $devedor){
        $this->devedor = $devedor;
    }


    //ASSIM CABO DE FERIR O ---OCP---
    public function enviar(string $orgaoNegativador){
        // logica

        if ($orgaoNegativador == 'serasa'){
            //logica
        } elseif ( $orgaoNegativador == 'SPC Brasil'){
            //logica
        } else{
            return ' Erro, orgao negativador nao suportado';
        }
    }
}

// REFATORANDO PARA ATENDERMOS AO OCP:

interface OrgaoNegativador{
    public function enviarRemessaInclusao();
    public function enviarRemessaExclusao();
    public function receberRetorno();
}

class Serasa implements OrgaoNegativador{

    public function enviarRemessaInclusao(){
        //logica
    }
    // E os demais metodos obrigatorio pela interface
}

class Negativacao{
    
    private $devedor;

    public function __construct(Devedor $devedor){ 
        $this->devedor = $devedor;
    }

    public function enviar (OrgaoNegativador $orgao){
        //logica
    }
}

class Main{
    public function restricao(){
        $negativacao = new Negativacao;
        $negativacao->enviar($orgao);
    }
}