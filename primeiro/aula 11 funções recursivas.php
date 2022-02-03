<?php
    
    //uma função que chama ela mesma
    function aula($num){
        if($num!=0){
            echo "função aula com valor $num<br/>";
            aula($num-1);
        }    
    }
    aula(10);
    function fatorial($num){
        if($num < 0){
            return -1;  
        }
        if($num <= 1){
            return 1;
        }
        return $num*fatorial($num-1);
        
    }
    echo ".".fatorial(4)
    

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
    <h1>Funções recursivas</h1>
    
</body>
</html>