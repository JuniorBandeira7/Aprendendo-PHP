<?php
    //abstract - não pode criar um objeto de uma classe abstrata, não pode ser instanciada
    abstract class CarroBase{
        var $potencia;
        var $VelocidadeMaxima;
        var $portas;
        public $ligado=false;

        function liga(){
            $this->ligado=true;
        }
        function desligar(){
            $this->ligado=false;
        }
        function status(){
            echo "potência: ".$this->potencia;
            echo "<br/> Velocidade máxima: ".$this->VelocidadeMaxima;
            echo "<br/> Portas: ".$this->portas;
             if($this->ligado){
                 echo "<br/>Carro ligado";
             }else{
                 echo "<br/>Carro Desligado";
             }
        }
    }
    class carro extends CarroBase{
        public function __construct($pt, $vm, $po){
            $this->potencia=$pt;
            $this->VelocidadeMaxima=$vm;
            $this->portas=$po;
            $this->status();

        }
    }
    $carro1=new Carro(150, 280, 4);

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