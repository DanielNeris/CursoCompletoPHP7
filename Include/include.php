<?php

    //include = tenta funcionar mesmo que o arquivo não exista ou esteja com algum tipo de problema
    //require = obriga que o arquivo exista e que esteja funcionando corretamente, gera erro FATAL

    //include_once = se você tentar includir mais que uma vez no mesmo arquivo ele não gera erro só inclui o primeiro e ignora o resto
    //require_once = se você tentar includir mais que uma vez no mesmo arquivo ele não gera erro só inclui o primeiro e ignora o resto


    //include 'inc/function.php';
    //include_once 'inc/function.php';
    require 'inc/function.php';
    require_once 'inc/function.php';

    $resultado = soma(10,20);

    var_dump($resultado);
?>