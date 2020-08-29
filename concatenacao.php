<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php   
        $nome= "Victor";
        $idade= 26;
        $funcao = "Front End";

        echo 'olá '. $nome .', Você possui '.$idade. ' anos e trabalha como '.$funcao.'!';
        echo "<br>";
        // as aspas duplas o php tem inteligencia de encontrar as variaveis 
        // por conta disso ela acaba sendo menos performatica  por sempre verificar 
       echo"olá $nome Você possui $idade anos e trabalha como $funcao!"
    ?>


</body>
</html>