<?php 

    // false tipo de variavel boleana 
    // null e empty = valores especiais php 

    $funcionario1 = null;
    $funcionario2 = '';
   
    echo'<br>';
    if(is_null($funcionario1)){
        echo 'variavel null';
    }else{
        echo 'nao null';
    }
    echo'<br>';
    //vazio, null e false  serao considerados empty
    if(empty($funcionario2)){
        echo 'variavel empty';
    }else{
        echo 'nao empty';
    }
    


?>