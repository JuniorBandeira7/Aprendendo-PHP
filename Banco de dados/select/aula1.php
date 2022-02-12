<?php

    include "Conexao.inc";

    $vcat1=$_POST["F_Cat1"];
    $vcat2=$_POST["F_Cat2"];
    $sql="SELECT * FROM produtos where categoria = $vcat1 OR categoria = $vcat2";
    $res=mysqli_query($con,$sql);
    $li=mysqli_num_rows($res);
    echo "$li registros encontrador";

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