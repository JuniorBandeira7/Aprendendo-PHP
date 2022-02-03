<?php

    //interface - serve como um rascunho, guia para outras classes
    interface CarroPadrao{
        function liga();
        function desliga();
        function status();
        function acelera();
        function freia();
    }
    interface CarroGuerra{
        function AtiraCanhao();
        function AtiraMetralhadora();
    }
    abstract class CarroBase implements CarroPadrao, CarroGuerra{
        public $potencia;
        public $VelocidadeMaxima;
        private $ligado=false;

        function liga(){
            $this->ligado=true;
        }
        function desliga(){
            $this->ligado=false;
        }
        function status(){
            echo "<hr/>";
            echo "potência: ".$this->potencia;
            echo "<br/> Velocidade Máxima: ".$this->VelocidadeMaxima;
            if($this->ligado==false){
                echo "Desligado";
            }else{
                echo "Ligado";
            }

            echo "<hr/>";
            
        }
        function acelera(){}
        function freia(){}
        function AtiraMetralhadora(){}
        function AtiraCanhao(){}
    }
    class Carro extends CarroBase{
        public function __construct($pt, $vm){
            $this->potencia=$pt;
            $this->VelocidadeMaxima=$vm;
            $this->status();
            }
    }
    $carro1=new Carro(150, 200);

?><!DOCTYPE html>
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