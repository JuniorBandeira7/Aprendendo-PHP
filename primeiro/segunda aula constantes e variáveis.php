<?php

    //variáveis
    // = var = fica alocada na memória do pc = tipagem dinâmica e fraca
   
   
    $nome="julio";//string 
    // o $ é para definir uma variável
    $numero=10;//inteiro
    $numero2=20.5;//float
    echo "Nome: $nome<br/>";
    $nome= "campos";
    echo "Nome $nome<br/>";
    $nome="julio";
    echo "nome: ".$nome."<br/>";// o ponto (.) serve como um mais (concatenação)(+)
    $soma=$numero+$numero2;
    echo "soma: $soma<br/>";
    echo "nome do arquivo: ".__FILE__."<br/>";//Constante pré-determinada pelo php
    
    //Constantes
    //Constantes = definne = o valor não muda
    define("nome1","julio");
    echo "Constante nome1: ".nome1."<br/>";
    
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
    <h1>Aula 2 - Constantes e variáveis</h1>
    
</body>
</html>