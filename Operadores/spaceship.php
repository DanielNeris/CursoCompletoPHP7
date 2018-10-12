<?php

    //isso é do php 7

    $a = 350;
    $b = 350;


    //se $a for > int(1)
    //se $a for = int(0)
    //se $a for > int(-1)
    $result = ($a <=> $b);
    
    if($result == 1){
        echo "A é maior";
    }
    elseif ($result == 0) {
        echo "A e B são iguais";
    }
    else{
        echo "A é menor";
    }

?>