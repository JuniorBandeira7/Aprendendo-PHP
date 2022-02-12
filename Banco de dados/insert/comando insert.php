<?php

     include "Conexao.inc";

    $vnome="teste";
    $vprofissao="teste";
    $sexo="M";
    $nacionalidade="teste";

    $sql="INSERT INTO gafanhotos VALUES (NULL, '$vnome', '$vprofissao', NULL, '$sexo', NULL, NULL, '$nacionalidade')";
    $resultado=mysqli_query($con,$sql);
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