<?php

    //sessão
    session_start();
    $_SESSION['NOME']="JULIO";
    echo $_SESSION['NOME'];
    //session_destroy();//finaliza a sessao
    // a sessão também é destruida quando fechamos o browser
    // usado para validar um login, uma sessão


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
    <a href="pg1.php">a</a>
    
</body>
</html>