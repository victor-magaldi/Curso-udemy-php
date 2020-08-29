<?php 
    // foreach seria um for mais inteligente para interagir com arrays
    // $itens =['mesa','cadeira','sofa','fogão'];

    // echo '<pre>';
    //     print_r($itens);
    // echo '<pre>';

    // foreach($itens as $item){
    //     echo $item. '<br>';
    // }

    // para retornar as chaves

    $funcionarios=[
        ['nome' => 'roberto','salario'=>1300],
        ['nome' => 'Fernando','salario'=>1890],
    ];
    // var_dump ($funcionarios);

    foreach($funcionarios as $id => $funcionario){
        
        foreach ($funcionario as $id2=> $valor){
            echo '<br>';
            echo $id2. '=' .$valor ;

        };
        
    }

?>