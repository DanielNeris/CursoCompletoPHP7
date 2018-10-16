<?php

    // (e == &) 
    //(ou == |)

    //as duas operações ter que ser verdadeiras
    $result = ((10 + 3) / 2 > 5)  && (10 == 10);

    $result = true ? 'true' : 'false';

    echo($result);

    echo '<hr>';

    //apenas umas das operações precisa ser verdadeira
    $result2 = ((10 + 3) / 2 > 5)  || (10 == 10);

    $result2 = true ? 'true' : 'false';

    echo($result2);

?>