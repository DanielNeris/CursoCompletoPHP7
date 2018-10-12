<?php

    //operadores do php 7
    //tratar valores nulos

    $a = null;
    $b = 6;
    $c = 12;

    //mostre A, se A for nulo mostre B, se B for nulo mostre C...
    echo $a ?? $b ?? $c;

?>