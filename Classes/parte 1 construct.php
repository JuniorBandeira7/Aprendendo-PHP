<?php

    //conjunto de variáves e funções
    //entende-se variáveis e funções como propriedades e metodos
    class Carro{
            var $tipo;//1= passeio /2= esporte/ 3=utilitario
            var $VelocidadeMaxima;
            var $nome;
            var $liga;
            var $velocidade;
        //metodo construtor(o mais importante):
        // é o metodo que sera automaticamente executado ao instanciar um objeto dessa classe
        public function __construct($ParametroTipo, $ParametroNome){//para fazer isso, cria-se uma function "__construct"
            //construct com dois "_" em vez do nome da classe
            $this->liga=false;//apontando para a variável liga(que é escopo global)
            //se eu boto apenas"$liga=false" essa variavél seria uma nova, do escopo da função
            $this->nome=$ParametroNome;
            $this->tipo=$ParametroTipo;
            $this->velocidade=0;
            if($ParametroTipo==1){
                $this->VelocidadeMaxima=160;
            }else if($ParametroTipo==2){
                $this->VelocidadeMaxima=300;
            }else{
                $this->VelocidadeMaxima=100;
            }
        }
        function ligar(){
            $this->liga=true;
        }
        function desligar(){
            $this->liga=false;
        }
        function velocidade($speed){
            if($speed > $this->VelocidadeMaxima){
                $this->velocidade=$this->VelocidadeMaxima;
            }else{
                $this->velocidade=$speed;
            }
        }
        function id(){
            echo "<hr/>";
            echo "Nome do carro: ".$this->nome;
            echo "<br/> Tipo do carro: ".$this->tipo;
            echo "<br/> Velocidade Máxima: ".$this->VelocidadeMaxima;
            echo "<br/> Velocidade atual: ".$this->velocidade;
            if($this->liga){
                echo "<br/>Este carro está ligado.";
            }else{
                echo "<br/>Desligado.";
            }
        }
    }

    $carro1= new carro(2,"Rapid");//new = novo objeto da classe carro
    //carro do tipo 2, com o nome:Rapid
    $carro2= new carro(3, "Carregador");
    $carro3= new carro(1, "Básico");

    $carro1->ligar();
    $carro1->velocidade(10);

    $carro1->id();
    $carro2->id();
    $carro3->id();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>