<?php

    //CASE = caso o valor setado seja o de algum case
    //DEFAULT = um valor padrão caso nenhum case seja compátivel com sua necessidade


    //setando o fuso ohrario para o brasil
    date_default_timezone_set("America/Sao_Paulo");
    $dia = date('w');

    switch ($dia) {
        case 0:
            echo 'Domingo';
            break;
        case 1:
            echo 'Segunda-feira';
            break;
        case 2:
            echo 'Terça-feira';
            break;
        case 3:
            echo 'Quarta-feira';
            break;
        case 4:
            echo 'Quinta-feira';
            break;
        case 5:
            echo 'Sexta-feira';
            break;
        case 6:
            echo 'Sábado';
            break;
        
        
        default:
            echo 'Data inválida';
            break;
    }

?>