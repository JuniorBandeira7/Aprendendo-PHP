<?php

   include "Conexao.inc";

    $user=$_POST['f_email'];
    $senha=$_POST['f_senha'];

    $sql="SELECT * FROM usuarios WHERE email='$user' AND senha='$senha'";
    $res=mysqli_query($con, $sql);
    $linha=mysqli_affected_rows($con);

    if($linha > 0){//se achar um registro com as correspondencia o linha vai ser 1, caso não vai ser zero
        $num=rand(100000, 900000);/*esse numero aleatorio vai servir para comprovar que o usuario está logado. esse número vai ser armazenado num cookie onde todas as paginas 
        do site vao verificar se o usuario ainda está com o cookie.*/
        setcookie("numLoguin",$num);//cria o cookie
        header("Location:index.php?num1=$num");//direciona para uma página criando a variavel num1 e passando o valor de num pra ela
    }else{
        echo"Credenciais erradas<br>";
        echo "<a href='formloguin.html'>voltar</a>";
    }


   mysqli_close($con);

?>