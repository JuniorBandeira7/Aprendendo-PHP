<?php
    //herança: uma classe que herda propriedades e metodos de outras classes


   class aula{
      private var $variavel1="Bom dia";//por serem privates, essas variáveis só podem ser acessadadas de dentro da classe
      private var $variavel2="email@gmail.com";
      private var $variavel3="site.com.br";

      public function escreve(){
           echo "<br/>".$this->variavel1;
           echo "<br/>".$this->variavel2;
           echo "<br/>".$this->variavel3;
       }
   }
   class canal extends aula{//"extends é usado para uma classe herdar outra
        //uma classe que herda propriedades e metodos de outras classes
        var $variavelCanal1="teste";

        function escreve2(){
            echo "<br/>".$this->variavelCanal1;
        }
   } 
   $aulaOBJ=new aula();
   $canalObJ=new canal();

   $aulaOBJ->escreve();
   echo "<hr/>";
   $canalObJ->escreve();
   $canalObJ->escreve2();
   //um método pode ser ""private", public ou protected
   //protected pode ser acessada de classes herdadas
   //quando não especificamos ele é public
   
   

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