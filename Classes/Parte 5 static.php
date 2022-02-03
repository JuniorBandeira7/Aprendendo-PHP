<?php

    //static - Quando uma propriedade é definida como statix, ele pertence a classe, não ao objeto.
    // ou seja, ele vale para todos os objetos, o valor vai ser o mesmo, tem um valor fixo no endereço de memoria.

    class Carro{
        public $cor;
        public static $velocidade=0;

        function __construct($cr,$vel){
            $this->cor=$cr;// o "this" é usado para propriedade do objeto
            self::$velocidade=$vel;// para usar a propriedade na classe, trocase o "this", por "self"
        }

        function status(){
            echo "<hr/>";
            echo "Cor: ".$this->cor;
            echo "<br/>Velocidade: ".self::$velocidade;
            echo "<hr/>";
        }
    }

    $car1=new Carro("Vermelho", 100);
    $car2=new Carro("Azul", 200);
    $car3=new Carro("Preto", 50);// vai aparecer sempre o ultimo valor alocado á variável $velocidade
                                 //pois a propriedade está num endereço de memória estático

    $car1->status();
    $car2->status();
    $car3->status();
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