<?php

    $nome = "Daniel";
    $nome2 = 'Souza';

    var_dump($nome);
    echo '<br>';

    var_dump($nome2);
    echo '<br>';

    //com aspas duplas o echo reconhece a variavel e não precisa fazer concatenação
    echo "ABC $nome";
    echo '<br>';

    // com aspas simples o echo não reconhece a variavel e etende que tudo é texto
    echo 'ABC $nome';
    echo '<br>';
?>