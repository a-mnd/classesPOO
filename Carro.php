<?php
class Carro {
    private String $cor;
    private int $ano;
    private int $portas;
    private string $bonito;
    private string $marca;

    public function getCor(){
        return $this->cor;
    }
    public function setCor($cor){
        $this->cor = $cor;
    }
    public function getAno(){
        return $this->ano;
    }
    public function setAno($ano){
        $this->ano =$ano;
    }
    public function getPortas(){
        return $this->portas;
    }
    public function setPortas($portas){
        $this->portas = $portas;
    }
    public function getBonito(){
        return $this->bonito;
    }
    public function setBonito($bonito){
        $this->bonito = $bonito;
    }
    public function getMarca(){
        return $this->marca;
    }
    public function setMarca($marca){
        $this->marca = $marca;
    }

    public function __construct(String $cor, int $ano, int $portas, string $bonito, string $marca){
        $this->cor = $cor;
        $this->ano = $ano;
        $this->portas = $portas;
        $this->bonito = $bonito;
        $this->marca = $marca;
    }
}
$carro = new Carro ('preto', 2007, 4, 'muito bonito', 'Peugeot');
var_dump($carro);
echo "<br>";
echo "<br>";

echo $carro->getCor();
echo "<br>";
echo $carro->getAno();
echo "<br>";
echo $carro->getPortas(). " portas";
echo "<br>";
echo $carro->getBonito();
echo "<br>";
echo $carro->getMarca();
echo "<br>";
echo "<br>";

$carro->setCor('cinza');
echo "Nova cor do carro ". $carro->getCor();
echo "<br>";
echo "<br>";

$outrocarro = new Carro ('vermelho', 2005, 2, 'meio retrô', 'Fiat');
var_dump($outrocarro);
echo "<br>";
echo "<br>";

echo $outrocarro->getCor();
echo "<br>";
echo $outrocarro->getAno();
echo "<br>";
echo $outrocarro->getPortas(). " portas";
echo "<br>";
echo $outrocarro->getBonito();
echo "<br>";
echo $outrocarro->getMarca();
echo "<br>";
echo "<br>";

$outrocarro->setBonito('meio retrô, bem descolado');
echo "Agora mais bonito ". $outrocarro->getBonito();