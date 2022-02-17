<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

    if(isset($_COOKIE["numLoguin"])){//verifica se o cookie foi criado
        $n1=$_GET["num1"];//pega o valor de num e armazena em n1
        $n2=$_COOKIE["numLoguin"];//pega o valor do cookie e armazena em n2
        if($n1 != $n2){// se os numero forem diferentes dá erro, caso tenha cookie e os numeros forem iguais a pagina carrega
            echo "loguin nao efetuado";
            exit;
        }
    }else{//caso o cookie não exista
        echo "loguin nao efetuado";
        exit;
    }

    include "conexao.inc";



    echo "loguin efetuado";

    mysqli_close($con);


?>

</body>
</html>