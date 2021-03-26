<?php
Class Carta{
	protected $carta;
	protected $grau;
	protected $nivel;


    public function setCarta($carta): bool {
        $this->carta = $carta;
        return true;
    }

    public function getCarta(): string {
        return $this->carta;
    }
}

Class Limitado extends Carta {
    protected $tipo;
    
    public function setTipo( string $tipo): bool{
        $this->tipo = $tipo;
        return true;
    }

    public function getTipo(): string {
        return $this->tipo;
    }
}

$card = new Limitado;

$card->setCarta('Taeyeon Playlist');

echo "\nA carta é " . $card->getCarta() . "\n\n";