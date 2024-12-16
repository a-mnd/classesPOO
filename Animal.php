<?php

//nome da Classe com a primeira letra maiúscula e o memo no nome do arquivo
class Animal {

    //atributos
    private int $patas;
    private float $peso;
    private string $nome;
    private string $especie;
    private int $anos;

    //método construtor 
    public function __construct(int $patas, float $peso, string $nome, string $especie, int $anos){
        $this->patas = $patas;
        $this->peso = $peso;
        $this->nome = $nome;
        $this->especie = $especie;
        $this->anos =$anos;
    }

    //getters
    public function getPatas():int { //Sempre os nomes dos métodos com camelCase
        return $this->patas;
    }
    public function getPeso():float { //avisar o tipo do retorno :float
        return $this->peso;
    }
    public function getNome():string{
        return $this->nome;
    }
    public function getEspecie():string{
        return $this->especie;
    }
    public function getAnos():int{
        return $this->anos;
    }
    //setters
    public function setPatas($patas){
        $this->patas = $patas;
    }
    public function setPeso($peso){
        $this->peso = $peso;
    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function setEspecie($especie){
        $this->especie = $especie;
    }
    public function setAnos($anos){
        $this->anos = $anos;
    }

    //método de comunicar
    public function comunicar(){
        echo "Animal se comunicando... ";
    }
}