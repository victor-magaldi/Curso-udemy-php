<?php
    $variavel = ['teste','teste2'];
    // retonar true se o tipo da variavel for um array 
    is_array($variavel);

    // mostra todas as chaves do array( associativas ou numericas)
    //devolve um array com as chaves
    array_keys($variavel);


    // ordena os arrays, retorna true se conseguir ordenar ou false se nao 
    sort($variavel);

    // ordena os arrays, retorna true se conseguir ordenar ou false se nao 
    // asort vai preservar os indices originais  
    asort($variavel);

    // contando os elementos de um determinado array 
    echo count($variavel);

   
    // mergeando dois ou mais em arrays em um novo
    $a1=array("red","green");
    $a2=array("blue","yellow");

    echo '<pre>';
        print_r(array_merge($a1,$a2));
    echo '<pre>';



    // divide uma string baseado em algum parametro delimitador
    $string= '29/08/2020';
    $array_retorno = explode('/',$string);
    echo '<pre>';
        echo $string;
        print_r($array_retorno);
    echo '<pre>';


     // junta um array baseado em algum parametro delimitador
    $el= ['a','d','c','e'];
    $string_retorno = implode(',',$el);
    
     echo '<pre>';
        print_r($el);
        echo $string_retorno;
     echo '<pre>';

?>