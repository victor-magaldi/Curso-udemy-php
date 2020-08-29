<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        // gettype() retorna o tipo da variavel
        $valor = 10;
        // boolean, string,int 
        $valor2 = (float) $valor;

        echo gettype($valor);
        echo '<br>';
        echo gettype($valor2);

    ?>
</body>
</html>