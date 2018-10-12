<?php

    //definindo valor de A
    $a = 10;
    var_dump($a);
    echo '<br>';

    //pré-incrementando 1
    // a++; == a += 1; == a = a + 1;
    $a++;
    var_dump($a);
    echo '<br>';

    //pré-decrementando 1
    // a--; == a -= 1; == a = a - 1;
    $a--;
    var_dump($a);
    echo '<br>';

    echo '<hr>';

    $a = 10;
    var_dump($a);
    echo '<br>';

    //pós-incrementando 1
    // ++a;
    ++$a;
    var_dump($a);
    echo '<br>';

    //pós-decrementando 1
    // --a;
    --$a;
    var_dump($a);
    echo '<br>';

?>