<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        
        $texto = 'curso completo em PHP';

        echo $texto.'<br>';
        echo strtolower($texto).'<br> <hr>';
        echo strtoupper($texto).'<br><hr>';
        echo ucfirst($texto).'<br><hr>';
        echo strlen($texto).'<br><hr>';
        echo str_replace('PHP','javascrpt',$texto).'<br><hr>';
        // capturar algumas strings
        echo substr($texto, 1,4).'<br><hr>';

    ?>
</body>
</html>