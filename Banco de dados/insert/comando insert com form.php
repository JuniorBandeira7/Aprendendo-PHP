<?php

     include "Conexao.inc";

    $vnome=$_POST["F_Nome"];
    $vsenha=$_POST["F_Senha"];
    $vemail=$_POST["F_Email"];

    $sql="INSERT INTO usuarios values (NULL, '$vnome', '$vsenha', '$vemail')";
    $resultado=mysqli_query($con, $sql);
    $linhas=mysqli_affected_rows($con);

    if($linhas == 1){
        echo "Alterado com sucesso<br/>";
    }else{
        echo "erro<br/>";
    }

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