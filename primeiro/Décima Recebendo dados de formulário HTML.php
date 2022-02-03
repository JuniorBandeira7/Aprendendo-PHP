<?php
    
    $nome=$_GET["nome"];//o GET envia os dados via url, o que é inseguro. os dados ficam aparecenddo no url. é mais rapido
    $senha=$_GET["senha"];
    echo $nome."<br/>";
    echo $senha."<br/>";
    echo "<br/><hr/>";
    $nome1=$_POST["nome1"];//o metodo post é melhor
    $senha1=$_POST["senha1"];//tem que apagar o codigo om o metodo get para funcionar
    echo $nome1."<br/>";
    echo $senha1."<br/>";


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
    <h1>Recebendo dados de formulário HTML</h1>
  
</body>
</html>