<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php    
    $aposentado = true ?'aposentado ':' não é aposentado'; 
    echo $aposentado;
    
    ?>
    <p>
        Possui cartão?
      <?=  $usuario_possui_cartao = true ?'sim':'nao'; ?>
    </p>

</body>
</html>