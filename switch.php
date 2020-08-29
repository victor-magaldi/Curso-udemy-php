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
        
        switch($idade){
            // o php usa por padrao a igualdade , mas pode forçar para ver se é identico
            // o valor 1 é tratado como true
            case $idade =='89':
                echo'igual uma string';
                // break;
            case 90:
                echo 'igual a 90 ';
                break;
            case 89:
                echo 'igual a 89 ';
                break;

            default:
                echo 'um valor default';
                break;
        }
    
    ?>
</body>
</html>