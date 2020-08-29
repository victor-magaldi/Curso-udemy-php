<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // deve comeaçar com $ 
        // sem caracteres especiais , excecao _ 
        // nao requer definicao de tipo
        // CaseSensitive
        // tipagem dinamica

        $nome = "Victor";
        $idade = 26;
        $peso = 63.7;
        $nome = "Victor";
        $fumante = true;

    ?>
    <h1>Este é um conteúdo de variaveis </h1>
    <br>
    <p>Nome: <?= $nome ?> </p>
    <p>Idade: <?= $idade ?> </p>
    <p>peso: <?= $peso ?> </p>
    <p>Fumante: <?= $fumante ?> </p>


</body>
</html>