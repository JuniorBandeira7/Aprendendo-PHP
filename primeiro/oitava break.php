<?php

    //usado para parar um loop ou função
    $vetor=array("mouse","teclado","monitor","memoria","sair","microfone");
    $tamanho=count($vetor);//"count" conta as quantidade de intens num vetor
    $indice=0;

    while($indice<$tamanho){
        echo "$vetor[$indice]<br/>";
        $indice++;
        if($vetor[$indice] == "sair")//quando ler o "sair" o loop para
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
    <h1>break</h1>
    
</body>
</html>