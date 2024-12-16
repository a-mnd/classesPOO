<?php
include_once "Animal.php";

class Gato extends Animal {
    private string $bigode;

    public function comunicar(){
        echo "Animal se comunicando... miaaaaau";
    }
    public function __construct(int $patas, float $peso, string $nome, string $especie, int $anos, string $bigode){
        parent::__construct($patas, $peso, $nome, $especie, $anos);
        $this->bigode = $bigode;
    }
    public function getBigode():string{
        return $this->bigode;
    }
    public function setBigode($bigode){
        $this->bigode = $bigode;
    }
}
