<?php
    //no "foreach"
    //no "for" tudo realacionado a variável é feito dentro dos parenteses()
    //"do while" usado quando preciso executar o loop pelo menos uma vez
    // usa-se em loops inderteminados
    
    
    //foreach
    $transporte=array("carro","moto","bicicleta","onibus","aviao","navio");

    foreach($transporte as $veiculo){//para cada elemento do array transporte armazenado em veiculo
    //lista todos os elementos do $transporte
        echo "$veiculo<br/>";
        if($veiculo == "bicicleta")//listar todos até a bicicleta
        break;
    }

    foreach($transporte as $veiculo){
        if($veiculo == "bicicleta")
        echo "bicicleta está na lista";
    }

    echo "<hr/>";


    $indice=0;
    $tamanho=5;
    $vetor=array($tamanho);
    
    while($indice <= 10){
        if($indice > 0){// contar pulando o 0
        echo $indice;
        }
        $indice++;
    }
    echo "<br/> agora com for: ";
    for($indice=0; $indice < $tamanho; $indice++){
        echo $indice;
        
    }
    echo "<hr/>";

    $indice=0;
    while($indice < $tamanho){
        $vetor[$indice]="oi";
        $indice++;
    }
    $indice=0;
    while($indice < $tamanho){
        echo $vetor[$indice];
        $indice++;
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
    <h1>loops - while, do while e for</h1>
    
</body>
</html>