<?php
    $lista_coisas = [['banana','uva'],
                    ['batata','cenoura']];

    echo $lista_coisas[0][1];

    $lista_coisas2= [];

    $lista_coisas2['frutas']=['banana','melao'];
    $lista_coisas2['verduras']=['alface','couve'];


    echo '<pre>';
    print_r($lista_coisas2);
    echo '</pre>';

?>