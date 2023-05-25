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
   
   $nome = "Geovana"; //texto = string
   $idade = 17; //numero interio = integer
   $altura = 1.65; //numero decimal = double
   $fumante = false; //booleano = boolean 

   echo gettype($fumante);

   echo $nome;
   echo "<br>";
   echo $nome . $idade;
   echo "<br>";
   echo $nome . "-" . $idade . "<br>";
   echo "Nome:" . $nome . "<br";
   echo "Nome: $nome <br>";
   echo 'Nome: $nome <br>';

   echo "<h1> Operações </h1>";
   $n1 = 10;
   $n2 =2;
   echo $n1+$n2;
   echo "<br>";
   echo "$n1 + $n2 =" . $n1+$n2 . "<br>";
   echo $n1 - $n2 . "<br>";
   echo $n1* $n2 . "<br>";
   echo $n1 / $n2 . "<br>";
   echo $n1 % $n2 . "<br>";
   echo $n1 ** $n2 .  "<br>";
    ?>
</body>
</html>