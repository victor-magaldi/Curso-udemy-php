<?php
    echo '<br>';
    $lista_frutas = ['maca','banana','uva'];

    echo '<pre>';
    print_r($lista_frutas);
    echo '<pre>';

    // in_array() retorna true se encontrar  'true = 1    false = ''
    echo in_array('maca',$lista_frutas);

    // array_search() retorna o indice do item no array // se não for encontrado será null
    echo '<br>';
    echo array_search('maca',$lista_frutas);


    $lista_coisas = [
        'frutas'=>['maca','banana','uva'],
        'legumes'=>['alface','couve','agriao'],
    ];
    echo '<pre>';
    print_r($lista_coisas);
    echo '<pre>';

    echo in_array('maca',$lista_coisas['frutas']).':in_array';

    echo '<br>';
    echo array_search('couve', $lista_coisas['frutas']);

?>