<?php
    
    function OlaMundo(){
    echo "Ola, Mundo!<br/>";
    }
    OlaMundo();
    function soma($numero1,$numero2){
        $resultado=$numero1+$numero2;
        echo "A soma: $resultado<br/>";
    }
    soma(3,7);
    function soma2($soma1,$soma2){
        $resultado=$soma1+$soma2;
        return $resultado;
    }
    $so=soma2(10,5);
    echo "resultado = $so<br/>";
    $valores=array(1,2,3,4,6,8);
    function media($valor){
        $tamanho=count($valor);
        $soma=0;
        for($indice=0;$indice<$tamanho;$indice++){
            $soma+=$valor[$indice];
        }
        return $soma/$tamanho;
    }
    $media=media($valores);
    echo "$media"

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
    <h1>Funções</h1>
    
</body>
</html>