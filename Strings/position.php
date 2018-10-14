<?php

    $frase = "A repetição é mãe da retenção";

    //1º = qual é a variavel, 2º qual a palavra
    //vai retornar = 3º qual é o indice(posição) da palavra
    $query = strpos($frase, "mãe");

    var_dump($query);
    echo '<br>';

    //1º = o que você quer procurar, 2º a partir de onde(indice), 3º = até onde(indice)?
    $texto = substr($frase, 0, $query);

    var_dump($texto);
    echo '<br>';

    //1º = o que você quer procurar, 2º a partir de onde(indice), 3º = até onde(indice)?
    $texto = substr($frase, $query, strlen($frase));

    var_dump($texto);
    echo '<br>';



    //strlen conta o total de caracteres da frase/palavra

?>