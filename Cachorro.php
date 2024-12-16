<?php
include_once "Animal.php";
class Cachorro extends Animal {
    private string $abanaRabinho;

    public function comunicar(){
        echo "Animal se comunicando... auauauauau";
    }
    public function __construct(int $patas, float $peso, string $nome, string $especie, int $anos, string $abanaRabinho){
        parent::__construct($patas, $peso, $nome, $especie, $anos);
        $this->abanaRabinho = $abanaRabinho;
    }
    public function getRabinho():string{
        return $this->abanaRabinho;
    }
    public function setRabinho($abanaRabinho){
        $this->abanaRabinho = $abanaRabinho;
    }
}
