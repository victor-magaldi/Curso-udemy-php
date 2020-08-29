<?php 

    $lista_frutas = array('banana','maça','uva');
    // ou 
    $lista_frutas = ['banana','maça','uva'];

    // inserindo item no array 
    $lista_frutas[] = 'abacaxi';
    // pre ajuda a deixar os array com uma melhor visualizacao para  debug
    echo '<pre>';
    // mostra o tipo da variavel tambem
    var_dump($lista_frutas);
    echo '</pre>';

    echo '<hr>';
    echo '<pre>';
    print_r($lista_frutas);
    echo '</pre>';
    $teste = array('a' => 'exemplo');
    echo $teste['a'];


?>