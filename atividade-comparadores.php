<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $idade=89;
        $peso=52.8;  

        $requisitos = ($idade >= 16 && $idade<=69) && $peso >= 50 ?'atende aos requistos':
        'Não atende aos requísitos';
        
        echo $requisitos;
    
    ?>
</body>
</html>