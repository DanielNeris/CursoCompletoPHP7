<?php 

    $nome = "Daniel, global";

    function teste(){
        //tornando a variavel nome global
        global $nome;
        echo $nome;
        echo '<br>';
    }

    function teste2(){
        //variavel em escopo de função
        $nome = "Daniel, com escopo de função";
        echo $nome;
    }

    teste();
    teste2();

?>