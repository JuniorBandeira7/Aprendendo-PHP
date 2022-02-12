<?php

     include "Conexao.inc";

    $vcodigo=$_POST["F_Cod"];
    $vproduto=$_POST["F_Prod"];
    $vpreco=$_POST["F_Preco"];
    $vqtde=$_POST["F_Qtde"];

    $sql="INSERT INTO produtos values ('$vcodigo', '$vproduto', $vpreco, $vqtde)";
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