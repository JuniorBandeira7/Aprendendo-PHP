<?php

     include "Conexao.inc";

    $resultado=mysqli_query($con,"SELECT * FROM  gafanhotos");//query==comando
    $linhas=mysqli_num_rows($resultado);//num_rows==numero de linhas
    echo $linhas;

     mysqli_close($con);

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