<?php
Class Carta{
	static protected $carta = 'EXO D.O Tempo';
	protected $grau;
	protected $nivel;

	static public function setCarta($carta): bool {
		self::$carta = $carta;
		return true;
	}

	static public function getCarta(): string {
		return self::$carta;
	}

    public function setGrau(): bool {
        $this->grau = 'A';
        return true;
    }

    public function getGrau(): string {
        return $this->grau;
    }
}

echo "A carta é " . Carta::getCarta() . " e seu grau é ";

$card = new Carta;

$card->setGrau();

echo $card->getGrau() . "\n";