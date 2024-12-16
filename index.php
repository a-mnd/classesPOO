<?php
//classe sempre começa com maisucula e também usa-se a maiuscula no nome do arquivo ex: Pessoa.php
//modficiador de acceso tipo  e variável

//super -pai 
//sub - filho
class Pessoa { 
    private string $nome;
    private int $idade;
    private float $altura;
    private string $cpf;

    //no contexto de calsse se chama de método
    public function getNome(){
        return $this->nome;

    }
    public function setNome($nome){
        $this->nome = $nome;
    }
    public function getIdade(){
        return $this->idade;
    }
    public function getAltura(){
        return $this->altura;
    }
    public function getCpf(){
        return $this->cpf;
    }

    //método construtor
    public function __construct(String $nome, int $idade, float $altura, string $cpf){
        $this->nome = $nome;
        $this->altura = $altura;
        $this->idade = $idade;
        $this->cpf = $cpf;

    }
    
}

//instanciar a classe Pessoa (Criar), "já instanciou a classe ?" ou seja já criou um objeto a partir da classe
//instancia da classe Pessoa
$pessoa = new Pessoa('Lee Harker', 25, 1.55, '666-333-999-63'); //com construct
//var_dump($pessoa);
$outrapessoa = new Pessoa('Clarice Starling', 27, 1.65, '123.456.789-00');

echo $pessoa->getNome();
echo "<br>";
echo $pessoa->getIdade();
echo "<br>";
echo $pessoa->getAltura();
echo "<br>";
echo $pessoa->getCpf();
echo "<br>";
echo $outrapessoa->getNome();
echo "<br>";
echo $outrapessoa->getIdade();
echo "<br>";
echo $outrapessoa->getAltura();
echo "<br>";
echo $outrapessoa->getCpf();


// $pessoa ->setNome('Lee Harker'); // sem ser construct aqui passamos o nome
// $pessoa->$nome = "Lee"; //método public assim 
// $pessoa->$idade = 25;
// $pessoa->$altura = 1.55;
// $pessoa->$cpf = "666.333.999-63";
//. ponto no js e php é seta ->

// echo $pessoa->getNome(); //sme ser construct mostra assim 
// echo "<br>";
// echo $pessoa->idade; //public mostra assim 
// echo "<br>";
// echo $pessoa->altura;
// echo "<br>";
// echo $pessoa->cpf;

//$this: refere-se a propria classe | self: refere-se a propria classe | parent: refere-se a classe pai
class Juridica extends Pessoa {//herança
    private String $cnpj;

    //override:sobreescever --- polimorfismo
    public function getCpf(){
        echo "Essa pessoa é jurídica";
    }

    public function __construct(String $nome, int $idade, float $altura, string $cpf, string $cnpj){
        parent::__construct($nome, $idade, $altura, $cpf);
        $this->cnpj =$cnpj;
    }
    public function getCNPJ(){
        return $this->cnpj;
    }
    public function setCNPJ($cnpj){
        $this->cnpj = $cnpj;
    }
    
}

$pessoaJuridica = new Juridica('Janio', 66, 1.66, '123.456.789-89', '321654987/0001-95');
echo "<br>";
echo "<br>";
var_dump($pessoaJuridica);
echo "<br>";
echo "<br>";
echo $pessoaJuridica->getCNPJ();
echo $pessoaJuridica->getCpf();

echo "<br>";
echo "<br>";

include_once "Animal.php";
$umAnimal = new Animal(4, 5.5, 'gato', 'felino', 2);
echo $umAnimal->getNome();
echo "<br>";
echo $umAnimal->comunicar() ."miaaaaau";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";

include_once "Gato.php";
$gato = new Gato(4, 5.5, 'Felix', 'felino', 2, 'bigodudo');
echo $gato->getNome();
echo "<br>";
echo $gato->getPatas() ." patas";
echo "<br>";
echo $gato->getPeso() ."kg";
echo "<br>";
echo $gato->getEspecie();
echo "<br>";
echo $gato->getAnos() ." anos";
echo "<br>";
echo $gato->getBigode();
echo "<br>";
echo $gato->comunicar();
echo "<br>";
echo "<br>";

include_once "Cachorro.php";
$cachorro = new Cachorro(4, 7.5, 'Hook', 'canino', 1, 'Abana o rabinho');
echo $cachorro->getNome();
echo "<br>";
echo $cachorro->getPatas() ." patas";
echo "<br>";
echo $cachorro->getPeso() ."kg";
echo "<br>";
echo $cachorro->getEspecie();
echo "<br>";
echo $cachorro->getAnos() ." ano";
echo "<br>";
echo $cachorro->getRabinho();
echo "<br>";
echo $cachorro->comunicar();
echo "<br>";
echo "<br>";