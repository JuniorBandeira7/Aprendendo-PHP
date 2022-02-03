<?php
    
    //Arrays
    //Cria varias "variaveis" dentro de um elemento, no caso, a array
    $vetor=array(5);//5 é a quantidade de arrays. 0 é sempre a primeira posição
    $vet[0]="carro";//Adicionei o elemento carro na primeira posição
    $vet[1]="aviao";
    $vet[2]="moto";
    $vet[3]="navio";
    $vete[4]="onibus";
    echo $vet[1]."<br/>";//chamei a segunda posição do array.
    $vet2=array(100,200,300);
    $vet3=array("nome"=>"julio","cidade"=>"RJ","curso"=>"CC");
    echo "nome: ".$vet3["nome"]." cidade: ".$vet3["cidade"]." curso: ".$vet3["curso"]."<br/>";
    //matriz
    //diferente do array, recebe elementos na posição dde memoria de forma vertical.
    $mat=array(
    array("carro1",65000),
    array("carro2",3500),
    array("carro3",10000));
    echo "carro1 ".$mat[0][0]." - Valor: ".$mat[0][1];/*EXEMPLO
                                                     ___0______1___       
                                                    0|CARRO1|65000|
                                                    1|CARRO2|3500_|
                                                    2|CARRO3|10000|               
                                                    3|_______|____|
                                                    */

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
    <h1>Arrays(vetores)</h1>
</body>
</html>