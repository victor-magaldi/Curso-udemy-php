<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo('<br>');
    echo date('d/m/Y H:i');
   
    echo date_default_timezone_get();
    echo date_default_timezone_set('America/Sao_Paulo').'<br>';
    echo date_default_timezone_get().'<br>';
    echo date('d/m/Y H:i');
    echo '<br><br>';

    // calculos de datas 
    // converter para o padrao EUA
    $data_atual = '2020-03-17';
    $data_final= '2020-04-17';

    $time_inicial=strtotime($data_atual);
    $time_final=strtotime($data_final);

    

    echo $time_inicial;
    echo '<hr>';
    echo $time_final;
    echo'<hr>';
    echo'a difernça de segundos entre as datas é ';
    $totalSegundos= ($time_final - $time_inicial);
    echo $totalSegundos;
    echo'<hr>';

echo ($totalSegundos/ 86400). 'dias';

    ?>
    
</body>
</html>

