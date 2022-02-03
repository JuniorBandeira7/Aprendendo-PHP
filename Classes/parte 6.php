<?php

    //Final- A palavra reservada final diz que o método não pode ser sobrescrito
    class CarroBase{
        public $cor;
        public $velocidade=0;

        function __construct($cr){
            $this->cor=$cr;
            
        }

        function status(){
            echo "<hr/>";
            echo "Cor: ".$this->cor;
            echo "<br/>Velocidade: ".self::$velocidade;
            echo "<hr/>";
        }
        final function Cor(){//com a palavra final, esse método não pode ser sobrescrito
            echo "<br/> Minha cor: ".$this->cor;
            echo "<br/> Método original";
        }
    }
    class Carro extends CarroBase{
        function Cor(){//por já ter sido escrito, esse método cor vai sobrescrever o anterior
            echo "<br/> Cor: ".$this->cor;
        }
    }
    class transporte extends CarroBase{   

    }
    $car=new carro("vermelho");
    $trans=new transporte("Azul");

    $car->cor();
    $trans->cor();

    
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