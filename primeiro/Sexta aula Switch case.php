<?php
   
    //usa-se o switch quando eu tenho valores especificos a serem testados
    //Quando trabalhamos com valores que não são previamente estabelecidos, o melhor a se usar é o if
    $opção=2; //1:carro -  2:moto - 3:bicicleta - 4:navio  - 5:aviao
    switch($opção){
        case 1:
            echo "carro";
            break;
        case 2:
            echo "moto";
            break;
        case 3:
            echo "bicicleta";
            break;
        case 4:
            echo "navio";
            break;
        case 5:
            echo "aviao";
            break;
        default:
            echo "trasnporte invalido";
            break;
    }

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
    <h1>Switch case</h1>
</body>
</html>