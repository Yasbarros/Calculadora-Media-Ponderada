<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Resultado</title>
   <link rel="stylesheet" href="media.css">
</head>
<body>
<?php
     $nota1 = $_GET['nota1']?$_GET['nota1']:$_GET['nota1'];  
     $nota2 = $_GET['nota2']?$_GET['nota2']:$_GET['nota2'];
     $nota3 = $_GET['nota3']?$_GET['nota3']:$_GET['nota3'];
     $nota4 = $_GET['nota4']?$_GET['nota4']:$_GET['nota4'];
     $nota5 = $_GET['nota5']?$_GET['nota5']:$_GET['nota5'];
 
 
     $peso1 = $_GET['peso1']?$_GET['peso1']:$_GET['peso1'];
     $peso2 = $_GET['peso2']?$_GET['peso2']:$_GET['peso2'];
     $peso3 = $_GET['peso3']?$_GET['peso3']:$_GET['peso3'];
     $peso4 = $_GET['peso4']?$_GET['peso4']:$_GET['peso4'];
     $peso5 = $_GET['peso5']?$_GET['peso5']:$_GET['peso5'];

     function mediaSimples($n1,$n2,$n3,$n4,$n5){
         $ms= ($n1 + $n2 + $n3 + $n4 + $n5)/ 5;
        return $ms;
     }
 
     function mediaPonderada($n1,$n2,$n3,$n4,$n5,$p1,$p2,$p3,$p4,$p5){
        $mp = (($n1*$p1)+($n2*$p2)+($n3*$p3)+($n4*$p4)+($n5*$p5))/($p1+$p2+$p3+$p4+$p5);
        return $mp;
     }
     $respostaS= mediaSimples($nota1,$nota2,$nota3,$nota4,$nota5);
     echo "Sua média simples é: ".$respostaS; 
     echo "<br>";
     echo "<br>";
     $respostaP= mediaPonderada($nota1,$nota2,$nota3,$nota4,$nota5,$peso1,$peso2,$peso3,$peso4,$peso5);
     echo "Sua média ponderada é: ".$respostaP;
?>
<br>
<br>
<a href="index.html">Voltar</a>

</body>
</html>

