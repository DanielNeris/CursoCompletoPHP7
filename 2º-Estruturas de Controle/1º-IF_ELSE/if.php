<?php

    //IF = (se)
    //ELSE IF = (senão se)
    //ELSE = (senão)


    $qualASuaIdade = 65;

    $idadeCrianca = 12;
    $idadeMaior = 18;
    $idadeMelhor = 65;

    if ($qualASuaIdade <= $idadeCrianca) {
        echo "Criança";
    }
    else if (($qualASuaIdade >= $idadeMaior) && ($qualASuaIdade < $idadeMelhor)) {
        echo "Adulto";
    } 
    else {
        echo "Idoso";
    }

    echo '<hr>';


    //operador ternario

    echo ($qualASuaIdade < $idadeMaior) ? "Menor de idade" : "Maior de idade";

?>