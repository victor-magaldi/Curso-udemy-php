<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        function exibirBoasVindas(){
            echo'bem vindo ao curso php';
        }
        function calcularArea($largura, $altura){
            return $largura * $altura;
        }
        exibirBoasVindas();
        echo'<br>';

        $area =  calcularArea(10,10);
        echo'tem' .$area. 'm2 de área';

    ?>
</body>
</html>